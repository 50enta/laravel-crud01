@extends("principal")
@section("conteudo")

<div class="container">
    <h2>Formulário de registo/ actualização</h2>
    <form action="{{url('submeter')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="id">id:</label>
            <input type="text" class="form-control" id="id"  name="id">
        </div>
        <div class="form-group">
            <label for="titulo">titulo:</label>
            <input type="text" class="form-control" id="titulo"  name="titulo">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" class="form-control" id="categoria"  name="categoria">
        </div>
        <div class="form-group">
            <label for="bilhetes">bilhetes:</label>
            <input type="text" class="form-control" id="bilhetes"  name="bilhetes">
        </div>

        <button type="submit" name="submit" value="enviar" class="btn btn-default">Salvar</button>
    </form>
</div>


@endsection