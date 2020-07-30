<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }
    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }
    public function salvar(Request $request)
    {
        $dados = $request->all();
        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'não';
        }
        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $numero = rand(1111, 9999);
            $dir = "img/cursos";
            $extencao = $image->guessClientExtension();
            $nomeImagem = "imagem_" . $numero . "." . $extencao;
            $image->move($dir, $nomeImagem);
            $dados['imagem'] = $dir . "/" . $nomeImagem;
        }

        Curso::create($dados);

        return redirect('admin/cursos');
    }
    public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.cursos.editar', compact('registro'));
    }
    public function atualizar(Request $request, $id)
    {
       
        $dados = $request->all();
        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'não';
        }
        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $numero = rand(1111, 9999);
            $dir = "img/cursos";
            $extencao = $image->guessClientExtension();
            $nomeImagem = "imagem_" . $numero . "." . $extencao;
            $image->move($dir, $nomeImagem);
            $dados['imagem'] = $dir . "/" . $nomeImagem;
        }
        //atualizar dados 
        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }
    public function deletar($id)
    {
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }
    
}
