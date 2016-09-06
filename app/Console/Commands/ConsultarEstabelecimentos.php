<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Estabelecimento;
use App\UF;
class ConsultarEstabelecimentos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'consultarcnes:estabelecimentos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consultar todos os estabelecimentos de saúde do Brasil';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    private function getestabelecimentos($estado)
    {
      return file_get_contents(
      sprintf('http://mobile-aceite.tcu.gov.br:80/mapa-da-saude/rest/estabelecimentos?uf=%s&quantidade=1000000', $estado->sigla));

    }

    private function saveestabelecimento($estabelecimento)
    {
      $est = new Estabelecimento;
      $est->codCnes = $estabelecimento['codCnes'];
      $est->codUnidade = $estabelecimento['codUnidade'];
      $est->codIbge = $estabelecimento['codIbge'];
      $est->nomeFantasia = $estabelecimento['nomeFantasia'];
      $est->natureza = $estabelecimento['natureza'];
      $est->tipoUnidade = $estabelecimento['tipoUnidade'];
      $est->esferaAdministrativa = $estabelecimento['esferaAdministrativa'];
      $est->vinculoSus = $estabelecimento['vinculoSus'];
      $est->retencao = $estabelecimento['retencao'];
      $est->fluxoClientela = $estabelecimento['fluxoClientela'];
      $est->origemGeografica = $estabelecimento['origemGeografica'];
      $est->temAtendimentoUrgencia = $estabelecimento['temAtendimentoUrgencia'];
      $est->temAtendimentoAmbulatorial = $estabelecimento['temAtendimentoAmbulatorial'];
      $est->temCentroCirurgico = $estabelecimento['temCentroCirurgico'];
      $est->temObstetra = $estabelecimento['temObstetra'];
      $est->temNeoNatal = $estabelecimento['temNeoNatal'];
      $est->temDialise = $estabelecimento['temDialise'];
      $est->descricaoCompleta = $estabelecimento['descricaoCompleta'];
      $est->tipoUnidadeCnes = $estabelecimento['tipoUnidadeCnes'];
      $est->categoriaUnidade = $estabelecimento['categoriaUnidade'];
      $est->logradouro = $estabelecimento['logradouro'];
      $est->numero = $estabelecimento['numero'];
      $est->bairro = $estabelecimento['bairro'];
      $est->cidade = $estabelecimento['cidade'];
      $est->uf = $estabelecimento['uf'];
      $est->cep = $estabelecimento['cep'];
      $est->telefone = $estabelecimento['telefone'];
      $est->turnoAtendimento = $estabelecimento['turnoAtendimento'];
      $est->lat = $estabelecimento['lat'];
      $est->long = $estabelecimento['long'];
      $est->save();
    }

    public function handle()
    {
      $ufs = UF::all();
      foreach ($ufs as $uf)
      {
        echo $this->getestabelecimentos($uf);die;
      }

      //
    }
}
