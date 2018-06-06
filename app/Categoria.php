<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    //Informa o que pode ser preenchido por massa
    protected $fillable =
         array('categoria_nome', 'categoria_desc');
    
    public function produtos(){
        return $this->hasmany('App\Produtos');
    }
}
