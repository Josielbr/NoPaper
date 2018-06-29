
@extends('layouts.layout_cabecalho')
@section('pagina_titulo', 'CARRINHO')
@section('conteudo')

<div class= "container">
    <div class ='row'>
        <h3> Produtos na bandeja</h3>
     <hr/>
        @forelse ($pedidos as $Pedido) 
            <h5 class="col l6 s12 m6 ">Pedido: {{$Pedido->id}}</h5>
            <h5 class="col l6 s12 m6 ">Criado em: {{$Pedido->created_at->format('d/m/y H:i ')}}</h5>
            <table>
             <thead>
                    <tr>
                        <th></th>
                        <th>QTD</th>
                        <th>Produto</th>
                     <th>Valor unit.</th>
                     <th>Desconto(s)</th>
                     <th>Total</th>
                    </tr>
             </thead>
              <tbody>
                    @php
                        $total_pedido=0;
                    @endphp
                 @foreach ($pedidos->pedido_produtos as $pedido_produto)
                        <tr>
                            <td>
                                <img width= "100" heigth="100" src="{{$pedido_produto->produto->imagem}}" >
                        
                            </td>
                         <td class="center-alingn">
                                <div class="center-alingn">
                                    <a class="col l4 m4 s4" href="#"
                                        <i class="material-icons small"> remove_circle_outline</i>
                                 </a>
                                    <a class="col l4 m4 s4" href="#"
                                        <i class="material-icons small"> remove_circle_outline</i>
                                 </a>
                                    <spam class="col l4 m4 s4">{{$pedido_produto->QTD}}</spam>
                                    <a class="col l4 m4 s4" href="#"
                                        <i class="material-icons small"> add_circle_outline</i>
                                 </a> 
                                 </div>

                                 <a href="#" class="tootipped" data-position="rigth" data-delay="50" data-tootiped="Retirar produto do carrinho?">retirar produto</a>
                            </td>
                             <td>{{$pedido_produto->produto->nome}}</td>
                            <td> R$ {{$number_format($pedido_produto->produto->valor,2,',','.')}}</td>
                             <td>R$ {{$number_format($pedido_produto->produto->descontos,2,',','.')}}</td>
                            @php
                                $total_produto = $pedido_produto->valores - $pedido_produto->descontos;
                                $total_pedido += $total_produto;
                            @endphp
                            <td>R$ {{$number_format($total_produto,2,',','.')}}</td>
                        </tr>
                     @endforeach
                </tbody>
                </table>
                <div class="row">
                <strong class="col l2 m6 s2 l4 m4 s4 rigth-align">  Total do pedido
                </strong>
                <span class="col l2 m2 s2 ">R$ {{$number_format($total_produto,2,',','.')}}</span>
                </div>
                <div class="row">

                
                <button id="bandeja" onClick="history.go(-1)" class="btn btn-primary btn-lg">Continuar Comprando</button>
                <form method="POST" action="{{ route('carrinho.concluir') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                    <button type="submit" class="btn btn-primary btn-lg" data-position="top" data-delay="50" data-tooltip="Adquirir os produtos concluindo a compra?">
                        Finalizar Pedido
                    </button>   
                </form>

                <div class="row>"
                <a class="btn-large tooltipped col l4 s4 m4 offset-l8 offset-s8 offset-m8"
                data-position="top" data-delay="50" data-tooltip="Voltar a página inicial para continuar comprando?" href="{{route('index')}}">Continuar comprando</a>
                </div>

        @empty
                <h5>Não há pedido na bandeja!</h5> 
                <button id="bandeja" onClick="history.go(-1)" class="btn btn-primary btn-lg" data-tooltip="Voltar">Voltar</button>
         @endforelse   
     </div>
</div>
@endsection  