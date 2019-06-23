@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
	@include('common.success')
	
	<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{$trainer->name}}</h5>
		<p>Los entrenadores Pokémon (Pokémon Trainer en inglés) son personas que se encargan de capturar, criar, entrenar y cuidar de dichas criaturas. Sin embargo, cualquier persona que posea un Pokémon puede considerarse entrenador, por lo tanto, un coordinador Pokémon es también lo primero. El nombre del entrenador original de cada Pokémon siempre se mantiene, aunque este se intercambie, y puede consultarse en su menú de datos, estando representado por las siglas EO (Entrenador Original).</p>
		<a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>

		{!! Form::open(['route' => ['trainers.destroy', $trainer->slug], 'method' => 'DELETE'])!!}
		{!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
		{!! Form::close()!!}
	</div>
@endsection