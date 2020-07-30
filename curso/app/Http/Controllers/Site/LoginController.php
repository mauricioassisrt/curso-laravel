<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

    public function index()
    {
        //pasta =login index = é o arquivo 
        return view('login.index');
    }

    public function entrar(Request $request)
    {
        $dados = $request->all();
        if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
            return redirect()->route('admin.cursos');
        }
        return redirect()->route('login.index');
    }
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
