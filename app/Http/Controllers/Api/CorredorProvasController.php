<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiException;
use App\Http\Collections\Table\CorredorProvaCollection;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorredorProvaRequest;
use App\Http\Resources\CorredorProvaResource;
use App\Models\CorredorProva;
use App\Services\CorredorProvaService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class CorredorProvasController extends Controller
{
    use ResponseTrait;

    protected $corredor_prova;

    public function __construct(CorredorProvaService $corredor_prova)
    {
        $this->corredor_prova = $corredor_prova;
    }

    public function table(Request $request)
    {
        try {
            $model = $this->corredor_prova->paginate();
            return $this->successResponse([
                'success' => true,
                'data'    => new CorredorProvaCollection($model),
            ], 200);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (\Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function store(CorredorProvaRequest $request)
    {
        try {
            $allData = $request->treatsData();

            //valida se o corredor não possui prova no mesmo horario
            CorredorProva::validaCorredorProva($allData);

            $create  = $this->corredor_prova->create($allData);
            return $this->successResponse([
                'success' => true,
                'message' => 'Registro salvo com sucesso.',
                'data'    => new CorredorProvaResource($create)
            ], 201);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function update(CorredorProvaRequest $request, $id)
    {
        try{
            $allData = $request->treatsData();

            //valida se o corredor não possui prova no mesmo horario
            CorredorProva::validaCorredorProva($allData, $id);

            $update  = $this->corredor_prova->update($allData, $id);
            return $this->successResponse([
                'success' => true,
                'message' => 'Registro atualizado com sucesso.',
                'data'    => new CorredorProvaResource($update)
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
            $model = $this->corredor_prova->find($id);
            return $this->successResponse([
                'success' => true,
                'data'    => new CorredorProvaResource($model)
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
            $model = $this->corredor_prova->delete($id);
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
