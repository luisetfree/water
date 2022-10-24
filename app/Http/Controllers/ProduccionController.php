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
        //ID de estaciones y quimicos
      $id_bocatoma=1;
      $id_eb1=2;
      $id_eb2=3;
      $id_eb3=4;
      $id_terminales=5;
      $id_BellaV=6;
      $id_cloro=8;

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

/*Extrayendo datos de Consumos*/

             
$fecha=date("Y-m-d");//Tomando la fecha del dia de hoy
$hora_1='01:00';
$hora_2='02:00';
$hora_3='03:00';
$hora_4='04:00';
$hora_5='05:00';
$hora_6='06:00';
$hora_7='07:00';
$hora_8='08:00';
$hora_9='09:00';
$hora_10='10:00';
$hora_11='11:00';
$hora_12='12:00';
$hora_13='13:00';
$hora_14='14:00';
$hora_15='15:00';
$hora_16='16:00';
$hora_17='17:00';
$hora_18='18:00';
$hora_19='19:00';
$hora_20='20:00';
$hora_21='21:00';
$hora_22='22:00';
$hora_23='23:00';
$hora_24='24:00';


$id_coagulante=5;//sulfato

$con_coagu_1=$this->datosConsumo($fecha,$hora_1,$id_coagulante);
$con_coagu_2=$this->datosConsumo($fecha,$hora_2,$id_coagulante);
$con_coagu_3=$this->datosConsumo($fecha,$hora_3,$id_coagulante);
$con_coagu_4=$this->datosConsumo($fecha,$hora_4,$id_coagulante);
$con_coagu_5=$this->datosConsumo($fecha,$hora_5,$id_coagulante);
$con_coagu_6=$this->datosConsumo($fecha,$hora_6,$id_coagulante);
$con_coagu_7=$this->datosConsumo($fecha,$hora_7,$id_coagulante);
$con_coagu_8=$this->datosConsumo($fecha,$hora_8,$id_coagulante);
$con_coagu_9=$this->datosConsumo($fecha,$hora_9,$id_coagulante);
$con_coagu_10=$this->datosConsumo($fecha,$hora_10,$id_coagulante);
$con_coagu_11=$this->datosConsumo($fecha,$hora_11,$id_coagulante);
$con_coagu_12=$this->datosConsumo($fecha,$hora_12,$id_coagulante);
$con_coagu_13=$this->datosConsumo($fecha,$hora_13,$id_coagulante);
$con_coagu_14=$this->datosConsumo($fecha,$hora_14,$id_coagulante);
$con_coagu_15=$this->datosConsumo($fecha,$hora_15,$id_coagulante);
$con_coagu_16=$this->datosConsumo($fecha,$hora_16,$id_coagulante);
$con_coagu_17=$this->datosConsumo($fecha,$hora_17,$id_coagulante);
$con_coagu_18=$this->datosConsumo($fecha,$hora_18,$id_coagulante);
$con_coagu_19=$this->datosConsumo($fecha,$hora_19,$id_coagulante);
$con_coagu_20=$this->datosConsumo($fecha,$hora_20,$id_coagulante);
$con_coagu_21=$this->datosConsumo($fecha,$hora_21,$id_coagulante);
$con_coagu_22=$this->datosConsumo($fecha,$hora_22,$id_coagulante);
$con_coagu_23=$this->datosConsumo($fecha,$hora_23,$id_coagulante);
$con_coagu_24=$this->datosConsumo($fecha,$hora_24,$id_coagulante);

$id_polimero=7;//Polimero

$con_poli_1=$this->datosConsumo($fecha,$hora_1,$id_polimero);
$con_poli_2=$this->datosConsumo($fecha,$hora_2,$id_polimero);
$con_poli_3=$this->datosConsumo($fecha,$hora_3,$id_polimero);
$con_poli_4=$this->datosConsumo($fecha,$hora_4,$id_polimero);
$con_poli_5=$this->datosConsumo($fecha,$hora_5,$id_polimero);
$con_poli_6=$this->datosConsumo($fecha,$hora_6,$id_polimero);
$con_poli_7=$this->datosConsumo($fecha,$hora_7,$id_polimero);
$con_poli_8=$this->datosConsumo($fecha,$hora_8,$id_polimero);
$con_poli_9=$this->datosConsumo($fecha,$hora_9,$id_polimero);
$con_poli_10=$this->datosConsumo($fecha,$hora_10,$id_polimero);
$con_poli_11=$this->datosConsumo($fecha,$hora_11,$id_polimero);
$con_poli_12=$this->datosConsumo($fecha,$hora_12,$id_polimero);
$con_poli_13=$this->datosConsumo($fecha,$hora_13,$id_polimero);
$con_poli_14=$this->datosConsumo($fecha,$hora_14,$id_polimero);
$con_poli_15=$this->datosConsumo($fecha,$hora_15,$id_polimero);
$con_poli_16=$this->datosConsumo($fecha,$hora_16,$id_polimero);
$con_poli_17=$this->datosConsumo($fecha,$hora_17,$id_polimero);
$con_poli_18=$this->datosConsumo($fecha,$hora_18,$id_polimero);
$con_poli_19=$this->datosConsumo($fecha,$hora_19,$id_polimero);
$con_poli_20=$this->datosConsumo($fecha,$hora_20,$id_polimero);
$con_poli_21=$this->datosConsumo($fecha,$hora_21,$id_polimero);
$con_poli_22=$this->datosConsumo($fecha,$hora_22,$id_polimero);
$con_poli_23=$this->datosConsumo($fecha,$hora_23,$id_polimero);
$con_poli_24=$this->datosConsumo($fecha,$hora_24,$id_polimero);

$id_permanganato=1;//Permanganato

$con_perm_1=$this->datosConsumo($fecha,$hora_1,$id_permanganato);
$con_perm_2=$this->datosConsumo($fecha,$hora_2,$id_permanganato);
$con_perm_3=$this->datosConsumo($fecha,$hora_3,$id_permanganato);
$con_perm_4=$this->datosConsumo($fecha,$hora_4,$id_permanganato);
$con_perm_5=$this->datosConsumo($fecha,$hora_5,$id_permanganato);
$con_perm_6=$this->datosConsumo($fecha,$hora_6,$id_permanganato);
$con_perm_7=$this->datosConsumo($fecha,$hora_7,$id_permanganato);
$con_perm_8=$this->datosConsumo($fecha,$hora_8,$id_permanganato);
$con_perm_9=$this->datosConsumo($fecha,$hora_9,$id_permanganato);
$con_perm_10=$this->datosConsumo($fecha,$hora_10,$id_permanganato);
$con_perm_11=$this->datosConsumo($fecha,$hora_11,$id_permanganato);
$con_perm_12=$this->datosConsumo($fecha,$hora_12,$id_permanganato);
$con_perm_13=$this->datosConsumo($fecha,$hora_13,$id_permanganato);
$con_perm_14=$this->datosConsumo($fecha,$hora_14,$id_permanganato);
$con_perm_15=$this->datosConsumo($fecha,$hora_15,$id_permanganato);
$con_perm_16=$this->datosConsumo($fecha,$hora_16,$id_permanganato);
$con_perm_17=$this->datosConsumo($fecha,$hora_17,$id_permanganato);
$con_perm_18=$this->datosConsumo($fecha,$hora_18,$id_permanganato);
$con_perm_19=$this->datosConsumo($fecha,$hora_19,$id_permanganato);
$con_perm_20=$this->datosConsumo($fecha,$hora_20,$id_permanganato);
$con_perm_21=$this->datosConsumo($fecha,$hora_21,$id_permanganato);
$con_perm_22=$this->datosConsumo($fecha,$hora_22,$id_permanganato);
$con_perm_23=$this->datosConsumo($fecha,$hora_23,$id_permanganato);
$con_perm_24=$this->datosConsumo($fecha,$hora_24,$id_permanganato);

$id_carbon=2;//Carbon activo

$con_carbon_1=$this->datosConsumo($fecha,$hora_1,$id_carbon);
$con_carbon_2=$this->datosConsumo($fecha,$hora_2,$id_carbon);
$con_carbon_3=$this->datosConsumo($fecha,$hora_3,$id_carbon);
$con_carbon_4=$this->datosConsumo($fecha,$hora_4,$id_carbon);
$con_carbon_5=$this->datosConsumo($fecha,$hora_5,$id_carbon);
$con_carbon_6=$this->datosConsumo($fecha,$hora_6,$id_carbon);
$con_carbon_7=$this->datosConsumo($fecha,$hora_7,$id_carbon);
$con_carbon_8=$this->datosConsumo($fecha,$hora_8,$id_carbon);
$con_carbon_9=$this->datosConsumo($fecha,$hora_9,$id_carbon);
$con_carbon_10=$this->datosConsumo($fecha,$hora_10,$id_carbon);
$con_carbon_11=$this->datosConsumo($fecha,$hora_11,$id_carbon);
$con_carbon_12=$this->datosConsumo($fecha,$hora_12,$id_carbon);
$con_carbon_13=$this->datosConsumo($fecha,$hora_13,$id_carbon);
$con_carbon_14=$this->datosConsumo($fecha,$hora_14,$id_carbon);
$con_carbon_15=$this->datosConsumo($fecha,$hora_15,$id_carbon);
$con_carbon_16=$this->datosConsumo($fecha,$hora_16,$id_carbon);
$con_carbon_17=$this->datosConsumo($fecha,$hora_17,$id_carbon);
$con_carbon_18=$this->datosConsumo($fecha,$hora_18,$id_carbon);
$con_carbon_19=$this->datosConsumo($fecha,$hora_19,$id_carbon);
$con_carbon_20=$this->datosConsumo($fecha,$hora_20,$id_carbon);
$con_carbon_21=$this->datosConsumo($fecha,$hora_21,$id_carbon);
$con_carbon_22=$this->datosConsumo($fecha,$hora_22,$id_carbon);
$con_carbon_23=$this->datosConsumo($fecha,$hora_23,$id_carbon);
$con_carbon_24=$this->datosConsumo($fecha,$hora_24,$id_carbon);

$id_cal=4;//Cal

$con_cal_1=$this->datosConsumo($fecha,$hora_1,$id_cal);
$con_cal_2=$this->datosConsumo($fecha,$hora_2,$id_cal);
$con_cal_3=$this->datosConsumo($fecha,$hora_3,$id_cal);
$con_cal_4=$this->datosConsumo($fecha,$hora_4,$id_cal);
$con_cal_5=$this->datosConsumo($fecha,$hora_5,$id_cal);
$con_cal_6=$this->datosConsumo($fecha,$hora_6,$id_cal);
$con_cal_7=$this->datosConsumo($fecha,$hora_7,$id_cal);
$con_cal_8=$this->datosConsumo($fecha,$hora_8,$id_cal);
$con_cal_9=$this->datosConsumo($fecha,$hora_9,$id_cal);
$con_cal_10=$this->datosConsumo($fecha,$hora_10,$id_cal);
$con_cal_11=$this->datosConsumo($fecha,$hora_11,$id_cal);
$con_cal_12=$this->datosConsumo($fecha,$hora_12,$id_cal);
$con_cal_13=$this->datosConsumo($fecha,$hora_13,$id_cal);
$con_cal_14=$this->datosConsumo($fecha,$hora_14,$id_cal);
$con_cal_15=$this->datosConsumo($fecha,$hora_15,$id_cal);
$con_cal_16=$this->datosConsumo($fecha,$hora_16,$id_cal);
$con_cal_17=$this->datosConsumo($fecha,$hora_17,$id_cal);
$con_cal_18=$this->datosConsumo($fecha,$hora_18,$id_cal);
$con_cal_19=$this->datosConsumo($fecha,$hora_19,$id_cal);
$con_cal_20=$this->datosConsumo($fecha,$hora_20,$id_cal);
$con_cal_21=$this->datosConsumo($fecha,$hora_21,$id_cal);
$con_cal_22=$this->datosConsumo($fecha,$hora_22,$id_cal);
$con_cal_23=$this->datosConsumo($fecha,$hora_23,$id_cal);
$con_cal_24=$this->datosConsumo($fecha,$hora_24,$id_cal);

       /*CALCULO DE CLORO*/
       
       $cloro_hora_1=$this->calculoCloroAplicado($fecha,$hora_1,$id_cloro,$id_bocatoma);
       $cloro_hora_2=$this->calculoCloroAplicado($fecha,$hora_2,$id_cloro,$id_bocatoma);
       $cloro_hora_3=$this->calculoCloroAplicado($fecha,$hora_3,$id_cloro,$id_bocatoma);
       $cloro_hora_4=$this->calculoCloroAplicado($fecha,$hora_4,$id_cloro,$id_bocatoma);
       $cloro_hora_5=$this->calculoCloroAplicado($fecha,$hora_5,$id_cloro,$id_bocatoma);
       $cloro_hora_6=$this->calculoCloroAplicado($fecha,$hora_6,$id_cloro,$id_bocatoma);
       $cloro_hora_7=$this->calculoCloroAplicado($fecha,$hora_7,$id_cloro,$id_bocatoma);
       $cloro_hora_8=$this->calculoCloroAplicado($fecha,$hora_8,$id_cloro,$id_bocatoma);
       $cloro_hora_9=$this->calculoCloroAplicado($fecha,$hora_9,$id_cloro,$id_bocatoma);
       $cloro_hora_10=$this->calculoCloroAplicado($fecha,$hora_10,$id_cloro,$id_bocatoma);       
       $cloro_hora_11=$this->calculoCloroAplicado($fecha,$hora_11,$id_cloro,$id_bocatoma);
       $cloro_hora_12=$this->calculoCloroAplicado($fecha,$hora_12,$id_cloro,$id_bocatoma);
       $cloro_hora_13=$this->calculoCloroAplicado($fecha,$hora_13,$id_cloro,$id_bocatoma);
       $cloro_hora_14=$this->calculoCloroAplicado($fecha,$hora_14,$id_cloro,$id_bocatoma);
       $cloro_hora_15=$this->calculoCloroAplicado($fecha,$hora_15,$id_cloro,$id_bocatoma);
       $cloro_hora_16=$this->calculoCloroAplicado($fecha,$hora_16,$id_cloro,$id_bocatoma);
       $cloro_hora_17=$this->calculoCloroAplicado($fecha,$hora_17,$id_cloro,$id_bocatoma);
       $cloro_hora_18=$this->calculoCloroAplicado($fecha,$hora_18,$id_cloro,$id_bocatoma);
       $cloro_hora_19=$this->calculoCloroAplicado($fecha,$hora_19,$id_cloro,$id_bocatoma);
       $cloro_hora_20=$this->calculoCloroAplicado($fecha,$hora_20,$id_cloro,$id_bocatoma);
       $cloro_hora_21=$this->calculoCloroAplicado($fecha,$hora_21,$id_cloro,$id_bocatoma);
       $cloro_hora_22=$this->calculoCloroAplicado($fecha,$hora_22,$id_cloro,$id_bocatoma);
       $cloro_hora_23=$this->calculoCloroAplicado($fecha,$hora_23,$id_cloro,$id_bocatoma);
       $cloro_hora_24=$this->calculoCloroAplicado($fecha,$hora_24,$id_cloro,$id_bocatoma);


       /*DATOS DE BOCATOMA*/

        /*Caudal BT*/
       $datos_bt_1=$this->datosBT($fecha,$hora_1,$id_bocatoma);
       $datos_bt_2=$this->datosBT($fecha,$hora_2,$id_bocatoma);
       $datos_bt_3=$this->datosBT($fecha,$hora_3,$id_bocatoma);
       $datos_bt_4=$this->datosBT($fecha,$hora_4,$id_bocatoma);
       $datos_bt_5=$this->datosBT($fecha,$hora_5,$id_bocatoma);
       $datos_bt_6=$this->datosBT($fecha,$hora_6,$id_bocatoma);
       $datos_bt_7=$this->datosBT($fecha,$hora_7,$id_bocatoma);
       $datos_bt_8=$this->datosBT($fecha,$hora_8,$id_bocatoma);
       $datos_bt_9=$this->datosBT($fecha,$hora_9,$id_bocatoma);
       $datos_bt_10=$this->datosBT($fecha,$hora_10,$id_bocatoma);
       $datos_bt_11=$this->datosBT($fecha,$hora_11,$id_bocatoma);
       $datos_bt_12=$this->datosBT($fecha,$hora_12,$id_bocatoma);
       $datos_bt_13=$this->datosBT($fecha,$hora_13,$id_bocatoma);
       $datos_bt_14=$this->datosBT($fecha,$hora_14,$id_bocatoma);
       $datos_bt_15=$this->datosBT($fecha,$hora_15,$id_bocatoma);
       $datos_bt_16=$this->datosBT($fecha,$hora_16,$id_bocatoma);
       $datos_bt_17=$this->datosBT($fecha,$hora_17,$id_bocatoma);
       $datos_bt_18=$this->datosBT($fecha,$hora_18,$id_bocatoma);
       $datos_bt_19=$this->datosBT($fecha,$hora_19,$id_bocatoma);
       $datos_bt_20=$this->datosBT($fecha,$hora_20,$id_bocatoma);
       $datos_bt_21=$this->datosBT($fecha,$hora_21,$id_bocatoma);
       $datos_bt_22=$this->datosBT($fecha,$hora_22,$id_bocatoma);
       $datos_bt_23=$this->datosBT($fecha,$hora_23,$id_bocatoma);
       $datos_bt_24=$this->datosBT($fecha,$hora_24,$id_bocatoma);


       /*CONTEO EQUIPOS OPERANDO*/

       $eq_oper_1=$this->totalEquiposOperando($fecha,$hora_1,$id_bocatoma);
       $eq_oper_2=$this->totalEquiposOperando($fecha,$hora_2,$id_bocatoma);
       $eq_oper_3=$this->totalEquiposOperando($fecha,$hora_3,$id_bocatoma);
       $eq_oper_4=$this->totalEquiposOperando($fecha,$hora_4,$id_bocatoma);
       $eq_oper_5=$this->totalEquiposOperando($fecha,$hora_5,$id_bocatoma);
       $eq_oper_6=$this->totalEquiposOperando($fecha,$hora_6,$id_bocatoma);
       $eq_oper_7=$this->totalEquiposOperando($fecha,$hora_7,$id_bocatoma);
       $eq_oper_8=$this->totalEquiposOperando($fecha,$hora_8,$id_bocatoma);
       $eq_oper_9=$this->totalEquiposOperando($fecha,$hora_9,$id_bocatoma);
       $eq_oper_10=$this->totalEquiposOperando($fecha,$hora_10,$id_bocatoma);
       $eq_oper_11=$this->totalEquiposOperando($fecha,$hora_11,$id_bocatoma);
       $eq_oper_12=$this->totalEquiposOperando($fecha,$hora_12,$id_bocatoma);
       $eq_oper_13=$this->totalEquiposOperando($fecha,$hora_13,$id_bocatoma);
       $eq_oper_14=$this->totalEquiposOperando($fecha,$hora_14,$id_bocatoma);
       $eq_oper_15=$this->totalEquiposOperando($fecha,$hora_15,$id_bocatoma);
       $eq_oper_16=$this->totalEquiposOperando($fecha,$hora_16,$id_bocatoma);
       $eq_oper_17=$this->totalEquiposOperando($fecha,$hora_17,$id_bocatoma);
       $eq_oper_18=$this->totalEquiposOperando($fecha,$hora_18,$id_bocatoma);
       $eq_oper_19=$this->totalEquiposOperando($fecha,$hora_19,$id_bocatoma);
       $eq_oper_20=$this->totalEquiposOperando($fecha,$hora_20,$id_bocatoma);
       $eq_oper_21=$this->totalEquiposOperando($fecha,$hora_21,$id_bocatoma);
       $eq_oper_22=$this->totalEquiposOperando($fecha,$hora_22,$id_bocatoma);
       $eq_oper_23=$this->totalEquiposOperando($fecha,$hora_23,$id_bocatoma);
       $eq_oper_24=$this->totalEquiposOperando($fecha,$hora_24,$id_bocatoma);

       /*CLORO RESIDUAL ESTACIONES*/
       //EB2
       $cl_eb2_1=$this->cloroEstaciones($fecha,$hora_1,$id_eb2);
       $cl_eb2_2=$this->cloroEstaciones($fecha,$hora_2,$id_eb2);
       $cl_eb2_3=$this->cloroEstaciones($fecha,$hora_3,$id_eb2);
       $cl_eb2_4=$this->cloroEstaciones($fecha,$hora_4,$id_eb2);
       $cl_eb2_5=$this->cloroEstaciones($fecha,$hora_5,$id_eb2);
       $cl_eb2_6=$this->cloroEstaciones($fecha,$hora_6,$id_eb2);
       $cl_eb2_7=$this->cloroEstaciones($fecha,$hora_7,$id_eb2);
       $cl_eb2_8=$this->cloroEstaciones($fecha,$hora_8,$id_eb2);
       $cl_eb2_9=$this->cloroEstaciones($fecha,$hora_9,$id_eb2);
       $cl_eb2_10=$this->cloroEstaciones($fecha,$hora_10,$id_eb2);
       $cl_eb2_11=$this->cloroEstaciones($fecha,$hora_11,$id_eb2);
       $cl_eb2_12=$this->cloroEstaciones($fecha,$hora_12,$id_eb2);
       $cl_eb2_13=$this->cloroEstaciones($fecha,$hora_13,$id_eb2);
       $cl_eb2_14=$this->cloroEstaciones($fecha,$hora_14,$id_eb2);
       $cl_eb2_15=$this->cloroEstaciones($fecha,$hora_15,$id_eb2);
       $cl_eb2_16=$this->cloroEstaciones($fecha,$hora_16,$id_eb2);
       $cl_eb2_17=$this->cloroEstaciones($fecha,$hora_17,$id_eb2);
       $cl_eb2_18=$this->cloroEstaciones($fecha,$hora_18,$id_eb2);
       $cl_eb2_19=$this->cloroEstaciones($fecha,$hora_19,$id_eb2);
       $cl_eb2_20=$this->cloroEstaciones($fecha,$hora_20,$id_eb2);
       $cl_eb2_21=$this->cloroEstaciones($fecha,$hora_21,$id_eb2);
       $cl_eb2_22=$this->cloroEstaciones($fecha,$hora_22,$id_eb2);
       $cl_eb2_23=$this->cloroEstaciones($fecha,$hora_23,$id_eb2);
       $cl_eb2_24=$this->cloroEstaciones($fecha,$hora_24,$id_eb2);   

       //cloro residual-EB3
       $cl_eb3_1=$this->cloroEstaciones($fecha,$hora_1,$id_eb3);
       $cl_eb3_2=$this->cloroEstaciones($fecha,$hora_2,$id_eb3);
       $cl_eb3_3=$this->cloroEstaciones($fecha,$hora_3,$id_eb3);
       $cl_eb3_4=$this->cloroEstaciones($fecha,$hora_4,$id_eb3);
       $cl_eb3_5=$this->cloroEstaciones($fecha,$hora_5,$id_eb3);
       $cl_eb3_6=$this->cloroEstaciones($fecha,$hora_6,$id_eb3);
       $cl_eb3_7=$this->cloroEstaciones($fecha,$hora_7,$id_eb3);
       $cl_eb3_8=$this->cloroEstaciones($fecha,$hora_8,$id_eb3);
       $cl_eb3_9=$this->cloroEstaciones($fecha,$hora_9,$id_eb3);
       $cl_eb3_10=$this->cloroEstaciones($fecha,$hora_10,$id_eb3);
       $cl_eb3_11=$this->cloroEstaciones($fecha,$hora_11,$id_eb3);
       $cl_eb3_12=$this->cloroEstaciones($fecha,$hora_12,$id_eb3);
       $cl_eb3_13=$this->cloroEstaciones($fecha,$hora_13,$id_eb3);
       $cl_eb3_14=$this->cloroEstaciones($fecha,$hora_14,$id_eb3);
       $cl_eb3_15=$this->cloroEstaciones($fecha,$hora_15,$id_eb3);
       $cl_eb3_16=$this->cloroEstaciones($fecha,$hora_16,$id_eb3);
       $cl_eb3_17=$this->cloroEstaciones($fecha,$hora_17,$id_eb3);
       $cl_eb3_18=$this->cloroEstaciones($fecha,$hora_18,$id_eb3);
       $cl_eb3_19=$this->cloroEstaciones($fecha,$hora_19,$id_eb3);
       $cl_eb3_20=$this->cloroEstaciones($fecha,$hora_20,$id_eb3);
       $cl_eb3_21=$this->cloroEstaciones($fecha,$hora_21,$id_eb3);
       $cl_eb3_22=$this->cloroEstaciones($fecha,$hora_22,$id_eb3);
       $cl_eb3_23=$this->cloroEstaciones($fecha,$hora_23,$id_eb3);
       $cl_eb3_24=$this->cloroEstaciones($fecha,$hora_24,$id_eb3);

       /*Niveles de Tanques*/
       //Terminales
       $terminal_1=$this->nivelTanque($fecha,$hora_1,$id_terminales);
       $terminal_2=$this->nivelTanque($fecha,$hora_2,$id_terminales);
       $terminal_3=$this->nivelTanque($fecha,$hora_3,$id_terminales);
       $terminal_4=$this->nivelTanque($fecha,$hora_4,$id_terminales);
       $terminal_5=$this->nivelTanque($fecha,$hora_5,$id_terminales);
       $terminal_6=$this->nivelTanque($fecha,$hora_6,$id_terminales);
       $terminal_7=$this->nivelTanque($fecha,$hora_7,$id_terminales);
       $terminal_8=$this->nivelTanque($fecha,$hora_8,$id_terminales);
       $terminal_9=$this->nivelTanque($fecha,$hora_9,$id_terminales);
       $terminal_10=$this->nivelTanque($fecha,$hora_10,$id_terminales);
       $terminal_11=$this->nivelTanque($fecha,$hora_11,$id_terminales);
       $terminal_12=$this->nivelTanque($fecha,$hora_12,$id_terminales);
       $terminal_13=$this->nivelTanque($fecha,$hora_13,$id_terminales);
       $terminal_14=$this->nivelTanque($fecha,$hora_14,$id_terminales);
       $terminal_15=$this->nivelTanque($fecha,$hora_15,$id_terminales);
       $terminal_16=$this->nivelTanque($fecha,$hora_16,$id_terminales);
       $terminal_17=$this->nivelTanque($fecha,$hora_17,$id_terminales);
       $terminal_18=$this->nivelTanque($fecha,$hora_18,$id_terminales);
       $terminal_19=$this->nivelTanque($fecha,$hora_19,$id_terminales);
       $terminal_20=$this->nivelTanque($fecha,$hora_20,$id_terminales);
       $terminal_21=$this->nivelTanque($fecha,$hora_21,$id_terminales);
       $terminal_22=$this->nivelTanque($fecha,$hora_22,$id_terminales);
       $terminal_23=$this->nivelTanque($fecha,$hora_23,$id_terminales);
       $terminal_24=$this->nivelTanque($fecha,$hora_24,$id_terminales);

        //Bella Vista
       $bv_1=$this->nivelTanque($fecha,$hora_1,$id_BellaV);
       $bv_2=$this->nivelTanque($fecha,$hora_2,$id_BellaV);
       $bv_3=$this->nivelTanque($fecha,$hora_3,$id_BellaV);
       $bv_4=$this->nivelTanque($fecha,$hora_4,$id_BellaV);
       $bv_5=$this->nivelTanque($fecha,$hora_5,$id_BellaV);
       $bv_6=$this->nivelTanque($fecha,$hora_6,$id_BellaV);
       $bv_7=$this->nivelTanque($fecha,$hora_7,$id_BellaV);
       $bv_8=$this->nivelTanque($fecha,$hora_8,$id_BellaV);
       $bv_9=$this->nivelTanque($fecha,$hora_9,$id_BellaV);
       $bv_10=$this->nivelTanque($fecha,$hora_10,$id_BellaV);
       $bv_11=$this->nivelTanque($fecha,$hora_11,$id_BellaV);
       $bv_12=$this->nivelTanque($fecha,$hora_12,$id_BellaV);
       $bv_13=$this->nivelTanque($fecha,$hora_13,$id_BellaV);
       $bv_14=$this->nivelTanque($fecha,$hora_14,$id_BellaV);
       $bv_15=$this->nivelTanque($fecha,$hora_15,$id_BellaV);
       $bv_16=$this->nivelTanque($fecha,$hora_16,$id_BellaV);
       $bv_17=$this->nivelTanque($fecha,$hora_17,$id_BellaV);
       $bv_18=$this->nivelTanque($fecha,$hora_18,$id_BellaV);
       $bv_19=$this->nivelTanque($fecha,$hora_19,$id_BellaV);
       $bv_20=$this->nivelTanque($fecha,$hora_20,$id_BellaV);
       $bv_21=$this->nivelTanque($fecha,$hora_21,$id_BellaV);
       $bv_22=$this->nivelTanque($fecha,$hora_22,$id_BellaV);
       $bv_23=$this->nivelTanque($fecha,$hora_23,$id_BellaV);
       $bv_24=$this->nivelTanque($fecha,$hora_24,$id_BellaV);


        /*VERIFICACION DE HORAS GUARDADAS*/
       $dato_hora_1=$this->buscarHora($fecha,$hora_1,$id_bocatoma);
       $dato_hora_2=$this->buscarHora($fecha,$hora_2,$id_bocatoma);
       $dato_hora_3=$this->buscarHora($fecha,$hora_3,$id_bocatoma);
       $dato_hora_4=$this->buscarHora($fecha,$hora_4,$id_bocatoma);
       $dato_hora_5=$this->buscarHora($fecha,$hora_5,$id_bocatoma);
       $dato_hora_6=$this->buscarHora($fecha,$hora_6,$id_bocatoma);
       $dato_hora_7=$this->buscarHora($fecha,$hora_7,$id_bocatoma);
       $dato_hora_8=$this->buscarHora($fecha,$hora_8,$id_bocatoma);
       $dato_hora_9=$this->buscarHora($fecha,$hora_9,$id_bocatoma);
       $dato_hora_10=$this->buscarHora($fecha,$hora_10,$id_bocatoma);
       $dato_hora_11=$this->buscarHora($fecha,$hora_11,$id_bocatoma);
       $dato_hora_12=$this->buscarHora($fecha,$hora_12,$id_bocatoma);
       $dato_hora_13=$this->buscarHora($fecha,$hora_13,$id_bocatoma);
       $dato_hora_14=$this->buscarHora($fecha,$hora_14,$id_bocatoma);
       $dato_hora_15=$this->buscarHora($fecha,$hora_15,$id_bocatoma);
       $dato_hora_16=$this->buscarHora($fecha,$hora_16,$id_bocatoma);
       $dato_hora_17=$this->buscarHora($fecha,$hora_17,$id_bocatoma);
       $dato_hora_18=$this->buscarHora($fecha,$hora_18,$id_bocatoma);
       $dato_hora_19=$this->buscarHora($fecha,$hora_19,$id_bocatoma);
       $dato_hora_20=$this->buscarHora($fecha,$hora_20,$id_bocatoma);
       $dato_hora_21=$this->buscarHora($fecha,$hora_21,$id_bocatoma);
       $dato_hora_22=$this->buscarHora($fecha,$hora_22,$id_bocatoma);
       $dato_hora_23=$this->buscarHora($fecha,$hora_23,$id_bocatoma);
       $dato_hora_24=$this->buscarHora($fecha,$hora_24,$id_bocatoma);

         //Enviando a vista resumen los datos de produccion de Bocatoma para mostrarlos en la tabla, tambien la variable $estacion permite obtener informacion de la tabla estacions
        return view ('resumen', compact ('estacion','produccion','datos','con_coagu_1','con_coagu_2','con_coagu_3','con_coagu_4','con_coagu_5','con_coagu_6','con_coagu_7','con_coagu_8','con_coagu_9','con_coagu_10','con_coagu_11','con_coagu_12','con_coagu_13','con_coagu_14','con_coagu_15','con_coagu_16','con_coagu_17','con_coagu_18','con_coagu_19','con_coagu_20','con_coagu_21','con_coagu_22','con_coagu_23','con_coagu_24','con_poli_1','con_poli_2','con_poli_3','con_poli_4','con_poli_5','con_poli_6','con_poli_7','con_poli_8','con_poli_9','con_poli_10','con_poli_11','con_poli_12','con_poli_13','con_poli_14','con_poli_15','con_poli_16','con_poli_17','con_poli_18','con_poli_19','con_poli_20','con_poli_21','con_poli_22','con_poli_23','con_poli_24','con_perm_1','con_perm_2','con_perm_3','con_perm_4','con_perm_5','con_perm_6','con_perm_7','con_perm_8','con_perm_9','con_perm_10','con_perm_11','con_perm_12','con_perm_13','con_perm_14','con_perm_15','con_perm_16','con_perm_17','con_perm_18','con_perm_19','con_perm_20','con_perm_21','con_perm_22','con_perm_23','con_perm_24','con_carbon_1','con_carbon_2','con_carbon_3','con_carbon_4','con_carbon_5','con_carbon_6','con_carbon_7','con_carbon_8','con_carbon_9','con_carbon_10','con_carbon_11','con_carbon_12','con_carbon_13','con_carbon_14','con_carbon_15','con_carbon_16','con_carbon_17','con_carbon_18','con_carbon_19','con_carbon_20','con_carbon_21','con_carbon_22','con_carbon_23','con_carbon_24','con_cal_1','con_cal_2','con_cal_3','con_cal_4','con_cal_5','con_cal_6','con_cal_7','con_cal_8','con_cal_9','con_cal_10','con_cal_11','con_cal_12','con_cal_13','con_cal_14','con_cal_15','con_cal_16','con_cal_17','con_cal_18','con_cal_19','con_cal_20','con_cal_21','con_cal_22','con_cal_23','con_cal_24','cloro_hora_1','cloro_hora_2','cloro_hora_3','cloro_hora_4','cloro_hora_5','cloro_hora_6','cloro_hora_7','cloro_hora_8','cloro_hora_9','cloro_hora_10','cloro_hora_11','cloro_hora_12','cloro_hora_13','cloro_hora_14','cloro_hora_15','cloro_hora_16','cloro_hora_17','cloro_hora_18','cloro_hora_19','cloro_hora_20','cloro_hora_21','cloro_hora_22','cloro_hora_23','cloro_hora_24','datos_bt_1','datos_bt_2','datos_bt_3','datos_bt_4','datos_bt_5','datos_bt_6','datos_bt_7','datos_bt_8','datos_bt_9','datos_bt_10','datos_bt_11','datos_bt_12','datos_bt_13','datos_bt_14','datos_bt_15','datos_bt_16','datos_bt_17','datos_bt_18','datos_bt_19','datos_bt_20','datos_bt_21','datos_bt_22','datos_bt_23','datos_bt_24','eq_oper_1','eq_oper_2','eq_oper_3','eq_oper_4','eq_oper_5','eq_oper_5','eq_oper_6','eq_oper_7','eq_oper_8','eq_oper_9','eq_oper_10','eq_oper_11','eq_oper_12','eq_oper_13','eq_oper_14','eq_oper_15','eq_oper_16','eq_oper_17','eq_oper_18','eq_oper_19','eq_oper_20','eq_oper_21','eq_oper_22','eq_oper_23','eq_oper_24','cl_eb2_1','cl_eb2_2','cl_eb2_3','cl_eb2_4','cl_eb2_5','cl_eb2_6','cl_eb2_7','cl_eb2_8','cl_eb2_9','cl_eb2_10','cl_eb2_11','cl_eb2_12','cl_eb2_13','cl_eb2_14','cl_eb2_15','cl_eb2_16','cl_eb2_17','cl_eb2_18','cl_eb2_19','cl_eb2_20','cl_eb2_21','cl_eb2_22','cl_eb2_23','cl_eb2_24','cl_eb3_1','cl_eb3_2','cl_eb3_3','cl_eb3_4','cl_eb3_5','cl_eb3_6','cl_eb3_7','cl_eb3_8','cl_eb3_9','cl_eb3_10','cl_eb3_11','cl_eb3_12','cl_eb3_13','cl_eb3_14','cl_eb3_15','cl_eb3_16','cl_eb3_17','cl_eb3_18','cl_eb3_19','cl_eb3_20','cl_eb3_21','cl_eb3_22','cl_eb3_23','cl_eb3_24','terminal_1','terminal_2','terminal_3','terminal_4','terminal_5','terminal_6','terminal_7','terminal_8','terminal_9','terminal_10','terminal_11','terminal_12','terminal_13','terminal_14','terminal_15','terminal_16','terminal_17','terminal_18','terminal_19','terminal_20','terminal_21','terminal_22','terminal_23','terminal_24','bv_1','bv_2','bv_3','bv_4','bv_5','bv_6','bv_7','bv_8','bv_9','bv_10','bv_11','bv_12','bv_13','bv_14','bv_15','bv_16','bv_17','bv_18','bv_19','bv_20','bv_21','bv_22','bv_23','bv_24','dato_hora_1','dato_hora_2','dato_hora_3','dato_hora_4','dato_hora_5','dato_hora_6','dato_hora_7','dato_hora_8','dato_hora_9','dato_hora_10','dato_hora_11','dato_hora_12','dato_hora_13','dato_hora_14','dato_hora_15','dato_hora_16','dato_hora_17','dato_hora_18','dato_hora_19','dato_hora_20','dato_hora_21','dato_hora_22','dato_hora_23','dato_hora_24'));

    }


/*funcion que cuenta el total de equipos operando segun fecha,hora,idBocatoma*/
public function totalEquiposOperando($fecha,$hora,$id_bocatoma){

     $operando = DB::table('operacions')
            ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
            ->join('estacions', 'equipos.id_estacion', '=', 'estacions.id')
            ->select('operacions.*','equipos.*','estacions.*')
            ->whereDate('operacions.created_at', '=', $fecha)
            ->where('operacions.hora', '=', $hora)
            ->where('estacions.id','=',$id_bocatoma)
            ->where('estado','=','Operando')
            ->get()
            ->count();

     return $operando;       

}


/**
Funcion que busca las horas que ya fueron ingresadas durante el dia, para mostrar en el select de la vista RESUMEN las horas que faltan por ingresar. Se hara la busqueda de acuerdo al caudal de BT
*/
public function buscarHora($fecha,$hora,$id_bocatoma){

$dato=DB::table('produccions')
                ->select('caudal')
                ->where('hora','=',$hora)
                ->whereDate('created_at', '=', $fecha)
                ->where('id_estacion', '=', $id_bocatoma)
                ->get()
                ->count();

if ($dato > 0) {
    return "lleno";
}else {
return "vacio";
}


}


/**
Funcion que busca los consumos de quimicos de acuerdo a una fecha y hora dada para un quimico en especial
*/
public function datosConsumo($fecha,$hora,$id_quimico){

 $consumos = DB::table('consumos')
                             ->select('consumos.*')
                ->where('hora','=',$hora)
                ->whereDate('created_at', '=', $fecha)
                ->where('id_quimico', '=', $id_quimico)
                ->get();

return $consumos;
}


/*
Funcion que calcula el cloro aplicado segun la formula (dosis_cloro/Caudal_bt), este debe mostrarse en la tabla que se presenta al final de  la vista resumen
*/
public function calculoCloroAplicado($fecha,$hora,$id_cloro,$id_bocatoma){

$cloroAplicado=DB::table('consumos')
                ->select('dosis')
                ->where('hora','=',$hora)
                ->whereDate('created_at', '=', $fecha)
                ->where('id_quimico', '=', $id_cloro)
                ->get();


$caudal_bt=DB::table('produccions')
                ->select('caudal')
                ->where('hora','=',$hora)
                ->whereDate('created_at', '=', $fecha)
                ->where('id_estacion', '=', $id_bocatoma)
                ->get();


//recorre los datos de ambas busquedas y realiza el calculo dosis_cloro/Caudal_bt
    foreach ($cloroAplicado as $dato) {
    

        foreach ($caudal_bt as $cau){
                //retornando los valores y realizando calculo y division, round para redondear con 2 decimales
            return round((($dato->dosis)*1000)/($cau->caudal), 2);

        }

    }



}

/*Funcion exclusiva para extraer los niveles de los tanques: Terminales y BellaVista */
public function nivelTanque($fecha,$hora,$id_tanque){

                 $nivel=DB::table('produccions')
                ->select('nivel_camara')
                ->where('hora','=',$hora)
                ->whereDate('updated_at', '=', $fecha)
                ->where('id_estacion', '=', $id_tanque)
                ->get();

  return $nivel;
}


/*Funcion exclusiva para extraer el caudal,nivelcamara,nivelrio,equiposOperando de BT segun fecha y hora,
se mostrará en tabla principal de vista resumen */
public function datosBT($fecha,$hora,$id_bt){

                 $caudal_bt=DB::table('produccions')
                ->select('*')
                ->where('hora','=',$hora)
                ->whereDate('updated_at', '=', $fecha)
                ->where('id_estacion', '=', $id_bt)
                ->get();

  return $caudal_bt;



}

/*Funcion exclusiva para extraer el cloro residual de las estaciones y mostrarlas en vista resumen */
public function cloroEstaciones($fecha,$hora,$id_estac){

                 $cloro_estaciones=DB::table('produccions')
                ->select('cloro_residual')
                ->where('hora','=',$hora)
                ->whereDate('updated_at', '=', $fecha)
                ->where('id_estacion', '=', $id_estac)
                ->get();

  return $cloro_estaciones;



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
        /*Almacenando datos de Bocatoma*/
        //Aqui aparece la fecha y hora, sin embargo se tomaran las lecturas de la columna created_at
        $produccion = new Produccion;
            //se agregaron valores por defecto para pruebas
        $produccion->caudal = $request->caudal;
        //$produccion->fecha = $request->fecha;
        $produccion->hora = $request->hora;
        $produccion->cloro_residual = $request->cloro_residual;
        $produccion->nivel_camara = $request->nivel_camara;
        $produccion->nivel_rio = $request->nivel_rio;
        $produccion->presion_linea = $request->presion_linea;//se eliminara?
        $produccion->id_estacion = $request->id_estacion;
 
        $produccion->save();

        /*Recibe y guarda los valores de EB1*/
        $proEB1=new Produccion;
        $proEB1->caudal = $request->caudaleb1;
        $proEB1->hora = $request->hora;
        $proEB1->nivel_camara = $request->nivel1;
        $proEB1->cloro_residual = $request->cloro1;
        $proEB1->id_estacion = $request->id_eb1;

             $proEB1->save();
        /* Fin de recibe y guarda los valores de EB1*/

        /*Recibe y guarda los valores de EB2*/
        $proEB2=new Produccion;
        $proEB2->caudal = $request->caudaleb2;
        $proEB2->hora = $request->hora;
        $proEB2->nivel_camara = $request->nivel2;
        $proEB2->cloro_residual = $request->cloro2;
        $proEB2->id_estacion = $request->id_eb2;

             $proEB2->save();
        /* Fin de recibe y guarda los valores de EB2*/

         /*Recibe y guarda los valores de EB3*/
        $proEB3=new Produccion;
        $proEB3->caudal = $request->caudaleb3;
        $proEB3->hora = $request->hora;
        $proEB3->nivel_camara = $request->nivel3;
        $proEB3->cloro_residual = $request->cloro3;
        $proEB3->id_estacion = $request->id_eb3;

             $proEB3->save();
        /* Fin de recibe y guarda los valores de EB3*/


        /*Recibe y guarda los valores de Tterminales*, como no se registra caudal para esta estacion
        en la tabla produccions se debe aceptar valores nulos en caudal*/

        $terminales=new Produccion;
        
        $terminales->nivel_camara = $request->nivel4;
        $terminales->hora = $request->hora;
        $terminales->cloro_residual = $request->cloro4;
        $terminales->id_estacion = $request->id_terminal;

             $terminales->save();
        /* Fin de recibe y guarda los valores de Tterminales*/

        /*Recibe y guarda los valores de Bella vista nuevo*/

        $nuevo=new Produccion;
        
        $nuevo->nivel_camara = $request->nivel5;
        $nuevo->hora = $request->hora;
        $nuevo->cloro_residual = $request->cloro5;
        $nuevo->id_estacion = $request->id_nuevo;

             $nuevo->save();
        /* Fin de recibe y guarda los valores de bella vista nuevo*/


/*Recibe y guarda los valores de Bella vista viejo*/

        $viejo=new Produccion;
        
        $viejo->nivel_camara = $request->nivel6;
        $viejo->hora = $request->hora;
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

        $carbon=new Consumo;
        
        $carbon->dosis = $request->dosif_carbon;
        $carbon->hora = $request->hora;
        $carbon->id_quimico = "2";//asignado directamente id de carbon
        $carbon->id_agua = "1";//id Agua cruda
        $carbon->save();


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
