@extends('layout.master')
@section('content')
	<div class="page-not-found">
		<h1 class="text-base lg:text-3xl">Error 404</h1>
		<h2 class="text-base font-light">Pagina no encontrada.</h2>
		<a class="page-not-found__back" href="{{route('home')}}">Regresar</a>
</div>
@endsection