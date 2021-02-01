<?php


namespace App\Http\Middleware;

use Tymon\JWTAuth\Facades\JWTAuth;
use Closure;
use Exception;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            // Busca pelo token do usuário.
            $token   = JWTAuth::parseToken();
            $usuario = $token->authenticate();

            //valida se o usuario esta logado
            if(empty($usuario)) throw new ErrorException('falha ao localizar usuário.');

            //permite o acesso
            return $next($request);

        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json(['status' => 'Token de autorização inválido.'], 401);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json(['status' => 'Token de autorização expirado.'], 401);
            } else {
                return response()->json(['status' => $e->getMessage()], 401);
            }
        }
    }
}