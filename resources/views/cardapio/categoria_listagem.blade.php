@extends('layouts.layout_cabecalho')
@section('pagina_titulo', 'CARRINHO')
@section('conteudo')

    <div id="principal" class="container">
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
        <h1>Cardápio</h1> 
        @foreach ($categorias as $c)
    <caixa titulo="{{$c->categoria_nome}}" url="produtos/listaProdCategoria/{{$c->id}}"  cor="#c0c0c0" icone="glyphicon glyphicon-arrow-right" ></caixa>
    @endforeach
    </div>
@endsection  
