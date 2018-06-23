<?php
 namespace App\Http\Controllers\Admin;
 use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produtos;
use App\Http\Requests\ProdutoRequest;
use Auth;

use App\Categoria;



class ProdutoController extends Controller{

    public function lista(){      
       $produtos = Produtos::all();
        return view('produto/produto_listagem')->with('produtos', $produtos);
        }

    public function mostra($id){
        $produto = Produtos::find($id);
        return view('produto/produto_detalhe')->with('p', $produto);
    }

    public function novo(){
        return view('produto/produto_form')->with('categorias', Categoria::all());
    }

    public function adiciona( ProdutoRequest $request){
        Produtos::create($request->all());
       return redirect('/admin')->withInput();
    }
    

    public function remove($id){
        $produto = Produtos::find($id);
        $produto->delete();
        return redirect()->action('admin\ProdutoController@lista');
    }
  
    public function listaProd(){      
        $produtos = Produtos::all();
         return view('cardapio-item/lista')->with('produtos', $produtos);
         }

}

