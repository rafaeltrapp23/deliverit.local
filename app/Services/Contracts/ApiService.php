<?php

namespace App\Services\Contracts;

use App\Exceptions\ApiException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Exception;

abstract class ApiService
{
    /**
     * @return array
     */
    abstract public function getRelationships();

    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    abstract public function getModel();

    /**
     * @return array
     */
    protected function getRelationshipsServices($name)
    {
        return false;
    }

    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public function create(array $data)
    {
        DB::beginTransaction();
        try {
            if (isset($data['relations'])) {
                $relations = $data['relations'];
                unset($data['relations']);
            }

            $created_model = $this->getModel()->create($data);
            if (isset($relations)) {
                $this->updateRelationships($created_model, $relations);
            }

            DB::commit();

            return $created_model;
        } catch (ApiException $e) {
            DB::rollback();
            throw $e;
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param array $data
     * @param int $model_id
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public function update(array $data, $model_id)
    {
        DB::beginTransaction();
        try {
            $model = $this->find($model_id);

            if (isset($data['relations'])) {
                $relations = $data['relations'];
                unset($data['relations']);
            }

            $model->update($data);

            if (isset($relations)) {
                $this->updateRelationships($model, $relations);
            }

            DB::commit();
            return $model;
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param int $model_id
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public function delete($model_id)
    {
        DB::beginTransaction();
        try {
            $model = $this->find($model_id);

            if (!empty($this->getRelationships())) {
                $this->deleteRelationships($model, $model_id);
            }

            $model->delete();
            DB::commit();
            return $model;
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param int $model_id
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public function find($model_id)
    {
        try {
            $model = $this->getModel()->find($model_id);
            if (empty($model)) throw new \ErrorException('Registro não localizado', 404);
            return $model;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param array $data
     */
    private function updateRelationships(Model $model, array $data)
    {
        $hasRelation = false;

        foreach ($this->getRelationships() as $relationship_name) {
            if (isset($data[$relationship_name])) {
                $relationship_type = get_class($model->$relationship_name());
                switch ($relationship_type) {
                    case BelongsToMany::class:
                        $hasRelation = true;
                        $this->syncBelongsToManyRelationship($model, $relationship_name, $data[$relationship_name]);
                        break;
                    case MorphMany::class:
                    case HasMany::class:
                        $hasRelation = true;
                        $this->syncHasManyRelationship($model, $relationship_name, $data[$relationship_name]);
                        break;
                    default:
                        break;
                }
                unset($data[$relationship_name]);
            }
        }

        if (empty($hasRelation)) {
            $relatedService = $this->getRelationshipsServices($model->getQualifiedKeyName());
            if (!empty($relatedService)) {
                foreach ($relatedService->getRelationships() as $relationship_name) {
                    if (isset($data[$relationship_name])) {
                        $relationship_type = get_class($model->$relationship_name());
                        switch ($relationship_type) {
                            case BelongsToMany::class:
                                $this->syncBelongsToManyRelationship($model, $relationship_name, $data[$relationship_name]);
                                break;
                            case MorphMany::class:
                            case HasMany::class:
                                $this->syncHasManyRelationship($model, $relationship_name, $data[$relationship_name]);
                                break;
                            default:
                                break;
                        }
                        unset($data[$relationship_name]);
                    }
                }
            }
        }
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param $relationship_name
     * @param array $data
     */
    private function syncHasManyRelationship(Model $model, $relationship_name, array $data)
    {
        $present_ids = [];
        foreach ($data as $related) {
            $conditions = [
                'id' => array_key_exists('id', $related) ? $related['id'] : null
            ];

            if (isset($related['relations'])) {
                $relations = $related['relations'];
                unset($related['relations']);
            }

            $entity = $model->$relationship_name()->updateOrCreate($conditions, $related);

            if (isset($relations)) {
                $this->updateRelationships($entity, $relations);
            }

            $present_ids[] = $entity->id;
        }

        $model->$relationship_name()->whereNotIn('id', $present_ids)->delete();
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $relationship_name
     * @param array $data
     * @return mixed
     */
    private function syncBelongsToManyRelationship(Model $model, $relationship_name, array $data)
    {
        $newArray = [];
        $relationName = $model->$relationship_name()->getRelatedPivotKeyName();

        foreach ($data as $key => $value) {
            if (isset($value[$relationName])) {
                if (!in_array((int) $value[$relationName], $newArray)) {
                    $newArray[] = (int) $value[$relationName];
                }
            }
        }

        $result = $model->$relationship_name()->sync($newArray);
        return $result;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param array $data
     */
    private function deleteRelationships(Model $model, $model_id)
    {
        foreach ($this->getRelationships() as $relationship_name) {
            $model->$relationship_name()->where('id', $model_id)->delete();
        }
    }

    public function paginate()
    {
        try {
            $model = $this->getModel();
            $rows = 25;

            if (request()->has('rows')) {
                $rows = (int)request()->get('rows');
            }

            if (request()->has('orderBy')) {
                $orderBy = request()->get('orderBy');

                $orderByDirection = 'asc';
                if (request()->has('orderByDirection')) {
                    $orderByDirection = request()->get('orderByDirection');
                }
                $model = $model->orderBy($orderBy, $orderByDirection);
            }

            if (request()->has('filters')) {
                $filters = request()->get('filters');
                $filters = json_decode($filters, true);

                if (!empty($filters) && is_array($filters)) {
                    foreach ($filters as $filter) {
                        if (empty($filter['type']) || empty($filter['name'])) continue;

                        switch ($filter['type']) {
                            case 'text':
                                $model = $model->where($filter['name'], 'ILIKE', '%' . $filter['value'] . '%');
                                break;
                            case 'select':
                                $model = $model->where($filter['name'], $filter['value']);
                                break;
                        }
                    }
                }
            }

            if (request()->has('searchFilters')) {
                $filters = request()->get('searchFilters');
                $filters = json_decode($filters, true);

                if (!empty($filters)) {
                    foreach ($filters as $filter) {
                        if (empty($filter['value']) || empty($filter['name'])) continue;

                        $model = $model->orWhere($filter['name'], 'ILIKE', '%' . $filter['value'] . '%');
                    }
                }
            }

            return $model->paginate($rows);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}