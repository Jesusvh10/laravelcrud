@extends('layouts/app')

@section('content')

	

     <h1>Este aqui é o formulário de pessoas pronto</h1>
    <div class="container" >
	<div class="row">
		
	    <form method="POST" action="{{ url('/addcrud') }}">
		{{ csrf_field() }}
		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
		<label>Nome</label>
		<input type="text" name="name">
		<label>Email</label>
		<input type="text" name="email">
		<label>Pagamento</label>
		<input type="text" name="payment">
		
		<button class="btn btn-primary  " >salvar</button>
        </form>
    </div>
    </div>
    

@endsection

