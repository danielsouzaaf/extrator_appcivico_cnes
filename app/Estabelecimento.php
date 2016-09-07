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
    public $primarykey = 'codUnidade';
    public $timestamps = false;
    public $incrementing = false;
}
