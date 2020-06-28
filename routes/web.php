<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@index')->name('index');

Route::get('/estabelecimento/{id}', 'IndexController@estabelecimento')->name('estabelecimento');
Route::post('/estabelecimento/{id}', 'EstabelecimentoController@create_review')->name('create-review');
Route::post('/results', 'EstabelecimentoController@results')->name('results');
Route::get('/reviews/{id}', 'IndexController@reviews')->name('reviews');
Route::get('/contacto', 'IndexController@contacto')->name('contacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/restaurantes', 'IndexController@teste');
