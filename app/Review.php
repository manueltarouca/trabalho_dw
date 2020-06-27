<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    function user(){
        return $this->hasOne('App\User','id','owner');
    }
}
