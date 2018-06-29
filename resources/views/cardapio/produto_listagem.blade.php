@extends('layouts.layout_cabecalho')
@section('pagina_titulo', 'CARRINHO')
@section('conteudo')

<div class="container">
<table class="table table-bordered table-hover">
        <thead class="thead">
           <tr>
           <th>Produto</th>
           <th>Preço</th>
           <th>Descrição</th>
           <th>Add a Bandeja</th>
           </tr>      
       </thead>
       <tbody class="table-striped">
        @foreach ($produtos as $p)
        <tr class = "" >
            <td>{{$p->produto_nome}}</td>
            <td>{{$p->produto_valor}}</td>
            <td>{{$p->produto_desc}}</td>
           <td>
             <a href="{{ route('carrinho.adicionar',$p->id) }}"  data-tooltip="Inserir ao carrinho">
                 <span id="add" class="glyphicon glyphicon-plus-sign"></span>                                   
             </a>
           </td>
       </tr>
       </tbody>
       @endforeach
   </table>
   <a href="http://127.0.0.1:8000/carrinho"><button id="Carrinho" class="btn btn-primary btn-lg">Minha Bandeja</button></a>
   <button id="bandeja" onClick="history.go(-1)" class="btn btn-primary btn-lg">Voltar</button>
</div>
@endsection  