<template>
    <div >
   <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Descrição</th>
        <th scope="col">Valor</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Produto01</td>
        <td>2,50</td>
        <td>Adicionar/Remover</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Produto02</td>
        <td>3,00</td>
        <td>Adicionar/Remover</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Produto03</td>
        <td>2,00</td>
        <td>Adicionar/Remover</td>
        </tr>
    </tbody>
</table>
    <button id="voltar" type="button" class="btn btn-primary btn-lg">Voltar</button>
    <button id="bandeja" type="button" class="btn btn-primary btn-lg">Bandeja de Produtos</button>
        </div>
</template>

<script>
    export default {
    }
</script>
<style type="text/css">
#bandeja.btn-primary {
    color: #fff;
    background-color: #3097D1;
    border-color: #2a88bd;
    float: right;
    margin-top: -10px;
}
#voltar {
    margin-top: -10px;
}


         </style>