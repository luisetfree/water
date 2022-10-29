<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operacion;
use Illuminate\Support\Facades\DB;

class OperacionController extends Controller
{
    /**
     * Este metodo replica exactamente al metodo store, sin embargo filtra la fecha actual. Carga los datos del dia actual y los muestra en la vista equipos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $fechas=date("Y-m-d");//fecha actual

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
          
          
$cont_bt_1=$this->contarEquipos($fechas,$id_bocatoma);


/*VALIDACION DE EQUIPOS TRABAJANDO POR HORAS*/
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

/*FIN DE VALIDACION DE EQUIPOS TRABAJANDO POR HORAS*/

          
        return view ('equipos',compact('estacion','equipo_0','equipo_1','equipo_2','equipo_3','equipo_4','equipo_5','equipo_6','equipo_7','equipo_8','equipo_9','equipo_10','equipo_11','equipo_12','equipo_13','equipo_14','equipo_15','equipo_16','equipo_17','equipo_18','equipo_19','equipo_20','equipo_21','equipo_22','equipo_23','eq_eb1_0','eq_eb1_1','eq_eb1_2','eq_eb1_3','eq_eb1_4','eq_eb1_5','eq_eb1_6','eq_eb1_7','eq_eb1_8','eq_eb1_9','eq_eb1_10','eq_eb1_11','eq_eb1_12','eq_eb1_13','eq_eb1_14','eq_eb1_15','eq_eb1_16','eq_eb1_17','eq_eb1_18','eq_eb1_19','eq_eb1_20','eq_eb1_21','eq_eb1_22','eq_eb1_23','eq_eb2_0','eq_eb2_1','eq_eb2_2','eq_eb2_3','eq_eb2_4','eq_eb2_5','eq_eb2_6','eq_eb2_7','eq_eb2_8','eq_eb2_9','eq_eb2_10','eq_eb2_11','eq_eb2_12','eq_eb2_13','eq_eb2_14','eq_eb2_15','eq_eb2_16','eq_eb2_17','eq_eb2_18','eq_eb2_19','eq_eb2_20','eq_eb2_21','eq_eb2_22','eq_eb2_23','eq_eb3_0','eq_eb3_1','eq_eb3_2','eq_eb3_3','eq_eb3_4','eq_eb3_5','eq_eb3_6','eq_eb3_7','eq_eb3_8','eq_eb3_9','eq_eb3_10','eq_eb3_11','eq_eb3_12','eq_eb3_13','eq_eb3_14','eq_eb3_15','eq_eb3_16','eq_eb3_17','eq_eb3_18','eq_eb3_19','eq_eb3_20','eq_eb3_21','eq_eb3_22','eq_eb3_23','fechas','cont_bt_1','bt_0_h','bt_1_h','bt_2_h','bt_3_h','bt_4_h','bt_5_h','bt_6_h'));           



        
      

    }

/*Cuenta los equipos operando por hora en una fecha determinada*/
public function contarEquipos($fecha,$id_estacion){

    
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

                            


//verificando si en el arreglo existe el valor mencionado--mejorar esta forma---
/*if (in_array('2',$array)) {
    return 2;
}elseif (in_array('5',$array)){
    return 5;
}else{

    return 0;

}*/

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
        ->whereDate('operacions.created_at','=',$fecha)
        ->where('operacions.hora','=',$horas)
        ->where('equipos.id_estacion','=',$id_esta)
                            ->get();

                            return $equipo;

    }
}
