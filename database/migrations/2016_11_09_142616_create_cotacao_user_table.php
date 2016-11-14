<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotacaoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotacao_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');

            $table->integer('cotacao_id')->unsigned();
            $table->foreign('cotacao_id')->references('id')->on('cotacaos')->onUpdate('cascade');
            $table->float('preco', 8, 2);
           // $table->float('valor_total', 10, 2);

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
        Schema::dropIfExists('cotacao_user');
    }
}
