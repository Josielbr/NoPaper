@extends('adminlte::page')

@section('title', 'NoPaper | Categorias Cadastradas')

@section('content_header')
<h1>Detalhes da Categoria
       {{--<b>{{$c->categoria_nome}}</b>--}}
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
                <td>{{$c->categoria_nome}}</td>
        </tr>
    </tbody>
</table>
<table class="table table-striped" >
    </thead>
       <thead class="thead">
       <th>Descrição</th>
       </tr>      
   </thead>
   <tbody>
        <tr>
        <td>{{$c->categoria_desc or 'Não tem descrição'}}</td>
        </tr>
    </tbody>
</table>
@stop