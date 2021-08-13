<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 text-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
										<x-button class="ml-3 btn btn-danger"
											onclick="return confirm('Eliminar registro?')" class="btn btn-danger">
											{{ __('Eliminar') }}
										</x-button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<div class="flex flex-around texte-center">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-black-700 sm:rounded-lg">
        <table class="min-w-full divide-y divide-black-200">
          <thead class="bg-black-500">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black-500 uppercase tracking-wider">
                Role
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-black-200">
          	@foreach($tipo_cambios as $cambio)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-black-900">
                      {{$cambio->tc_venta}}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-black-900">{{$cambio->tc_venta}}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-black-500">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
            </tr>

            <!-- More people... -->
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>