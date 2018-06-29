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
        @endguest
    </topo>
</body>
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="{!! asset('images/banner 01.jpg') !!}" alt="Banner 01">
          </div>
      
          <div class="item">
            <img src="{!! asset('images/banner 02.jpg') !!}" alt="Banner 02">
          </div>
      
          <div class="item">
            <img src="{!! asset('images/banner 03.jpg') !!}" alt="Banner 03">
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>
    
    @yield('content')
    <pagina tamanho="12">
        
                <h1>Categorias de Cardápios</h1> 
                @foreach ($categorias as $c)
            <caixa titulo="{{$c->categoria_nome}}" url="produtos/listaProdCategoria/{{$c->id}}"  cor="#c0c0c0" icone="glyphicon glyphicon-arrow-right" ></caixa>
            @endforeach
        
    </pagina>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        </div>
    </body>
    <style type="text/css">
       
        .carousel-inner > .item > img, 
        .carousel-inner > .item > a > img {

                width: 100%;
        }
        </Style>
</html>
