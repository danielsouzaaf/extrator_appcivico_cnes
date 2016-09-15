<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UF extends Model
{
    //
    public function estabelecimentos()
    {
      return $this->hasMany('App\Estabelecimento');
    }
    protected $table = 'ufs';
    protected $primaryKey = 'sigla';
    public $timestamps = false;
    public $incrementing = false;
}
