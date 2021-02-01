<?php

namespace App\Http\Controllers\Api;

use App\Http\Collections\Relatorios\CorredorResultadoCollection;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorredorResultadoRequest;
use App\Http\Resources\CorredorResultadoResource;
use App\Models\CorredorProva;
use App\Models\CorredorResultado;
use App\Services\CorredorResultadoService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class CorredorResultadosController extends Controller
{
    use ResponseTrait;

    protected $corredor_resultado;

    public function __construct(CorredorResultadoService $corredor_resultado)
    {
        $this->corredor_resultado = $corredor_resultado;
    }

    public function store(CorredorResultadoRequest $request, $corredor_prova_id)
    {
        try {
            $allData = $request->treatsData();
            $allData['corredor_prova_id'] = $corredor_prova_id;

            $create  = $this->corredor_resultado->create($allData);
            return $this->successResponse([
                'success' => true,
                'message' => 'Registro salvo com sucesso.',
                'data'    => new CorredorResultadoResource($create)
            ], 201);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function update(CorredorResultadoRequest $request, $corredor_prova_id, $id)
    {
        try {
            $allData = $request->treatsData();

            $update  = $this->corredor_resultado->update($allData, $id);
            return $this->successResponse([
                'success' => true,
                'message' => 'Registro atualizado com sucesso.',
                'data'    => new CorredorResultadoResource($update)
            ], 200);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function show(Request $request, $corredor_prova_id, $id)
{
    try{
        $corredorProva = CorredorProva::find($corredor_prova_id);
        if(!$corredorProva) throw new \ErrorException('Registro não localizado', 404);

        $model = $this->corredor_resultado->find($id);
        return $this->successResponse([
            'success' => true,
            'data'    => new CorredorResultadoResource($model)
        ], 200);
    } catch (ApiException $e) {
        return $this->errorResponse($e->getMessage(), 500);
    } catch (\ErrorException $e) {
        return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
    } catch (Exception $e) {
        return $this->errorResponse('Erro interno.', 500, $e->getMessage());
    }
}

    public function destroy(Request $request, $corredor_prova_id, $id)
    {
        try{
            $corredorProva = CorredorProva::find($corredor_prova_id);
            if(!$corredorProva) throw new \ErrorException('Registro não localizado', 404);

            $model = $this->corredor_resultado->delete($id);
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

    public function rankingResultados(Request $request)
    {
        try {
            $corredorResultado = new CorredorResultado();
            $relatorio  = $corredorResultado->rankingCorredores();

            return $this->successResponse([
                'success' => true,
                'data'    => new CorredorResultadoCollection($relatorio)
            ], 200);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }

    public function rankingResultadosIdade(Request $request)
    {
        try {
            $corredorResultado = new CorredorResultado();
            $relatorio  = $corredorResultado->rankingCorredores();

            return $this->successResponse([
                'success' => true,
                'data'    => new CorredorResultadoCollection($relatorio)
            ], 200);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (\ErrorException $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode() ?? 500);
        } catch (Exception $e) {
            return $this->errorResponse('Erro interno.', 500, $e->getMessage());
        }
    }
}
