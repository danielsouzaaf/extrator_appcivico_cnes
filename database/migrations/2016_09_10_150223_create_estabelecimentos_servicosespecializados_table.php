<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosServicosespecializadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('estabelecimentos_servicos_especializados', function(Blueprint $table)
        {
            $table->string('estabelecimento_codUnidade')->nullable();
            $table->foreign('estabelecimento_codUnidade')->references('codUnidade')
                ->on('estabelecimentos')->onDelete('cascade');

            $table->integer('servico_especializado_id')->nullable();
            $table->foreign('servico_especializado_id')->references('id')
                ->on('servicos_especializados')->onDelete('cascade');
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
