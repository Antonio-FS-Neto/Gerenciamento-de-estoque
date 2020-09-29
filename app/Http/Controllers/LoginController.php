<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');

        if( Auth::attempt($credenciais)) 
        {    
            return "Usuário ". Auth::user()->name ." logado com sucesso";
        }
       
        return "As credencias não são válidas";
        
    }
}
