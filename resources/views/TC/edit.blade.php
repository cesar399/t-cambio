<x-app-layout>
    <div class="shadow-lg m-8">
        <div class="w-full  bg-opacity-50  flex justify-center items-center">
            <div class=" text-center ">
                <h1 class="font-bold text-4xl mb-4">Editar tipo de cambio</h1>
            </div>
        </div>
        <x-auth-card>
            <form method="POST" action="{{route('tipo_cambio.update', $tipo_cambio->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @include('TC.partials.form')
            </form>
        </x-auth-card>
    </div>
</x-app-layout>
