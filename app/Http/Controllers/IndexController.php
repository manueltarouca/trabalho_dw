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

    public function estabelecimento($id){
        $establecimento = Estabelecimento::all()->where('id','=',$id)->first();
        return view('listing',['establecimento' => $establecimento]);
    }

    public function reviews($id){
        return dd(Estabelecimento::all()->where('id','=',$id)->first()->reviews);
    }

    public function contacto(){
        return view('contact');
    }

}
