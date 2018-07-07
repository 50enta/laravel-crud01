@extends("principal")
@section("conteudo")

<h1>Bilhetes online </h1>

<div class="container">
@foreach( $eventos as $ev)
    <ul class="list-group">
        <li class="list-group-item active"> {{ $ev->titulo }} <span class="badge">{{ $ev->bilhetes }}</span></li>
        <li class="list-group-item">{{ $ev->categoria }} </li>
        <li class="list-group-item">Público </li>
    </ul>
    
@endforeach
</div>

@endsection