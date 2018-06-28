<?php

//Responsável por exibir a home do Painel Administrativo
$this->group(['middleware'=>['auth'], 'namespace'=>'Admin'], function(){
    $this->get('admin', 'AdminController@index')->name('admin');
});


$this->get('admin/produtos', 'admin\ProdutoController@novo');

//$this->get('admin/produtos/adiciona', 'admin\ProdutoController@adiciona');

$this->post('/admin/produtos/adiciona', 'admin\ProdutoController@adiciona');
$this->get('/admin/produtos/lista', 'admin\ProdutoController@lista');
$this->get('/admin/produtos/mostra/{id}', 'admin\ProdutoController@mostra');
$this->get('/admin/produtos/remove/{id}', 'admin\ProdutoController@remove' );

$this->get('/admin/categorias', 'admin\CategoriaController@novo');
$this->post('/admin/categorias/adiciona', 'admin\CategoriaController@adiciona');
$this->get('/admin/categorias/lista', 'admin\CategoriaController@lista');
$this->get('/admin/categorias/mostra/{id}', 'admin\CategoriaController@mostra');
$this->get('/admin/categorias/remove/{id}', 'admin\CategoriaController@remove' );



// Responsável por exibir o carrinho.
Route::get('/carrinho', 'Carrinho\CarrinhoController@index')->name('carrinho.carrinho');
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('carrinho');
});
Route::post('/carrinho/adicionar', 'Carrinho\CarrinhoController@adicionar')->name('carrinho.adicionar');
Route::delete('/carrinho/remover', 'Carrinho\CarrinhoController@remover')->name('carrinho.remover');
Route::post('/carrinho/concluir', 'Carrinho\CarrinhoController@concluir')->name('carrinho.concluir');
Route::get('/carrinho/compras', 'Carrinho\CarrinhoController@compras')->name('carrinho.compras');
Route::post('/carrinho/cancelar', 'Carrinho\CarrinhoController@cancelar')->name('carrinho.cancelar');
Route::post('/carrinho/desconto', 'Carrinho\CarrinhoController@desconto')->name('carrinho.desconto');





//Responsável por exibir a home do Cardápio//
//$this->get('/', 'Cardapio\CardapioController@index')->name('cardapio'); homw
//$this->get('/cardapio-item', 'Cardapio\CardapioItemController@index')->name('cardapio-item');
$this->get('/cardapio-item', 'cardapio\CardapioItemController@listaProd'); //mudar para não conflitar
$this->get('/', 'Cardapio\CategoriaCardapioController@lista');
//$this->get('/admin/produtos/lista', 'admin\ProdutoController@lista');
$this->get('/produtos/listaProdCategoria/{id}', 'admin\ProdutoController@listaProdCategoria');
//$this->get('/admin/produtos/mostra/{id}', 'admin\ProdutoController@mostra');




Auth::routes();


