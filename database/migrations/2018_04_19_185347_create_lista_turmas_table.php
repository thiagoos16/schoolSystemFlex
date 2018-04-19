<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_turmas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_turma')->unsigned();
            $table->foreign('id_turma')->references('id')->on('turma');

            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id')->on('curso');

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
        Schema::table('lista_turmas', function(Blueprint $table){
            $table->dropForeign('id_turma');
        });

        Schema::table('lista_turmas', function(Blueprint $table){
            $table->dropForeign('id_curso');
        });

        Schema::dropIfExists('lista_turmas');
    }
}
