<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumo;
use App\Models\Produccion;
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
        $id_bt=1;
        $id_eb1=2;
        $id_eb2=3;
        $id_eb3=4;
        $id_tt=5;
        $id_bvn=6;
        $id_bvv=7;
        $id_pavas=8;


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

               /*Bocatoma*/

            $bocatoma=Produccion::where('id_estacion', $id_bt)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();
               foreach ($bocatoma as $bt) {
                   $bt;
               }

            /*EB1*/

            $estacion_1=Produccion::where('id_estacion', $id_eb1)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();
               foreach ($estacion_1 as $eb1) {
                   $eb1;
               }

               /*EB2*/

            $estacion_2=Produccion::where('id_estacion', $id_eb2)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();
               foreach ($estacion_2 as $eb2) {
                   $eb2;
               }

                /*EB3*/

            $estacion_3=Produccion::where('id_estacion', $id_eb3)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();
               foreach ($estacion_3 as $eb3) {
                   $eb3;
               }

                /*Tanques Terminales*/

            $terminales=Produccion::where('id_estacion', $id_tt)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();
               foreach ($terminales as $tt) {
                   $tt;
               }

                /*Bella vista Nuevo*/

            $bella_n=Produccion::where('id_estacion', $id_bvn)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();
               foreach ($bella_n as $bvn) {
                   $bvn;
               }

                /*Bella vista Viejo*/

            $bella_v=Produccion::where('id_estacion', $id_bvv)
               ->where('fecha', $coagulante->fecha)
               ->where('hora', $coagulante->hora)
               ->get();
               foreach ($bella_v as $bvv) {
                   $bvv;
               }

               /*Tanque Las Pavas*/

            $pavas=Produccion::where('id_estacion', $id_pavas)
               ->where('fecha', $coagulante->fecha)
               ->get();
               foreach ($pavas as $pv) {
                   $pv;
               }





        return view('editar-dosis',compact('coagulante','polime','perma','carbon','cal','cloro','bt','eb1','eb2','eb3','tt','bvn','bvv','pv'));
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

        /*Actualizacion de Bocatoma*/

        $bt = Produccion::find($request->idbt);
        $bt->nivel_camara=$request->nivel_c_bt;
        $bt->nivel_rio=$request->nivel_rio;
        $bt->save();

        /*Actualizacion de EB1*/

        $eb1 = Produccion::find($request->ideb1);
        $eb1->nivel_camara=$request->nivel1;
        $eb1->cloro_residual=$request->cloro1;
        $eb1->save();

        /*Actualizacion de EB2*/

        $eb2 = Produccion::find($request->ideb2);
        $eb2->nivel_camara=$request->nivel2;
        $eb2->cloro_residual=$request->cloro2;
        $eb2->save();

        /*Actualizacion de EB3*/

        $eb3 = Produccion::find($request->ideb3);
        $eb3->nivel_camara=$request->nivel3;
        $eb3->cloro_residual=$request->cloro3;
        $eb3->save();

        /*Actualizacion de terminales*/

        $tt = Produccion::find($request->idtt);
        $tt->nivel_camara=$request->nivel4;
        $tt->cloro_residual=$request->cloro4;
        $tt->save();

        /*Actualizacion de BvN*/

        $bvn = Produccion::find($request->idbvn);
        $bvn->nivel_camara=$request->nivel5;
        $bvn->cloro_residual=$request->cloro5;
        $bvn->save();

         /*Actualizacion de Bv Viejo*/

        $bvv = Produccion::find($request->idbvv);
        $bvv->nivel_camara=$request->nivel6;
        $bvv->save();


         /*Actualizacion aporte diario a Tanque Las Pavas*/

        $pv = Produccion::find($request->idpv);
        $pv->caudal=$request->aporte_pavas;
        $pv->save();


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
