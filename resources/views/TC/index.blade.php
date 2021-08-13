@extends('template')

@section('content')

<div class="container text-center">
	<div class="page-header">
		<h1>Tipos de cambio</h1>
	</div>
	<div class="row">
		<div class="">
			<div class="page">
				<div class="table-responsive">
					<table class="table table-bordered table-sm shadow table-hover">
						<thead>
							<tr>
								<th>Venta</th>
								<th>Compra</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tipo_cambios as $cambio)
							<tr>
								<td>{{$cambio->tc_venta}}</td>
								<td>{{$cambio->tc_compra}}</td>
								<td> <a href="{{ route('tipo_cambio.edit', $cambio->id)}}" class="btn btn-primary"> Editar</a></td>

								<td>
									<form action="{{route('tipo_cambio.destroy', $cambio->id)}}" method="POST" >
										@csrf
										@method("DELETE")
										<button onclick="return confirm('Eliminar registro?')" class="btn btn-danger">
												 <i class="fa fa-trash-o">delete</i>
										</button>
									</form>
								</td>

									{{-- <td><a href="{{ route('tipo_cambio.destroy', $cambio->id)}}" class="btn btn-primary"> Elimiar</a></td> --}}

									{{-- <td> <form>

									</form>
												{!! Form::open(['route' => ['tipo_cambio.destroy', $cambio->id], 'method' => 'DELETE'])!!}
													<button onclick="return confirm('Eliminar registro?')" class="btn btn-danger">
													 <i class="fa fa-trash-o"></i>
													 </button>
												{!! Form::close()!!}
											</td> --}}



							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection