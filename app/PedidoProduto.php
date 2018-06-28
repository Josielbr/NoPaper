<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{   
    protected $fillable = ['id', 'produto_id', 'pedido_id', 'status','valor','cupom_desconto_id','desconto'];
    public function produto()
    {
        return $this->belongsTo('App\Produto', 'produto_id', 'produto_id');
        
    }
    //
}
