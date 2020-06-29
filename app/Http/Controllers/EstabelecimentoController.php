<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\cidade;
use App\Estabelecimento;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstabelecimentoController extends Controller
{
    //
    public function create_review(Request $request, $id)
    {
        $review = new Review;
        $review->titulo = $request->input('titulo');
        $review->descricao = $request->input('descricao');
        $review->classificacao = $request->input('classificacao');
        $review->establecimento = $id;
        $review->owner = Auth::id();
        $review->save();
        return redirect()->route('estabelecimento', $id);
    }

    public function results(Request $request)
    {
        $categoria = (int)$request->input('categoria');
        $nome = $request->input('nome');
        if ($categoria == 0) {
            return view('results', ["establecimentos" => Estabelecimento::query()->where("nome", "like", "%{$nome}%")->get()]);
        } else {
            return view('results', ["establecimentos" => Estabelecimento::query()->where("nome", "like", "%{$nome}%")->where('categoria', '=', $categoria)->get()]);
        }
    }

    public function explore(){
        return view('explore',['hoteis' => Estabelecimento::query()->where('categoria','=',1)->get(),
            'restaurantes' => Estabelecimento::query()->where('categoria','=',2)->get(),
            'lojas' => Estabelecimento::query()->where('categoria','=',3)->get(),
            'spas' => Estabelecimento::query()->where('categoria','=',4)->get(),
            'cinemas' => Estabelecimento::query()->where('categoria','=',5)->get()
            ]);
    }

    public function submit(){
        return view('submit', ['cidades'=>cidade::all(),'categorias'=>Categoria::all()]);
    }

    public function submit_save(Request $request){

    }
}
