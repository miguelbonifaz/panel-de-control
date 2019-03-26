@extends('layout.master')
@section('content')
	<div class="flex">
		<div class="w-full">
			<h1 class="text-base lg:text-3xl text-center mt-16">
				<a class="logo" href="./">MI PRIMER CRUD CON LARAVEL</a>
			</h1>
			<div class="text-center">
				<a href="{{route('crear-usuario')}}" class="text-xs lg:text-base mt-5 button__crearUsuario">
					CREAR USUARIO
					<img class="ml-2" src="{{asset('svg/astronauta.svg')}}" width="14" alt="astronauta">
				</a>
			</div>
		</div>
	</div>
	<div class="container mt-16 mx-auto">
		<table class="table-auto table__users">
			<thead>
				<tr>
					<th class="text-left">NOMBRES</th>
					<th class="text-left">EMAIL</th>
					<th class="text-left">PROFESIÓN</th>
					<th class="text-left">¿PORQUE TE APASIONA ESTA CARRERA?</th>
					<th class="text-left">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td> {{$user->profesion->profesion}} </td>
						<td> {{substr($user->asunto,0,30)}}.....</td>
						<td>
							<div class="table__users__acciones">
								<a href="">
									<img src="{{asset('svg/user-edit.svg')}}" alt="" width="18">
								</a>
								<a href="">
									<img src="{{asset('svg/arrow-circle.svg')}}" alt="" width="16">
								</a>
								<a href="">
									<img src="{{asset('svg/trash.svg')}}" alt="" width="15">
								</a>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection