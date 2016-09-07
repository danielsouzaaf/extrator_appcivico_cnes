<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    //
    public function estabelecimentos()
    {
        return $this->belongsToMany('App\Estabelecimento');
    }

    public $primarykey = 'codUnidade';
    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];
}
