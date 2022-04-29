<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\JWTException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = auth('jwt')->attempt($credentials)) {
                return response()->json([
                    'message' => 'Credenciales incorrectas',
                    'status' => Response::HTTP_BAD_REQUEST,
                ], Response::HTTP_BAD_REQUEST);
            }
        } catch (JWTException $e) {
            return response()->json([
                'message' => 'Error generando el token',
                'status_code' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

         return $this->respondWithToken($token);
    }


    protected function respondWithToken(string $token): JsonResponse
    {
        $user = auth('jwt')->user();

        return response()->json([
            'access_token' => $token,
            'status_code' => Response::HTTP_OK,
            'user' => $user,
            'expires_in' => (int) auth('jwt')->factory()->getTTL(),
        ], Response::HTTP_OK);
    }
}
