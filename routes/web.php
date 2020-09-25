<?php

use App\Http\Controllers\ProductController;
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


route::get('listagem', "productController@index")->name('listagem_produto');
route::get('descricao/{id}', "ProductController@show")->name('descricao_prodto');
route::get('novo', 'ProductController@create');
route::post('adiciona', 'ProductController@store')->name('novo_porduto');
route::get('deletar/{id}', 'ProductController@destroy')->name('deletar_produto');
route::get('editar/{id}', 'ProductController@edit')->name('edit_produto');


// Route::get('/', function () {
//     return view('welcome');
// });
