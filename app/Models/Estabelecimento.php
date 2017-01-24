<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    //
    public function uf()
    {
       return $this->belongsTo('App\Models\UF', 'uf', 'sigla');
    }

    public function especialidades()
    {
        return $this->belongsToMany('App\Models\Especialidade', 'estabelecimentos_especialidades',
            'estabelecimento_codUnidade', 'especialidade_id');
    }

    public function servicosespecializados()
    {
        return $this->belongsToMany('App\Models\Especialidade', 'estabelecimentos_servicos_especializados',
            'estabelecimento_codUnidade', 'servico_especializado_id');
    }

    public function profissionais()
    {
        return $this->belongsToMany('App\Models\Profissional', 'estabelecimentos_profissionais',
            'estabelecimento_codUnidade', 'profissional_id');
    }

    protected $primaryKey = 'codUnidade';
    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];
}
