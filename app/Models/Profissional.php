<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{

    public function estabelecimentos()
    {
        return $this->belongsToMany('App\Models\Estabelecimento', 'estabelecimentos_profissionais',
            'profissional_id', 'estabelecimento_codUnidade');
    }
    protected $table = 'profissionais';
    public $timestamps = false;
    protected $guarded = [];
}
