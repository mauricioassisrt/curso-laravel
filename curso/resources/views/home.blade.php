@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">
    <h3 class="center">Lista de Cursos</h3>
    <div class="row">
        @foreach ($registros as $item)

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset($item->imagem)  }}" height="160">
                </div>
                <div class="card-content">

                    <span class="card-title">{{ $item->titulo }}</span>
                    <p>
                        {{ $item->descricao }}
                    </p>
                </div>
                <div class="card-action">
                    <a href="#">Clique aqui</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection