<?php

namespace App\Traits;

/**
 * 200 Ok
 * 201 Created (Novos Registros)
 * 204 NO Content (Delete)
 *
 * 400 Requisição inválida;
 * 401 Não autorizado;
 * 402 Pagamento necessário;
 * 403 Proibido;
 * 404 Não encontrado;
 * 405 Método não permitido;
 * 406 Não Aceitável;
 * 407 Autenticação de proxy necessária;
 * 408 Tempo de requisição esgotou;
 * 409 Conflito.
 * 422 Falha na validação dos dados
 * 429 Excesso de requisições.
 *
 * 500 Erro interno do servidor;
 *
 */

trait ResponseTrait
{
    /**
     * Método genérico para resposta de sucesso.
     * @author Rafael Trapp
     * @param mixed objResponse
     * @return JSON string response
     */
    private function successResponse($objResponse, $code)
    {
        return response()->json($objResponse, $code);
    }

    /**
     * Método genérico para resposta de erro.
     * @author Rafael Trapp
     * @param string errorMessage
     * @param int errorCode
     * @return JSON string response
     */
    private function errorResponse($message, $code, $descript = "")
    {
        $error = [];
        if (config('app.debug')) {
            $error['descript'] = $descript;
            $error['debug']    = true;
        }
        return response()->json([
            'success'  => false,
            'message'  => $message,
            'error'    => $error,
        ], $code);
    }
}