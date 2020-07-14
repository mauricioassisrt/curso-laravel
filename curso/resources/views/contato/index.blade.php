<h1> essa é a view index de contatos</h1>
sintax de objeto 
@foreach ($contatos2 as $contato)
    <h5>{{$contato->nome}}</h5>
@endforeach
sintax de array 
@foreach ($contatos as $contato)
    <h5>{{$contato['nome']}}</h5>
@endforeach