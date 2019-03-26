@extends('layout.master')
@section('content')
	<div class="flex">
		<div class="w-full">
			<h1 class="text-base lg:text-3xl text-center mt-16">
				<a class="logo" href="{{route('home')}}">MI PRIMER CRUD CON LARAVEL</a>
			</h1>
			<div class="text-center mt-5">
				<a href="" class="text-xs lg:text-base mt-5 subtitulo">
					EDITANDO UN USUARIO
					<img class="ml-2" src="{{asset('svg/astronauta.svg')}}" width="14" alt="astronauta">
				</a>
			</div>
		</div>
	</div>
	<div class="container mt-16 mx-auto max-w-md">
		<form action="{{route('user-details-update', $user)}}" method="POST" class="form__createUsers-grid">
			{{method_field('PUT')}}
			@include('partials.formulario', [
				'btn' => 'Actualizar Usuario'
			]);
		</form>
	</div>
@endsection