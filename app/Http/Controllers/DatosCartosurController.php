<?php

namespace App\Http\Controllers;

use App\Models\datos_cartosur;
use Illuminate\Http\Request;

class DatosCartosurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cartosur.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cartosur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datoscartosur = request()->all();
        $datosCartosur = request()->except('_token');
        datos_cartosur::insert($datosCartosur);
        return response()->json($datosCartosur);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datos_cartosur  $datos_cartosur
     * @return \Illuminate\Http\Response
     */
    public function show(datos_cartosur $datos_cartosur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datos_cartosur  $datos_cartosur
     * @return \Illuminate\Http\Response
     */
    public function edit(datos_cartosur $datos_cartosur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datos_cartosur  $datos_cartosur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datos_cartosur $datos_cartosur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datos_cartosur  $datos_cartosur
     * @return \Illuminate\Http\Response
     */
    public function destroy(datos_cartosur $datos_cartosur)
    {
        //
    }
}
