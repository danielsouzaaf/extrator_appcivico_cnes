<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    //
    public function estabelecimentos()
    {
        return $this->belongsToMany('App\Models\Estabelecimento', 'estabelecimentos_especialidades', 'especialidade_id', 'estabelecimento_codUnidade');
    }

    //public $primaryKey = 'codUnidade';
    public $timestamps = false;
    //public $incrementing = false;

    protected $guarded = [];
}
