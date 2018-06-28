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
     
    /*public function mostraProdutoCategora(){      
       $produtos = Produtos::all();
        return view('produto/produto_listagem')->with('produtos', $produtos);
        }

     public function mostra($id){
        $categorias = Categoria::find($id);
        return view('produto/categoria_detalhe')->with('c', $categorias);
    }    
    
    public function novo(){
        return view('produto/categoria_form')->with('categorias', Categoria::all());
    }

    public function remove($id){
        $categorias = Categoria::find($id);
        $categorias->delete();
        return redirect()->action('admin\CategoriaCardapioController@lista');
    }*/

}
