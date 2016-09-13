<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    //
    public function uf()
    {
       return $this->belongsTo('App\UF', 'uf', 'sigla');
    }

    public function especialidades()
    {
        return $this->belongsToMany('App\Especialidade', 'estabelecimentos_especialidades',
            'estabelecimento_codUnidade', 'especialidade_id');
    }

    public function servicosespecializados()
    {
        return $this->belongsToMany('App\Especialidade', 'estabelecimentos_servicos_especializados',
            'estabelecimento_codUnidade', 'servico_especializado_id');
    }

    public function profissionais()
    {
        return $this->belongsToMany('App\Profissional', 'estabelecimentos_profissionais',
            'estabelecimento_codUnidade', 'profissional_id');
    }

    protected $primaryKey = 'codUnidade';
    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];
}
