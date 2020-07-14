<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
 public function index() {
    return  "Mensagem de retorno no index do controler";
  }
  public function criar(Request $req) {
    //dados podem ser debugados via dd, e para exibir atributos especificos 
    //utiliza-se $req['valorvindodo_input'] ou req->nome
  //  dd($req['nome']);
  dd($req->all());
    return  "Mensagem de retorno no criar do controler";
  }
  public function editar() {
    return  "Mensagem de retorno no edita do controler";
  }
}
