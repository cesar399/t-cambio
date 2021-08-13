@csrf
    <!-- Venta -->
<div>
    <x-label for="tc_venta" :value="__('Venta')" />
    <x-input id="tc_venta" class="block mt-1 w-full" type="text" name="tc_venta" :value="old('tc_venta',  $tipo_cambio->tc_venta)" required autofocus />
</div>
<!-- Compra -->
<div class="mt-4">
    <x-label for="tc_compra" :value="__('Compra')" />

    <x-input id="tc_compra" class="block mt-1 w-full"
        type="text"
        name="tc_compra" :value="old('tc_compra',  $tipo_cambio->tc_compra)" required />
</div>
<div class="flex items-center justify-end mt-4">

    <x-button class="ml-3" >
        <a href="{{route('tipo_cambio.index')}}">cancelar</a>
    </x-button>
    <x-button class="ml-3">

        {{ __('Guardar') }}
    </x-button>
</div>

