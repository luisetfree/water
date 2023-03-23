<?php

namespace App\Http\Controllers;
//se agrega el modelo que se necesita para comunicarse con la tabla de la DB
use App\Models\Produccion;
use App\Models\Estacion;
use App\Models\Operacion;
use App\Models\Consumo;
use App\Models\Carga;
use Illuminate\Http\Request;

use Illuminate\Support\Arr;


use Illuminate\Support\Facades\DB;

class ProduccionController extends Controller
{
    /**
     * Manda a la vista Resumen y muestra por defecto los valores de Bocatoma
     *
     * @return \Illuminate\Http\Response
     */
    public function index($date)
    {
        //ID de estaciones y quimicos
      $id_bocatoma=1;
      $id_eb1=2;
      $id_eb2=3;
      $id_eb3=4;
      $id_terminales=5;
      $id_BellaV=6;
      $id_cloro=8;
      $id_sulfato=5;
      $id_polimero=7;
      $id_permanganato=1;
      $id_cal=4;
      $id_carbon=2;//Carbon activo
      $id_polimeroAlta=10;
      $id_pavas=8;


    




      $fecha=$date;



     // $fecha_solicitada = $this->cargarFecha();

    //$fecha=date("Y-m-d");//Tomando la fecha del dia en curso



             


/*Extrayendo datos de Consumos*/
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
       
       $cloro_hora_1=$this->calculoCloroAplicado($fecha,$hora_1,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_2=$this->calculoCloroAplicado($fecha,$hora_2,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_3=$this->calculoCloroAplicado($fecha,$hora_3,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_4=$this->calculoCloroAplicado($fecha,$hora_4,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_5=$this->calculoCloroAplicado($fecha,$hora_5,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_6=$this->calculoCloroAplicado($fecha,$hora_6,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_7=$this->calculoCloroAplicado($fecha,$hora_7,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_8=$this->calculoCloroAplicado($fecha,$hora_8,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_9=$this->calculoCloroAplicado($fecha,$hora_9,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_10=$this->calculoCloroAplicado($fecha,$hora_10,$id_cloro,$id_bocatoma,$id_eb1);       
       $cloro_hora_11=$this->calculoCloroAplicado($fecha,$hora_11,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_12=$this->calculoCloroAplicado($fecha,$hora_12,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_13=$this->calculoCloroAplicado($fecha,$hora_13,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_14=$this->calculoCloroAplicado($fecha,$hora_14,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_15=$this->calculoCloroAplicado($fecha,$hora_15,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_16=$this->calculoCloroAplicado($fecha,$hora_16,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_17=$this->calculoCloroAplicado($fecha,$hora_17,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_18=$this->calculoCloroAplicado($fecha,$hora_18,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_19=$this->calculoCloroAplicado($fecha,$hora_19,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_20=$this->calculoCloroAplicado($fecha,$hora_20,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_21=$this->calculoCloroAplicado($fecha,$hora_21,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_22=$this->calculoCloroAplicado($fecha,$hora_22,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_23=$this->calculoCloroAplicado($fecha,$hora_23,$id_cloro,$id_bocatoma,$id_eb1);
       $cloro_hora_24=$this->calculoCloroAplicado($fecha,$hora_24,$id_cloro,$id_bocatoma,$id_eb1);


/*Almacenando en un arreglo los datos obtenidos previamente en la consulta anterior para ser utilizados en las funciones promedio-maximo-minimo de cloro calculado*/
       $Array_datos_cloro=[$cloro_hora_1,$cloro_hora_2,$cloro_hora_3,$cloro_hora_4,$cloro_hora_5,$cloro_hora_6,$cloro_hora_7,$cloro_hora_8,$cloro_hora_9,$cloro_hora_10,$cloro_hora_11,$cloro_hora_12,$cloro_hora_13,$cloro_hora_14,$cloro_hora_15,$cloro_hora_16,$cloro_hora_17,$cloro_hora_18,$cloro_hora_19,$cloro_hora_20,$cloro_hora_21,$cloro_hora_22,$cloro_hora_23,$cloro_hora_24];

       //Se obtiene el promedio del cloro calculado para mandarlo a la vista resumen
 $prom_cloro=$this->promedioCloroCalculado($Array_datos_cloro);
 $max_cloro=$this->maximoCloroCalculado($Array_datos_cloro);
 $min_cloro=$this->minimoCloroCalculado($Array_datos_cloro);

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




       /*CALCULOS PROMEDIO - MAXIMO - MINIMO*/
       $prom_bt=$this->promedio($fecha,$id_bocatoma,'caudal');
       $prom_cam=$this->promedio($fecha,$id_bocatoma,'nivel_camara');
       $prom_rio=$this->promedio($fecha,$id_bocatoma,'nivel_rio');

       /*Calculando maximo del dia*/
       $max_bt=$this->maximo($fecha,$id_bocatoma,'caudal');
       $max_cam=$this->maximo($fecha,$id_bocatoma,'nivel_camara');
       $max_rio=$this->maximo($fecha,$id_bocatoma,'nivel_rio');

       /*Calculando minimo del dia*/
       $min_bt=$this->minimo($fecha,$id_bocatoma,'caudal');
       $min_cam=$this->minimo($fecha,$id_bocatoma,'nivel_camara');
       $min_rio=$this->minimo($fecha,$id_bocatoma,'nivel_rio');

        /*Promedios -max-min de cloro residual eb2 */
      $prom_cl_eb2=$this->promedio($fecha,$id_eb2,'cloro_residual');
       $min_cl_eb2=$this->minimo($fecha,$id_eb2,'cloro_residual');
       $max_cl_eb2=$this->maximo($fecha,$id_eb2,'cloro_residual');

        /*Promedios -max-min de cloro residual eb3 */
      $prom_cl_eb3=$this->promedio($fecha,$id_eb3,'cloro_residual');
       $min_cl_eb3=$this->minimo($fecha,$id_eb3,'cloro_residual');
       $max_cl_eb3=$this->maximo($fecha,$id_eb3,'cloro_residual');

        /*Calculando promedios-maximos y minimos del dia de los quimicos*/
        
        $prom_coag=$this->promQuimico($fecha,$id_sulfato);//coagulante
        $max_coag=$this->maxQuimico($fecha,$id_sulfato);//coagulante
        $min_coag=$this->minQuimico($fecha,$id_sulfato);//coagulante

        /*polimero*/
        $prom_poli=$this->promQuimico($fecha,$id_polimero);//
        $max_poli=$this->maxQuimico($fecha,$id_polimero);//
        $min_poli=$this->minQuimico($fecha,$id_polimero);//

         /*Permanganato*/
        $prom_perm=$this->promQuimico($fecha,$id_permanganato);//
        $max_perm=$this->maxQuimico($fecha,$id_permanganato);//
        $min_perm=$this->minQuimico($fecha,$id_permanganato);//

          /*Cal*/
        $prom_cal=$this->promQuimico($fecha,$id_cal);//
        $max_cal=$this->maxQuimico($fecha,$id_cal);//
        $min_cal=$this->minQuimico($fecha,$id_cal);//

           /*Carbon*/
        $prom_car=$this->promQuimico($fecha,$id_carbon);//
        $max_car=$this->maxQuimico($fecha,$id_carbon);//
        $min_car=$this->minQuimico($fecha,$id_carbon);//

        //$prom_cloro=$this->promedioCloroCalculado();

        /*Sirve para verificar si ya se ingreso el dato del aporte a tanque Las Pavas*/
        
        $tanque_pavas=$this->aporteLaspavas($id_pavas,$fecha);

        /*es el dato del progreso diario en cuanto a la produccion del dia...se utiliza para mostrarse en la barra de progreso en la vista RESUMEN*/
        $progreso=$this->progresoBarra($fecha,$id_bocatoma);
        /*Sumatoria de caudal BT para el dia*/
        $caudal_bt= $this->sumaCaudalBT($fecha,$id_bocatoma);


         //Enviando a vista resumen los datos de produccion de Bocatoma para mostrarlos en la tabla, tambien la variable $estacion permite obtener informacion de la tabla estacions
        return view ('resumen', compact ('fecha','con_coagu_1','con_coagu_2','con_coagu_3','con_coagu_4','con_coagu_5','con_coagu_6','con_coagu_7','con_coagu_8','con_coagu_9','con_coagu_10','con_coagu_11','con_coagu_12','con_coagu_13','con_coagu_14','con_coagu_15','con_coagu_16','con_coagu_17','con_coagu_18','con_coagu_19','con_coagu_20','con_coagu_21','con_coagu_22','con_coagu_23','con_coagu_24','con_poli_1','con_poli_2','con_poli_3','con_poli_4','con_poli_5','con_poli_6','con_poli_7','con_poli_8','con_poli_9','con_poli_10','con_poli_11','con_poli_12','con_poli_13','con_poli_14','con_poli_15','con_poli_16','con_poli_17','con_poli_18','con_poli_19','con_poli_20','con_poli_21','con_poli_22','con_poli_23','con_poli_24','con_perm_1','con_perm_2','con_perm_3','con_perm_4','con_perm_5','con_perm_6','con_perm_7','con_perm_8','con_perm_9','con_perm_10','con_perm_11','con_perm_12','con_perm_13','con_perm_14','con_perm_15','con_perm_16','con_perm_17','con_perm_18','con_perm_19','con_perm_20','con_perm_21','con_perm_22','con_perm_23','con_perm_24','con_carbon_1','con_carbon_2','con_carbon_3','con_carbon_4','con_carbon_5','con_carbon_6','con_carbon_7','con_carbon_8','con_carbon_9','con_carbon_10','con_carbon_11','con_carbon_12','con_carbon_13','con_carbon_14','con_carbon_15','con_carbon_16','con_carbon_17','con_carbon_18','con_carbon_19','con_carbon_20','con_carbon_21','con_carbon_22','con_carbon_23','con_carbon_24','con_cal_1','con_cal_2','con_cal_3','con_cal_4','con_cal_5','con_cal_6','con_cal_7','con_cal_8','con_cal_9','con_cal_10','con_cal_11','con_cal_12','con_cal_13','con_cal_14','con_cal_15','con_cal_16','con_cal_17','con_cal_18','con_cal_19','con_cal_20','con_cal_21','con_cal_22','con_cal_23','con_cal_24','cloro_hora_1','cloro_hora_2','cloro_hora_3','cloro_hora_4','cloro_hora_5','cloro_hora_6','cloro_hora_7','cloro_hora_8','cloro_hora_9','cloro_hora_10','cloro_hora_11','cloro_hora_12','cloro_hora_13','cloro_hora_14','cloro_hora_15','cloro_hora_16','cloro_hora_17','cloro_hora_18','cloro_hora_19','cloro_hora_20','cloro_hora_21','cloro_hora_22','cloro_hora_23','cloro_hora_24','datos_bt_1','datos_bt_2','datos_bt_3','datos_bt_4','datos_bt_5','datos_bt_6','datos_bt_7','datos_bt_8','datos_bt_9','datos_bt_10','datos_bt_11','datos_bt_12','datos_bt_13','datos_bt_14','datos_bt_15','datos_bt_16','datos_bt_17','datos_bt_18','datos_bt_19','datos_bt_20','datos_bt_21','datos_bt_22','datos_bt_23','datos_bt_24','eq_oper_1','eq_oper_2','eq_oper_3','eq_oper_4','eq_oper_5','eq_oper_5','eq_oper_6','eq_oper_7','eq_oper_8','eq_oper_9','eq_oper_10','eq_oper_11','eq_oper_12','eq_oper_13','eq_oper_14','eq_oper_15','eq_oper_16','eq_oper_17','eq_oper_18','eq_oper_19','eq_oper_20','eq_oper_21','eq_oper_22','eq_oper_23','eq_oper_24','cl_eb2_1','cl_eb2_2','cl_eb2_3','cl_eb2_4','cl_eb2_5','cl_eb2_6','cl_eb2_7','cl_eb2_8','cl_eb2_9','cl_eb2_10','cl_eb2_11','cl_eb2_12','cl_eb2_13','cl_eb2_14','cl_eb2_15','cl_eb2_16','cl_eb2_17','cl_eb2_18','cl_eb2_19','cl_eb2_20','cl_eb2_21','cl_eb2_22','cl_eb2_23','cl_eb2_24','cl_eb3_1','cl_eb3_2','cl_eb3_3','cl_eb3_4','cl_eb3_5','cl_eb3_6','cl_eb3_7','cl_eb3_8','cl_eb3_9','cl_eb3_10','cl_eb3_11','cl_eb3_12','cl_eb3_13','cl_eb3_14','cl_eb3_15','cl_eb3_16','cl_eb3_17','cl_eb3_18','cl_eb3_19','cl_eb3_20','cl_eb3_21','cl_eb3_22','cl_eb3_23','cl_eb3_24','terminal_1','terminal_2','terminal_3','terminal_4','terminal_5','terminal_6','terminal_7','terminal_8','terminal_9','terminal_10','terminal_11','terminal_12','terminal_13','terminal_14','terminal_15','terminal_16','terminal_17','terminal_18','terminal_19','terminal_20','terminal_21','terminal_22','terminal_23','terminal_24','bv_1','bv_2','bv_3','bv_4','bv_5','bv_6','bv_7','bv_8','bv_9','bv_10','bv_11','bv_12','bv_13','bv_14','bv_15','bv_16','bv_17','bv_18','bv_19','bv_20','bv_21','bv_22','bv_23','bv_24','dato_hora_1','dato_hora_2','dato_hora_3','dato_hora_4','dato_hora_5','dato_hora_6','dato_hora_7','dato_hora_8','dato_hora_9','dato_hora_10','dato_hora_11','dato_hora_12','dato_hora_13','dato_hora_14','dato_hora_15','dato_hora_16','dato_hora_17','dato_hora_18','dato_hora_19','dato_hora_20','dato_hora_21','dato_hora_22','dato_hora_23','dato_hora_24','prom_bt','prom_cam','max_cam','min_cam','max_bt','min_bt','prom_rio','max_rio','min_rio','prom_coag','max_coag','min_coag','prom_cloro','max_cloro','min_cloro','prom_poli','max_poli','min_poli','prom_perm','max_perm','min_perm','prom_cal','max_cal','min_cal','prom_car','max_car','min_car','prom_cl_eb2','max_cl_eb2','min_cl_eb2','prom_cl_eb3','max_cl_eb3','min_cl_eb3','tanque_pavas','progreso','caudal_bt'));

    }

    /*Se encarga de obtener los datos de produccion BT exclusivamente para la barra de progreso de la tabla resumen*/
    public function progresoBarra($fecha,$id_estacion)
    {
        $progreso=DB::table('produccions')
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_estacion)
                ->count('caudal', '>=', 0);

                /*Sacando el porcentaje de avance y retornando el numero entero, se divide entre 24 porque son las horas del dia*/
                return round((($progreso/24)*100),0);
        
    }

  /*Sumatoria del dia de produccion BT, se mostrará en la barra de progreso de la vista resumen*/
    public function sumaCaudalBT($fecha,$id_estacion)
    {
        $suma=DB::table('produccions')
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_estacion)
                ->sum('caudal');

                /*suma*/
                return number_format($suma);
        
    }

/**
     * Metodo que captura una fecha en particular para mostrar los datos en la vista RESUMEN de acuerdo a dicha fecha
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cargarFecha(Request  $request)
    {
        // code...
        $fecha= $request->fecha;

        return $this->index($fecha);
    }


    /*funcion que revisa si en el dia ya se ha ingresado el aporte a tanque Las pavas desde la vista RESUMEN, esto porque solamente se ingresara una vez al dia esta informacion*/

    public function aporteLaspavas($id_tanque_las_pavas,$fecha)
    {
       $aporte=DB::table('produccions')
                ->select('caudal')
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_tanque_las_pavas)
                ->get();

                foreach ($aporte as $ap) {
                    return  $ap->caudal;
                }

                
    }

/*Funcion para promedio del cloro calculado-- recibirá un arreglo de los datos de cloro calculado*/
public function promedioCloroCalculado($datos){
    
$promedio=0;
$suma=0;

    //recorriendo el arreglo para sumar los valores
for ($i=0; $i < 24; $i++) { 
    
$suma +=$datos[$i];

}

return $promedio = round(($suma/24),2); //se dividen entre las horas del dia y se devuelve el valor, redondeado a 2 decimales


            
}

/*Funcion para obtener MAXIMO valor  del cloro calculado-- recibirá un arreglo de los datos de cloro calculado*/
public function maximoCloroCalculado($datos){
    
    return $maximo= max($datos);

            
}

    /*Funcion para obtener MINIMO valor  del cloro calculado-- recibirá un arreglo de los datos de cloro calculado*/
public function minimoCloroCalculado($datos){
     
      

  //recorre el arreglo y devuelve el valor minimo
  return  $dato= min($datos);


 
//return $sorted = Arr::sort($datos);

    //REVISAR ESTA FUNCION para que en caso de que hayan horas vacias se logre devolver un valor 

            
}




/*calculando promedio, la variable promediar significa el campo que se tomara como referencia de la tabla de la
DB*/
public function promedio($fecha,$id_estacion,$promediar){



                $prom=DB::table('produccions')
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_estacion)
                ->avg($promediar);

                return round($prom,2);
}
/*calculando maximo*/
public function maximo($fecha,$id_estacion,$maxi){



                $max=DB::table('produccions')
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_estacion)
                ->max($maxi);

                return $max;
}

/*Calculando min*/
public function minimo($fecha,$id_estacion,$mini){



                $min=DB::table('produccions')
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_estacion)
                ->min($mini);

                return $min;
}



/*Calculando promedio de quimicos*/
public function promQuimico($fecha,$id_quimico){

                $prom = DB::table('consumos')
                //->whereDate('created_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_quimico', '=', $id_quimico)
                  ->avg('dosis');

                  return round($prom,2);//redondeando y reenviando con dos decimales

}
/*Calculando máximo de quimicos*/
public function maxQuimico($fecha,$id_quimico){

                $max = DB::table('consumos')
                //->whereDate('created_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_quimico', '=', $id_quimico)
                  ->max('dosis');

                  return $max;

}

/*Calculando min de quimicos*/
public function minQuimico($fecha,$id_quimico){

                $min = DB::table('consumos')
                //->whereDate('created_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_quimico', '=', $id_quimico)
                  ->min('dosis');

                  return $min;

}

/*fin de Calculando promedio de quimicos*/


/*funcion que cuenta el total de equipos operando segun fecha,hora,idBocatoma*/
public function totalEquiposOperando($fecha,$hora,$id_bocatoma){

     $operando = DB::table('operacions')
            ->join('equipos', 'operacions.id_equipo', '=', 'equipos.id')
            ->join('estacions', 'equipos.id_estacion', '=', 'estacions.id')
            ->select('operacions.*','equipos.*','estacions.*')
            //->whereDate('operacions.created_at', '=', $fecha)
            ->where('operacions.fecha','=',$fecha)
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
                //->whereDate('created_at', '=', $fecha)
                ->where('fecha','=',$fecha)
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
                //->whereDate('created_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_quimico', '=', $id_quimico)
                ->get();

return $consumos;
}


/*
Funcion que calcula el cloro aplicado segun la formula (dosis_cloro/Caudal_bt), este debe mostrarse en la tabla que se presenta al final de  la vista resumen
*/
public function calculoCloroAplicado($fecha,$hora,$id_cloro,$id_bocatoma,$id_eb1){

$cloroAplicado=DB::table('consumos')
                ->select('dosis')
                ->where('hora','=',$hora)
                //->whereDate('created_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_quimico', '=', $id_cloro)
                ->get();


$caudal_bt=DB::table('produccions')
                ->select('caudal')
                ->where('hora','=',$hora)
                //->whereDate('created_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_bocatoma)
                ->get();
//En caso que BT este suspendida se debera considerar el caudal de Eb1
$caudal_eb1=DB::table('produccions')
                ->select('caudal')
                ->where('hora','=',$hora)
                //->whereDate('created_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_eb1)
                ->get();

//recorre los datos de ambas busquedas y realiza el calculo dosis_cloro/Caudal_bt
    foreach ($cloroAplicado as $dato) {
    

        foreach ($caudal_bt as $cau){
                //retornando los valores y realizando calculo y division, round para redondear con 2 decimales
            if (($cau->caudal) > 0){
            return round((($dato->dosis)*1000)/($cau->caudal), 2);
        }else{
           //Se ha considerado el caudal de EB1 cuando BT esta suspendida

            foreach ($caudal_eb1 as $eb1) {

                if (($eb1->caudal) > 0){
                    //se retorna el valor utilizando caudal de EB1
                return round((($dato->dosis)*1000)/($eb1->caudal), 2);
                }else{
                    //En caso que por alguna razon no se tenga caudal se devolvera el valor de 0, para evitar errores
                    return 0;
                }
                

                
            }



        }

        }

    }



}

/*Funcion exclusiva para extraer los niveles de los tanques: Terminales y BellaVista */
public function nivelTanque($fecha,$hora,$id_tanque){

                 $nivel=DB::table('produccions')
                ->select('nivel_camara')
                ->where('hora','=',$hora)
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
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
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_bt)
                ->get();

  return $caudal_bt;



}

/*Funcion exclusiva para extraer el cloro residual de las estaciones y mostrarlas en vista resumen */
public function cloroEstaciones($fecha,$hora,$id_estac){

                 $cloro_estaciones=DB::table('produccions')
                ->select('cloro_residual')
                ->where('hora','=',$hora)
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
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
        $produccion->fecha = $request->fecha;
        $produccion->hora = $request->hora;
        $produccion->cloro_residual = $request->cloro_residual;
        $produccion->nivel_camara = $request->nivel_camara;
        $produccion->nivel_rio = $request->nivel_rio;
        $produccion->presion_linea = $request->presion_linea;//se eliminara?
        $produccion->id_estacion = $request->id_estacion;

        $produccion->save();
 
       /* $produccion->updateOrCreate(

             [$produccion->caudal => $request->caudal],
            [$produccion->fecha => $request->fecha],
            [$produccion->hora => $request->hora],
            [ $produccion->cloro_residual => $request->cloro_residual],
            [$produccion->nivel_camara => $request->nivel_camara],
            [$produccion->nivel_rio => $request->nivel_rio],
            [ $produccion->presion_linea=> $request->presion_linea],
            [$produccion->id_estacion=> $request->id_estacion],


        );
*/
        /*Recibe y guarda los valores de EB1*/
        $proEB1=new Produccion;
        $proEB1->caudal = $request->caudaleb1;
        $proEB1->fecha = $request->fecha;
        $proEB1->hora = $request->hora;
        $proEB1->nivel_camara = $request->nivel1;
        $proEB1->cloro_residual = $request->cloro1;
        $proEB1->id_estacion = $request->id_eb1;

             $proEB1->save();
        /* Fin de recibe y guarda los valores de EB1*/

        /*Recibe y guarda los valores de EB2*/
        $proEB2=new Produccion;
        $proEB2->caudal = $request->caudaleb2;
        $proEB2->fecha = $request->fecha;
        $proEB2->hora = $request->hora;
        $proEB2->nivel_camara = $request->nivel2;
        $proEB2->cloro_residual = $request->cloro2;
        $proEB2->id_estacion = $request->id_eb2;

             $proEB2->save();
        /* Fin de recibe y guarda los valores de EB2*/

         /*Recibe y guarda los valores de EB3*/
        $proEB3=new Produccion;
        $proEB3->caudal = $request->caudaleb3;
        $proEB3->fecha = $request->fecha;
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
        $terminales->fecha = $request->fecha;
        $terminales->hora = $request->hora;
        $terminales->cloro_residual = $request->cloro4;
        $terminales->id_estacion = $request->id_terminal;

             $terminales->save();
        /* Fin de recibe y guarda los valores de Tterminales*/

        /*Recibe y guarda los valores de Bella vista nuevo*/

        $nuevo=new Produccion;
        
        $nuevo->nivel_camara = $request->nivel5;
        $nuevo->fecha = $request->fecha;
        $nuevo->hora = $request->hora;
        $nuevo->cloro_residual = $request->cloro5;
        $nuevo->id_estacion = $request->id_nuevo;

             $nuevo->save();
        /* Fin de recibe y guarda los valores de bella vista nuevo*/


/*Recibe y guarda los valores de Bella vista viejo*/

        $viejo=new Produccion;
        
        $viejo->nivel_camara = $request->nivel6;
        $viejo->fecha = $request->fecha;
        $viejo->hora = $request->hora;
        $viejo->cloro_residual = $request->cloro6;
        $viejo->id_estacion = $request->id_viejo;

             $viejo->save();
        /* Fin de recibe y guarda los valores de bella vista viejo*/


/*GUARDA APORTE PARA TANQUE LAS PAVAS, este dato se guarda una sola vez al dia*/
    
    //verificando que en la vista resumen este disponible el input para agregar el aporte a tanque las Pavas
    if (empty($request->aporte_pavas)) {
        // code...
    }else{
        $pavas=new Produccion;
        
        $pavas->caudal = $request->aporte_pavas;
        $pavas->fecha = $request->fecha;
        $pavas->hora = $request->hora;
        //$viejo->cloro_residual = $request->cloro6;
        $pavas->id_estacion = $request->id_pavas;

        $pavas->save();
    
    }
        

/*FIN DE APORTE PARA TANQUE LAS PAVAS*/


/*Guarda los datos de las DOSIFICACIONES*/

        $coagulante=new Consumo;
        
        $coagulante->dosis = $request->dosificacion_coagulante;
        $coagulante->fecha = $request->fecha;
        $coagulante->hora = $request->hora;
        $coagulante->id_quimico = "5";
        $coagulante->id_agua = "1";//Agua cruda
        $coagulante->save();


         $cal=new Consumo;
        
        $cal->dosis = $request->dosif_cal;
        $cal->fecha = $request->fecha;
        $cal->hora = $request->hora;
        $cal->id_quimico = $request->id_cal;
        $cal->id_agua = "4";//id Agua tratada
        $cal->save();

        $permanganato=new Consumo;
        
        $permanganato->dosis = $request->dosif_permanganato;
        $permanganato->fecha = $request->fecha;
        $permanganato->hora = $request->hora;
        $permanganato->id_quimico = "1";//asignado directamente
        $permanganato->id_agua = "1";//id Agua cruda
        $permanganato->save();

        $polimero=new Consumo;
        
        $polimero->dosis = $request->dosif_polimero;
        $polimero->fecha = $request->fecha;
        $polimero->hora = $request->hora;
        $polimero->id_quimico = "7";//asignado directamente de id polimero
        $polimero->id_agua = "2";//id Agua clarificadas
        $polimero->save();

        $carbon=new Consumo;
        
        $carbon->dosis = $request->dosif_carbon;
        $carbon->fecha = $request->fecha;
        $carbon->hora = $request->hora;
        $carbon->id_quimico = "2";//asignado directamente id de carbon
        $carbon->id_agua = "1";//id Agua cruda
        $carbon->save();


        $cloro=new Consumo;
        
        $cloro->dosis = $request->dosif_cloro;
        $cloro->fecha = $request->fecha;
        $cloro->hora = $request->hora;
        $cloro->id_quimico = "8";//asignado directamente de id Cloro
        $cloro->id_agua = "4";//id Agua tratada
        $cloro->save();








/*Fin de guarda los datos de las DOSIFICACIONES*/







/*EQUIPOS OPERANDO*/

/* INICIO BOCATOMA*/

/*Equipo 1 de BT*/
        //se le pasa al metodo el valor del checkbox y el id respectivo del equipo en cuestion y hora 
        $this->guardaEquipo($request->eq1,$request->ideq1,$request->hora,$request->fecha);
/*Fin de Equipo 1 de BT*/

/*Equipo 2 de BT*/
        //se le pasa al metodo el valor del checkbox y el id respectivo del equipo en cuestion
        $this->guardaEquipo($request->eq2,$request->ideq2,$request->hora,$request->fecha);
/*Fin de Equipo 2 de BT*/
/*Equipo 3 de BT*/
       //se le pasa al metodo el valor del checkbox y el id respectivo del equipo en cuestion
        $this->guardaEquipo($request->eq3,$request->ideq3,$request->hora,$request->fecha);
/*Fin de Equipo 3 de BT*/
/*Equipo 4 de BT*/
        $this->guardaEquipo($request->eq4,$request->ideq4,$request->hora,$request->fecha);
/*Fin de Equipo 4 de BT*/
/*Equipo 5 de BT*/
       $this->guardaEquipo($request->eq5,$request->ideq5,$request->hora,$request->fecha);
/*Fin de Equipo 5 de BT*/
/*Equipo 6 de BT*/
        $this->guardaEquipo($request->eq6,$request->ideq6,$request->hora,$request->fecha);
/*Fin de Equipo 6 de BT*/
/*Equipo 7 de BT*/
        $this->guardaEquipo($request->eq7,$request->ideq7,$request->hora,$request->fecha);
/*Fin de Equipo 7 de BT*/
/*Equipo 8 de BT*/

        //se le pasa al metodo el valor del checkbox y el id respectivo del equipo en cuestion
        $this->guardaEquipo($request->eq8,$request->ideq8,$request->hora,$request->fecha);
               
/*Fin de Equipo 8 de BT*/


/*FIN BOCATOMA*/

/*INICIO EB1*/
    //Los ID de los equipos se agregaron a la vista manualmente-verificar y mejorar esta parte-
    /*Equipo 1 de EB1*/
        //los parametros que se envian al metodo son los que estan descritos particularmente para cada equipo
        $this->guardaEquipo($request->eb11,$request->ideq11,$request->hora,$request->fecha);
    /*Fin de Equipo 1 de EB1*/
     /*Equipo 2 de EB1*/
       
        $this->guardaEquipo($request->eb12,$request->ideq21,$request->hora,$request->fecha);
    /*Fin de Equipo 2 de EB1*/
    /*Equipo 3 de EB1*/
       
        $this->guardaEquipo($request->eb13,$request->ideq31,$request->hora,$request->fecha);
    /*Fin de Equipo 3 de EB1*/
     /*Equipo 4 de EB1*/
       
        $this->guardaEquipo($request->eb14,$request->ideq41,$request->hora,$request->fecha);
    /*Fin de Equipo 4 de EB1*/
     /*Equipo 5 de EB1*/
       
        $this->guardaEquipo($request->eb15,$request->ideq51,$request->hora,$request->fecha);
    /*Fin de Equipo 5 de EB1*/
    /*Equipo 6 de EB1*/
       
        $this->guardaEquipo($request->eb16,$request->ideq61,$request->hora,$request->fecha);
    /*Fin de Equipo 6 de EB1*/
      /*Equipo 7 de EB1*/
       
        $this->guardaEquipo($request->eb17,$request->ideq71,$request->hora,$request->fecha);
    /*Fin de Equipo 7 de EB1*/


/*FIN EB1*/

/*INICIO EB2*/
   
    /*Equipo 1 de EB2*/
      
       $this->guardaEquipo($request->eb21,$request->ideq12,$request->hora,$request->fecha);
    /*Fin de Equipo 1 de EB2*/
     /*Equipo 2 de EB2*/
       
        $this->guardaEquipo($request->eb22,$request->ideq22,$request->hora,$request->fecha);
    /*Fin de Equipo 2 de EB2*/
    /*Equipo 3 de EB2*/
       
        $this->guardaEquipo($request->eb23,$request->ideq32,$request->hora,$request->fecha);
    /*Fin de Equipo 3 de EB2*/
     /*Equipo 4 de EB2*/
       
        $this->guardaEquipo($request->eb24,$request->ideq42,$request->hora,$request->fecha);
    /*Fin de Equipo 4 de EB2*/
     /*Equipo 5 de EB2*/
       
        $this->guardaEquipo($request->eb25,$request->ideq52,$request->hora,$request->fecha);
    /*Fin de Equipo 5 de EB2*/
    /*Equipo 6 de EB2*/
       
        $this->guardaEquipo($request->eb26,$request->ideq62,$request->hora,$request->fecha);
    /*Fin de Equipo 6 de EB2*/
      /*Equipo 7 de EB2*/
       
        $this->guardaEquipo($request->eb27,$request->ideq72,$request->hora,$request->fecha);
    /*Fin de Equipo 7 de EB2*/


/*FIN EB2*/

/*INICIO EB3*/
   
    /*Equipo 1 de EB3*/
      
       $this->guardaEquipo($request->eb31,$request->ideq13,$request->hora,$request->fecha);
    /*Fin de Equipo 1 de EB3*/
     /*Equipo 2 de EB3*/
       
        $this->guardaEquipo($request->eb32,$request->ideq23,$request->hora,$request->fecha);
    /*Fin de Equipo 2 de EB3*/
    /*Equipo 3 de EB3*/
       
        $this->guardaEquipo($request->eb33,$request->ideq33,$request->hora,$request->fecha);
    /*Fin de Equipo 3 de EB3*/
     /*Equipo 4 de EB3*/
       
        $this->guardaEquipo($request->eb34,$request->ideq43,$request->hora,$request->fecha);
    /*Fin de Equipo 4 de EB3*/
     /*Equipo 5 de EB3*/
       
        $this->guardaEquipo($request->eb35,$request->ideq53,$request->hora,$request->fecha);
    /*Fin de Equipo 5 de EB3*/
    /*Equipo 6 de EB3*/
       
        $this->guardaEquipo($request->eb36,$request->ideq63,$request->hora,$request->fecha);
    /*Fin de Equipo 6 de EB3*/
      /*Equipo 7 de EB3*/
       
        $this->guardaEquipo($request->eb37,$request->ideq73,$request->hora,$request->fecha);
    /*Fin de Equipo 7 de EB3*/


/*FIN EB3*/

    $fecha_=$request->fecha;


        
         //return redirect('/resumenfecha_')->with('status', 'Guardado');

        return $this->index($fecha_);

        
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
    public function guardaEquipo($nombreElementoFormulario,$idEquipo,$hora,$fecha){

        $Equipo=new Operacion;//equipo x

        /*Pasando al metodo el valor del estado del eq de bombeo desde el formulario*/
        $valor= $this->verificarEstado($nombreElementoFormulario);
        
        //asignando a la tabla operacions->estado, el estado del equipo
        $Equipo->estado=$valor;

        
        $Equipo->id_equipo=$idEquipo;//del input oculto de la vista tomamos el id del equipo 
        $Equipo->fecha=$fecha;
        $Equipo->hora=$hora;

        $Equipo->save();

        return 'Guardado';


    }

/*Metodo para mostrar las producciones de las estaciones segun una fecha especifica, se muestra en vista PRODUCCIONES*/
public function producciones(){

       $fecha=date("Y-m-d");
    //por defecto enviamos la fecha de hoy para que se visualice en la vista
return $this->verProducciones($fecha);
       
        
}

/**
     * Mostrara en la vista PRODUCCIONES la fecha que el usuario selecciono en el calendario
     *
     * @param  \Illuminate\Http\Request  $request
     
     */
public function muestraProducciones(Request  $request){

            //recibiendo la fecha que selecionaron en el formulario para realizar la busqueda
        $fecha=$request->fecha;

        return $this->verProducciones($fecha);



}

/*Función que busca y muestra las producciones de las estaciones por una fecha determinada, 
se mostrará en vista PRODUCCIONES */
public function verProducciones($fecha_requerida){

        $id_bocatoma=1;
        $id_eb1=2;
        $id_eb2=3;
        $id_eb3=4;
        $id_las_pavas=8;

        $fecha=$fecha_requerida;

                
        
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

            

        
         /*Extrayendo caudales de BT por hora*/
  

        $c_bt_1=$this->buscarCaudales($fecha,$hora_1,$id_bocatoma);
        $c_bt_2=$this->buscarCaudales($fecha,$hora_2,$id_bocatoma);
        $c_bt_3=$this->buscarCaudales($fecha,$hora_3,$id_bocatoma);
        $c_bt_4=$this->buscarCaudales($fecha,$hora_4,$id_bocatoma);
        $c_bt_5=$this->buscarCaudales($fecha,$hora_5,$id_bocatoma);
        $c_bt_6=$this->buscarCaudales($fecha,$hora_6,$id_bocatoma);
        $c_bt_7=$this->buscarCaudales($fecha,$hora_7,$id_bocatoma);
        $c_bt_8=$this->buscarCaudales($fecha,$hora_8,$id_bocatoma);
        $c_bt_9=$this->buscarCaudales($fecha,$hora_9,$id_bocatoma);
        $c_bt_10=$this->buscarCaudales($fecha,$hora_10,$id_bocatoma);
        $c_bt_11=$this->buscarCaudales($fecha,$hora_11,$id_bocatoma);
        $c_bt_12=$this->buscarCaudales($fecha,$hora_12,$id_bocatoma);
        $c_bt_13=$this->buscarCaudales($fecha,$hora_13,$id_bocatoma);
        $c_bt_14=$this->buscarCaudales($fecha,$hora_14,$id_bocatoma);
        $c_bt_15=$this->buscarCaudales($fecha,$hora_15,$id_bocatoma);
        $c_bt_16=$this->buscarCaudales($fecha,$hora_16,$id_bocatoma);
        $c_bt_17=$this->buscarCaudales($fecha,$hora_17,$id_bocatoma);
        $c_bt_18=$this->buscarCaudales($fecha,$hora_18,$id_bocatoma);
        $c_bt_19=$this->buscarCaudales($fecha,$hora_19,$id_bocatoma);
        $c_bt_20=$this->buscarCaudales($fecha,$hora_20,$id_bocatoma);
        $c_bt_21=$this->buscarCaudales($fecha,$hora_21,$id_bocatoma);
        $c_bt_22=$this->buscarCaudales($fecha,$hora_22,$id_bocatoma);
        $c_bt_23=$this->buscarCaudales($fecha,$hora_23,$id_bocatoma);
        $c_bt_24=$this->buscarCaudales($fecha,$hora_24,$id_bocatoma);

         /*Extrayendo caudales de EB1 por hora*/
  

        $c_eb1_1=$this->buscarCaudales($fecha,$hora_1,$id_eb1);
        $c_eb1_2=$this->buscarCaudales($fecha,$hora_2,$id_eb1);
        $c_eb1_3=$this->buscarCaudales($fecha,$hora_3,$id_eb1);
        $c_eb1_4=$this->buscarCaudales($fecha,$hora_4,$id_eb1);
        $c_eb1_5=$this->buscarCaudales($fecha,$hora_5,$id_eb1);
        $c_eb1_6=$this->buscarCaudales($fecha,$hora_6,$id_eb1);
        $c_eb1_7=$this->buscarCaudales($fecha,$hora_7,$id_eb1);
        $c_eb1_8=$this->buscarCaudales($fecha,$hora_8,$id_eb1);
        $c_eb1_9=$this->buscarCaudales($fecha,$hora_9,$id_eb1);
        $c_eb1_10=$this->buscarCaudales($fecha,$hora_10,$id_eb1);
        $c_eb1_11=$this->buscarCaudales($fecha,$hora_11,$id_eb1);
        $c_eb1_12=$this->buscarCaudales($fecha,$hora_12,$id_eb1);
        $c_eb1_13=$this->buscarCaudales($fecha,$hora_13,$id_eb1);
        $c_eb1_14=$this->buscarCaudales($fecha,$hora_14,$id_eb1);
        $c_eb1_15=$this->buscarCaudales($fecha,$hora_15,$id_eb1);
        $c_eb1_16=$this->buscarCaudales($fecha,$hora_16,$id_eb1);
        $c_eb1_17=$this->buscarCaudales($fecha,$hora_17,$id_eb1);
        $c_eb1_18=$this->buscarCaudales($fecha,$hora_18,$id_eb1);
        $c_eb1_19=$this->buscarCaudales($fecha,$hora_19,$id_eb1);
        $c_eb1_20=$this->buscarCaudales($fecha,$hora_20,$id_eb1);
        $c_eb1_21=$this->buscarCaudales($fecha,$hora_21,$id_eb1);
        $c_eb1_22=$this->buscarCaudales($fecha,$hora_22,$id_eb1);
        $c_eb1_23=$this->buscarCaudales($fecha,$hora_23,$id_eb1);
        $c_eb1_24=$this->buscarCaudales($fecha,$hora_24,$id_eb1);

        /*Extrayendo caudales de EB2 por hora*/
  

        $c_eb2_1=$this->buscarCaudales($fecha,$hora_1,$id_eb2);
        $c_eb2_2=$this->buscarCaudales($fecha,$hora_2,$id_eb2);
        $c_eb2_3=$this->buscarCaudales($fecha,$hora_3,$id_eb2);
        $c_eb2_4=$this->buscarCaudales($fecha,$hora_4,$id_eb2);
        $c_eb2_5=$this->buscarCaudales($fecha,$hora_5,$id_eb2);
        $c_eb2_6=$this->buscarCaudales($fecha,$hora_6,$id_eb2);
        $c_eb2_7=$this->buscarCaudales($fecha,$hora_7,$id_eb2);
        $c_eb2_8=$this->buscarCaudales($fecha,$hora_8,$id_eb2);
        $c_eb2_9=$this->buscarCaudales($fecha,$hora_9,$id_eb2);
        $c_eb2_10=$this->buscarCaudales($fecha,$hora_10,$id_eb2);
        $c_eb2_11=$this->buscarCaudales($fecha,$hora_11,$id_eb2);
        $c_eb2_12=$this->buscarCaudales($fecha,$hora_12,$id_eb2);
        $c_eb2_13=$this->buscarCaudales($fecha,$hora_13,$id_eb2);
        $c_eb2_14=$this->buscarCaudales($fecha,$hora_14,$id_eb2);
        $c_eb2_15=$this->buscarCaudales($fecha,$hora_15,$id_eb2);
        $c_eb2_16=$this->buscarCaudales($fecha,$hora_16,$id_eb2);
        $c_eb2_17=$this->buscarCaudales($fecha,$hora_17,$id_eb2);
        $c_eb2_18=$this->buscarCaudales($fecha,$hora_18,$id_eb2);
        $c_eb2_19=$this->buscarCaudales($fecha,$hora_19,$id_eb2);
        $c_eb2_20=$this->buscarCaudales($fecha,$hora_20,$id_eb2);
        $c_eb2_21=$this->buscarCaudales($fecha,$hora_21,$id_eb2);
        $c_eb2_22=$this->buscarCaudales($fecha,$hora_22,$id_eb2);
        $c_eb2_23=$this->buscarCaudales($fecha,$hora_23,$id_eb2);
        $c_eb2_24=$this->buscarCaudales($fecha,$hora_24,$id_eb2);

        /*Extrayendo caudales de EB3 por hora*/
  

        $c_eb3_1=$this->buscarCaudales($fecha,$hora_1,$id_eb3);
        $c_eb3_2=$this->buscarCaudales($fecha,$hora_2,$id_eb3);
        $c_eb3_3=$this->buscarCaudales($fecha,$hora_3,$id_eb3);
        $c_eb3_4=$this->buscarCaudales($fecha,$hora_4,$id_eb3);
        $c_eb3_5=$this->buscarCaudales($fecha,$hora_5,$id_eb3);
        $c_eb3_6=$this->buscarCaudales($fecha,$hora_6,$id_eb3);
        $c_eb3_7=$this->buscarCaudales($fecha,$hora_7,$id_eb3);
        $c_eb3_8=$this->buscarCaudales($fecha,$hora_8,$id_eb3);
        $c_eb3_9=$this->buscarCaudales($fecha,$hora_9,$id_eb3);
        $c_eb3_10=$this->buscarCaudales($fecha,$hora_10,$id_eb3);
        $c_eb3_11=$this->buscarCaudales($fecha,$hora_11,$id_eb3);
        $c_eb3_12=$this->buscarCaudales($fecha,$hora_12,$id_eb3);
        $c_eb3_13=$this->buscarCaudales($fecha,$hora_13,$id_eb3);
        $c_eb3_14=$this->buscarCaudales($fecha,$hora_14,$id_eb3);
        $c_eb3_15=$this->buscarCaudales($fecha,$hora_15,$id_eb3);
        $c_eb3_16=$this->buscarCaudales($fecha,$hora_16,$id_eb3);
        $c_eb3_17=$this->buscarCaudales($fecha,$hora_17,$id_eb3);
        $c_eb3_18=$this->buscarCaudales($fecha,$hora_18,$id_eb3);
        $c_eb3_19=$this->buscarCaudales($fecha,$hora_19,$id_eb3);
        $c_eb3_20=$this->buscarCaudales($fecha,$hora_20,$id_eb3);
        $c_eb3_21=$this->buscarCaudales($fecha,$hora_21,$id_eb3);
        $c_eb3_22=$this->buscarCaudales($fecha,$hora_22,$id_eb3);
        $c_eb3_23=$this->buscarCaudales($fecha,$hora_23,$id_eb3);
        $c_eb3_24=$this->buscarCaudales($fecha,$hora_24,$id_eb3);



$suma_bocatoma= $this->sumatoriaCaudales($fecha,$id_bocatoma);
$suma_eb1= $this->sumatoriaCaudales($fecha,$id_eb1);
$suma_eb2= $this->sumatoriaCaudales($fecha,$id_eb2);
$suma_eb3= $this->sumatoriaCaudales($fecha,$id_eb3);
$aporte_zn=$suma_eb2-$suma_eb3;

/*Calculos de caudal en m3/s, 86400 son los segundos del día*/
$bt_m3_s= round(($suma_bocatoma/86400),2);
$eb1_m3_s=round(($suma_eb1/86400),2);
$eb2_m3_s=round(($suma_eb2/86400),2);
$eb3_m3_s=round(($suma_eb3/86400),2);


/*Aporte a Tanque Las Pavas 
*/
$aporte_tanque_pavas=$this->caudalAportePavas($fecha,$id_las_pavas);


        return view('producciones',compact('fecha','c_bt_1','c_bt_2','c_bt_3','c_bt_4','c_bt_5'
    ,'c_bt_6','c_bt_7','c_bt_8','c_bt_9','c_bt_10','c_bt_11','c_bt_12','c_bt_13','c_bt_14','c_bt_15','c_bt_16','c_bt_17','c_bt_18','c_bt_19','c_bt_20','c_bt_21','c_bt_22','c_bt_23','c_bt_24','c_eb1_1','c_eb1_2','c_eb1_3','c_eb1_4','c_eb1_5','c_eb1_6','c_eb1_7','c_eb1_8','c_eb1_9','c_eb1_10','c_eb1_11','c_eb1_12','c_eb1_13','c_eb1_14','c_eb1_15','c_eb1_16','c_eb1_17','c_eb1_18','c_eb1_19','c_eb1_20','c_eb1_21','c_eb1_22','c_eb1_23','c_eb1_24','c_eb2_1','c_eb2_2','c_eb2_3','c_eb2_4','c_eb2_5','c_eb2_6','c_eb2_7','c_eb2_8','c_eb2_9','c_eb2_10','c_eb2_11','c_eb2_12','c_eb2_13','c_eb2_14','c_eb2_15','c_eb2_16','c_eb2_17','c_eb2_18','c_eb2_19','c_eb2_20','c_eb2_21','c_eb2_22','c_eb2_23','c_eb2_24','c_eb3_1','c_eb3_2','c_eb3_3','c_eb3_4','c_eb3_5','c_eb3_6','c_eb3_7','c_eb3_8','c_eb3_9','c_eb3_10','c_eb3_11','c_eb3_12','c_eb3_13','c_eb3_14','c_eb3_15','c_eb3_16','c_eb3_17','c_eb3_18','c_eb3_19','c_eb3_20','c_eb3_21','c_eb3_22','c_eb3_23','c_eb3_24','suma_bocatoma','suma_eb1','suma_eb2','suma_eb3','aporte_zn','aporte_tanque_pavas','bt_m3_s','eb1_m3_s','eb2_m3_s','eb3_m3_s'));




}

//Funcion que busca el aporte para una fecha determinada del tanque Las Pavas
public function caudalAportePavas($fecha,$id_tanque_pavas)
{
    $aporte_pavas=DB::table('produccions')
                ->select('caudal')
                    
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_tanque_pavas)
                ->get();

                    //extrayendo aporte y retornandolo
                foreach ($aporte_pavas as $aporte) {
                    return  $aporte->caudal;
                }

                
}

//Busca los caudales de una estacion para mostrarse en la vista "producciones"
public function buscarCaudales($fecha,$hora,$id_estacion){

$caudal=DB::table('produccions')
                ->select('caudal','id')
                ->where('hora','=',$hora)
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_estacion)
                ->get();

                return $caudal;

}

//Busca los caudales de una estacion y saca la sumatoria para mostrarse en la vista "producciones"
public function sumatoriaCaudales($fecha,$id_estacion){

$suma_caudal=DB::table('produccions')
                ->select('caudal')
                //->where('hora','=',$hora)
                //->whereDate('updated_at', '=', $fecha)
                ->where('fecha','=',$fecha)
                ->where('id_estacion', '=', $id_estacion)
                ->get();

                
                $suma=0;
//recorriendo los valores de la base de datos y sumando
                foreach ($suma_caudal as $cau) {
                    
                  $valor1=$cau->caudal;
                  $suma += $valor1;
                                  

                }
                return $suma;//retornamos la suma realizada previamente

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
     * Actualiza caudales de las estaciones, recibe directamente de la vista EDITAR-PRODUCCION los caudales que se actualizaran.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Capturando la fecha
        $fecha=$request->fecha;
        $hora=$request->hora;

        //id´s de los caudales a modificar
        $id_bt_= $request->id_bt;
        $id_eb1_=$request->id_eb1;
        $id_eb2_=$request->id_eb2;
        $id_eb3_=$request->id_eb3;

        $caudal_bt=$request->caudalbt;
        $caudal_eb1=$request->caudal1;
        $caudal_eb2=$request->caudal2;
        $caudal_eb3=$request->caudal3;

        $this->actualizar($id_bt_,$caudal_bt,$fecha,$hora);
        $this->actualizar($id_eb1_,$caudal_eb1,$fecha,$hora);
        $this->actualizar($id_eb2_,$caudal_eb2,$fecha,$hora);
        $this->actualizar($id_eb3_,$caudal_eb3,$fecha,$hora);




        //Funcion que carga las producciones a la vista PRODUCCIONES segun una fecha determinada
        return $this->verProducciones($fecha);

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

    /*Funcion que realiza las actualizaciones de cauldales*/

       public function actualizar($id,$cauda,$fecha,$hora){
        //Busca un elemento en particular y luego lo modifica
        $caudal= Produccion::find($id);
        $caudal->caudal = $cauda;
        $caudal->hora = $hora;
        $caudal->fecha = $fecha;
        $caudal->save();

        }






/*Recibe un id de BT para precargar los datos de produccion y enviarlo a la vista EDITAR-PRODUCCION para su edición
, además se extraen los id de las otras estaciones para el caudal en cuestion los cuales se utilizaran para modificar los datos*/
    public function precargar($id){
        $id_bocatoma=1;
        $id_eb1=2;
        $id_eb2=3;
        $id_eb3=4;



        /*datos EB3, se esta tomando el id desde la vista PRODUCCIONES*/
          $eb3=DB::table('produccions')
        ->select('produccions.*')
        ->where('id','=',$id)
        /*->where('hora','=',$hora)//los datos de fecha y hora se toman desde el id de BT
        ->where('fecha','=',$fecha)
        ->where('id_estacion','=',$id_eb3)*/
        ->get();

        /*Extrayendo caudal de eb3*/

        foreach ($eb3 as $cau) {
            $caudal3=$cau->caudal;
            $id_3=$cau->id;
            
        }

          //obteniendo hora mediante los datos de eb3
        foreach ($eb3 as $h) {
            $hora=$h->hora;
        }
        //obteniendo fecha mediante los datos de eb3
        foreach ($eb3 as $f) {
            $fecha=$f->fecha;
        }



//Datos para BT
        $prod=DB::table('produccions')
        ->select('produccions.*')
        ->where('hora','=',$hora)//los datos de fecha y hora se toman desde el id de BT
        ->where('fecha','=',$fecha)
        ->where('id_estacion','=',$id_bocatoma)
        /*->where('id','=',$id)*/
        ->get();

        //Obteniendo el id
        foreach ($prod as $id_ ) {
            
            $key=$id_->id_estacion;
            $id_bt=$id_->id;


        }

        /*Utilizando $key se obtiene el id_estacion y asi se envia el valor 
                para realizar la busqueda del nombre*/

        $estacion=DB::table('estacions')
        ->select('nombre')
        ->where('id','=',$key)->get();

        foreach ($estacion as $name) {
            $nombre=$name->nombre;
        }
 

    //obteniendo caudal de bt 
        foreach ($prod as $cau ) {
            
            $caudal=$cau->caudal;

        }



    /*Precargar datos de EB1*/
      

        $eb1=DB::table('produccions')
        ->select('produccions.*')
        ->where('hora','=',$hora)//los datos de fecha y hora se toman desde el id de BT
        ->where('fecha','=',$fecha)
        ->where('id_estacion','=',$id_eb1)
        ->get();



        /****Nota, extraer el id de la estacion, pasarlo a la vista editar para luego utilizarlo
        en la actualizacion de datos*****/

        /*Extrayendo caudal de eb1*/

        foreach ($eb1 as $cau) {
            $caudal1=$cau->caudal;
            $id_1=$cau->id;
        }

        /*datos EB2*/
          $eb2=DB::table('produccions')
        ->select('produccions.*')
        ->where('hora','=',$hora)//los datos de fecha y hora se toman desde el id de BT
        ->where('fecha','=',$fecha)
        ->where('id_estacion','=',$id_eb2)
        ->get();

        /*Extrayendo caudal de eb2*/

        foreach ($eb2 as $cau) {
            $caudal2=$cau->caudal;
            $id_2=$cau->id;
        }

         



    
    return view ('editar-produccion', compact ('prod','id','id_bt','caudal','nombre','caudal1','id_1','caudal2','id_2','caudal3','id_3','key','fecha'));

    }

/*---------------------------------------SECCION EXCLUSIVA DE DASHBOARD----------------------------------*/


 /**
     * 
     *Controla la informacion de la vista Dashboard con los caudales del mes de cada estacion y mas informacion, Recibe una fecha en particular para filtrar la información
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


public function dashboard(Request  $request){ 

/*Validando si el usuario ha pedido una fecha en particular, de lo contrario la fecha que se muestra es la del mes actual*/
    if (empty($request->fecha)) {
        $fecha=date('Y-m-d');
    }else{
        $fecha=$request->fecha;//fecha que se recibe por parametro
    }




$id_bocatoma=1;
$id_eb1=2;
$id_eb2=3;
$id_eb3=4;
$id_polialta=10;
$id_tanquePavas=8;


$dias=array();
//obtiene un arreglo con todos los dias del mes segun la fecha que se pase
$dias=$this->desgloceFecha($fecha);

/*MANEJO DE PRODUCCIONES DE ESTACIONES*/

$bt_prod =array();
//llenando el arreglo con las sumas de los caudales de BT para la fecha determinada (mes)
$bt_prod=$this->sumaCaudalesMes($id_bocatoma,$dias);


$eb1_prod =array();

//llenando el arreglo con las sumas de los caudales de EB1 para la fecha determinada (mes)
$eb1_prod=$this->sumaCaudalesMes($id_eb1,$dias);
$eb2_prod =array();

//llenando el arreglo con las sumas de los caudales de EB2 para la fecha determinada (mes)
$eb2_prod=$this->sumaCaudalesMes($id_eb2,$dias);

$eb3_prod =array();
//llenando el arreglo con las sumas de los caudales de EB3 para la fecha determinada (mes)
$eb3_prod=$this->sumaCaudalesMes($id_eb3,$dias);





 /*CONSUMO DE QUIMICOS -RESUMEN DE CARGAS*/

$perm=array();
$id_perm=1;
$perm=$this->sumaCargas($id_perm,$dias);

$carbon=array();
$id_carb=2;
$carbon=$this->sumaCargas($id_carb,$dias);

$hip=array();
$id_hip=3;
$hip=$this->sumaCargas($id_hip,$dias);

$cal=array();
$id_cal=4;
$cal=$this->sumaCargas($id_cal,$dias);

$sulfato=array();
$id_sulfato=5;
$sulfato=$this->sumaCargas($id_sulfato,$dias);




$pac=array();
$id_pac=6;
$pac=$this->sumaCargas($id_pac,$dias);

$polimero=array();
$id_polimero=7;//polimero baja
//llenando el arreglo con las sumas de las cargas segun fecha determinada (mes)
$polimero=$this->sumaCargas($id_polimero,$dias);

$cloro=array();
$id_cloro=8;
//llenando el arreglo con las sumas de las cargas segun fecha determinada (mes)
$cloro=$this->sumaCargas($id_cloro,$dias);

$polimeroA=array();

//llenando el arreglo con las sumas de las cargas segun fecha determinada (mes)
$polimeroA=$this->sumaCargas($id_polialta,$dias);


/*CALIDADES DE AGUA*/

//Agua cruda - Turbidez
$min_cruda=array();
$id_aguaC=1;
$campo='turbidez';
$min_cruda= $this->minimoDia($dias,$id_aguaC,$campo);
//Manejo de datos totales
$min_cruda_t=min($min_cruda);
$max_cruda_t=max($min_cruda);
$prom_cruda_t=round((array_sum($min_cruda)/count($min_cruda)),2);

$max_cruda=array();
$max_cruda=$this->maximoDia($dias,$id_aguaC,$campo);
$prom_cruda=array();
$prom_cruda=$this->promedioDia($dias,$id_aguaC,$campo);
//minimo-maximo-promedio del valor promedio de turbidez
$min_cruda_t_prom=min($prom_cruda);
$max_cruda_t_prom=max($prom_cruda);
$prom_prom_cruda=round((array_sum($prom_cruda)/count($prom_cruda)),2);//calculo del promedio del promedio


//manejo de totales 
$min_cruda_m=min($max_cruda);
$max_cruda_m=max($max_cruda);
$prom_cruda_m=round((array_sum($max_cruda)/count($max_cruda)),2);




//Agua cruda - PH
$min_c_ph=array();
$campo_ph='ph';
$min_c_ph=$this->minimoDia($dias,$id_aguaC,$campo_ph);
$max_cruda_ph=array();
$max_cruda_ph=$this->maximoDia($dias,$id_aguaC,$campo_ph);
$prom_cruda_ph=array();
$prom_cruda_ph=$this->promedioDia($dias,$id_aguaC,$campo_ph);
//totales del minimo del ph
$min_crud_ph_t=min($min_c_ph);
$max_crud_ph_t=max($min_c_ph);
$prom_min_crud_ph_t=round((array_sum($min_c_ph)/count($min_c_ph)),2);//promedio del minimo del ph de agua cruda
//totales del promedio ph
$min_prom_ph_t=min($prom_cruda_ph);
$max_prom_ph_t=max($prom_cruda_ph);
$prom_max_prom_ph_t=round((array_sum($prom_cruda_ph)/count($prom_cruda_ph)),2);//promedio del promedio del ph de agua cruda

//totales del maximo
$min_crud_ph_t1=min($max_cruda_ph);
$max_crud_ph_t1=max($max_cruda_ph);
$prom_max_ph_t=round((array_sum($max_cruda_ph)/count($max_cruda_ph)),2);//promedio del maximo del ph de agua cruda


//Agua tratada
$min_trat=array();
$id_agua_trat=4;
//$campo='turbidez';
$min_trat=$this->minimoDia($dias,$id_agua_trat,$campo);
$max_trat=array();
$max_trat=$this->maximoDia($dias,$id_agua_trat,$campo);
$prom_trat=array();
$prom_trat=$this->promedioDia($dias,$id_agua_trat,$campo);
//Agua tratada - PH
$min_t_ph=array();
$min_t_ph=$this->minimoDia($dias,$id_agua_trat,$campo_ph);
$max_trat_ph=array();
$max_trat_ph=$this->maximoDia($dias,$id_agua_trat,$campo_ph);
$prom_trat_ph=array();
$prom_trat_ph=$this->promedioDia($dias,$id_agua_trat,$campo_ph);

//min-max-prom del minimo de tratada
$min_trat_t=min($min_trat);
$max_trat_t=max($min_trat);
$prom_min_trat_t=round((array_sum($min_trat)/count($min_trat)),2);//promedio del minimo de turbidez de agua tratada

//min-max-prom del maximo de tratada
$min_trat_m_t=min($max_trat);
$max_trat_m_t=max($max_trat);
$prom_min_trat_m_t=round((array_sum($max_trat)/count($max_trat)),2);//promedio del maximo de turbidez de agua tratada
//min-max-prom del promedio de tratada
$min_trat_p_t=min($prom_trat);
$max_trat_p_t=max($prom_trat);
$prom_min_trat_p_t=round((array_sum($prom_trat)/count($prom_trat)),2);//promedio del promedio de turbidez de agua tratada

//min-max-prom ph del minimo de tratada
$min_trat_t_ph=min($min_t_ph);
$max_trat_t_ph=max($min_t_ph);
$prom_min_trat_t_ph=round((array_sum($min_t_ph)/count($min_t_ph)),2);//promedio del minimo de ph de agua tratada

//min-max-prom ph del Maximo de tratada
$min_trat_m_ph=min($max_trat_ph);
$max_trat_m_ph=max($max_trat_ph);
$prom_max_trat_m_ph=round((array_sum($max_trat_ph)/count($max_trat_ph)),2);//promedio del maximo de ph de agua tratada

//min-max-prom ph del Promedio de tratada
$min_trat_prom_ph=min($prom_trat_ph);
$max_trat_prom_ph=max($prom_trat_ph);
$prom_prom_trat_ph=round((array_sum($prom_trat_ph)/count($prom_trat_ph)),2);//promedio del promedio de ph de agua tratada

/*NIVEL DEL RIO*/
$nivel='nivel_rio';
$nivel_rio=array();
$nivel_rio=$this->promedioDiaRio($dias,$id_bocatoma,$nivel);
//Calcula y muestra el promedio total del nivel del rio para el mes en cuestion
$promedio_nivel_rio=$this->promedioRioTotal($dias,$id_bocatoma,$nivel);





/*NIVEL DEL RESERVORIO - CAMARAS DE ESTACIONES*/
//en este caso utilizaremos las mismas funciones anteriores, solamente modificamos EB1,EB2,EB3 nivel_camara
$camara_nivel='nivel_camara';
$nivel_reservorio=array();
//utilizando la misma funcion solamente se cambio los datos a consultar, en este caso nivel de camara de EB1 que hace referencia al nivel del reservorio
$nivel_reservorio=$this->promedioDiaRio($dias,$id_eb1,$camara_nivel);
//Calculos de minimo-maximo-promedio del nivel del reservorio
$nivel_reser_min=min($nivel_reservorio);
$nivel_reser_max=max($nivel_reservorio);
$nivel_reser_prom= round((array_sum($nivel_reservorio)/count($nivel_reservorio)),2);//calculando promedio y redondeando a 2 decimales

/*Nivel  camara de EB2*/
$nivel_eb2=$this->promedioDiaRio($dias,$id_eb2,$camara_nivel);
//Calculos de minimo-maximo-promedio del nivel de camara de eb2
$nivel_eb2_min=min($nivel_eb2);
$nivel_eb2_max=max($nivel_eb2);
$nivel_eb2_prom= round((array_sum($nivel_eb2)/count($nivel_eb2)),2);//calculando promedio y redondeando a 2 decimales

/*Nivel  camara de EB3*/
$nivel_eb3=$this->promedioDiaRio($dias,$id_eb3,$camara_nivel);
//Calculo de minimo-maximo-promedio del nivel de camara de eb3
$nivel_eb3_min=min($nivel_eb3);
$nivel_eb3_max=max($nivel_eb3);
$nivel_eb3_prom= round((array_sum($nivel_eb3)/count($nivel_eb3)),2);//calculando promedio y redondeando a 2 decimales



/*Sumatoria CARGA DE QUIMICOS */

$sulf=$this->sumaTotalCargas($dias,$id_sulfato);
$poli_alta=$this->sumaTotalCargas($dias,$id_polialta);
$pol_b=$this->sumaTotalCargas($dias,$id_polimero);
$perma=$this->sumaTotalCargas($dias,$id_perm);
$carbon_=$this->sumaTotalCargas($dias,$id_carb);
$hipo=$this->sumaTotalCargas($dias,$id_hip);
$cal_=$this->sumaTotalCargas($dias,$id_cal);
$pac_=$this->sumaTotalCargas($dias,$id_pac);
$clor_=$this->sumaTotalCargas($dias,$id_cloro);

/*SUMATORIA PRODUCCIONES DEL MES*/

$total_bt=$this->sumaTotalCaudal($dias,$id_bocatoma);
$total_eb1=$this->sumaTotalCaudal($dias,$id_eb1);
$total_eb2=$this->sumaTotalCaudal($dias,$id_eb2);
$total_eb3=$this->sumaTotalCaudal($dias,$id_eb3);

/*APORTE DE TANQUE LAS PAVAS*/

//Extrayendo aporte a tanque las pavas para mostrarse en dia a dia
$pavas_aporte=array();
//Llenado de los datos dia a dia para el mes en cuestion - las pavas
for ($i=1; $i < count($dias); $i++) { 
    $pavas_aporte[$i]=$this->aportePavas($dias[$i],$id_tanquePavas);
}
//sumatoria de todos los dias del mes para aporte Las Pavas
$suma_pavas=array_sum($pavas_aporte);


/*Varibles para el grafico de estadisticas CAUSAS PARO*/
$variacion='Variación';
$paro_variacion=$this->contarCausaParo($fecha,$variacion);
$corte='Corte';
$paro_corte=$this->contarCausaParo($fecha,$corte);
$turbidez='turbidez';
$paro_turbidez=$this->contarCausaParo($fecha,$turbidez);
$programado='programado';
$paro_programado=$this->contarCausaParo($fecha,$programado);
$produccion='producción';
$paro_produccion=$this->contarCausaParo($fecha,$produccion);

//Funcionalidad para el grafico de dashboard de turbidez vs coagualnte
$maximo_coagulante=array();
$maximo_coagulante=$this->maximoSulfatoMes($dias,$id_sulfato);



return view('dashboard', compact('fecha','bt_prod','dias','eb1_prod','eb2_prod','eb3_prod','sulfato','polimero','perm','carbon','hip','cal','pac','cloro','polimeroA','min_cruda','max_cruda','prom_cruda','min_trat','min_c_ph','max_cruda_ph','prom_cruda_ph','max_trat','prom_trat','min_t_ph','max_trat_ph','prom_trat_ph','nivel_rio','nivel_reservorio','nivel_reser_min','nivel_reser_max','nivel_reser_prom','poli_alta','sulf','pol_b','perma','carbon_','hipo','cal_','pac_','clor_','total_bt','total_eb1','total_eb2','total_eb3','promedio_nivel_rio','min_cruda_t','max_cruda_t','prom_cruda_t','min_cruda_m','max_cruda_m','prom_cruda_m','min_crud_ph_t','max_crud_ph_t','min_crud_ph_t1','max_crud_ph_t1','min_prom_ph_t','max_prom_ph_t','prom_max_prom_ph_t','min_cruda_t_prom','max_cruda_t_prom','prom_prom_cruda','prom_min_crud_ph_t','prom_max_ph_t','min_trat_t','max_trat_t','prom_min_trat_t','min_trat_m_t','max_trat_m_t','prom_min_trat_m_t','min_trat_p_t','max_trat_p_t','prom_min_trat_p_t','min_trat_t_ph','max_trat_t_ph','prom_min_trat_t_ph','min_trat_m_ph','max_trat_m_ph','prom_max_trat_m_ph','min_trat_prom_ph','max_trat_prom_ph','prom_prom_trat_ph','pavas_aporte','suma_pavas','nivel_eb2','nivel_eb2_min','nivel_eb2_max','nivel_eb2_prom','nivel_eb3','nivel_eb3_min','nivel_eb3_max','nivel_eb3_prom','paro_variacion','paro_corte','paro_turbidez','paro_programado','paro_produccion','maximo_coagulante'));
}


/*funcion que se encarga de contar cuantas veces se repite en un mes una causa determinada de paro*/
public function contarCausaParo($fecha,$causa)
{   
    //El conteo se realiza a partir de la primera frase que tenga la causa
    $conteo_causa = DB::table('suspensions')
                ->whereRaw('month(fecha) = month(?)',[$fecha])
                ->where('causa', 'like', '%'.$causa.'%' )//los simbolos % significan que la causa (palabra) se buscará entre una frase
                ->count();

                return $conteo_causa;
}

/*Obtiene el Aporte a tanque Las Pavas para una fecha determinada*/
public function aportePavas($fecha,$id_pavas)
{
     $aporte = DB::table('produccions')
                ->select('caudal')
                ->where('fecha' ,'=', $fecha)
                ->where('id_estacion' ,'=' ,$id_pavas)
                ->get();

                foreach ($aporte as $dato) {
                   return $dato->caudal;
                }

               // return $aporte;

                
}


//Realiza la sumatoria de las cargas de quimicos y los llena los 31 dias del mes
public function sumaTotalCargas($dias,$id_quimico)
{
    $sumacargas=0;
    //count($dias)
    for ($i=1; $i < count($dias); $i++) 
    { 
    $valor=0;
    $valor =$this->sumatoriaMesQuimicos($dias[$i],$id_quimico);
    $sumacargas += $valor;

    }

return number_format($sumacargas);


}


//Obtiene el valor minimo de la calidad de agua de un mes
public function minimoDia($dia,$id_agua,$campo)
{

$minimo=array();

//llenando el arreglo con las sumas de las cargas segun fecha determinada (mes)
//count($dia)
for ($i=1; $i < count($dia); $i++) { 
    //llenando el arreglo con los valores minimos dia por dia
    $minimo[$i]= $this->minimosAgua($dia[$i],$id_agua,$campo);
}

    

return  $minimo;


    
}

//Busca y retorna el valor minimo de un campo en especifico, para un tipo de agua que reciba por parametro según fecha. 
public function minimosAgua($fecha, $id_agua, $campo)
{

    $valor_minimo = DB::table('calidads')
                ->where('fecha' ,'=', $fecha)
                ->where('id_agua' ,'=' ,$id_agua)
                ->min($campo);

                return $valor_minimo;

}

//Obtiene el valor Maximo de la calidad de agua de un mes
public function maximoDia($dia,$id_agua,$campo)
{
    // code...
    $maximo=array();

//llenando el arreglo con los  valores maximos (dia a dia)
    //count($dia)
for ($i=1; $i < count($dia) ; $i++) { 
    //llenando el arreglo con los valores maximos dia por dia
    $maximo[$i]= $this->maximoAgua($dia[$i],$id_agua,$campo);
}

return $maximo;

}


//Busca y retorna el valor maximo de un campo en especifico y tipo de agua que reciba por parametro según fecha. 
public function maximoAgua($fecha, $id_agua, $campo){

    $valor_max = DB::table('calidads')
                ->where('fecha' ,'=', $fecha)
                ->where('id_agua' ,'=' ,$id_agua)
                ->max($campo);

                return $valor_max;

}



//Obtiene el valor Promedio de la calidad de agua de un mes
public function promedioDia($dia,$id_agua,$campo)
{
    // code...
    $promedio=array();

//llenando el arreglo con los  valores promedios (dia a dia)
    //count($dia)
for ($i=1; $i < count($dia) ; $i++) { 
    //llenando el arreglo con los valores promedios dia por dia
    $promedio[$i]= $this->promedioAgua($dia[$i],$id_agua,$campo);
}

return $promedio;

}


//Busca y retorna el valor promedio de un campo en especifico y tipo de agua que reciba por parametro según fecha. 
public function promedioAgua($fecha, $id_agua, $campo){

    $valor_prom = DB::table('calidads')
                ->where('fecha' ,'=', $fecha)
                ->where('id_agua' ,'=' ,$id_agua)
                ->avg($campo);

                return round($valor_prom,2) ;//redondea a 2 decimales y devuelve el valor
                

}

//Llena en un arreglo los valores del coagulante durante todo un mes para ser utilizado en vista dashboard y mostrarse en el grafico
public function maximoSulfatoMes($dia, $id_sulfato){

// code...
    $maximo=array();

//llenando el arreglo con los  valores promedios (dia a dia)
    //count($dia)
for ($i=1; $i < count($dia) ; $i++) { 
    //llenando el arreglo con los valores promedios dia por dia
    $maximo[$i]= $this->maximoSulfato($dia[$i],$id_sulfato);
}

return $maximo;
   
                

}

//Busca y obtiene el valor maximo de la dosis aplicada de coagulante en un dia especifico
public function maximoSulfato($fecha, $id_sulfato){

    $valor_maximo = DB::table('consumos')
                ->where('fecha' ,'=', $fecha)
                ->where('id_quimico' ,'=' ,$id_sulfato)
                ->max('dosis');

                return $valor_maximo;
                

}




//Funcion que llena un arreglo con todos los dias de un mes en particular, con los valores promedio del nivel del rio.
public function promedioDiaRio($dia,$id_estacion,$campo)
{
    
    $prom=array();

//For que llena el arreglo con los  valores promedios
    //count($dia)
for ($i=1; $i < count($dia); $i++) { 
    //llenando el arreglo con los valores promedios dia por dia(de todo el mes)
    $prom[$i]= $this->promedioRio($dia[$i],$id_estacion,$campo);
}

return $prom;

}

/*Obtiene el promedio mensual del nivel del Rio*/
public function promedioRioTotal($dia,$id_estacion,$campo)
{
    $prom=array();

//For que llena el arreglo con los  valores promedios
    //count($dia)
for ($i=1; $i < count($dia); $i++) { 
    //llenando el arreglo con los valores promedios dia por dia(de todo el mes)
    $prom[$i]= $this->promedioRio($dia[$i],$id_estacion,$campo);
}

$total= count($prom);
$suma_elemen= array_sum($prom);

 $promedio=$suma_elemen/$total;

    return round($promedio,2);//redondeando los valores a dos decimales
}

//Obtiene el valor promedio del nivel del Rio para una fecha especifica
public function promedioRio($fecha, $id_estacion, $campo)
{
    $val_prom = DB::table('produccions')
                ->where('fecha' ,'=', $fecha)
                ->where('id_estacion' ,'=' ,$id_estacion)
                ->avg($campo);

                return round($val_prom,2) ;//redondea a 2 decimales y devuelve el valor
               
}




//Devuelve la suma de todas las cargas de los dias de un mes
public function sumaCargas($id_quimico,$dias){
$quimico=array();

//llenando el arreglo con las sumas de las cargas segun fecha determinada (mes)
//count($dias)
for ($i=1; $i < count($dias); $i++) { 
    //llenando el arreglo con la sumatoria de las cargas dia por dia
    $quimico[$i]= $this->consumoQuimicos($id_quimico,$dias[$i]);
}

return $quimico;

}


//Realiza la sumatoria de los caudales de una estacion y los llena los 31 dias del mes
public function sumaTotalCaudal($dias,$id_estacion)
{
    $sumacaudal=0;
    //count($dias)
    for ($i=1; $i < 32 ; $i++) 
    { 
    $valor=0;
    $valor =$this->totalMesCaudales($dias[$i],$id_estacion);
    $sumacaudal += $valor;

    }

return $sumacaudal ;


}

//Obtiene la sumatoria de los caudales en una fecha en particular
public function totalMesCaudales($fecha,$id_estacion)
{
    
    $caudal = DB::table('produccions')
   ->where('fecha' ,'=', $fecha)
    ->where('id_estacion' ,'=' ,$id_estacion)
    ->sum('caudal');

    return $caudal;
}

//Obtiene la sumatoria de las cargas de una quimico en una fecha en particular
public function sumatoriaMesQuimicos($fecha,$id_quimico)
{
    
    $cargas = DB::table('cargas')
   ->where('fecha' ,'=', $fecha)
    ->where('id_quimico' ,'=' ,$id_quimico)
    ->sum('cantidad');

    return $cargas;
}


/*Obtiene los caudales del mes de una estacion en particular*/
 public function sumaCaudalesMes($id_estacion,$dias)
{
    // arreglo para almacenar los datos de todos los dias del mes solicitado
    $datos_estacion =array();

//llenando el arreglo con las sumas de los caudales segun fecha determinada (mes)
for ($i=1; $i <count($dias) ; $i++) { 
    //llenando el arreglo con la sumatoria de los caudales dia por dia
    $datos_estacion[$i]= $this->dashProduccion($id_estacion,$dias[$i]);
}

return $datos_estacion;

}

/*Funcion que recibe una fecha en particular y se encarga de devolver un arreglo con todos los dias del mes en cuestion */
public function desgloceFecha($fecha){

//Determinacion de meses con 31 dias
//01,03,05,07,08,12,10
$enero=01;
$marzo=03;
$mayo=05;
$julio=07;

$octubre=10;
$diciembre=12;

//$agosto=08;
//$aug='08';
//$fecha='2022-01-01';


//tomamos la fecha que se pasa por parametro y extraemos el mes
$mes_entero= explode("-", $fecha);


//Extrayendo el mes de una determinada fecha, se pasa a entero para que pueda funcionar bien la extracción
$mes = $mes_entero[1];//asignamos el mes extraido anteriormente a la variable mes, el 1 significa la posicion donde se encuentra el mes que deseamos extraer
$anio= date("Y", strtotime($fecha));//capturando el año de la fecha dada

//Representa un arreglo para las fechas
$dias=array();

//For que permite generar un arreglo y llenarlo con los dias del mes, tomando como referencia el mes según la fecha que se pasa por parametro

//meses de 31 dias
if ($mes==$enero || $mes==$marzo || $mes==$mayo || $mes==$julio ||  $mes==$octubre || $mes==$diciembre) {
    for ($i=0; $i < 33; $i++) { 
            //validacion para que del 1 al 9 se lean las fechas con el formato correcto: 2000-01-01
            if ($i<10) {
                 $dias[$i]=$anio.'-'.$mes.'-'.'0'.$i;//llenando el arreglo con las fechas
            }else{
                 $dias[$i]=$anio.'-'.$mes.'-'.$i;//llenando el arreglo con las fechas
            }

   
}
}else{
for ($i=0; $i < 32; $i++) { 

            //validacion exclusiva para mostrar correctamente la fecha del 01 al 09 de cada mes
            if ($i<10) {
                 $dias[$i]=$anio.'-'.$mes.'-'.'0'.$i;//llenando el arreglo con las fechas
            }else{
                 $dias[$i]=$anio.'-'.$mes.'-'.$i;//llenando el arreglo con las fechas
            }




}
}

/*AGREGAR A LA RESTRICCION EL MES DE AGOSTO Y FEBRERO*/

/*for ($i=0; $i < 33; $i++) { 
    $dias[$i]=$anio.'-'.$mes.'-'.$i;//llenando el arreglo con las fechas
}
*/

return $dias;

}











//Obtiene las producciones de una fecha determinada de las estaciones exclusivamente para el dashboard
public function dashProduccion($id_estacion,$fecha){

$suma=0;
  

        $bt_caudal = DB::table('produccions')
                ->select('caudal')
                ->where('fecha' ,'=', $fecha)
                //->whereRaw('month(fecha) = month(12)')
                ->where('id_estacion' ,'=' ,$id_estacion)
                ->get();

  foreach ($bt_caudal as $cau) {
                    
                  $valor1=$cau->caudal;
                  $suma += $valor1;

                }

$resultado= $suma;//asignando formato de miles a la suma

return $resultado;


}

/*Hace la sumatoria del consumo de quimicos de un dia segun fecha*/
public function consumoQuimicos($id_quimic,$fecha){

$sumatoria=0;
$suma_mes=0;
  

        $consumo = DB::table('cargas')
                ->select('cantidad')
                ->where('fecha' ,'=', $fecha)
                //->whereRaw('month(fecha) = month(12)')
                ->where('id_quimico' ,'=' ,$id_quimic)
                ->get();
//Obteniendo sumatoria del dia
  foreach ($consumo as $carga) {
                    
                  $valor1=$carga->cantidad;
                  $sumatoria += $valor1;
                    
                }

//Sumatoria de todos los dias
$total_mensual=array();
//$id_quimico=5;
//llenando el arreglo con las sumas de las cargas segun fecha determinada (mes)
for ($i=1; $i <32 ; $i++) { 
    //llenando el arreglo con la sumatoria de las cargas dia por dia
    $total_mensual[$i]=$sumatoria;

    $valor2=$total_mensual[$i];
    $suma_mes += $valor2;
}


$result= number_format($sumatoria);//asignando formato de miles a la suma

//return $sumatoria;
return $result;

}






}
