<x-app-layout>
  <p class="text-lg text-center font-bold m-5">Listado de tipos de cambio</p>
    <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800 text-center">
      <thead>
        <tr class="text-left border-b-2 border-gray-300 text-center">
          <th class="px-4 py-3">Venta</th>
          <th class="px-4 py-3">compra</th>
          <th class="px-4 py-3">Editar</th>
          <th class="px-4 py-3">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tipo_cambios as $cambio)
        <tr class="bg-gray-100 border-b border-gray-200">
          <td class="px-4 py-3">{{$cambio->tc_venta}}</td>
          <td class="px-4 py-3">{{$cambio->tc_compra}}</td>
          <td><x-button > <a href="{{ route('tipo_cambio.edit', $cambio->id)}}" class="btn btn-primary"> Editar</a></x-button></td>
          <td>
            <form action="{{route('tipo_cambio.destroy', $cambio->id)}}" method="POST" >
              @csrf
              @method("DELETE")
              <x-button
                onclick="return confirm('Eliminar registro?')" class="btn btn-danger">
                {{ __('Eliminar') }}
              </x-button>
            </form>
          </td>
        </tr>
        @endforeach

      </tbody>




    </table>
    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
          <span class="text-xs xs:text-sm text-gray-900">{{ $tipo_cambios->render()}}</span>
    </div>
</x-app-layout>
