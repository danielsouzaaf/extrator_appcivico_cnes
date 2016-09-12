<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosespecializadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('servicos_especializados', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descricaoClassificacaoServico');
            $table->text('descricao');
            $table->unique(array('descricaoClassificacaoServico', 'descricao'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
