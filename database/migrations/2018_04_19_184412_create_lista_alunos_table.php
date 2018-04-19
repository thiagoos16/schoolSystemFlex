<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_alunos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_aluno')->unsigned();
            $table->foreign('id_aluno')->references('id')->on('aluno');

            $table->integer('id_turma')->unsigned();
            $table->foreign('id_turma')->references('id')->on('turma');

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
        Schema::table('lista_alunos', function(Blueprint $table){
            $table->dropForeign('id_aluno');
        });

        Schema::table('lista_alunos', function(Blueprint $table){
            $table->dropForeign('id_turma');
        });

        Schema::dropIfExists('lista_alunos');
    }
}
