<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosEspecialidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('estabelecimentos_especialidades', function(Blueprint $table)
        {
            $table->string('estabelecimento_codUnidade')->nullable();
            $table->foreign('estabelecimento_codUnidade')->references('codUnidade')
                ->on('estabelecimentos')->onDelete('cascade');

            $table->integer('especialidade_id')->nullable();
            $table->foreign('especialidade_id')->references('id')
                ->on('especialidades')->onDelete('cascade');
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
