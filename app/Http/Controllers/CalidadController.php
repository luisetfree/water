<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calidad;
use Illuminate\Support\Facades\DB;

class CalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('calidad');
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
     * Guarda las calidades de agua y devuelve nuevamente a la vista calidad para mostrar
     * en la tabla los datos agregados
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //guardando los datos del agua cruda
        $cruda = new Calidad;
            //asignando los datos del formulario a los campos de la tabla calidads
        $cruda->turbidez = $request->turb_c;
        
        $cruda->hora = $request->hora;
        $cruda->ph = $request->ph_c;
        $cruda->temperatura = $request->temp_c;
        $cruda->color = $request->color_c;
        
        $cruda->id_agua = $request->id_agua_c;
 
        $cruda->save();

    /*Guardando agua Clarificada*/
         $clarificada = new Calidad;
            
        $clarificada->turbidez = $request->turb_cl;
        
        $clarificada->hora = $request->hora;
        $clarificada->ph = $request->ph_cl;
        $clarificada->temperatura = $request->temp_cl;
        $clarificada->color = $request->color_cl;
        
        $clarificada->id_agua = $request->id_agua_cl;
 
        $clarificada->save();

        /*Guardando agua Filtrada*/
         $filtrada = new Calidad;
            
        $filtrada->turbidez = $request->turb_f;
        
        $filtrada->hora = $request->hora;
        $filtrada->ph = $request->ph_f;
        $filtrada->temperatura = $request->temp_f;
        $filtrada->color = $request->color_f;
        
        $filtrada->id_agua = $request->id_agua_f;
 
        $filtrada->save();

        /*Guardando agua Tratada*/
         $tratada = new Calidad;
            
        $tratada->turbidez = $request->turb_t;
        
        $tratada->hora = $request->hora;
        $tratada->ph = $request->ph_t;
        $tratada->temperatura = $request->temp_t;
        $tratada->color = $request->color_t;
        
        $tratada->id_agua = $request->id_agua_t;
 
        $tratada->save();









   return redirect('/calidad')->with('status', 'Guardado');
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
        //
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
        //
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
