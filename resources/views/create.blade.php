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
			{{ csrf_field() }}
			<div class="form__createUsers__inputContent">
				<label class="form__createUsers__label" for="">Nombres</label>
				<input name="name" class="form__createUsers__input shadow" type="text" placeholder="Miguel Bonifaz" value="{{old('name')}}">
				@include('partials.errorValidation', ['name' => 'name'])
			</div>
			<div class="form__createUsers__inputContent">
				<label class="form__createUsers__label" for="">Correo</label>
				<input name="email" class="form__createUsers__input shadow" type="text" placeholder="miguelbonifaz126@gmail.com" value="{{old('email')}}">
				@include('partials.errorValidation', ['name' => 'email'])
			</div>
			<div class="form__createUsers__inputContent gc-13">
				<label class="form__createUsers__label" for="">Escoje una profesión</label>
				<select name="profesiones" class="form__createUsers__input shadow">
					@foreach ($profesiones as $profesion)
						<option value="{{$profesion->id}}">{{$profesion->profesion}}</option>
					@endforeach
				</select>
				@include('partials.errorValidation', ['name' => 'profesiones'])
			</div>
			<div class="form__createUsers__inputContent gc-13">
				<label class="form__createUsers__label" for="">Cuentanos... ¿Porque te apasiona esta carrera?</label>
				<textarea class="form__createUsers__input shadow" name="asunto" id="" cols="30" rows="10">{{old('asunto')}}</textarea>
				@include('partials.errorValidation', ['name' => 'asunto'])
			</div>
			<div class="text-right gc-13">
				<button class="form__CreateUsers__submit" type="submit">Crear</button>
			</div>
		</form>
	</div>
@endsection