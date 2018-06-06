<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
   
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
<<<<<<< HEAD
<<<<<<< HEAD
            $table->increments('produto_id');
=======
            $table->increments('id');
>>>>>>> 6ff245e6f13ca8ce269a4035532ac4c70817c209
=======
            $table->increments('id');
>>>>>>> 6ff245e6f13ca8ce269a4035532ac4c70817c209
            $table->string('produto_nome');
            $table->string('produto_desc');
            $table->integer('produto_valor');
            $table->integer('produto_qtd');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
