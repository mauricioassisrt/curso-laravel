<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
 public function index() {
     //criar array de contatos

    $contatos = [
        ["nome"=> "Maria", "telefone"=>"21312312"],
        ["nome"=> "João", "telefone"=>"2131254312"]
    ];
    $contatos2 = [
        (object) ["nome"=> "Maria", "telefone"=>"21312312"],
        (object) ["nome"=> "João", "telefone"=>"2131254312"]
     ];
    return  view('contato.index', compact('contatos', 'contatos2'));
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
