@csrf
<div class="form-group">
	<label>Venta</label>
	<input type="text" name="tc_venta" id="tc_venta" value="{{old('tc_venta', $tipo_cambio->tc_venta)}}">
</div>
<div class="form-group">
	<label>Compra</label>
	<input type="text" name="tc_compra" id="tc_compra" value="{{old('tc_compra', $tipo_cambio->tc_compra)}}">
</div>

<button class="btn btn-primary btn-lg btn.block">{{$btnText}} </button>
<a class="btn btn-link btn-lg btn-block" href="{{route('tipo_cambio.index')}} "> volver</a>