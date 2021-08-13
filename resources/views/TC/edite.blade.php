<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Editar tipo de cambio') }}
        </h2>
    </x-slot>
    <x-guest-layout>
        <x-auth-card>
            <form method="POST" action="{{route('tipo_cambio.update', $tipo_cambio->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @include('tc.partials.form2')
            </form>
        </x-auth-card>
    </x-guest-layout>
</x-app-layout>
