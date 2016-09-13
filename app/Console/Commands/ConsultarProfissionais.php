<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Estabelecimento;
use App\Profissional;

class ConsultarProfissionais extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'consultarcnes:profissionais';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consultar os tipos de profissionais presentes estabelecimentos do Brasil.';

    private function savewithestabelecimento($est, $profissional)
    {
        $prof = Profissional::firstorCreate([
            'descricaoAtividadeProfissional' => $profissional['descricaoAtividadeProfissional']]);
        //$est = Estabelecimento::find($codUnidade);
        $est->profissionais()->attach($prof, ['quantidade' => $profissional['quantidadeProfissionais']]);

    }

    private function getprofissionais($codUnidade)
    {
        return file_get_contents(
            sprintf('http://mobile-aceite.tcu.gov.br:80/mapa-da-saude/rest/profissionais/unidade/%s', $codUnidade));
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
        $estabelecimentos = Estabelecimento::select('codUnidade')->get();

        foreach ($estabelecimentos as $est)
        {
            $profissionais = json_decode($this->getprofissionais($est->codUnidade), true);
            foreach ($profissionais as $prof)
            {
                print_r($prof);
                $this->savewithestabelecimento($est, $prof);
            }

        }
    }
}
