@extends('adminlte::page')

@section('title', 'NoPaper | Produtos Cadastrados')

@section('content_header')
<h1>Detalhes do Produto: {{$p->produto_nome}}</h1> 
<hr>
@stop

@section('content')
    <ul>
        <li>
            Valor: {{$p->produto_valor}}
        </li>
        <li>
            Quantidade: {{$p->produto_qtd}}
        </li>   
        <li>
            Descrição: {{$p->produto_desc or 'Não tem descrição'}}
        </li>
    </ul>


@stop