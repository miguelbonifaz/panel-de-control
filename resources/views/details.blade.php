@extends('layout.master')
@section('content')
	<div class="flex">
		<div class="w-full">
			<h1 class="text-base lg:text-3xl text-center mt-16">
				<a class="logo" href="{{route('home')}}">MI PRIMER CRUD CON LARAVEL</a>
			</h1>
			<div class="text-center mt-5">
				<a href="" class="uppercase text-xs lg:text-base mt-5 subtitulo">
					Hola {{$user->name}}
					<img class="ml-2" src="{{asset('svg/astronauta.svg')}}" width="14" alt="astronauta">
				</a>
				<h4 class="profesion">
					{{$user->profesion->profesion}}
				</h4>
				<span class="user__email text-center">{{$user->email}}</span>
			</div>
		</div>
	</div>
	<div class="container mt-16 p-6 mx-auto">
		<h2 class="text-base lg:text-3xl text-center mb-10">
			¿Porque te apasiona esta profesión?
		</h2>
		<p>
			{{$user->asunto}}
		</p>
	</div>
@endsection