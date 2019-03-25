@extends('layout.master')
@section('content')
	<div class="flex">
		<div class="w-full">
			<h1 class="text-base lg:text-3xl text-center mt-16">MI PRIMER CRUD CON LARAVEL</h1>
			<div class="text-center mt-5">
				<a href="" class="text-xs lg:text-base mt-5 subtitulo">
					CREACIÓN DE USUARIO
					<img class="ml-2" src="{{asset('svg/astronauta.svg')}}" width="14" alt="astronauta">
				</a>
			</div>
		</div>
	</div>
	<div class="container mt-16 mx-auto max-w-md">
		<form action="" class="form__createUsers-grid">
			<div class="form__createUsers__inputContent">
				<label class="form__createUsers__label" for="">Nombres</label>
				<input class="form__createUsers__input shadow" type="text" placeholder="Miguel Bonifaz">
			</div>
			<div class="form__createUsers__inputContent">
				<label class="form__createUsers__label" for="">Correo</label>
				<input class="form__createUsers__input shadow" type="text" placeholder="miguelbonifaz126@gmail.com">
			</div>
			<div class="form__createUsers__inputContent gc-13">
				<label class="form__createUsers__label" for="">Escoje una profesión</label>
				<select class="form__createUsers__input shadow" name="" id="">
					<option value="">Frontend Developer</option>
				</select>
			</div>
			<div class="form__createUsers__inputContent gc-13">
				<label class="form__createUsers__label" for="">Cuentanos... ¿Porque te apasiona esta carrera?</label>
				<textarea class="form__createUsers__input shadow" name="" id="" cols="30" rows="10"></textarea>
			</div>
			<div class="text-right gc-13">
				<button class="form__CreateUsers__submit" type="submit">Crear</button>
			</div>
		</form>
	</div>
@endsection