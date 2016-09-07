<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->string('codCnes');
            $table->string('codUnidade');
            $table->string('codIbge');
            $table->string('nomeFantasia')->nullable();
            $table->string('natureza')->nullable();
            $table->string('tipoUnidade')->nullable();
            $table->string('esferaAdministrativa')->nullable();
            $table->string('vinculoSus')->nullable();
            $table->string('retencao')->nullable();
            $table->string('fluxoClientela')->nullable();
            $table->string('origemGeografica')->nullable();
            $table->boolean('temAtendimentoUrgencia')->nullable();
            $table->boolean('temAtendimentoAmbulatorial')->nullable();
            $table->boolean('temCentroCirurgico')->nullable();
            $table->boolean('temObstetra')->nullable();
            $table->boolean('temNeoNatal')->nullable();
            $table->boolean('temDialise')->nullable();
            $table->text('descricaoCompleta')->nullable();
            $table->string('tipoUnidadeCnes')->nullable();
            $table->string('categoriaUnidade')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('cep')->nullable();
            $table->string('telefone')->nullable();
            $table->string('turnoAtendimento')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();

            //criação de chaves primárias e chaves estrangeiras
            $table->primary('codUnidade');
            $table->foreign('uf')->references('sigla')->on('ufs');
        });
        //
        // "codCnes": 5089824,
        // "codUnidade": "4205405089824",
        // "codIbge": 420540,
        // "nomeFantasia": "COMPLEXO REGULADOR REGIONAL LESTE",
        // "natureza": "Administração Direta da Saúde",
        // "tipoUnidade": "CENTRAL DE REGULAÇÃO",
        // "esferaAdministrativa": "Municipal",
        // "vinculoSus": "Sim",
        // "retencao": "Unidade Pública",
        // "fluxoClientela": "Atendimento de demanda referenciada",
        // "origemGeografica": "CNES_GEO",
        // "temAtendimentoUrgencia": "Não",
        // "temAtendimentoAmbulatorial": "Não",
        // "temCentroCirurgico": "Não",
        // "temObstetra": "Não",
        // "temNeoNatal": "Não",
        // "temDialise": "Sim",
        // "descricaoCompleta": "COMPLEXO REGULADOR REGIONAL LESTE  ADMINISTRACAO DIRETA DA SAUDE (MS,SES e SMS)     MEDICO CLINICO  ",
        // "tipoUnidadeCnes": "CENTRAL DE REGULACAO DO ACESSO",
        // "categoriaUnidade": "UNIDADE ADMINISTRATIVA",
        // "logradouro": "RUA JOSE HENRIQUE VERAS",
        // "numero": "203",
        // "bairro": "TRINDADE",
        // "cidade": "FLORIANOPOLIS",
        // "uf": "SC",
        // "cep": "88062030",
        // "telefone": "(48) 32349557",
        // "turnoAtendimento": "Atendimento nos turnos da manhã e à tarde.",
        // "lat": -27.58864,
        // "long": -48.51824
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estabelecimentos');
    }
}
