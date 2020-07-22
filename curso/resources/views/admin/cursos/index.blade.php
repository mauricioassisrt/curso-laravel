@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">
    <h3 class="center">Lista de Cursos</h3>
    <div class="row">

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Imagem </th>
                    <th>Publicado </th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($registros as $item)
                        <td>{{$item->id}}</td>
                        <td>{{$item->titulo}}</td>
                        <td>{{$item->descricao}}</td>
                        <td><img width="120" src="{{asset($item->imagem)}}" alt="{{$item->titulo}}"></td>
                        <td>{{$item->publicado}}</td>
                        <td>
                        <a class="btn deep-orange"  href="{{route('admin.cursos.editar', $item->id)}}">Editar</a>
                        <a class="btn deep-red"  href="{{route('admin.cursos.deletar', $item->id)}}">Deletar</a>
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <div class="row">
             <a class="btn blue" href="{{route ('admin.cursos.adicionar')}}">Adicionar</a>
        </div>

      
    </div>
   
</div>
 
@endsection
