<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HelpsCadastro extends Migration
{

    public function up()
    {
        Schema::create('helps_cadastro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('problema');
            $table->integer('data');
            $table->string('descricao');
            $table->string('status');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('helps_cadastro');
    }
}
