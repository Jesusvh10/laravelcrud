@extends('layouts/app')

@section('content')

	


     <h1>Este aqui é o formulário de pessoas pronto</h1>
    <div class="container" >
	<div class="row">
		
	    <form method="POST" action="{{ url('/upcrud', $vista->id) }}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
		<label>Nome</label>
		<input type="text" name="name" value= "{{ $vista->share_name }}"/>
		<label>Email</label>
		<input type="text" name="email"  value= "{{ $vista->share_price }}"/ >
		<label>Pagamento</label>
		<input type="text" name="payment"  value= "{{ $vista->share_qty }}"/>
		
		<button class="btn btn-primary  " >salvar</button>
        </form>
    </div>
    </div>
    

@endsection

