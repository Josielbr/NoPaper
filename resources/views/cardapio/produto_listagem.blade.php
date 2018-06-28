
<h1>Produtos Cadastrados</h1> 

<table class="table  table-bordered table-hover">
    <thead class="thead">
        <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Comprar</th>
        </tr> 
    </thead>        
    <tbody>
    @foreach ($produtos as $p)
     <tr class = "" >
        <td>{{$p->produto_nome}}</td>
        <td>{{$p->produto_valor}}</td>
       <td>{{$p->produto_desc}}</td>
       <td>
       <a href="{{ route('carrinho.adicionar',$p->id) }}"  data-tooltip="Inserir ao carrinho">
                                       <span>Comprar</span>                                   
                                     </a>
       </td>
    </tr>
    </tbody>
    @endforeach
</table>
