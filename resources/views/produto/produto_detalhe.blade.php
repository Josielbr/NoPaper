@extends('adminlte::page')

@section('title', 'NoPaper | Produtos Cadastrados')

@section('content_header')
<h1>Detalhes do Produto
    {{--<b>{{$p->produto_nome}}</b>--}}
</h1>
@stop

@section('content')
<table class="table table-striped" >
        <thead class="thead">
        <tr>
       <th>Nome</th>
    </tr>     
   </thead>
   <tbody>
        <tr>
            <td>{{$p->produto_nome}}</td>
        </tr>
    </tbody>
</table>
<table class="table table-striped" >
        <thead class="thead">
        <tr>
       <th>Valor</th>
    </tr>     
   </thead>
   <tbody>
        <tr>
            <td>{{$p->produto_valor}}</td>
        </tr>
    </tbody>
</table>
<table class="table table-striped" >
        <thead class="thead">
        <tr>
       <th>Estoque</th>
    </tr>     
   </thead>
   <tbody>
        <tr>
            <td>{{$p->produto_qtd}}</td>
        </tr>
    </tbody>
</table>
<table class="table table-striped" >
        <thead class="thead">
        <tr>
       <th>Descrição</th>
    </tr>     
   </thead>
   <tbody>
        <tr>
            <td>{{$p->produto_desc or 'Não tem descrição'}}</td>
        </tr>
    </tbody>
</table>

@stop