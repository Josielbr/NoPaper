
<h1>Categorias de Cardápios</h1> 

<table class="table table-bordered table-hover">
    <tbody class="table-striped">
        @foreach ($categorias as $c)
         <tr class = "" >
            <th>
                <a href="/produtos/listaProdCategoria/{{$c->id}}">
                    <span class="glyphicon glyphicon-search" aria-hidden="true">{{$c->categoria_nome}} </span>
                </a>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
