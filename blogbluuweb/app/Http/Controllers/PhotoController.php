<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PhotoController extends Controller
{
 

public function welcome(){

	$notas = App\Nota::all();
	 return view('welcome', compact('notas'));
}

public function fotos(){

	 return view('fotos');
}
    //

public function blog(){

	 return view('fotos');
}


public function nosotros($nombre = null){

	$equipo = ['Israel','Jesus','Usuario'];
	return view('nosotros',compact('equipo','nombre'));


}


}
