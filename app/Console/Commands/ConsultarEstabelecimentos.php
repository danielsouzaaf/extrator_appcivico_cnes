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
      sprintf('http://mobile-aceite.tcu.gov.br:80/mapa-da-saude/rest/estabelecimentos?uf=%s&quantidade=1000000', $estado));

    }

    public function handle()
    {
      $ufs = UF::all();
      foreach ($ufs as $uf)
      {
        echo $uf;
      }

      //
    }
}
