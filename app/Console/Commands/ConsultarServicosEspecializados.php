<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ConsultarServicosEspecializados extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'consultarcnes:servicosespecializados';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consultar os serviços especializados de todos os estabelecimentos de saúde do Brasil.';


    private function savewithestabelecimento($est, $servicoespecializado)
    {
        $sesp = \App\Models\ServicoEspecializado::firstorCreate($servicoespecializado);
        //$est = Estabelecimento::find($codUnidade);
        $est->servicosespecializados()->save($sesp);

    }

    private function getservicosespecializados($codUnidade)
    {
      return file_get_contents(
      sprintf('http://mobile-aceite.tcu.gov.br:80/mapa-da-saude/rest/servicos/unidade/%s', $codUnidade));
    }

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
    public function handle()
    {
      $estabelecimentos = \App\Models\Estabelecimento::select('codUnidade')->get();

      foreach ($estabelecimentos as $est)
      {
        $servicosespecializados = json_decode($this->getservicosespecializados($est->codUnidade), true);
        foreach ($servicosespecializados as $sesp)
        {
          $this->savewithestabelecimento($est, $sesp);
        }

      }
    }
}
