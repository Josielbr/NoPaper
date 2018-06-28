
<h1>Produtos Cadastrados</h1> 

<table class="table  table-bordered table-hover">
    <thead class="thead">
        <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        </tr> 
    </thead>        
    <tbody>
        @foreach ($produtos as $p)
        <tr class = "" >
            <td>{{$p->produto_nome}}</td>
            <td>{{$p->produto_valor}}</td>
        <td>{{$p->produto_desc}}</td>
        </tr>
        @endforeach
     </tbody>
</table>
