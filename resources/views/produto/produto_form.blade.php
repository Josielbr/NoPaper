@extends('adminlte::page')

@section('title', 'NoPaper | Admin')

@section('content')
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>


<h1>Cadastro de produtos</h1>
<form action="produtos/adiciona" method="post">
    <input type="hidden" name="_token" value=" {{ csrf_token() }} " />

    <div class="form-group">
        <Label>Nome</>
        <input name="produto_nome" type="text" class="form-control" >
        <Label>Valor</Label>
        <input name="produto_valor" type="teLabelxt" class="form-control">
        <Label>Quantidade</Label>
        <input name="produto_qtd" type="number" class="form-control"  >
        <div  class="form-group">
            <Label>Categoria</Label>

           <select name="categoria_id" class="form-control">
       

            <select name="categoria_id" class="form-control">
                @foreach( $categorias as $c)
                <option value="{{$c->id}}">{{$c->categoria_nome}}</option>
                @endforeach
            </select>
        </div>
        <Label>Descrição</Label>
        <input name="produto_desc" type="text" class="form-control">
    </div>  
    <button class="btn btn-primary" type="submit">Salvar</button>  
    
    <button class="btn btn-danger" type="reset">Cancelar</button>  
</form>
@stop