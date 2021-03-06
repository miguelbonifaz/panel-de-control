@extends('layout.master')
@section('content')
	<div class="flex">
		<div class="w-full">
			<h1 class="text-base lg:text-3xl text-center mt-16">
				<a class="logo" href="./">MI PRIMER CRUD CON LARAVEL</a>
			</h1>
			<div class="text-center mt-5">
				<a href="" class="text-xs lg:text-base mt-5 subtitulo">
					CREACIÓN DE USUARIO
					<img class="ml-2" src="{{asset('svg/astronauta.svg')}}" width="14" alt="astronauta">
				</a>
			</div>
		</div>
	</div>
	<div class="container mt-16 mx-auto max-w-md">
		<form action="{{route('crear-usuario-store')}}" method="POST" class="form__createUsers-grid">
			@include('partials.formulario', [
				'user' => false,
				'btn' => 'Crear Usuario'
			]);
		</form>
	</div>
@endsection