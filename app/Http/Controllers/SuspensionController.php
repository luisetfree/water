<?php

namespace App\Http\Controllers;

use App\Models\Suspension;
use Illuminate\Http\Request;

class SuspensionController extends Controller
{
    /**
     * Controla la vista Paros y carga la informacion necesaria sobre los paros de operacion del mes en cuestion
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    
        return view('paros');


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
     *Guarda en la BD los valores de un paro de operacion
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //asignacion de variables y valores procedentes del formulario de la vista PAROS
        $id_estacion= $request->id_estacion;
        $fecha=$request->fecha;
        $hora_inicio=$request->hora_inicio;//hora en que inicia el paro de operacion
        $hora_fin=$request->hora_fin;//hora que termina el paro e inicia operacion
        $causa=$request->causa;
        $grupo_turno=$request->grupo;


        $paro = new Suspension;
        $paro->fecha=$fecha;
        $paro->hora_inicio=$hora_inicio;
        $paro->hora_fin=$hora_fin;
        $paro->causa=$causa;
        $paro->id_estacion= $id_estacion;
        $paro->grupo= $grupo_turno;

        $paro->save();


        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suspension  $suspension
     * @return \Illuminate\Http\Response
     */
    public function show(Suspension $suspension)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suspension  $suspension
     * @return \Illuminate\Http\Response
     */
    public function edit(Suspension $suspension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suspension  $suspension
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suspension $suspension)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suspension  $suspension
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suspension $suspension)
    {
        //
    }
}
