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

route::get('listagem', "productController@index")->name('listagem_produto');
route::get('descricao/{id}', "ProductController@show")->name('descricao_prodto');
route::get('novo', 'ProductController@create');
route::get('editar/{id}', 'ProductController@edit')->name('edit_produto');

Route::group(['middleware' => ['autenticacao']], function () {
    route::post('adiciona', 'ProductController@store')->name('novo_porduto');
    route::get('deletar/{id}', 'ProductController@destroy')->name('deletar_produto');
    route::put('update/{id}', 'ProductController@update')->name('update_produto');
});

route::get('json', 'ProductController@ListaJson')->name('consulta_json');

Route::get('/login', 'LoginController@login');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
