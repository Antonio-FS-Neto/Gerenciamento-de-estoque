<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('listagem', "productController@index")->name('listagem_produto');
Route::get('descricao/{id}', "ProductController@show")->name('descricao_prodto');
Route::get('novo', 'ProductController@create');
Route::get('editar/{id}', 'ProductController@edit')->name('edit_produto');
Route::get('apagar/{id}', 'ProductController@delete')->name('delete_produto');

Route::group(['middleware' => ['autenticacao']], function () {
    Route::post('adiciona', 'ProductController@store')->name('novo_porduto');
    Route::get('deletar/{id}', 'ProductController@destroy')->name('deletar_produto');
    Route::put('update/{id}', 'ProductController@update')->name('update_produto');
});

Route::get('json', 'ProductController@ListaJson')->name('consulta_json');

Route::get('/login', 'LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
