<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operacion;
use Illuminate\Support\Facades\DB;

class OperacionController extends Controller
{
    /**
     * Este metodo replica exactamente al metodo store, sin embargo filtra la fecha actual. Carga los datos del dia actual y los muestra en la vista equipos.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        //si el usuario selecciono una fecha, se asigna este valor y se filtran los datos por esa fecha, de lo contrario se mostrara la fecha actual.
        if (($request->fecha) > 0) {
            
            $fechas=$request->fecha;
        }else
        {
            $fechas=date("Y-m-d");//fecha actual
        }



        //$fechas=date("Y-m-d");//fecha actual

        $id_bocatoma=1;//id exclusivamente para BT
        $id_eb1=2;//id exclusivamente para EB1
        $id_eb2=3;//id exclusivamente para EB2
        $id_eb3=4;//id exclusivamente para EB3
      
        //Utilizada para extraer el nombre de la estacion y mostrarlo en la vista
        $estacion=DB::table('estacions')->where('id','=',$id_bocatoma)->get();

/*Busca los equipos por hora. Este corresponde a la hora 00:00 */

       $hora='24:00';
        $equipo_0=$this->equiposOperando($fechas,$hora,$id_bocatoma);
        $eq_eb1_0=$this->equiposOperando($fechas,$hora,$id_eb1);
        $eq_eb2_0=$this->equiposOperando($fechas,$hora,$id_eb2);
        $eq_eb3_0=$this->equiposOperando($fechas,$hora,$id_eb3);
       /* $equipo_0=DB::table('operacions')
        ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
        ->select('operacions.*','equipos.*')
        ->where('estado','=','Operando')
        ->whereDate('operacions.created_at','=',$fechas)
        ->where('operacions.hora','=','00:00')
        ->where('equipos.id_estacion','=',$id_estacion)
                            ->get();*/

         $hora1='01:00';
        $equipo_1=$this->equiposOperando($fechas,$hora1,$id_bocatoma);
        $eq_eb1_1=$this->equiposOperando($fechas,$hora1,$id_eb1);//para EB1
        $eq_eb2_1=$this->equiposOperando($fechas,$hora1,$id_eb2);
        $eq_eb3_1=$this->equiposOperando($fechas,$hora1,$id_eb3);

        $hora2='02:00';
        $equipo_2=$this->equiposOperando($fechas,$hora2,$id_bocatoma);
        $eq_eb1_2=$this->equiposOperando($fechas,$hora2,$id_eb1);
        $eq_eb2_2=$this->equiposOperando($fechas,$hora2,$id_eb2);
        $eq_eb3_2=$this->equiposOperando($fechas,$hora2,$id_eb3);
        
        /*ojo, validar que las demas horas no se guarden en vacio...verificar*/
        $hora3='03:00';
         $equipo_3=$this->equiposOperando($fechas,$hora3,$id_bocatoma);
         $eq_eb1_3=$this->equiposOperando($fechas,$hora3,$id_eb1);
         $eq_eb2_3=$this->equiposOperando($fechas,$hora3,$id_eb2);
         $eq_eb3_3=$this->equiposOperando($fechas,$hora3,$id_eb3);

            $hora4='04:00';
          $equipo_4=$this->equiposOperando($fechas,$hora4,$id_bocatoma);
          $eq_eb1_4=$this->equiposOperando($fechas,$hora4,$id_eb1);
          $eq_eb2_4=$this->equiposOperando($fechas,$hora4,$id_eb2);
          $eq_eb3_4=$this->equiposOperando($fechas,$hora4,$id_eb3);

          $hora5='05:00';
          $equipo_5=$this->equiposOperando($fechas,$hora5,$id_bocatoma);
          $eq_eb1_5=$this->equiposOperando($fechas,$hora5,$id_eb1);
          $eq_eb2_5=$this->equiposOperando($fechas,$hora5,$id_eb2);
          $eq_eb3_5=$this->equiposOperando($fechas,$hora5,$id_eb3);

          $hora6='06:00';
          $equipo_6=$this->equiposOperando($fechas,$hora6,$id_bocatoma);
          $eq_eb1_6=$this->equiposOperando($fechas,$hora6,$id_eb1);
          $eq_eb2_6=$this->equiposOperando($fechas,$hora6,$id_eb2);
          $eq_eb3_6=$this->equiposOperando($fechas,$hora6,$id_eb3);

          $hora7='07:00';
          $equipo_7=$this->equiposOperando($fechas,$hora7,$id_bocatoma);
          $eq_eb1_7=$this->equiposOperando($fechas,$hora7,$id_eb1);
          $eq_eb2_7=$this->equiposOperando($fechas,$hora7,$id_eb2);
          $eq_eb3_7=$this->equiposOperando($fechas,$hora7,$id_eb3);

          $hora8='08:00';
          $equipo_8=$this->equiposOperando($fechas,$hora8,$id_bocatoma);
          $eq_eb1_8=$this->equiposOperando($fechas,$hora8,$id_eb1);
          $eq_eb2_8=$this->equiposOperando($fechas,$hora8,$id_eb2);
          $eq_eb3_8=$this->equiposOperando($fechas,$hora8,$id_eb3);

          $hora9='09:00';
          $equipo_9=$this->equiposOperando($fechas,$hora9,$id_bocatoma);
          $eq_eb1_9=$this->equiposOperando($fechas,$hora9,$id_eb1);
          $eq_eb2_9=$this->equiposOperando($fechas,$hora9,$id_eb2);
          $eq_eb3_9=$this->equiposOperando($fechas,$hora9,$id_eb3);

          $hora10='10:00';
          $equipo_10=$this->equiposOperando($fechas,$hora10,$id_bocatoma);
          $eq_eb1_10=$this->equiposOperando($fechas,$hora10,$id_eb1);
          $eq_eb2_10=$this->equiposOperando($fechas,$hora10,$id_eb2);
          $eq_eb3_10=$this->equiposOperando($fechas,$hora10,$id_eb3);


          $hora11='11:00';
          $equipo_11=$this->equiposOperando($fechas,$hora11,$id_bocatoma);
          $eq_eb1_11=$this->equiposOperando($fechas,$hora11,$id_eb1);
          $eq_eb2_11=$this->equiposOperando($fechas,$hora11,$id_eb2);
          $eq_eb3_11=$this->equiposOperando($fechas,$hora11,$id_eb3);


          $hora12='12:00';
          $equipo_12=$this->equiposOperando($fechas,$hora12,$id_bocatoma);
          $eq_eb1_12=$this->equiposOperando($fechas,$hora12,$id_eb1);
          $eq_eb2_12=$this->equiposOperando($fechas,$hora12,$id_eb2);
          $eq_eb3_12=$this->equiposOperando($fechas,$hora12,$id_eb3);


          $hora13='13:00';
          $equipo_13=$this->equiposOperando($fechas,$hora13,$id_bocatoma);
          $eq_eb1_13=$this->equiposOperando($fechas,$hora13,$id_eb1);
          $eq_eb2_13=$this->equiposOperando($fechas,$hora13,$id_eb2);
          $eq_eb3_13=$this->equiposOperando($fechas,$hora13,$id_eb3);


          $hora14='14:00';
          $equipo_14=$this->equiposOperando($fechas,$hora14,$id_bocatoma);
          $eq_eb1_14=$this->equiposOperando($fechas,$hora14,$id_eb1);
          $eq_eb2_14=$this->equiposOperando($fechas,$hora14,$id_eb2);
          $eq_eb3_14=$this->equiposOperando($fechas,$hora14,$id_eb3);


          $hora15='15:00';
          $equipo_15=$this->equiposOperando($fechas,$hora15,$id_bocatoma);
          $eq_eb1_15=$this->equiposOperando($fechas,$hora15,$id_eb1);
          $eq_eb2_15=$this->equiposOperando($fechas,$hora15,$id_eb2);
          $eq_eb3_15=$this->equiposOperando($fechas,$hora15,$id_eb3);


          $hora16='16:00';
          $equipo_16=$this->equiposOperando($fechas,$hora16,$id_bocatoma);
          $eq_eb1_16=$this->equiposOperando($fechas,$hora16,$id_eb1);
          $eq_eb2_16=$this->equiposOperando($fechas,$hora16,$id_eb2);
          $eq_eb3_16=$this->equiposOperando($fechas,$hora16,$id_eb3);



          $hora17='17:00';
          $equipo_17=$this->equiposOperando($fechas,$hora17,$id_bocatoma);
          $eq_eb1_17=$this->equiposOperando($fechas,$hora17,$id_eb1);
          $eq_eb2_17=$this->equiposOperando($fechas,$hora17,$id_eb2);
          $eq_eb3_17=$this->equiposOperando($fechas,$hora17,$id_eb3);


          $hora18='18:00';
          $equipo_18=$this->equiposOperando($fechas,$hora18,$id_bocatoma);
          $eq_eb1_18=$this->equiposOperando($fechas,$hora18,$id_eb1);
          $eq_eb2_18=$this->equiposOperando($fechas,$hora18,$id_eb2);
          $eq_eb3_18=$this->equiposOperando($fechas,$hora18,$id_eb3);


          $hora19='19:00';
          $equipo_19=$this->equiposOperando($fechas,$hora19,$id_bocatoma);
          $eq_eb1_19=$this->equiposOperando($fechas,$hora19,$id_eb1);
          $eq_eb2_19=$this->equiposOperando($fechas,$hora19,$id_eb2);
          $eq_eb3_19=$this->equiposOperando($fechas,$hora19,$id_eb3);
          
          
          $hora20='20:00';
          $equipo_20=$this->equiposOperando($fechas,$hora20,$id_bocatoma);
          $eq_eb1_20=$this->equiposOperando($fechas,$hora20,$id_eb1);
          $eq_eb2_20=$this->equiposOperando($fechas,$hora20,$id_eb2);
          $eq_eb3_20=$this->equiposOperando($fechas,$hora20,$id_eb3);
          

          $hora21='21:00';
          $equipo_21=$this->equiposOperando($fechas,$hora21,$id_bocatoma);
          $eq_eb1_21=$this->equiposOperando($fechas,$hora21,$id_eb1);
          $eq_eb2_21=$this->equiposOperando($fechas,$hora21,$id_eb2);
          $eq_eb3_21=$this->equiposOperando($fechas,$hora21,$id_eb3);

          $hora22='22:00';
          $equipo_22=$this->equiposOperando($fechas,$hora22,$id_bocatoma);
          $eq_eb1_22=$this->equiposOperando($fechas,$hora22,$id_eb1);
          $eq_eb2_22=$this->equiposOperando($fechas,$hora22,$id_eb2);
          $eq_eb3_22=$this->equiposOperando($fechas,$hora22,$id_eb3);


          $hora23='23:00';
          $equipo_23=$this->equiposOperando($fechas,$hora23,$id_bocatoma);
          $eq_eb1_23=$this->equiposOperando($fechas,$hora23,$id_eb1);
          $eq_eb2_23=$this->equiposOperando($fechas,$hora23,$id_eb2);
          $eq_eb3_23=$this->equiposOperando($fechas,$hora23,$id_eb3);
          
          



/*VALIDACION DE EQUIPOS TRABAJANDO POR HORAS BOCATOMA*/
//se obtiene un arreglo con las veces que se repiten los equipos operando por hora.
$cont_bt_1=$this->contarEquipos($fechas,$id_bocatoma);

 //Comprobamos que existe la repeticion en el arreglo y lo mostramos, de lo contrario devolvemos el valor de cero para no contabilizar esas horas


    //Validando si hay horas sin trabajar
    if (isset($cont_bt_1[0])) {
        $bt_0_h=$cont_bt_1[0];
    }else
    {$bt_0_h=0;}


//validando las horas trabajadas con 1 equipo
 if (isset($cont_bt_1[1])) {
        $bt_1_h=$cont_bt_1[1];
    }else
{$bt_1_h=0;}


//validando las horas trabajadas con 2 equipos
    if (isset($cont_bt_1[2])) {
        $bt_2_h=$cont_bt_1[2];
    }else
{$bt_2_h=0;}

   //validando las horas trabajadas con 3 equipos
    if (isset($cont_bt_1[3])) {
        $bt_3_h=$cont_bt_1[3];
    }else
{$bt_3_h=0;}

//validando las horas trabajadas con 4 equipos
 if (isset($cont_bt_1[4])) {
        $bt_4_h=$cont_bt_1[4];
    }else
{$bt_4_h=0;}
    
    //validando las horas trabajadas con 5 equipos
     if (isset($cont_bt_1[5])) {
        $bt_5_h=$cont_bt_1[5];
    }else
{$bt_5_h=0;}

//validando las horas trabajadas con 6 equipos
 if (isset($cont_bt_1[6])) {
        $bt_6_h=$cont_bt_1[6];
    }else
{$bt_6_h=0;}

/*FIN DE VALIDACION DE EQUIPOS TRABAJANDO POR HORAS BOCATOMA*/



/*VALIDACION DE EQUIPOS TRABAJANDO POR HORAS EB1*/
//se obtiene un arreglo con las veces que se repiten los equipos operando por hora.
$conteo_eb1=$this->contarEquipos($fechas,$id_eb1);

 //Comprobamos que existe la repeticion en el arreglo y lo mostramos, de lo contrario devolvemos el valor de cero para no contabilizar esas horas


    //Validando si hay horas sin trabajar
    if (isset($conteo_eb1[0])) {
        $eb1_0_h=$conteo_eb1[0];
    }else
    {$eb1_0_h=0;}


//validando las horas trabajadas con 1 equipo
 if (isset($conteo_eb1[1])) {
        $eb1_1_h=$conteo_eb1[1];
    }else
{$eb1_1_h=0;}


//validando las horas trabajadas con 2 equipos
    if (isset($conteo_eb1[2])) {
        $eb1_2_h=$conteo_eb1[2];
    }else
{$eb1_2_h=0;}

   //validando las horas trabajadas con 3 equipos
    if (isset($conteo_eb1[3])) {
        $eb1_3_h=$conteo_eb1[3];
    }else
{$eb1_3_h=0;}

//validando las horas trabajadas con 4 equipos
 if (isset($conteo_eb1[4])) {
        $eb1_4_h=$conteo_eb1[4];
    }else
{$eb1_4_h=0;}
    
    //validando las horas trabajadas con 5 equipos
     if (isset($conteo_eb1[5])) {
        $eb1_5_h=$conteo_eb1[5];
    }else
{$eb1_5_h=0;}

//validando las horas trabajadas con 6 equipos
 if (isset($conteo_eb1[6])) {
        $eb1_6_h=$conteo_eb1[6];
    }else
{$eb1_6_h=0;}

/*FIN DE VALIDACION DE EQUIPOS TRABAJANDO POR HORAS EB1*/

/*VALIDACION DE EQUIPOS TRABAJANDO POR HORAS EB2*/

$conteo_eb2=$this->contarEquipos($fechas,$id_eb2);



    //Validando si hay horas sin trabajar
    if (isset($conteo_eb2[0])) {
        $eb2_0_h=$conteo_eb2[0];
    }else
    {$eb2_0_h=0;}


//validando las horas trabajadas con 1 equipo
 if (isset($conteo_eb2[1])) {
        $eb2_1_h=$conteo_eb2[1];
    }else
{$eb2_1_h=0;}


//validando las horas trabajadas con 2 equipos
    if (isset($conteo_eb2[2])) {
        $eb2_2_h=$conteo_eb2[2];
    }else
{$eb2_2_h=0;}

   //validando las horas trabajadas con 3 equipos
    if (isset($conteo_eb2[3])) {
        $eb2_3_h=$conteo_eb2[3];
    }else
{$eb2_3_h=0;}

//validando las horas trabajadas con 4 equipos
 if (isset($conteo_eb2[4])) {
        $eb2_4_h=$conteo_eb2[4];
    }else
{$eb2_4_h=0;}
    
    //validando las horas trabajadas con 5 equipos
     if (isset($conteo_eb2[5])) {
        $eb2_5_h=$conteo_eb2[5];
    }else
{$eb2_5_h=0;}

//validando las horas trabajadas con 6 equipos
 if (isset($conteo_eb2[6])) {
        $eb2_6_h=$conteo_eb2[6];
    }else
{$eb2_6_h=0;}

/*FIN DE VALIDACION DE EQUIPOS TRABAJANDO POR HORAS EB2*/

/*VALIDACION DE EQUIPOS TRABAJANDO POR HORAS EB3*/

$conteo_eb3=$this->contarEquipos($fechas,$id_eb3);



    //Validando si hay horas sin trabajar
    if (isset($conteo_eb3[0])) {
        $eb3_0_h=$conteo_eb3[0];
    }else
    {$eb3_0_h=0;}


//validando las horas trabajadas con 1 equipo
 if (isset($conteo_eb3[1])) {
        $eb3_1_h=$conteo_eb3[1];
    }else
{$eb3_1_h=0;}


//validando las horas trabajadas con 2 equipos
    if (isset($conteo_eb3[2])) {
        $eb3_2_h=$conteo_eb3[2];
    }else
{$eb3_2_h=0;}

   //validando las horas trabajadas con 3 equipos
    if (isset($conteo_eb3[3])) {
        $eb3_3_h=$conteo_eb3[3];
    }else
{$eb3_3_h=0;}

//validando las horas trabajadas con 4 equipos
 if (isset($conteo_eb3[4])) {
        $eb3_4_h=$conteo_eb3[4];
    }else
{$eb3_4_h=0;}
    
    //validando las horas trabajadas con 5 equipos
     if (isset($conteo_eb3[5])) {
        $eb3_5_h=$conteo_eb3[5];
    }else
{$eb3_5_h=0;}

//validando las horas trabajadas con 6 equipos
 if (isset($conteo_eb3[6])) {
        $eb3_6_h=$conteo_eb3[6];
    }else
{$eb3_6_h=0;}

/*FIN DE VALIDACION DE EQUIPOS TRABAJANDO POR HORAS EB3*/


          
        return view ('equipos',compact('estacion','equipo_0','equipo_1','equipo_2','equipo_3','equipo_4','equipo_5','equipo_6','equipo_7','equipo_8','equipo_9','equipo_10','equipo_11','equipo_12','equipo_13','equipo_14','equipo_15','equipo_16','equipo_17','equipo_18','equipo_19','equipo_20','equipo_21','equipo_22','equipo_23','eq_eb1_0','eq_eb1_1','eq_eb1_2','eq_eb1_3','eq_eb1_4','eq_eb1_5','eq_eb1_6','eq_eb1_7','eq_eb1_8','eq_eb1_9','eq_eb1_10','eq_eb1_11','eq_eb1_12','eq_eb1_13','eq_eb1_14','eq_eb1_15','eq_eb1_16','eq_eb1_17','eq_eb1_18','eq_eb1_19','eq_eb1_20','eq_eb1_21','eq_eb1_22','eq_eb1_23','eq_eb2_0','eq_eb2_1','eq_eb2_2','eq_eb2_3','eq_eb2_4','eq_eb2_5','eq_eb2_6','eq_eb2_7','eq_eb2_8','eq_eb2_9','eq_eb2_10','eq_eb2_11','eq_eb2_12','eq_eb2_13','eq_eb2_14','eq_eb2_15','eq_eb2_16','eq_eb2_17','eq_eb2_18','eq_eb2_19','eq_eb2_20','eq_eb2_21','eq_eb2_22','eq_eb2_23','eq_eb3_0','eq_eb3_1','eq_eb3_2','eq_eb3_3','eq_eb3_4','eq_eb3_5','eq_eb3_6','eq_eb3_7','eq_eb3_8','eq_eb3_9','eq_eb3_10','eq_eb3_11','eq_eb3_12','eq_eb3_13','eq_eb3_14','eq_eb3_15','eq_eb3_16','eq_eb3_17','eq_eb3_18','eq_eb3_19','eq_eb3_20','eq_eb3_21','eq_eb3_22','eq_eb3_23','fechas','cont_bt_1','bt_0_h','bt_1_h','bt_2_h','bt_3_h','bt_4_h','bt_5_h','bt_6_h','eb1_0_h','eb1_1_h','eb1_2_h','eb1_3_h','eb1_4_h','eb1_5_h','eb1_6_h','eb2_0_h','eb2_1_h','eb2_2_h','eb2_3_h','eb2_4_h','eb2_5_h','eb2_6_h','eb3_0_h','eb3_1_h','eb3_2_h','eb3_3_h','eb3_4_h','eb3_5_h','eb3_6_h','fechas'));           



        
      

    }

/*Cuenta los equipos operando por hora en una fecha determinada*/
public function contarEquipos($fecha,$id_estacion){

        //Cada variable donde se almacena el dato que retorna la funcion corresponde a una hora del dia
        $equipos_1=$this->equipoPorHora($fecha,'01:00',$id_estacion);
        $equipos_2=$this->equipoPorHora($fecha,'02:00',$id_estacion);
        $equipos_3=$this->equipoPorHora($fecha,'03:00',$id_estacion);
        $equipos_4=$this->equipoPorHora($fecha,'04:00',$id_estacion);
        $equipos_5=$this->equipoPorHora($fecha,'05:00',$id_estacion);
        $equipos_6=$this->equipoPorHora($fecha,'06:00',$id_estacion);
        $equipos_7=$this->equipoPorHora($fecha,'07:00',$id_estacion);
        $equipos_8=$this->equipoPorHora($fecha,'08:00',$id_estacion);
        $equipos_9=$this->equipoPorHora($fecha,'09:00',$id_estacion);
        $equipos_10=$this->equipoPorHora($fecha,'10:00',$id_estacion);
        $equipos_11=$this->equipoPorHora($fecha,'11:00',$id_estacion);
        $equipos_12=$this->equipoPorHora($fecha,'12:00',$id_estacion);
        $equipos_13=$this->equipoPorHora($fecha,'13:00',$id_estacion);
        $equipos_14=$this->equipoPorHora($fecha,'14:00',$id_estacion);
        $equipos_15=$this->equipoPorHora($fecha,'15:00',$id_estacion);
        $equipos_16=$this->equipoPorHora($fecha,'16:00',$id_estacion);
        $equipos_17=$this->equipoPorHora($fecha,'17:00',$id_estacion);
        $equipos_18=$this->equipoPorHora($fecha,'18:00',$id_estacion);
        $equipos_19=$this->equipoPorHora($fecha,'19:00',$id_estacion);
        $equipos_20=$this->equipoPorHora($fecha,'20:00',$id_estacion);
        $equipos_21=$this->equipoPorHora($fecha,'21:00',$id_estacion);
        $equipos_22=$this->equipoPorHora($fecha,'22:00',$id_estacion);
        $equipos_23=$this->equipoPorHora($fecha,'23:00',$id_estacion);
        $equipos_24=$this->equipoPorHora($fecha,'24:00',$id_estacion);

    
 //almacenando en un arreglo la cantidad de equipos operando por hora - 
 $array = array($equipos_1,$equipos_2,$equipos_3,$equipos_4,$equipos_5,$equipos_6,$equipos_7,$equipos_8,$equipos_9,$equipos_10,$equipos_11,$equipos_12,$equipos_13,$equipos_14,$equipos_15,$equipos_16,$equipos_17,$equipos_18,$equipos_19,$equipos_20,$equipos_21,$equipos_22,$equipos_23,$equipos_24);

                         

//contarà las veces que se repiten los equipos operando por hora se devulve en forma de arreglo
return $valores=array_count_values($array);
        
        

}

/*cuenta por hora los equipos operando*/
public function equipoPorHora($fecha,$hora,$id_estacion){

$conteo= DB::table('operacions')
        ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
        ->select('operacions.*','equipos.*')
        ->where('estado','=','Operando')
        ->whereDate('operacions.created_at','=',$fecha)
        ->where('operacions.hora','=',$hora)
        ->where('equipos.id_estacion','=',$id_estacion)
                            ->get()->count();

                            return $conteo;

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
      

        //Obtenemos el id y la fecha que se desea mostrar, del formulario de la vista
        $id_estacion=$request->id_estacion;
        $fechas=$request->fecha;

        $id_bocatoma=1;//id exclusivamente para BT
        $id_eb1=2;//id exclusivamente para EB1
        $id_eb2=3;//id exclusivamente para EB2
        $id_eb3=4;//id exclusivamente para EB3
      
        //Utilizada para extraer el nombre de la estacion y mostrarlo en la vista
        $estacion=DB::table('estacions')->where('id','=',$id_bocatoma)->get();

/*Busca los equipos por hora. Este corresponde a la hora 00:00 */

       $hora='24:00';
        $equipo_0=$this->equiposOperando($fechas,$hora,$id_bocatoma);
        $eq_eb1_0=$this->equiposOperando($fechas,$hora,$id_eb1);
        $eq_eb2_0=$this->equiposOperando($fechas,$hora,$id_eb2);
        $eq_eb3_0=$this->equiposOperando($fechas,$hora,$id_eb3);
       /* $equipo_0=DB::table('operacions')
        ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
        ->select('operacions.*','equipos.*')
        ->where('estado','=','Operando')
        ->whereDate('operacions.created_at','=',$fechas)
        ->where('operacions.hora','=','00:00')
        ->where('equipos.id_estacion','=',$id_estacion)
                            ->get();*/

         $hora1='01:00';
        $equipo_1=$this->equiposOperando($fechas,$hora1,$id_bocatoma);
        $eq_eb1_1=$this->equiposOperando($fechas,$hora1,$id_eb1);//para EB1
        $eq_eb2_1=$this->equiposOperando($fechas,$hora1,$id_eb2);
        $eq_eb3_1=$this->equiposOperando($fechas,$hora1,$id_eb3);

        $hora2='02:00';
        $equipo_2=$this->equiposOperando($fechas,$hora2,$id_bocatoma);
        $eq_eb1_2=$this->equiposOperando($fechas,$hora2,$id_eb1);
        $eq_eb2_2=$this->equiposOperando($fechas,$hora2,$id_eb2);
        $eq_eb3_2=$this->equiposOperando($fechas,$hora2,$id_eb3);
        
/*ojo, validar que las demas horas no se guarden en vacio...verificar*/
        $hora3='03:00';
         $equipo_3=$this->equiposOperando($fechas,$hora3,$id_bocatoma);
         $eq_eb1_3=$this->equiposOperando($fechas,$hora3,$id_eb1);
         $eq_eb2_3=$this->equiposOperando($fechas,$hora3,$id_eb2);
         $eq_eb3_3=$this->equiposOperando($fechas,$hora3,$id_eb3);

            $hora4='04:00';
          $equipo_4=$this->equiposOperando($fechas,$hora4,$id_bocatoma);
          $eq_eb1_4=$this->equiposOperando($fechas,$hora4,$id_eb1);
          $eq_eb2_4=$this->equiposOperando($fechas,$hora4,$id_eb2);
          $eq_eb3_4=$this->equiposOperando($fechas,$hora4,$id_eb3);

          $hora5='05:00';
          $equipo_5=$this->equiposOperando($fechas,$hora5,$id_bocatoma);
          $eq_eb1_5=$this->equiposOperando($fechas,$hora5,$id_eb1);
          $eq_eb2_5=$this->equiposOperando($fechas,$hora5,$id_eb2);
          $eq_eb3_5=$this->equiposOperando($fechas,$hora5,$id_eb3);

          $hora6='06:00';
          $equipo_6=$this->equiposOperando($fechas,$hora6,$id_bocatoma);
          $eq_eb1_6=$this->equiposOperando($fechas,$hora6,$id_eb1);
          $eq_eb2_6=$this->equiposOperando($fechas,$hora6,$id_eb2);
          $eq_eb3_6=$this->equiposOperando($fechas,$hora6,$id_eb3);

          $hora7='07:00';
          $equipo_7=$this->equiposOperando($fechas,$hora7,$id_bocatoma);
          $eq_eb1_7=$this->equiposOperando($fechas,$hora7,$id_eb1);
          $eq_eb2_7=$this->equiposOperando($fechas,$hora7,$id_eb2);
          $eq_eb3_7=$this->equiposOperando($fechas,$hora7,$id_eb3);

          $hora8='08:00';
          $equipo_8=$this->equiposOperando($fechas,$hora8,$id_bocatoma);
          $eq_eb1_8=$this->equiposOperando($fechas,$hora8,$id_eb1);
          $eq_eb2_8=$this->equiposOperando($fechas,$hora8,$id_eb2);
          $eq_eb3_8=$this->equiposOperando($fechas,$hora8,$id_eb3);

          $hora9='09:00';
          $equipo_9=$this->equiposOperando($fechas,$hora9,$id_bocatoma);
          $eq_eb1_9=$this->equiposOperando($fechas,$hora9,$id_eb1);
          $eq_eb2_9=$this->equiposOperando($fechas,$hora9,$id_eb2);
          $eq_eb3_9=$this->equiposOperando($fechas,$hora9,$id_eb3);

          $hora10='10:00';
          $equipo_10=$this->equiposOperando($fechas,$hora10,$id_bocatoma);
          $eq_eb1_10=$this->equiposOperando($fechas,$hora10,$id_eb1);
          $eq_eb2_10=$this->equiposOperando($fechas,$hora10,$id_eb2);
          $eq_eb3_10=$this->equiposOperando($fechas,$hora10,$id_eb3);


          $hora11='11:00';
          $equipo_11=$this->equiposOperando($fechas,$hora11,$id_bocatoma);
          $eq_eb1_11=$this->equiposOperando($fechas,$hora11,$id_eb1);
          $eq_eb2_11=$this->equiposOperando($fechas,$hora11,$id_eb2);
          $eq_eb3_11=$this->equiposOperando($fechas,$hora11,$id_eb3);


          $hora12='12:00';
          $equipo_12=$this->equiposOperando($fechas,$hora12,$id_bocatoma);
          $eq_eb1_12=$this->equiposOperando($fechas,$hora12,$id_eb1);
          $eq_eb2_12=$this->equiposOperando($fechas,$hora12,$id_eb2);
          $eq_eb3_12=$this->equiposOperando($fechas,$hora12,$id_eb3);


          $hora13='13:00';
          $equipo_13=$this->equiposOperando($fechas,$hora13,$id_bocatoma);
          $eq_eb1_13=$this->equiposOperando($fechas,$hora13,$id_eb1);
          $eq_eb2_13=$this->equiposOperando($fechas,$hora13,$id_eb2);
          $eq_eb3_13=$this->equiposOperando($fechas,$hora13,$id_eb3);


          $hora14='14:00';
          $equipo_14=$this->equiposOperando($fechas,$hora14,$id_bocatoma);
          $eq_eb1_14=$this->equiposOperando($fechas,$hora14,$id_eb1);
          $eq_eb2_14=$this->equiposOperando($fechas,$hora14,$id_eb2);
          $eq_eb3_14=$this->equiposOperando($fechas,$hora14,$id_eb3);


          $hora15='15:00';
          $equipo_15=$this->equiposOperando($fechas,$hora15,$id_bocatoma);
          $eq_eb1_15=$this->equiposOperando($fechas,$hora15,$id_eb1);
          $eq_eb2_15=$this->equiposOperando($fechas,$hora15,$id_eb2);
          $eq_eb3_15=$this->equiposOperando($fechas,$hora15,$id_eb3);


          $hora16='16:00';
          $equipo_16=$this->equiposOperando($fechas,$hora16,$id_bocatoma);
          $eq_eb1_16=$this->equiposOperando($fechas,$hora16,$id_eb1);
          $eq_eb2_16=$this->equiposOperando($fechas,$hora16,$id_eb2);
          $eq_eb3_16=$this->equiposOperando($fechas,$hora16,$id_eb3);



          $hora17='17:00';
          $equipo_17=$this->equiposOperando($fechas,$hora17,$id_bocatoma);
          $eq_eb1_17=$this->equiposOperando($fechas,$hora17,$id_eb1);
          $eq_eb2_17=$this->equiposOperando($fechas,$hora17,$id_eb2);
          $eq_eb3_17=$this->equiposOperando($fechas,$hora17,$id_eb3);


          $hora18='18:00';
          $equipo_18=$this->equiposOperando($fechas,$hora18,$id_bocatoma);
          $eq_eb1_18=$this->equiposOperando($fechas,$hora18,$id_eb1);
          $eq_eb2_18=$this->equiposOperando($fechas,$hora18,$id_eb2);
          $eq_eb3_18=$this->equiposOperando($fechas,$hora18,$id_eb3);


          $hora19='19:00';
          $equipo_19=$this->equiposOperando($fechas,$hora19,$id_bocatoma);
          $eq_eb1_19=$this->equiposOperando($fechas,$hora19,$id_eb1);
          $eq_eb2_19=$this->equiposOperando($fechas,$hora19,$id_eb2);
          $eq_eb3_19=$this->equiposOperando($fechas,$hora19,$id_eb3);


          $hora20='20:00';
          $equipo_20=$this->equiposOperando($fechas,$hora20,$id_bocatoma);
          $eq_eb1_20=$this->equiposOperando($fechas,$hora20,$id_eb1);
          $eq_eb2_20=$this->equiposOperando($fechas,$hora20,$id_eb2);
          $eq_eb3_20=$this->equiposOperando($fechas,$hora20,$id_eb3);


          $hora21='21:00';
          $equipo_21=$this->equiposOperando($fechas,$hora21,$id_bocatoma);
          $eq_eb1_21=$this->equiposOperando($fechas,$hora21,$id_eb1);
          $eq_eb2_21=$this->equiposOperando($fechas,$hora21,$id_eb2);
          $eq_eb3_21=$this->equiposOperando($fechas,$hora21,$id_eb3);

          $hora22='22:00';
          $equipo_22=$this->equiposOperando($fechas,$hora22,$id_bocatoma);
          $eq_eb1_22=$this->equiposOperando($fechas,$hora22,$id_eb1);
          $eq_eb2_22=$this->equiposOperando($fechas,$hora22,$id_eb2);
          $eq_eb3_22=$this->equiposOperando($fechas,$hora22,$id_eb3);


          $hora23='23:00';
          $equipo_23=$this->equiposOperando($fechas,$hora23,$id_bocatoma);
          $eq_eb1_23=$this->equiposOperando($fechas,$hora23,$id_eb1);
          $eq_eb2_23=$this->equiposOperando($fechas,$hora23,$id_eb2);
          $eq_eb3_23=$this->equiposOperando($fechas,$hora23,$id_eb3);
          
          





          
        return view ('equipos',compact('estacion','equipo_0','equipo_1','equipo_2','equipo_3','equipo_4','equipo_5','equipo_6','equipo_7','equipo_8','equipo_9','equipo_10','equipo_11','equipo_12','equipo_13','equipo_14','equipo_15','equipo_16','equipo_17','equipo_18','equipo_19','equipo_20','equipo_21','equipo_22','equipo_23','eq_eb1_0','eq_eb1_1','eq_eb1_2','eq_eb1_3','eq_eb1_4','eq_eb1_5','eq_eb1_6','eq_eb1_7','eq_eb1_8','eq_eb1_9','eq_eb1_10','eq_eb1_11','eq_eb1_12','eq_eb1_13','eq_eb1_14','eq_eb1_15','eq_eb1_16','eq_eb1_17','eq_eb1_18','eq_eb1_19','eq_eb1_20','eq_eb1_21','eq_eb1_22','eq_eb1_23','eq_eb2_0','eq_eb2_1','eq_eb2_2','eq_eb2_3','eq_eb2_4','eq_eb2_5','eq_eb2_6','eq_eb2_7','eq_eb2_8','eq_eb2_9','eq_eb2_10','eq_eb2_11','eq_eb2_12','eq_eb2_13','eq_eb2_14','eq_eb2_15','eq_eb2_16','eq_eb2_17','eq_eb2_18','eq_eb2_19','eq_eb2_20','eq_eb2_21','eq_eb2_22','eq_eb2_23','eq_eb3_0','eq_eb3_1','eq_eb3_2','eq_eb3_3','eq_eb3_4','eq_eb3_5','eq_eb3_6','eq_eb3_7','eq_eb3_8','eq_eb3_9','eq_eb3_10','eq_eb3_11','eq_eb3_12','eq_eb3_13','eq_eb3_14','eq_eb3_15','eq_eb3_16','eq_eb3_17','eq_eb3_18','eq_eb3_19','eq_eb3_20','eq_eb3_21','eq_eb3_22','eq_eb3_23','fechas'));

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
        ->whereDate('operacions.fecha','=',$fecha)
        ->where('operacions.hora','=',$horas)
        ->where('equipos.id_estacion','=',$id_esta)
                            ->get();

                            return $equipo;

    }



    /*Verifica la operacion de un solo equipo en particular*/
    public function operacion($fecha,$horas,$id_estacion){

        $id= DB::table('operacions')
        ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
        ->select('operacions.id','operacions.id_equipo','equipos.id_estacion','operacions.estado')
        //->select('operacions.id_equipo')
        //->where('estado','=','Operando')
        ->where('fecha','=',$fecha)
        ->where('operacions.hora','=',$horas)
        ->where('equipos.id_estacion','=',$id_estacion)

        ->get();
                            //retorna el id asignado a ese equipo
                            return $id;

    }
    /*Recupera el id de la tabla Operacions de los equipos SIN OPERAR*/
   /* public function sinOperacion($fecha,$horas,$id_estacion){

        $id= DB::table('operacions')
        ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
        ->select('operacions.id','operacions.id_equipo','equipos.id_estacion')
        
        ->where('estado','=','Sin Operar')
        ->where('fecha','=',$fecha)
        ->where('operacions.hora','=',$horas)
        ->where('equipos.id_estacion','=',$id_estacion)

        ->get();
                            //retorna el id asignado a ese equipo
                            return $id;

    }*/


/*Precargará la informacion de los equipos operando Y Sin Operar en cierta fecha/hora de las estaciones, datos que posteriormente permitiran su edicion
*/
    public function precargar($hora,$fecha,$id_estacion){

        //Extrayendo id de la tabla operacions de los equipos OPERANDO de BT
         $ids=$this->operacion($fecha,$hora,$id_estacion);
        //Extrayendo id de la tabla operacions de los equipos OPERANDO de EB1
         $id1=$this->operacion($fecha,$hora,2);
         //Extrayendo id de la tabla operacions de los equipos OPERANDO de EB2
         $id2=$this->operacion($fecha,$hora,3);
          //Extrayendo id de la tabla operacions de los equipos OPERANDO de EB2
         $id3=$this->operacion($fecha,$hora,4);


       
       

        return view('editar-equipos',compact('hora','fecha','ids','id1','id2','id3'));

    }


    /**
     * Actualiza los equipos operando segun la vista EDITAR-EQUIPOS, aqui se manejan los datos que se envian desde esta vista para actualizar el estado de los equipos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function actualizarEquipos(Request $request){

        $fecha=$request->fecha;
        $hora=$request->hora;
        /*ACTUALIZACION DE EQUIPOS DE BT*/
        $estado=$request->eq1;
        $ideq=$request->id1;//este es el id de toda la tupla, es decir el registro que se modificará--NO ES DEL EQUIPO

        $this->actualizarEquipo($ideq,$estado,$hora,$fecha);
        $est2=$request->eq2;
        $id_2=$request->id2;
        $this->actualizarEquipo($id_2,$est2,$hora,$fecha);
        $est3=$request->eq3;
        $id_3=$request->id3;
        $this->actualizarEquipo($id_3,$est3,$hora,$fecha);
        $est4=$request->eq4;
        $id_4=$request->id4;
        $this->actualizarEquipo($id_4,$est4,$hora,$fecha);
        $est5=$request->eq5;
        $id_5=$request->id5;
        $this->actualizarEquipo($id_5,$est5,$hora,$fecha);
        $est6=$request->eq6;
        $id_6=$request->id6;
        $this->actualizarEquipo($id_6,$est6,$hora,$fecha);
        $est7=$request->eq7;
        $id_7=$request->id7;
        $this->actualizarEquipo($id_7,$est7,$hora,$fecha);
        $est8=$request->eq8;
        $id_8=$request->id8;
        $this->actualizarEquipo($id_8,$est8,$hora,$fecha);

        /*FIN ACTUALIZACION DE EQUIPOS DE BT*/
        /*ACTUALIZACION DE EQUIPOS DE EB1*/
         $est11=$request->eb11;
         $id_9=$request->id9;
        $this->actualizarEquipo($id_9,$est11,$hora,$fecha);
        $est12=$request->eb12;
        $id_10=$request->id10;
        $this->actualizarEquipo($id_10,$est12,$hora,$fecha);
        $est13=$request->eb13;
        $id_11=$request->id11;
        $this->actualizarEquipo($id_11,$est13,$hora,$fecha);
        $est14=$request->eb14;
        $id_12=$request->id12;
        $this->actualizarEquipo($id_12,$est14,$hora,$fecha);
        $est15=$request->eb15;
        $id_13=$request->id13;
        $this->actualizarEquipo($id_13,$est15,$hora,$fecha);
        $est16=$request->eb16;
        $id_14=$request->id14;
        $this->actualizarEquipo($id_14,$est16,$hora,$fecha);
        $est17=$request->eb17;
        $id_15=$request->id15;
        $this->actualizarEquipo($id_15,$est17,$hora,$fecha);
        

        /*FIN ACTUALIZACION DE EQUIPOS DE EB1*/
        /*ACTUALIZACION DE EQUIPOS DE EB2*/
            $est21=$request->eb21;
            $id_16=$request->id16;
            $this->actualizarEquipo($id_16,$est21,$hora,$fecha);
            $est22=$request->eb22;
            $id_17=$request->id17;
            $this->actualizarEquipo($id_17,$est22,$hora,$fecha);
            $est23=$request->eb23;
            $id_18=$request->id18;
            $this->actualizarEquipo($id_18,$est23,$hora,$fecha);
            $est24=$request->eb24;
            $id_19=$request->id19;
            $this->actualizarEquipo($id_19,$est24,$hora,$fecha);
            $est25=$request->eb25;
            $id_20=$request->id20;
            $this->actualizarEquipo($id_20,$est25,$hora,$fecha);
            $est26=$request->eb26;
            $id_21=$request->id21;
            $this->actualizarEquipo($id_21,$est26,$hora,$fecha);
            $est27=$request->eb27;
            $id_22=$request->id22;
            $this->actualizarEquipo($id_22,$est27,$hora,$fecha);
        

        /*FIN ACTUALIZACION DE EQUIPOS DE EB2*/
         /*ACTUALIZACION DE EQUIPOS DE EB3*/
            $est31=$request->eb31;
            $id_23=$request->id23;
            $this->actualizarEquipo($id_23,$est31,$hora,$fecha);
            $est32=$request->eb32;
            $id_24=$request->id24;
            $this->actualizarEquipo($id_24,$est32,$hora,$fecha);
            $est33=$request->eb33;
            $id_25=$request->id25;
            $this->actualizarEquipo($id_25,$est33,$hora,$fecha);
            $est34=$request->eb34;
            $id_26=$request->id26;
            $this->actualizarEquipo($id_26,$est34,$hora,$fecha);
            $est35=$request->eb35;
            $id_27=$request->id27;
            $this->actualizarEquipo($id_27,$est35,$hora,$fecha);
            $est36=$request->eb36;
            $id_28=$request->id28;
            $this->actualizarEquipo($id_28,$est36,$hora,$fecha);
            $est37=$request->eb37;
            $id_29=$request->id29;
            $this->actualizarEquipo($id_29,$est37,$hora,$fecha);
        

        /*FIN ACTUALIZACION DE EQUIPOS DE EB3*/


    return view('welcome');



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

/*Metodo que recibe el estado del checkbox y el id del equipo a procesar y asi actualizar su estado */
    public function actualizarEquipo($id,$estado,$hora,$fecha){

        //se busca mediante el id el equipo que se desea actualizar
        $Equipo= Operacion::find($id);

        /*Pasando al metodo el valor del estado del chekbox del eq de bombeo desde el formulario*/
        $valor= $this->verificarEstado($estado);
        
        //asignando a la tabla operacions->estado, el estado del equipo segun el chekbox
        $Equipo->estado=$valor;

        //NO SERIA NECESARIO PORQUE POR ESO SE FILTRA MEDIANTE EL ID DE LA TABLA LA TUPLA A MODIFICAR
        //$Equipo->id_equipo=$idEquipo;//del input oculto de la vista tomamos el id del equipo 
        $Equipo->fecha=$fecha;
        $Equipo->hora=$hora;

        $Equipo->save();

        return 'Guardado';


    }







}
