<?php

namespace App\Http\Controllers;
use App\Crud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
   private $path ='user';

    public function show (){
    	 //return "view onde vejo tudos registros";
       	// return view('crud'); 
          $vista = Crud::all();
           return view('crud', compact('vista'));
    }

       public function cadastro (){
         //return "onde eu vejo o formulario de cadastro";listo
         return view('formcrud');
    }


    public function add (Request $request){
    	 //return "onde adiciono registros";
        $crud = new Crud;
        $crud->share_name = $request->name;
        $crud->share_price = $request->email;
        $crud->share_qty = $request->payment;

        $crud->save();
       // return redirect('createcrud');
          return redirect('/crud')->with('masage', 'Usuario cadastrado');  

    }
    // aqui yo voy a editar aun no salvo en el banco
    public function editt (Request $request, $id){
        
         $vista = Crud::find($id);
        //ho $vista;
        return view('formcrudedit', compact('vista'));

    }
    //aqui actuallizo para el banco de datos
    public function up (Request $request, $id){
    	 
         $crud = Crud::find($id);
         $crud->share_name = $request->get('name');
         $crud->share_price = $request->get('email');
         $crud->share_qty = $request->get('payment');
         $crud->save();

         return redirect('/crud')->with('masage','Actualizado com exito');

    }

    public function del (Request $request, $id){
    	 $crud = Crud::find($id);
         $crud->delete();
         return redirect('/crud')->with('masage','Usuario elminado com ID'.":".$id);
    }

 
    
}
