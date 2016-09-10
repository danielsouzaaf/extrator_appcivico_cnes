<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicoEspecializado extends Model
{
    //
    public function estabelecimentos()
    {
        return $this->belongsToMany('App\Estabelecimento', 'estabelecimentos_servicos_especializados',
            'servico_especializado_id', 'estabelecimento_codUnidade');
    }

    public $timestamps = false;
    protected $guarded = [];
}
