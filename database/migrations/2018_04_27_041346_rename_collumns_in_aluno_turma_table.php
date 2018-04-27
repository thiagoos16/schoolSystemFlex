<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCollumnsInAlunoTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aluno_turma', function($table){
            $table->renameColumn('id_aluno', 'aluno_id');
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
        Schema::table('aluno_turma', function($table){
            $table->renameColumn('aluno_id', 'id_aluno');
            $table->renameColumn('turma_id', 'id_turma');
        });
    }
}
