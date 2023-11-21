<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $credenciais = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required']
            ],
            [
                'email.required' => 'Preencha o campo de email.',
                'email.email' => 'O email não é válido.',
                'password.required' => 'Preencha o campo da senha.'
            ]

        );

        if (Auth::attempt($credenciais, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        } else {
            return redirect()->back()->with('erro', 'Email ou senha inválidos.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('site.home'));
    }

    public function create()
    {
        return view('login.create');
    }
}
