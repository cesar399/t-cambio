<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_cambio;
use App\Http\Requests\TcambioRequest;

class Tipo_cambioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
      //  $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        $tipo_cambio = tipo_cambio::orderBy('created_at', 'DESC')->paginate();
        return view('tc.inde', [
            'tipo_cambios' => $tipo_cambio,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tc.created', [
            'tipo_cambio' => new Tipo_cambio
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $request->validated();
        $tcambio =Tipo_cambio::create($request->all());
        return redirect()->route('tipo_cambio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_cambio = Tipo_cambio::find($id);

        return view('tc.edite', compact('tipo_cambio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo_cambio = Tipo_cambio::find($id);
        $tipo_cambio->update($request->all());
         return redirect()->route('tipo_cambio.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uno = Tipo_cambio::find($id)->delete();
        // $uno->delete();
        return redirect()->route('tipo_cambio.index');

    }
}
