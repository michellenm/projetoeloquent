<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cursos', function (Blueprint $table) { // protected $table = "nome no singular"
            $table->increments('id');// id
            $table->char('turma');
            $table->char('nome');
            $table->timestamps();// cria 2 colunas - atualizado e criado
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
