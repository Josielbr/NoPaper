<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cardapio | {{ config('app.name', 'Laravel') }}</title>
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
        
          <!-- Logotipo do Cliente-->
        <logo-cliente></logo-cliente>
        
        @yield('content')
        <pagina tamanho="12">
                <div class="row">
                    <div class="col-md-4">
                        <caixa titulo="Pizzas" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
                        <caixa titulo="Lanches" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
                        <caixa titulo="Pastéis" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa titulo="Salgados" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
                        <caixa titulo="Porções" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
                        <caixa titulo="Petiscos" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa titulo="Cervejas" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
                        <caixa titulo="Sucos" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
                        <caixa titulo="Refrigerantes" url="{{ route('cardapio-item') }}" cor="#c0c0c0" icone="fa fa-arrow-circle-right"></caixa>
                    </div>
                </div>
        </pagina>
          <!--Rodapé da pagina-->
        <rodape></rodape>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
