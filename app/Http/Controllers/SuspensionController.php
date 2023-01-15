<?php

namespace App\Http\Controllers;

use App\Models\Suspension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SuspensionController extends Controller
{
    /**
     * Controla la vista Paros y carga la informacion necesaria sobre los paros de operacion, utilizamos fecha actual
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $fecha=date('Y-m-d');
       $id_bt=1;
       $id_eb1=2;
       $id_eb2=3;
       $id_eb3=4;
       //Para index dejamos vacio este campo pues no nos intereza filtrar la info por estacion
       $id_estacion='';

       //retornamos la funcion y esta ultima manda a la vista todos los valores
       return $this->buscaParo($fecha,$id_estacion);
       

        //return view('paros',compact('total_paros'));


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
        if (empty($request)) {
            return $this->index();
        }else{

             //asignacion de variables y valores procedentes del formulario de la vista PAROS
        $id_estacion= $request->id_estacion;
        $fecha=$request->fecha;
        $hora_inicio=$request->hora_inicio;//hora en que inicia el paro de operacion
        $hora_fin=$request->hora_fin;//hora que termina el paro e inicia operacion
        $causa=$request->causa;
        $grupo_turno=$request->grupo;

//Guardando los datos recibidos desde el formulario
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

        return $suspension;
    }

    /**
     * Captura el id del paro enviado desde la vista PAROS y lo manda a la vista editarParo
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suspension  $suspension
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return $suspension->id;
        $datos_paro=$this->precargarParo($id);
        return view('editar-paros',compact('datos_paro'));
    }

    //Obtiene los datos de un paro en especifico mediante el ID
    public function precargarParo($id)
    {
        $datos= DB::table('suspensions')
        ->where('id','=',$id)
        ->get();

        //extrayendo los valores para ser accedido directamente desde la vista editarParo
        foreach ($datos as $valor) {
            $valor;
        }


        return $valor;
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
     * Remove the specified resource from storage. Elimina un paro en especifico (el que se carga previmente en la vista editarParo)
     *
     * @param  \App\Models\Suspension  $suspension
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function destroy(Request  $request)
    {
        //Creamos un objeto de tipo suspension y lo buscamos mediante el id para ser eliminado
        $suspension = Suspension::find($request->id_paro);
        $suspension->delete();
        return $this->index();
    }

    //Devuelve todos los paros registrados en una fecha determinada para una estacion
    public function buscaParo($fecha, $estacion)
    {$total_paros='';

        //si el parametro de estacion no fue pasado se devuelven solo los paros para una fecha determinada
        if (empty($estacion )) {
             $total_paros=DB::table('suspensions')
                        ->join('estacions', 'suspensions.id_estacion', '=', 'estacions.id')
                        ->select('suspensions.id','suspensions.fecha','suspensions.hora_inicio','suspensions.hora_fin','suspensions.causa','suspensions.id_estacion','suspensions.grupo','estacions.nombre')
                        //->where('fecha','=',$fecha)
                            ->whereRaw('month(fecha) = month(now())')
                            ->whereRaw('year(fecha) = year(now())') 
                            ->orderBy('fecha')
                        ->get();
        }//caso contrario se utiliza estacion para filtrar la busqueda
        else
        {

                $total_paros=DB::table('suspensions')
                        ->join('estacions', 'suspensions.id_estacion', '=', 'estacions.id')
                        ->select('suspensions.id','suspensions.fecha','suspensions.hora_inicio','suspensions.hora_fin','suspensions.causa','suspensions.id_estacion','suspensions.grupo','estacions.nombre')
                        ->where('fecha','=',$fecha)
                        ->where('id_estacion', '=', $estacion)
                        ->orderBy('fecha')
                        ->get();

        }
               


              return view('paros',compact('total_paros','fecha'));
                //return $paros;
        
    }

    /*Funcion que calcula el tiempo transcurrido (suspendido) entre dos horas*/
    public function tiempoSuspendido($hora_ini,$hora_fin)
    {
          //$tiempo_suspendido=array();

       
           //separando los minutos para realizar resta
            $minutos_inicio=explode(':',$hora_ini);
            $minutos_fin=explode(':',$hora_fin);

            //resta de las horas
            $tiempo=intval($hora_fin)-intval($hora_ini);

            $rest_minutos=($minutos_fin[1]-$minutos_inicio[1]);

            //validacion para que a un valor negativo le sean sumados 60 minutos, de esta forma se obtiene el valor real
            if ($rest_minutos < 0) {
                $rest_minutos=$rest_minutos + 60;
                //reajustando las horas, pues al ser minutos negativos se debe disminuir una hora de la resta de las horas
                $tiempo = $tiempo - 1;
            }



            //formando nuevamente la hora completa a formato 00:00
            if ($rest_minutos < 10) {
                // si obtenemos minutos abajo de 10 le anteponemos un 0
                 $hora=$tiempo.':0'.$rest_minutos;
            }
            else{ 

                $hora=$tiempo.':'.$rest_minutos;
            }
           
            
            return $hora;


       
    }


/**
* Obtiene la informacion para filtrar un corte de operacion en especial
* @param  \Illuminate\Http\Request  $request
*/
function filtroCortes(Request $request)
{
    $fecha=$request->fecha;
    $id_estacion=$request->id_estacion;

    return $this->buscaParo($fecha,$id_estacion);



}



}
