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



//Responsável por exibir a home do Cardápio
$this->get('/', 'Cardapio\CardapioController@index')->name('cardapio');
$this->get('/cardapio-item', 'Cardapio\CardapioItemController@index')->name('cardapio-item');

// Responsável por exibir o carrinho.
Route::get('/carrinho', 'Carrinho\CarrinhoController@index')->name('carrinho.carrinho');


Auth::routes();


