<?php

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

Route::get('/', function () {
   return view('welcome');
})->name('inicio');

/*
Route::resource('crud', 'CrudController')->only([
	'create', 'store'
]);
*/
//rotas de visualização
Route::get('crud', 'CrudController@show');
Route::get('createcrud', 'CrudController@create');
Route::get('/editcrud/{id}', 'CrudController@editt');


//rotas de processo
Route::post('addcrud', 'CrudController@add');
Route::put('upcrud/{id}', 'CrudController@up');
Route::delete('/delcrud/{id}', 'CrudController@del');

