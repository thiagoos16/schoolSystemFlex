<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::create('turma', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('sigla');
            
            $table->integer('id_professor')->unsigned();
            $table->foreign('id_professor')->references('id')->on('professor');

            $table->integer('id_disciplina')->unsigned();
            $table->foreign('id_disciplina')->references('id')->on('disciplina');

            $table->timestamps();
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('turma', function(Blueprint $table){
            $table->dropForeign('id_professor');
        });

        Schema::table('turma', function(Blueprint $table){
            $table->dropForeign('id_disciplina');
        });

        Schema::dropIfExists('turma');
    }
}
