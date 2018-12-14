@extends('plantilla')

@section('seccion')

<h1>this is my site welcome people</h1>

@foreach($equipo as $item)

<a href="{{ route('nosotro', $item ) }}" class=" h4 text-danger">{{$item}}</a><br>


@endforeach

@if(!empty($nombre))


 @switch($nombre)

        @case($nombre=='Israel')

		<h2>El nombre es {{$nombre}}:</h2>

		<p>{{$nombre}}	
		Fala ai 
		</p>

		@break


		@case($nombre=='Jesus')

		<h2>El nombre es {{$nombre}}:</h2>

		<p>{{$nombre}}	
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>

		@break

		@case($nombre=='Usuario')

		<h2>El nombre es {{$nombre}}:</h2>

		<p>{{$nombre}}	
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>

		@break


@endswitch

@endif



@endsection