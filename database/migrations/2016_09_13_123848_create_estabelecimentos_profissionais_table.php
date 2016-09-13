<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosProfissionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimentos_profissionais', function(Blueprint $table)
        {
            $table->string('estabelecimento_codUnidade')->nullable();
            $table->foreign('estabelecimento_codUnidade')->references('codUnidade')
                ->on('estabelecimentos')->onDelete('cascade');

            $table->integer('profissional_id')->nullable();
            $table->foreign('profissional_id')->references('id')
                ->on('profissionais')->onDelete('cascade');

            $table->integer('quantidade')->nullable();
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
