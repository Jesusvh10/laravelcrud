@extends('layouts/app')

@section('content')

@if (session('masage'))
	    <div class="alert alert-success">
	        {{ session('masage') }}
	    </div>
	@endif

 <div class="conteiner my-4" >
      
      	
        <h1 class="display-4">Registro</h1>
       
	 </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">price</th>
      <th scope="col">qty</th>
     <th>Editar</th> 
     <th>Delete</th>
     <th> <a href="{{ URL::to('/createcrud')}}" class="btn btn-primary float-right ">Cadastrar</a>
        </th>
    </tr>
  </thead>
  <tbody>
    @foreach($vista as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->share_name}}</td>
      <td>{{$item->share_price}}</td>
      <td>{{$item->share_qty}}</td>
      <td><a href="{{ URL::to('/editcrud',$item->id)}}" class="btn btn-primary">Edit</a></td>     		
      <td>
      	 <form action="{{ URL::to('/delcrud',$item->id)}}"method="post">
      	        	  @csrf
                     @method('DELETE')
        	<button class="btn btn-danger" type="submit">Delete</button>
        </form>
	</td>

      	


    </tr>
    @endforeach()   
  </tbody>
</table>

    </div>
@endsection

 


