<?php

namespace App\Http\Controllers;
//se agrega el modelo que se necesita para comunicarse con la tabla de la DB
use App\Models\Produccion;
use App\Models\Estacion;
use App\Models\Operacion;
use App\Models\Consumo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProduccionController extends Controller
{
    /**
     * Manda a la vista Resumen y muestra por defecto los valores de Bocatoma
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Este ID corresponde a bocatoma
        $id_estacion=1;
       // $datos = DB::table('produccions')->where('id_estacion','=',$id_estacion)->get();
        //Utilizada para extraer el nombre de la estacion y mostrarlo en la vista
        $estacion=DB::table('estacions')->where('id','=',$id_estacion)->get();

         //para mostrar los datos de los equipos operando
       // $equipos=DB::table('operacions')->where('updated_at','=','2022-10-02 08:46:39')->get();

     /*   $equipos = DB::table('operacions')
            ->join('equipos', 'operacions.id', '=', 'equipos.id_equipo')
            ->select('equipos.*','operacions.*')
            //->where('operacions.updated_at','=','2022-10-02 10:00:19')
            ->get();*/

/*Filtra los equipos operando segun fecha, hora y estacion*/
        /*$datos = DB::table('equipos')
            ->join('operacions', 'equipos.id', '=', 'operacions.id_equipo')
            ->join('produccions', 'equipos.id_estacion', '=', 'produccions.id_estacion')

            ->select('equipos.*','operacions.*','produccions.*')
            ->where('equipos.id_estacion','=',$id_estacion)
            //->whereDate('operacions.created_at','=', '2022-10-03')
            //->whereTime('operacions.created_at', '>=', '14:00:00')
            //->whereTime('operacions.created_at', '<=', '22:49:25')
            ->where('operacions.estado','=','Operando')
            ->get();*/



            $datos = DB::table('operacions')
            ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
            ->join('estacions', 'equipos.id_estacion', '=', 'estacions.id')
            ->join('produccions', 'estacions.id', '=', 'produccions.id_estacion')
            ->select('operacions.*','equipos.*','estacions.*','produccions.*')
            ->whereDate('operacions.created_at', '=', '2022-10-03')
            ->whereDate('produccions.created_at', '=', '2022-10-03')
            ->whereTime('operacions.created_at', '<=', '17:05:51')
            ->where('estacions.id','=',$id_estacion)
            ->where('estado','=','Operando')
             //->orderBy('id_equipo', 'asc')
            //->distinct()
            ->get();



/*Obtiene todos los datos de los equipos y el estado de las operaciones */
            /*$datos = DB::table('operacions')
            //->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
                 ->select('operacions.*')
            //->where('equipos.id_estacion','=',$id_estacion)
            //->whereDate('operacions.created_at','=', '2022-10-03')
            ->whereTime('operacions.created_at', '>=', '14:00:07')
            //->whereTime('operacions.created_at', '<=', '14:59:25')
            ->where('operacions.estado','=','Operando')
            //->where('equipos.id_estacion','=',$id_estacion)
            ->get();*/

            /*Solo obtiene los datos de produccion segun la estacion*/
            $produccion = DB::table('produccions')
            ->join('estacions', 'produccions.id_estacion', '=', 'estacions.id')
                 ->select('produccions.*','estacions.*')
                ->where('estacions.id','=',$id_estacion)
                //->whereTime('produccions.created_at', '>=', '13:00:39')
                ->get();

        /*datos de Consumos*/
                $consumos = DB::table('consumos')
                             ->select('consumos.*')
                ->where('hora','=','16:00')
                ->whereDate('created_at', '=', '2022-10-18')
                ->where('id_quimico', '=', 5)
                ->get();




        /*    $datos = DB::table('operacions')
            ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
            //->join('produccions', 'estacions.id', '=', 'produccions.id_estacion')
            //->join('produccions', 'equipos.id_estacion', '=', 'produccions.id_estacion')
                ->select('operacions.*','equipos.*')
            //->where('id_estacion','=',$id_estacion)
                ->whereTime('operacions.created_at', '=', '11:44:00')
            ->where('estado','=','Operando')
            ->get();
*/

         //Enviando a vista resumen los datos de produccion de Bocatoma para mostrarlos en la tabla, tambien la variable $estacion permite obtener informacion de la tabla estacions
        return view ('resumen', compact ('estacion','produccion','datos','consumos'));

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
     * Guarda en las tablas los valores que se reciben desde la vista
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Aqui aparece la fecha y hora, sin embargo se tomaran las lecturas de la columna created_at
        $produccion = new Produccion;
            //se agregaron valores por defecto para pruebas
        $produccion->caudal = $request->caudal;
        //$produccion->fecha = $request->fecha;
        //$produccion->hora = $request->hora;
        $produccion->cloro_residual = $request->cloro_residual;
        $produccion->nivel_camara = $request->nivel_camara;
        $produccion->nivel_rio = $request->nivel_rio;
        $produccion->presion_linea = $request->presion_linea;//se eliminara?
        $produccion->id_estacion = $request->id_estacion;
 
        $produccion->save();

        /*Recibe y guarda los valores de EB1*/
        $proEB1=new Produccion;
        $proEB1->caudal = $request->caudaleb1;
        $proEB1->nivel_camara = $request->nivel1;
        $proEB1->cloro_residual = $request->cloro1;
        $proEB1->id_estacion = $request->id_eb1;

             $proEB1->save();
        /* Fin de recibe y guarda los valores de EB1*/

        /*Recibe y guarda los valores de EB2*/
        $proEB2=new Produccion;
        $proEB2->caudal = $request->caudaleb2;
        $proEB2->nivel_camara = $request->nivel2;
        $proEB2->cloro_residual = $request->cloro2;
        $proEB2->id_estacion = $request->id_eb2;

             $proEB2->save();
        /* Fin de recibe y guarda los valores de EB2*/

         /*Recibe y guarda los valores de EB3*/
        $proEB3=new Produccion;
        $proEB3->caudal = $request->caudaleb3;
        $proEB3->nivel_camara = $request->nivel3;
        $proEB3->cloro_residual = $request->cloro3;
        $proEB3->id_estacion = $request->id_eb3;

             $proEB3->save();
        /* Fin de recibe y guarda los valores de EB3*/


        /*Recibe y guarda los valores de Tterminales*, como no se registra caudal para esta estacion
        en la tabla produccions se debe aceptar valores nulos en caudal*/

        $terminales=new Produccion;
        
        $terminales->nivel_camara = $request->nivel4;
        $terminales->cloro_residual = $request->cloro4;
        $terminales->id_estacion = $request->id_terminal;

             $terminales->save();
        /* Fin de recibe y guarda los valores de Tterminales*/

        /*Recibe y guarda los valores de Bella vista nuevo*/

        $nuevo=new Produccion;
        
        $nuevo->nivel_camara = $request->nivel5;
        $nuevo->cloro_residual = $request->cloro5;
        $nuevo->id_estacion = $request->id_nuevo;

             $nuevo->save();
        /* Fin de recibe y guarda los valores de bella vista nuevo*/


/*Recibe y guarda los valores de Bella vista viejo*/

        $viejo=new Produccion;
        
        $viejo->nivel_camara = $request->nivel6;
        $viejo->cloro_residual = $request->cloro6;
        $viejo->id_estacion = $request->id_viejo;

             $viejo->save();
        /* Fin de recibe y guarda los valores de bella vista viejo*/


/*Guarda los datos de las DOSIFICACIONES*/

        $coagulante=new Consumo;
        
        $coagulante->dosis = $request->dosificacion_coagulante;
        $coagulante->hora = $request->hora;
        $coagulante->id_quimico = "5";
        $coagulante->id_agua = "1";//Agua cruda
        $coagulante->save();


         $cal=new Consumo;
        
        $cal->dosis = $request->dosif_cal;
        $cal->hora = $request->hora;
        $cal->id_quimico = $request->id_cal;
        $cal->id_agua = "4";//id Agua tratada
        $cal->save();

        $permanganato=new Consumo;
        
        $permanganato->dosis = $request->dosif_permanganato;
        $permanganato->hora = $request->hora;
        $permanganato->id_quimico = "1";//asignado directamente
        $permanganato->id_agua = "1";//id Agua cruda
        $permanganato->save();

        $polimero=new Consumo;
        
        $polimero->dosis = $request->dosif_polimero;
        $polimero->hora = $request->hora;
        $polimero->id_quimico = "7";//asignado directamente de id polimero
        $polimero->id_agua = "2";//id Agua clarificadas
        $polimero->save();


        $cloro=new Consumo;
        
        $cloro->dosis = $request->dosif_cloro;
        $cloro->hora = $request->hora;
        $cloro->id_quimico = "8";//asignado directamente de id Cloro
        $cloro->id_agua = "4";//id Agua tratada
        $cloro->save();








/*Fin de guarda los datos de las DOSIFICACIONES*/





/*EQUIPOS OPERANDO*/

/* INICIO BOCATOMA*/

/*Equipo 1 de BT*/
        //se le pasa al metodo el valor del checkbox y el id respectivo del equipo en cuestion y hora 
        $this->guardaEquipo($request->eq1,$request->ideq1,$request->hora);
/*Fin de Equipo 1 de BT*/

/*Equipo 2 de BT*/
        //se le pasa al metodo el valor del checkbox y el id respectivo del equipo en cuestion
        $this->guardaEquipo($request->eq2,$request->ideq2,$request->hora);
/*Fin de Equipo 2 de BT*/
/*Equipo 3 de BT*/
       //se le pasa al metodo el valor del checkbox y el id respectivo del equipo en cuestion
        $this->guardaEquipo($request->eq3,$request->ideq3,$request->hora);
/*Fin de Equipo 3 de BT*/
/*Equipo 4 de BT*/
        $this->guardaEquipo($request->eq4,$request->ideq4,$request->hora);
/*Fin de Equipo 4 de BT*/
/*Equipo 5 de BT*/
       $this->guardaEquipo($request->eq5,$request->ideq5,$request->hora);
/*Fin de Equipo 5 de BT*/
/*Equipo 6 de BT*/
        $this->guardaEquipo($request->eq6,$request->ideq6,$request->hora);
/*Fin de Equipo 6 de BT*/
/*Equipo 7 de BT*/
        $this->guardaEquipo($request->eq7,$request->ideq7,$request->hora);
/*Fin de Equipo 7 de BT*/
/*Equipo 8 de BT*/

        //se le pasa al metodo el valor del checkbox y el id respectivo del equipo en cuestion
        $this->guardaEquipo($request->eq8,$request->ideq8,$request->hora);
               
/*Fin de Equipo 8 de BT*/


/*FIN BOCATOMA*/

/*INICIO EB1*/
    //Los ID de los equipos se agregaron a la vista manualmente-verificar y mejorar esta parte-
    /*Equipo 1 de EB1*/
        //los parametros que se envian al metodo son los que estan descritos particularmente para cada equipo
        $this->guardaEquipo($request->eb11,$request->ideq11,$request->hora);
    /*Fin de Equipo 1 de EB1*/
     /*Equipo 2 de EB1*/
       
        $this->guardaEquipo($request->eb12,$request->ideq21,$request->hora);
    /*Fin de Equipo 2 de EB1*/
    /*Equipo 3 de EB1*/
       
        $this->guardaEquipo($request->eb13,$request->ideq31,$request->hora);
    /*Fin de Equipo 3 de EB1*/
     /*Equipo 4 de EB1*/
       
        $this->guardaEquipo($request->eb14,$request->ideq41,$request->hora);
    /*Fin de Equipo 4 de EB1*/
     /*Equipo 5 de EB1*/
       
        $this->guardaEquipo($request->eb15,$request->ideq51,$request->hora);
    /*Fin de Equipo 5 de EB1*/
    /*Equipo 6 de EB1*/
       
        $this->guardaEquipo($request->eb16,$request->ideq61,$request->hora);
    /*Fin de Equipo 6 de EB1*/
      /*Equipo 7 de EB1*/
       
        $this->guardaEquipo($request->eb17,$request->ideq71,$request->hora);
    /*Fin de Equipo 7 de EB1*/


/*FIN EB1*/

/*INICIO EB2*/
   
    /*Equipo 1 de EB2*/
      
       $this->guardaEquipo($request->eb21,$request->ideq12,$request->hora);
    /*Fin de Equipo 1 de EB2*/
     /*Equipo 2 de EB2*/
       
        $this->guardaEquipo($request->eb22,$request->ideq22,$request->hora);
    /*Fin de Equipo 2 de EB2*/
    /*Equipo 3 de EB2*/
       
        $this->guardaEquipo($request->eb23,$request->ideq32,$request->hora);
    /*Fin de Equipo 3 de EB2*/
     /*Equipo 4 de EB2*/
       
        $this->guardaEquipo($request->eb24,$request->ideq42,$request->hora);
    /*Fin de Equipo 4 de EB2*/
     /*Equipo 5 de EB2*/
       
        $this->guardaEquipo($request->eb25,$request->ideq52,$request->hora);
    /*Fin de Equipo 5 de EB2*/
    /*Equipo 6 de EB2*/
       
        $this->guardaEquipo($request->eb26,$request->ideq62,$request->hora);
    /*Fin de Equipo 6 de EB2*/
      /*Equipo 7 de EB2*/
       
        $this->guardaEquipo($request->eb27,$request->ideq72,$request->hora);
    /*Fin de Equipo 7 de EB2*/


/*FIN EB2*/

/*INICIO EB3*/
   
    /*Equipo 1 de EB3*/
      
       $this->guardaEquipo($request->eb31,$request->ideq13,$request->hora);
    /*Fin de Equipo 1 de EB3*/
     /*Equipo 2 de EB3*/
       
        $this->guardaEquipo($request->eb32,$request->ideq23,$request->hora);
    /*Fin de Equipo 2 de EB3*/
    /*Equipo 3 de EB3*/
       
        $this->guardaEquipo($request->eb33,$request->ideq33,$request->hora);
    /*Fin de Equipo 3 de EB3*/
     /*Equipo 4 de EB3*/
       
        $this->guardaEquipo($request->eb34,$request->ideq43,$request->hora);
    /*Fin de Equipo 4 de EB3*/
     /*Equipo 5 de EB3*/
       
        $this->guardaEquipo($request->eb35,$request->ideq53,$request->hora);
    /*Fin de Equipo 5 de EB3*/
    /*Equipo 6 de EB3*/
       
        $this->guardaEquipo($request->eb36,$request->ideq63,$request->hora);
    /*Fin de Equipo 6 de EB3*/
      /*Equipo 7 de EB3*/
       
        $this->guardaEquipo($request->eb37,$request->ideq73,$request->hora);
    /*Fin de Equipo 7 de EB3*/


/*FIN EB3*/




        
         return redirect('/resumen')->with('status', 'Guardado');

        //show($request->id_estacion);

        
    }


  /*Metodo que valida el estado en el que se encuentra un equipo de bombeo*/
   public function verificarEstado($parametro){

    $condicion;

        if ($parametro =='Operando') {
            //
           $condicion='Operando';
        } else {
            
            $condicion='Sin Operar';
        }

    return $condicion;

    }

/*Metodo que recibe el estado del checkbox y el id del equipo a procesar, se agregó la hora a la que se realizo este proceso desde la vista resumen */
    public function guardaEquipo($nombreElementoFormulario,$idEquipo,$hora){

        $Equipo=new Operacion;//equipo x

        /*Pasando al metodo el valor del estado del eq de bombeo desde el formulario*/
        $valor= $this->verificarEstado($nombreElementoFormulario);
        
        //asignando a la tabla operacions->estado, el estado del equipo
        $Equipo->estado=$valor;

        
        $Equipo->id_equipo=$idEquipo;//del input oculto de la vista tomamos el id del equipo 
        $Equipo->hora=$hora;

        $Equipo->save();

        return 'Guardado';


    }







    /**
     * Metodo que envia a la vista los datos de produccion para visualizarce en tablas 
     * segun el id que se pasa por parametro
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

     */
    public function show($id)
    {
        

         //obteniendo todos los valores almacenados en la  tabla Produccion (se utiliza el nombre según el modelo)
        //$datos = Produccion::all();
            
            //filtrando informacion de acuerdo al id de la estacion requerida, ojo aqui hay que llamar a la tabla de acuerdo a como se guardo en la base de datos
        $id_estacion=$id;
        $datos = DB::table('produccions')->where('id_estacion','=',$id_estacion)->get();

        //Obteniendo el nombre de la estacion segun el id que se recibe por parametro
        $estacion=DB::table('estacions')->where('id','=',$id_estacion)->get();
         
         //Enviando a vista resumen los datos de produccion de Bocatoma para mostrarlos en la tabla, tambien la variable $estacion permite obtener informacion de la tabla estacions
        return view ('resumen', compact ('datos','estacion'));
         
         //enviando a vista resumen los datos de produccion almacenados
        //return view ('resumen', compact ('datos'));
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



/**
     * Metodo que permite mostrar los datos de una estacion en particular
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mostrar(Request $request)
    {
        
        
            //Del parametro que se recibe del "formulario-mostrar" se filtra y se hacen las consultas para poder mostrar los valores en la vista "resumen" 
        $id = $request->id_estacion;
     
            //Filtrando los datos de produccion segun el id
        $datos = DB::table('produccions')->where('id_estacion','=',$id)->get();

        //Obteniendo el nombre de la estacion segun el id que se recibe por parametro
        $estacion=DB::table('estacions')->where('id','=',$id)->get();

        //para mostrar los datos de los equipos operando
        //$equipos=DB::table('operacions')->where('id','=','621')->get();
         
         //Enviando a vista resumen los datos de produccion de Bocatoma para mostrarlos en la tabla, tambien la variable $estacion permite obtener informacion de la tabla estacions
        return view ('resumen', compact ('datos','estacion','equipos'));
         

        
        
    }






}
