<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(Request $request) {

        $credenciais = $request->all(['email', 'password']);
        $token = auth('api')->attempt($credenciais); // IMPORTANTE: FAZ A AUTENTICAÇÂO E FORNECE O TOKEN
        
        
        if($token) {
            return response()->json(['token' => $token]);
        } else {
            return response()->json(['erro' => 'Usuário ou senha incorreto'], 403);
        }
       // return 'login';
    }
    public function logout() {
        auth('api')->logout();
        return response()->json(['msg' => 'Logout realizado com sucesso!']);
    }
    public function refresh() {

        $token = auth('api')->refresh();
        return response()->json(['token'=> $token]);
    }
    public function me() {
        return response()->json(auth()->user); // RETORNA OS DADOS DO USER QUE FEZ A REQUISIÇÂO DE AUTENTICAÇÂO
    }
}