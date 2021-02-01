<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    use ResponseTrait;

    /**
     * Método para efetuar o login do usuario.
     *
     * @param Request $request [
     *      email,
     *      senha
     * ]
     * @return json
     */
    public function login(Request $request)
    {
        try {
            $email = $request->get('email');
            $senha = $request->get('senha');

            //busca o usuario
            $usuario = Usuario::where('email', $email)->first();

            //valida se o usuario foi localizado
            if (!$usuario) throw new ErrorException("Usuário ou senha inválidos.");

            //valida se a senha foi informada corretamente
            if (md5($senha) != $usuario->senha) throw new ErrorException('Usuário ou senha inválidos.');

            // Obtem o token
            $token = JWTAuth::fromUser($usuario);

            if ($token) {
                return $this->successResponse([
                    'token_type' => 'Bearer',
                    'expires_in' => JWTAuth::factory()->getTTL() * 60,
                    'access_token' => $token
                ], 200);
            }
            // Caso não gerou o token;
            return $this->errorResponse('Não foi possível efetuar o login.', 401);
        } catch (ApiException $e) {
            return $this->errorResponse($e->getMessage(), 500);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), 401);
        }
    }

    /**
     * Método para efetuar o logout do usuário logado.
     *
     * @return json
     */
    public function logout()
    {
        Auth('api')->logout();

        return $this->successResponse([
            'message' => 'Logout efetuado com sucesso.'
        ], 200);
    }
}
