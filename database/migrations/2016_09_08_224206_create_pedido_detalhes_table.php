<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_detalhes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido_id');
            $table->integer('produto_id');
            $table->integer('quantidade');
           // $table->integer('valor_unitario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedido_detalhes');
    }
}
