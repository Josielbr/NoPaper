@extends('adminlte::page')

@section('title', 'NoPaper | Cadastro de Categorias')

@section('content_header')
<h1>Cadastro de Categorias</h1> 
@stop

@section('content')
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>

<form action="categorias/adiciona" method="post">
    <input type="hidden" name="_token" value=" {{ csrf_token() }} " />

    <div class="form-group">
        <Label>Nome</Label>
        <input name="categoria_nome" type="text" class="form-control" >
        <Label>Descrição</Label>
        <input name="categoria_desc" type="text" class="form-control">
    </div>  
    <button class="btn btn-primary" type="submit">Salvar</button>  
    
    <button class="btn btn-danger" type="reset">Cancelar</button>  
</form>

@stop