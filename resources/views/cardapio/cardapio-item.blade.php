<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cardapio | {{ config('app.name') }}</title>
    <link href="style.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Topo-->
        <topo logo="#" url="{{ url('/') }}">
    
             <!-- Autenticação do Usuário -->
             @guest
             <li><a href="{{ route('login') }}">Login</a></li>
             <li><a href="{{ route('register') }}">Cadastre-se</a></li>
         @else
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                 <ul class="dropdown-menu">
                     <li>
                         <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                             Logout
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                     </li>
                 </ul>
             </li>
         @endguest
        
        </topo>
        @yield('content')
        <pagina tamanho="12">
                <table class="table table-striped table-bordered table-hover">
                        <thead class="thead">
                            <tr>
                            <th>Nome</th>
                            <!--<th>Valor</th>
                            <th>Descrição</th>
                            <!--<th>Estoque</th>-->
                            <th>Detalhes</th>
                            <th>Excluir</th>
                            </tr> 
                        </thead>        
                        <tbody>
                      @foreach ($produtos as $p)
                         <tr class = "{{ $p->produto_qtd < 2 ? 'danger' : ''}}" >
                            <td>{{$p->produto_nome}}</td>
                        <td>{{$p->produto_valor}}</td>
                           <td>{{$p->produto_desc}}</td>
                            <td>{{$p->produto_qtd}}</td>
                            <td>
+                                    <a href="{{ route('carrinho.adicionar') }}">
+                                        <span>Comprar</span>
+                                    </a>
+                           </td>
                            <td>
                                <a href="/admin/produtos/mostra/{{$p->id}}">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </a>
                            </td>
                            <td>
                                <a href="/admin/produtos/remove/{{$p->id}}">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </a>
                            </td>
                           
                        </tr>
                        <tr>
                            
                        </tbody>
                       @endforeach
       
                    </table>
      
        </pagina>
        <rodape>

            
        </rodape>
        <script src="{{ asset('js/app.js') }}"></script>

      
        
     </body>
     
</html>
    