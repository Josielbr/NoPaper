@extends('\layouts.layout_cabecalho')

@section('conteudo')

<h1>Listagem de categorias cadastrados</h1> 
<table class="table table-striped table-bordered table-hover">
    @foreach ($categorias as $c)
     <tr class = "" >
        <td>{{$c->categoria_nome}}</td>
        <td>{{$c->categoria_desc}}</td>
        <td>
            <a href="/admin/categorias/mostra/{{$c->id}}">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
        </td>
        <td>
            <a href="/admin/categorias/remove/{{$c->id}}">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@if(old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
</div>
@endif

@stop