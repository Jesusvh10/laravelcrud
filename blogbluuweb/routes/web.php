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

Route::get('/', 'PhotoController@welcome');

Route::get('bienvenido', function () {
    return 'Hola gente';
});

/*
Route:: get('fotos/{numero?}',function($numero = 'sin número'){

return 'Estas en la galeria de fotos : '.$numero;

})->where ('numero', '[0-9]+');

Route:: view('galeria','fotos',['numero'=>125]);

*/

Route :: get ('fotos','PhotoController@fotos')->name('foto');



Route :: get ('blog', 'PhotoController@blog')->name('noticias');



Route :: get ('nosotros/{nombre?}','PhotoController@nosotros')->name('nosotro');
