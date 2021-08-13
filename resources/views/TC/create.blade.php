@extends('template')

@section('title', 'Agregar Tipos de Cambio')

@section('content')

<div class="container">

	<div class="text-center">
		<h1>
			Agregar tipos de cambio
		</h1>
	</div>

	<div class="card-body">
		<form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{route('tipo_cambio.store')}}" enctype="multipart/form-data" >
			@include('tc.partials.form', ['btnText' => 'Guardar'])


		</form>
	</div>


</div>
@endsection