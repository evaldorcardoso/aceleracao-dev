<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Não autorizado'], 401);
        }

        return response()->json([
            'token' => $token
        ], 201);
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['Mensagem' => "Saiu com sucesso! Token invalidado!"], 200);
    }

    public function refresh()
    {
        $token = auth('api')->refresh();

        return response()->json([
            "token" => $token,
            "aviso" => "Token atualizado para segurança"
        ], 201);
    }
}
