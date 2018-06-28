<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['id', 'user_id','status'];

    public function pedido_produtos(){
        return $this->hasMany('App\PedidoProduto')
        ->select(\DB::raw('produto_id, sum(desconto) as descontos, sum(valor) as valores,count(1) as qtd'))
        ->groupBy('produto_id')
        ->orderBy('produto_id', 'desc');
    }
    
}
