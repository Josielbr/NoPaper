@extends('adminlte::page')

@section('title', 'NoPaper | Categorias Cadastradas')

@section('content_header')
<h1>Categorias Cadastradas</h1> 
@stop

@section('content')
<table class="table table-striped table-bordered table-hover">
     <thead>
        <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Detalhes</th>
        <th>Excluir</th>
        </tr>      
    </thead>
    <tbody>
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
    </tbody>
    @endforeach
</table>
@if(old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
</div>
@endif
@stop