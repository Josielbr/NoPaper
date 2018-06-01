@extends('\layouts.layout_cabecalho')

@section('conteudo')

<h1>Listagem de produtos cadastrados</h1> 
<table class="table table-striped table-bordered table-hover">
    @foreach ($produtos as $p)
     <tr class = "{{ $p->produto_qtd < 2 ? 'danger' : ''}}" >
        <td>{{$p->produto_nome}}</td>
        <td>{{$p->produto_valor}}</td>
        <td>{{$p->produto_desc}}</td>
        <td>{{$p->produto_qtd}}</td>
        <td>
            <a href="/admin/produtos/mostra/{{$p->id}}">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
        </td>
        <td>
            <a href="/admin/produtos/remove/{{$p->id}}">
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