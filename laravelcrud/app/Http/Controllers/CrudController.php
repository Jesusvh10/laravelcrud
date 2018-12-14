<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function show (){
    	 //return "view onde vejo tudos registros";
       	 return view('crud'); 
    }

    public function add (Request $request){
    	 return "onde adiciono registros";
    }

    public function up (){
    	 return "onde atualizo registros";
    }

    public function del (Request $request, $id){
    	 return "onde apago registros";
    }

    public function create (){
    	 //return "onde eu vejo o formulario de cadastro";
    	 return view('formcrud');
    }

    public function editt (Request $request, $id){
    	// return "onde eu edito o formulario";
    	echo 'o id é ' . $id;
    	return view('formcrud');

    }
}
