<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Estabelecimento;
use App\Especialidade;

class ConsultarEspecialidades extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'consultarcnes:especialidades';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando que consulta as especialidades de todos os estabelecimentos do Brasil';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    private function savewithestabelecimento($est, $especialidade)
    {
        $esp = Especialidade::firstorCreate($especialidade);
        //$est = Estabelecimento::find($codUnidade);
        $est->especialidades()->save($esp);

    }

    private function getespecialidade($codUnidade)
    {
      return file_get_contents(
      sprintf('http://mobile-aceite.tcu.gov.br:80/mapa-da-saude/rest/especialidades/unidade/%s', $codUnidade));
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $estabelecimentos = Estabelecimento::all();

        foreach ($estabelecimentos as $est)
        {
          $especialidades = json_decode($this->getespecialidade($est->codUnidade), true);
          foreach ($especialidades as $esp)
          {
            print_r($esp);
            $this->savewithestabelecimento($est, $esp);
          }
        }
    }
}
