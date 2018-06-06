<?php

namespace App\Http\Controllers\Cardapio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardapioItemController extends Controller
{
    public function index()
    {
        return view('cardapio.cardapio-item');
    }
   
    }
    

   