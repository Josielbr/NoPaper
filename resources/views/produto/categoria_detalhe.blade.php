@extends('\layouts.layout_cabecalho')

@section('conteudo')


<h1>Detalhes do produto</h1> 
    <ul>
        <li>
            Nome {{$c->categoria_nome}}
        </li>
        <li>
            Descrição {{$c->categoria_desc or 'Não tem descrição'}}
        </li>
    </ul>


@stop