<?php

namespace App\Http\Controllers\Cardapio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;
//use Request;
use Validator;
use App\Produtos;
use App\Http\Requests\ProdutoRequest;
use Auth;

use App\Categoria;

class CardapioItemController extends Controller
{
    public function index()
    {
        return view('cardapio.cardapio-item');
    }
   
    public function listaProd(){      
        $produtos = Produtos::all();
         return view('Cardapio/cardapio-item')->with('produtos', $produtos);
         }

    }
    

   