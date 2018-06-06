<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido_id')->unsigned();// unsigned somente inteiro positivos.
            $table->integer('produto_id')->unsigned();// unsigned somente inteiro positivos.
            $table->enum('status',['RE','PA','CA']);// Resevado, Pago, Cancelado.
            $table->decimal('valor', 6,2)->default(0);
            $table->decimal('desconto', 6,2)->default(0);
            $table->integer('cupom_desconto_id')->nullable()->unsigned();// unsigned somente inteiro positivos.
           
            $table->timestamps();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('produto_id')->references('produto_id')->on('produtos');
            $table->foreign('cupom_desconto_id')->references('id')->on('cumpom_descontos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_produtos');
    }
}
