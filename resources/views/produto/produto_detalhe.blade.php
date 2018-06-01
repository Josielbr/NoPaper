@extends('\layouts.layout_cabecalho')

@section('conteudo')


<h1>Detalhes do produto {{$p->produto_nome}}</h1> 
    <ul>
        <li>
            Valor {{$p->produto_valor}}
        </li>
        <li>
            Quantidade {{$p->produto_qtd}}
        </li>   
        <li>
            Descrição {{$p->produto_desc or 'Não tem descrição'}}
        </li>
    </ul>


@stop