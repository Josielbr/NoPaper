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
   
    
}
