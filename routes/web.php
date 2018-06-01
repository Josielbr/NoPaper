<?php

//Responsável por exibir a home do Painel Administrativo
$this->group(['middleware'=>['auth'], 'namespace'=>'Admin'], function(){
    $this->get('admin', 'AdminController@index')->name('admin');
});

//Responsável por exibir a home do Cardápio
$this->get('/', 'Cardapio\CardapioController@index')->name('cardapio');
$this->get('/cardapio-item', 'Cardapio\CardapioItemController@index')->name('cardapio-item');

Auth::routes();


