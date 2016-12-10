<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('perfil');
            $table->string('condominio');
            $table->string('nomefantazia');
            $table->string('password');

            //$table->string('documento');

           // $table->string('telefone');

            $table->rememberToken();
            $table->timestamps();
        });
    }
    //nome do banco antigo
//e-commerce-master
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
