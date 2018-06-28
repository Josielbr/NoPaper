<?php
namespace App\Http\Controllers\Cardapio;

 use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produtos;
use App\Http\Requests\CategoriaRequest;
use Auth;
use App\Categoria;

class CategoriaCardapioController extends Controller
{
    public function adiciona( CategoriaRequest $request){
        Categoria::create($request->all());
       return redirect('/admin')->withInput();
    }

    public function lista(){      
        $categorias = Categoria::all();
         return view('cardapio/categoria_listagem')->with('categorias', $categorias);
         }

}
