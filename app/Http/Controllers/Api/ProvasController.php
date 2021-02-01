<?php

namespace App\Http\Controllers\Api;

use App\Http\Collections\Table\ProvaCollection;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProvaRequest;
use App\Http\Resources\ProvaResource;
use App\Services\ProvaService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class ProvasController extends Controller
{
    use ResponseTrait;

    protected $prova;

    public function __construct(ProvaService $prova)
    {
        $this->prova = $prova;
    }

    public function table(Request $request)
    {
        try {
            $model = $this->prova->paginate();
            return $this->successResponse([
                'success' => true,
                'data'    => new ProvaCollection($model),
            ], 200);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function store(ProvaRequest $request)
    {
        try {
            $allData = $request->treatsData();
            $create  = $this->prova->create($allData);
            return $this->successResponse([
                'success' => true,
                'message' => 'Registro salvo com sucesso.',
                'data'    => new ProvaResource($create)
            ], 201);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function update(ProvaRequest $request, $id)
    {
        try{
            $allData = $request->treatsData();
            $update  = $this->prova->update($allData, $id);
            return $this->successResponse([
                'success' => true,
                'message' => 'Registro atualizado com sucesso.',
                'data'    => new ProvaResource($update)
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
            $model = $this->prova->find($id);
            return $this->successResponse([
                'success' => true,
                'data'    => new ProvaResource($model)
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
            $model = $this->prova->delete($id);
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