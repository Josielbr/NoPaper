<?php
 namespace App\Http\Controllers\Admin;
 use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produtos;
use App\Http\Requests\ProdutoRequest;
use Auth;
<<<<<<< HEAD
//use App\Categoria;
=======
use App\Categoria;
>>>>>>> 6ff245e6f13ca8ce269a4035532ac4c70817c209

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
<<<<<<< HEAD
        return view('produto/produto_form');//->with('categorias', Categoria::all());
=======
        return view('produto/produto_form')->with('categorias', Categoria::all());
>>>>>>> 6ff245e6f13ca8ce269a4035532ac4c70817c209
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
  

}

