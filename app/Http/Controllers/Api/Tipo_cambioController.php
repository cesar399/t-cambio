<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\TcambioRequest;
use App\Http\Resources\Tipo_cambioResource;
use App\Models\Tipo_cambio;



class Tipo_cambioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       // $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }
    public function index()
    {
         return Tipo_cambioResource::collection(Tipo_cambio::latest()->paginate());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validated();

        $tcambio = new Tipo_cambio();
        $tcambio->tc_venta = $request->input('tc_venta');
        $tcambio->tc_compra = $request->input('tc_compra');

        $respuesta = $tcambio->save();

        if($respuesta){
            return response()->json(['message' => 'Tipo de cambio creado'], 201);
        }
            return response()->json(['message' => 'Error en crear Tipo de cambio'], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_cambio $tipo_cambio)
    {
        return new Tipo_cambioResource($tipo_cambio);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_cambio $tipo_cambio)
    {
        if (!empty($request->input('tc_venta'))) {
            $tipo_cambio->tc_venta = $request->input('tc_venta');
        }
        if (!empty($request->input('tc_compra'))) {
            $tipo_cambio->tc_compra = $request->input('tc_compra');
        }

        $respuesta = $tipo_cambio->save();

        if($respuesta){
            return response()->json(['message' => 'Tipo de cambio actualizado'], 201);
        }

        return response()->json(['message' => 'No se actualizó el Tipo de cambio'], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_cambio $tipo_cambio)
    {
        $respuesta = $tipo_cambio->delete();

        if ($respuesta) {
            return response()->json(['message' => 'Tipo de cambio eliminado'], 201);
        }
        return response()->json(['message' => 'No se eliminó el Tipo de cambio'], 500);
    }
}
