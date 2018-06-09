@extends('adminlte::page')

@section('title', 'NoPaper | Categorias Cadastradas')

@section('content_header')
<h1>Detalhes da Categoria</h1> 
<hr>
<h3>{{$c->categoria_nome}}</h3>
@stop

@section('content')
    <ul>
        <li>
            Nome {{$c->categoria_nome}}
        </li>
        <li>
            Descrição {{$c->categoria_desc or 'Não tem descrição'}}
        </li>
    </ul>
    <hr>

@stop