<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Agregar tipo de cambio') }}
        </h2>
    </x-slot>
    <x-guest-layout>
        <x-auth-card>
            <form method="POST" action="{{route('tipo_cambio.store')}}">
                @include('tc.partials.form2')
            </form>
        </x-auth-card>
    </x-guest-layout>
</x-app-layout>
