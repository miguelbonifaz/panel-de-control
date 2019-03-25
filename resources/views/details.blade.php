@extends('layout.master')
@section('content')
	<div class="flex">
		<div class="w-full">
			<h1 class="text-base lg:text-3xl text-center mt-16">MI PRIMER CRUD CON LARAVEL</h1>
			<div class="text-center mt-5">
				<a href="" class="uppercase text-xs lg:text-base mt-5 subtitulo">
					Hola usuario
					<img class="ml-2" src="{{asset('svg/astronauta.svg')}}" width="14" alt="astronauta">
				</a>
				<h4 class="profesion">Frontend Developer</h4>
				<span class="user__email text-center">miguelbonifaz@gmail.com</span>
			</div>
		</div>
	</div>
	<div class="container mt-16 p-6 mx-auto">
		<h2 class="text-base lg:text-3xl text-center mb-10">
			¿Porque te apasiona esta profesión?
		</h2>
		<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur velit dicta commodi, quod officia, veritatis architecto soluta voluptatum, eveniet totam deleniti tempora in qui tenetur fuga aliquam maiores ad corporis.</p>
	</div>
@endsection