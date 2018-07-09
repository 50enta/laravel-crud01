@extends("principal")
@section("conteudo")

<h1>Bilhetes online </h1>

<div class="container">
    @foreach( $eventos as $ev)
    <ul class="list-group">
        <li class="list-group-item active"> {{ $ev->titulo }} <span class="badge">{{ $ev->bilhetes }} Bilhetes</span></li>
        <li class="list-group-item">Categoria: {{ $ev->categoria }} 
            <span class="badge"> 
                <a href="{{url('/remover/'.$ev->id)}}}}" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-trash"></span> Excluir
                </a>
            </span>
        </li>
        <li class="list-group-item">Código:{{ $ev->id }} 
            <span class="badge">
                <a href="#" class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-heart-empty"></span> Gostar
                </a>
            </span>

        </li>
        <li class="list-group-item">Evento público </li>
    </ul>

    @endforeach
</div>

@endsection