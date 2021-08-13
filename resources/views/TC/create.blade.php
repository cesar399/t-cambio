<x-app-layout>
    <div class="w-full  bg-opacity-50  flex justify-center items-center">
            <div class=" text-center ">
                <h1 class="font-bold text-4xl mb-4">Agregar tipo de cambio</h1>
            </div>
        </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Agregar tipo de cambio') }}
        </h2>
    </x-slot>
    <x-guest-layout>
        <x-auth-card>
            <form method="POST" action="{{route('tipo_cambio.store')}}">
                @include('tc.partials.form')
            </form>
        </x-auth-card>
    </x-guest-layout>
</x-app-layout>
