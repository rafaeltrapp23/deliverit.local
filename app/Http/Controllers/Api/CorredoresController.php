<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiException;
use App\Http\Collections\Table\CorredorCollection;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorredorRequest;
use App\Http\Resources\CorredorResource;
use App\Services\CorredorService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class CorredoresController extends Controller
{
    use ResponseTrait;

    protected $corredor;

    public function __construct(CorredorService $corredor)
    {
        $this->corredor = $corredor;
    }

    public function table(Request $request)
    {
        try {
            $model = $this->corredor->paginate();
            return $this->successResponse([
                'success' => true,
                'data'    => new CorredorCollection($model),
            ], 200);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function store(CorredorRequest $request)
    {
        try {
            $allData = $request->treatsData();
            $create  = $this->corredor->create($allData);
            return $this->successResponse([
                'success' => true,
                'message' => 'Registro salvo com sucesso.',
                'data'    => new CorredorResource($create)
            ], 201);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function update(CorredorRequest $request, $id)
    {
        try{
            $allData = $request->treatsData();
            $update  = $this->corredor->update($allData, $id);
            return $this->successResponse([
                'success' => true,
                'message' => 'Registro atualizado com sucesso.',
                'data'    => new CorredorResource($update)
            ], 200);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function show(Request $request, $id)
    {
        try{
            $model = $this->corredor->find($id);
            return $this->successResponse([
                'success' => true,
                'data'    => new CorredorResource($model)
            ], 200);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function destroy(Request $request, $id)
    {
        try{
            $model = $this->corredor->delete($id);
            return $this->successResponse([
                'success' => true,
                'data'    => $model
            ], 204);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }
}
