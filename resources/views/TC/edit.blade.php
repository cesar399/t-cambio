@extends('template')

@section('title', 'Agregar Tipos de Cambio')

@section('content')

<div class="container text-center">

	<div class="text-center">
		<h1>
			Editar tipos de cambio
		</h1>
	</div>

	<div class="card-body">
		<form class="" action="{{route('tipo_cambio.update', $tipo_cambio->id)}}" method="POST"  enctype="multipart/form-data" >
			@method('PUT')
			@include('tc.partials.form', ['btnText' => 'Guardar'])
		</form>
	</div>
	<div class="card" style="width: 18rem;">
	  <img src="..." class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">Card title</h5>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <a href="#" class="btn btn-primary">Go somewhere</a>
	  </div>
	</div>
</div>
@endsection