<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCollumnsInCursoTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curso_turma', function($table){
            $table->renameColumn('id_curso', 'curso_id');
            $table->renameColumn('id_turma', 'turma_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curso_turma', function($table){
            $table->renameColumn('curso_id', 'id_curso');
            $table->renameColumn('turma_id', 'id_turma');
        });
    }
}
