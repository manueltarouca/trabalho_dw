<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    //
    public function categoria_nome()
    {
        return $this->hasOne('App\Categoria','id','categoria');
    }

    public function cidade_nome()
    {
        return $this->hasOne('App\Cidade','id','cidade');
    }

    public function user()
    {
        return $this->belongsTo('App\User','owner');
    }

}
