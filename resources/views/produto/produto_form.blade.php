<html>
<head></head>

<body>
    

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

<h1>Cadastro de produtos</h1>
<form action="produtos/adiciona" method="post">
    <input type="hidden" name="_token" value=" {{ csrf_token() }} " />

    <div class="form-group">
        <Label>Nome</>
        <br><input name="nome" type="text" class="form-control" value="{{ old('nome') }}">
        <br><Label>Valor</Label>
        <br><input name="valor" type="teLabelxt" class="form-control" value="{{ old('valor') }}">
        <br><Label>Quantidade</Label>
        <br><input name="quantidade" type="number" class="form-control" value="{{ old('quantidade') }}" >
        <br><div  class="form-group">
            <Label>Categoria</Label>
           <br> <select name="categoria_id" class="form-control">
       
            </select>
        </div>
        <br><Label>Descrição</Label>
        <br><input name="descricao" type="text" class="form-control" value="{{ old('descricao') }}">
    </div>  
    <br><br> <button class="btn btn-primary" type="submit">Salvar</button>  
</form>

</body>

</html>