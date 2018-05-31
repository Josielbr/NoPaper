<?php
 namespace App\Http\Controllers\Admin;
 use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produtos;
use App\Http\Requests\ProdutoRequest;
use Auth;
//use App\Categoria;

class ProdutoController extends Controller{

    /*public function lista(){      
       $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
        }

    public function mostra($id){
        $produto = Produto::find($id);
        return view('produto.detalhes')->with('p', $produto);
    }*/

    public function novo(){
        return view('produto/produto_form');//->with('categorias', Categoria::all());
    }

    public function adiciona( ProdutoRequest $request){
        Produtos::create($request->all());
       return redirect('/admin')->withInput();
    }
    /*
    

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@Lista');
    }*/
  

}

