<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Carga;

class CargaController extends Controller
{
    /**
     * Se encarga de desplegar la informacion necesaria para la vista QUIMICOS
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $quimicos = $this->show();

        $fecha = date("Y-m-d");

        $cargas_mes= $this->cargas($fecha);

        return view('quimicos',compact('quimicos','cargas_mes'));
    }


    /*Extrae la información de las cargas realizadas en un mes determinado para ser mostradas*/
    public function cargas($date){


$fecha=$date;



//tomamos la fecha que se pasa por parametro y extraemos el mes
$mes_entero= explode("-", $fecha);



//Extrayendo el mes de una determinada fecha, se pasa a entero para que pueda funcionar bien la extracción
$mes = $mes_entero[1];//asignamos el mes extraido anteriormente a la variable mes, el 1 significa la posicion donde se encuentra el mes que deseamos extraer
$anio= date("Y", strtotime($fecha));//capturando el año de la fecha dada

//Representa un arreglo para las fechas
$array=array();
//For que permite generar un arreglo y llenarlo con los dias del mes, tomando como referencia el mes según la fecha que se pasa por parametro
for ($i=0; $i < 32; $i++) { 
    $array[$i]=$anio.'-'.$mes.'-'.$i;//llenando el arreglo con las fechas
}

//arreglo para almacenar las cargas del mes
$carg = array();

//for que llena el arreglo para almacenar las cargas del mes
for ($i=0; $i < 32; $i++) { 
            //$array[$i]=$anio.'-'.$mes.'-'.$i;
                $carg=DB::table('cargas')
                ->join('quimicos', 'cargas.id_quimico', '=', 'quimicos.id')
                //->where('fecha','=', $anio.'-'.$mes.'-'.$i)
                ->where('fecha','=', $fecha)
                ->get();
}                    
         
 

        return $carg;
        

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
     * Guarda en la BD la carga de quimico realizada desde la vista QUIMICOS
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

          /*Recibe y guarda los datos de la carga segun el quimico deseado*/
        $carga=new Carga;
        $carga->cantidad = $request->cantidad;
        $carga->fecha = $request->fecha;
        $carga->hora = $request->hora;
        $carga->id_quimico = $request->idquimico;
        $carga->grupo = $request->grupo;
     

             $carga->save();


             return $this->index();
    }

    /**
     * Extrae los quimicos disponibles y su respectiva informacion
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

    $quimicos= DB::table('quimicos')
        ->select('id','nombre','unidad')
        ->get();

        return $quimicos;

    }

    /**
     * Descuenta de la tabla quimicos la cantidad de quimico que se encuentra almacenado, esto segun el descuento que se realiza de las cargas
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