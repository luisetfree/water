<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumo;
use Illuminate\Support\Facades\DB;

class ConsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //Los datos se filtran mediante el id del coagulante, los demas datos se tomaran de acuerdo a la hora y fecha de este parámetro
        $coagulante = Consumo::find($id);
        /*Polimero*/
        $poli = Consumo::where('id_quimico', 7)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();

               foreach ($poli as $polime) {
                   $polime;
               }
               /*Permanganato*/
        $perm= Consumo::where('id_quimico', 1)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();

               foreach ($perm as $perma) {
                   $perma;
               }
               /*Carbon*/
        $carb= Consumo::where('id_quimico', 2)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();

               foreach ($carb as $carbon) {
                   $carbon;
               }

               /*Cal*/
        $ca= Consumo::where('id_quimico', 4)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();

               foreach ($ca as $cal) {
                   $cal;
               }


            $clor= Consumo::where('id_quimico', 8)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();

               foreach ($clor as $cloro) {
                   $cloro;
               }


        return view('editar-dosis',compact('coagulante','polime','perma','carbon','cal','cloro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     * Actualiza los datos de las dosis de los quimicos modificados en la vista Editar-dosis
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Actualizando valores de las dosificaciones
        
        $coagulante=Consumo::find($request->id_coagulante);
        $coagulante->dosis=$request->coagulante;
        $coagulante->save();

        $polimero=Consumo::find($request->id_polimero);
        $polimero->dosis=$request->polimero;
        $polimero->save();

        $permanganato=Consumo::find($request->id_permanganato);
        $permanganato->dosis=$request->permanganato;
        $permanganato->save();

        $cal=Consumo::find($request->id_cal);
        $cal->dosis=$request->cal;
        $cal->save();

        $carbon=Consumo::find($request->id_carbon);
        $carbon->dosis=$request->carbon;
        $carbon->save();

        $cloro=Consumo::find($request->id_cloro);
        $cloro->dosis=$request->cloro;
        $cloro->save();


        $fecha=$request->fecha;
       return redirect('/resumen'.$fecha.'');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
