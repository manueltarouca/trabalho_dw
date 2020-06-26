<?php

namespace App\Http\Controllers;

use App\Estabelecimento;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('index', ['restaurantes' => Estabelecimento::all()->where('categoria','=',2)]);
    }

    public function estabelecimento(){
        return view('listing');
    }

}
