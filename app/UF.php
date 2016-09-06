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
}
