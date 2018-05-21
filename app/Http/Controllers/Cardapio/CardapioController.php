<?php

namespace App\Http\Controllers\Cardapio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardapioController extends Controller
{
    public function index()
    {
        return view('cardapio.home.index');
    }
}
