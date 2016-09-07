<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UF extends Model
{
    //
    public function estabelecimentos()
    {
      return $this->hasMany('App\Estabelecimento');
    }
    protected $table = 'ufs';
    public $primarykey = 'sigla';
    public $timestamps = false;
    public $incrementing = false;
}
