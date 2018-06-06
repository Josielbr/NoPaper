@extends('\layouts.layout_cabecalho')

@section('conteudo')


<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>


<h1>Cadastro de categorias</h1>
<form action="categorias/adiciona" method="post">
    <input type="hidden" name="_token" value=" {{ csrf_token() }} " />

    <div class="form-group">
        <Label>Nome da Categoria</>
        <input name="categoria_nome" type="text" class="form-control" >
        <Label>Descrição da Categoria</Label>
        <input name="categoria_desc" type="text" class="form-control">
    </div>  
    <button class="btn btn-primary" type="submit">Salvar</button>  
    
    <button class="btn btn-danger" type="reset">Cancelar</button>  
</form>
@stop