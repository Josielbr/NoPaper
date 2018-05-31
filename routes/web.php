<?php

//Responsável por exibir a home do Painel Administrativo
$this->group(['middleware'=>['auth'], 'namespace'=>'Admin'], function(){
    $this->get('admin', 'AdminController@index')->name('admin');
});


$this->get('admin/produtos', 'admin\ProdutoController@novo');

//$this->get('admin/produtos/adiciona', 'admin\ProdutoController@adiciona');

$this->post('/admin/produtos/adiciona', 'admin\ProdutoController@adiciona');



//Responsável por exibir a home do Cardápio
$this->get('/', 'Cardapio\CardapioController@index')->name('cardapio');

Auth::routes();


