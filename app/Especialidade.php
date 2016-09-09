<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    //
    public function estabelecimentos()
    {
        return $this->belongsToMany('App\Estabelecimento', 'estabelecimentos_especialidades', 'especialidade_id', 'estabelecimento_codUnidade');
    }

    //public $primaryKey = 'codUnidade';
    public $timestamps = false;
    //public $incrementing = false;

    protected $guarded = [];
}
