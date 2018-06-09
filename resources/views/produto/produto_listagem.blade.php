@extends('adminlte::page')

@section('title', 'NoPaper | Produtos Cadastrados')

@section('content_header')
<h1>Produtos Cadastrados</h1> 
@stop

@section('content')

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Estoque</th>
        <th>Detalhes</th>
        <th>Excluir</th>
        </tr> 
    </thead>        
    <tbody>
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
    </tbody>
    @endforeach
</table>
@if(old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
</div>
@endif

@stop