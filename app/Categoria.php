<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    public function estabelecimentos()
    {
        return $this->belongsTo('App\Estabelecimento');
    }
}
