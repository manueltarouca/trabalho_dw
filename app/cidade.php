<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cidade extends Model
{
    //
    public function estabelecimentos()
    {
        return $this->hasMany('App\Estabelecimento','cidade');
    }
}
