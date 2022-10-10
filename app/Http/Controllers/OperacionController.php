<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operacion;
use Illuminate\Support\Facades\DB;

class OperacionController extends Controller
{
    /**
     * Recibe el id de la estacion y se filtra la información a partir del ID
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // return view ('equipos');
        
        
      

        //Mostramos la informacion de BT por defecto
        $id_estacion=1;
      
        //Utilizada para extraer el nombre de la estacion y mostrarlo en la vista
        $estacion=DB::table('estacions')->where('id','=',$id_estacion)->get();

        $equipos=DB::table('operacions')
        ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
        ->select('operacions.*','equipos.*')
        ->where('estado','=','Operando')
        ->where('hora','=','17:00')
        ->where('equipos.id_estacion','=',$id_estacion)
                            ->get();


        return view ('equipos',compact('estacion','equipos'));
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
     * Muestra los equipos que han trabajado durante una fecha y hora determinada, desde la vista "equipos" se manda a llamar este metodo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      // return view('equipos');

        //Obtenemos el id y la fecha que se desea mostrar, del formulario de la vista
        $id_estacion=$request->id_estacion;
        $fechas=$request->fecha;
      
        //Utilizada para extraer el nombre de la estacion y mostrarlo en la vista
        $estacion=DB::table('estacions')->where('id','=',$id_estacion)->get();

/*Busca los equipos por hora. Este corresponde a la hora 00:00 */

       $hora='00:00';
        $equipo_0=$this->equiposOperando($fechas,$hora,$id_estacion);
       /* $equipo_0=DB::table('operacions')
        ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
        ->select('operacions.*','equipos.*')
        ->where('estado','=','Operando')
        ->whereDate('operacions.created_at','=',$fechas)
        ->where('operacions.hora','=','00:00')
        ->where('equipos.id_estacion','=',$id_estacion)
                            ->get();*/

         $hora1='01:00';
        $equipo_1=$this->equiposOperando($fechas,$hora1,$id_estacion);

        $hora2='02:00';
        $equipo_2=$this->equiposOperando($fechas,$hora2,$id_estacion);
        
/*ojo, validar que las demas horas no se guarden en vacio...verificar*/
        $hora3='03:00';
         $equipo_3=$this->equiposOperando($fechas,$hora3,$id_estacion);

            $hora4='04:00';
          $equipo_4=$this->equiposOperando($fechas,$hora4,$id_estacion);

          $hora5='05:00';
          $equipo_5=$this->equiposOperando($fechas,$hora5,$id_estacion);

          $hora6='06:00';
          $equipo_6=$this->equiposOperando($fechas,$hora6,$id_estacion);
          $hora7='07:00';
          $equipo_7=$this->equiposOperando($fechas,$hora7,$id_estacion);
          $hora8='08:00';
          $equipo_8=$this->equiposOperando($fechas,$hora8,$id_estacion);
          $hora9='09:00';
          $equipo_9=$this->equiposOperando($fechas,$hora9,$id_estacion);
          $hora10='10:00';
          $equipo_10=$this->equiposOperando($fechas,$hora10,$id_estacion);
          $hora11='11:00';
          $equipo_11=$this->equiposOperando($fechas,$hora11,$id_estacion);

          $hora12='12:00';
          $equipo_12=$this->equiposOperando($fechas,$hora12,$id_estacion);

          $hora13='13:00';
          $equipo_13=$this->equiposOperando($fechas,$hora13,$id_estacion);

          $hora14='14:00';
          $equipo_14=$this->equiposOperando($fechas,$hora14,$id_estacion);

          $hora15='15:00';
          $equipo_15=$this->equiposOperando($fechas,$hora15,$id_estacion);
          $hora16='16:00';
          $equipo_16=$this->equiposOperando($fechas,$hora16,$id_estacion);
          $hora17='17:00';
          $equipo_17=$this->equiposOperando($fechas,$hora17,$id_estacion);

          $hora18='18:00';
          $equipo_18=$this->equiposOperando($fechas,$hora18,$id_estacion);
          $hora19='19:00';
          $equipo_19=$this->equiposOperando($fechas,$hora19,$id_estacion);
          $hora20='20:00';
          $equipo_20=$this->equiposOperando($fechas,$hora20,$id_estacion);
          $hora21='21:00';
          $equipo_21=$this->equiposOperando($fechas,$hora21,$id_estacion);
          $hora22='22:00';
          $equipo_22=$this->equiposOperando($fechas,$hora22,$id_estacion);
          $hora23='23:00';
          $equipo_23=$this->equiposOperando($fechas,$hora23,$id_estacion);
          
          





          
        return view ('equipos',compact('estacion','equipo_0','equipo_1','equipo_2','equipo_3','equipo_4','equipo_5','equipo_6','equipo_7','equipo_8','equipo_9','equipo_10','equipo_11','equipo_12','equipo_13','equipo_14','equipo_15','equipo_16','equipo_17','equipo_18','equipo_19','equipo_20','equipo_21','equipo_22','equipo_23','fechas'));

       // return $equipos->id_equipo;



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




    /*Recibe los parametros correspondientes y busca segun lo indicado los equipos que estaban operando
    en ese momento*/
    public function equiposOperando($fecha,$horas,$id_esta){

        $equipo= DB::table('operacions')
        ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
        ->select('operacions.*','equipos.*')
        ->where('estado','=','Operando')
        ->whereDate('operacions.created_at','=',$fecha)
        ->where('operacions.hora','=',$horas)
        ->where('equipos.id_estacion','=',$id_esta)
                            ->get();

                            return $equipo;

    }
}
