<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request){
        $credenciais = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um email válido.',
            'password.required' => 'O campo senha é obrigatório.'
        ]);
        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else{
            return redirect()->back()->withErrors([
                'erro' => 'Verifique suas credenciais e tente novamente.'
            ]);
        }
    }
}
