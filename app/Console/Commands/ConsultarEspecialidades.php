<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Estabelecimento;

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

    private function savewithestabelecimento($codUnidade)
    {

    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
