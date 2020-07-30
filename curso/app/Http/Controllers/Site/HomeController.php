<?php

namespace App\Http\Controllers\Site;

use App\Curso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('home', compact('registros'));
    }
}
