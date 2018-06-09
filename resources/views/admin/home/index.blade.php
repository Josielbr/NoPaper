@extends('adminlte::page')

@section('title', 'NoPaper | Admin')

@section('content_header')
<h1>Painel de Controle</h1>
@stop

@section('content')
    <p>Agora Você está Logado!</p>
    <caixa titulo="Pizzas" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
@stop
