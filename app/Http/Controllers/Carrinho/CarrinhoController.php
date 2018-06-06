<?php

namespace App\Http\Controllers\Carrinho;
use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class CarrinhoController extends Controller
{
    
    function __construct()
    {   //Obriga estar logado
        $this->middleware('auth');
    }
    public function index()
    {
        $pedidos = Pedido::where([
            'status' => 'RE',
            'user' => Auth::id()
        ])->get();
        
        return view('carrinho.carrinho');
    }
}
