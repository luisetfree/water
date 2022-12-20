<?php

namespace App\Http\Controllers;
//se agrega el modelo que se necesita para comunicarse con la tabla de la DB
use App\Models\Produccion;
use App\Models\Estacion;
use App\Models\Operacion;
use App\Models\Consumo;
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
      $id_sulfato=5;
      $id_polimero=7;
      $id_permanganato=1;
      $id_cal=4;
      $id_carbon=2;//Carbon activo


    








    $fecha=date("Y-m-d");//Tomando la fecha del dia en curso



             


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




         //Enviando a vista resumen los datos de produccion de Bocatoma para mostrarlos en la tabla, tambien la variable $estacion permite obtener informacion de la tabla estacions
        return view ('resumen', compact ('fecha','con_coagu_1','con_coagu_2','con_coagu_3','con_coagu_4','con_coagu_5','con_coagu_6','con_coagu_7','con_coagu_8','con_coagu_9','con_coagu_10','con_coagu_11','con_coagu_12','con_coagu_13','con_coagu_14','con_coagu_15','con_coagu_16','con_coagu_17','con_coagu_18','con_coagu_19','con_coagu_20','con_coagu_21','con_coagu_22','con_coagu_23','con_coagu_24','con_poli_1','con_poli_2','con_poli_3','con_poli_4','con_poli_5','con_poli_6','con_poli_7','con_poli_8','con_poli_9','con_poli_10','con_poli_11','con_poli_12','con_poli_13','con_poli_14','con_poli_15','con_poli_16','con_poli_17','con_poli_18','con_poli_19','con_poli_20','con_poli_21','con_poli_22','con_poli_23','con_poli_24','con_perm_1','con_perm_2','con_perm_3','con_perm_4','con_perm_5','con_perm_6','con_perm_7','con_perm_8','con_perm_9','con_perm_10','con_perm_11','con_perm_12','con_perm_13','con_perm_14','con_perm_15','con_perm_16','con_perm_17','con_perm_18','con_perm_19','con_perm_20','con_perm_21','con_perm_22','con_perm_23','con_perm_24','con_carbon_1','con_carbon_2','con_carbon_3','con_carbon_4','con_carbon_5','con_carbon_6','con_carbon_7','con_carbon_8','con_carbon_9','con_carbon_10','con_carbon_11','con_carbon_12','con_carbon_13','con_carbon_14','con_carbon_15','con_carbon_16','con_carbon_17','con_carbon_18','con_carbon_19','con_carbon_20','con_carbon_21','con_carbon_22','con_carbon_23','con_carbon_24','con_cal_1','con_cal_2','con_cal_3','con_cal_4','con_cal_5','con_cal_6','con_cal_7','con_cal_8','con_cal_9','con_cal_10','con_cal_11','con_cal_12','con_cal_13','con_cal_14','con_cal_15','con_cal_16','con_cal_17','con_cal_18','con_cal_19','con_cal_20','con_cal_21','con_cal_22','con_cal_23','con_cal_24','cloro_hora_1','cloro_hora_2','cloro_hora_3','cloro_hora_4','cloro_hora_5','cloro_hora_6','cloro_hora_7','cloro_hora_8','cloro_hora_9','cloro_hora_10','cloro_hora_11','cloro_hora_12','cloro_hora_13','cloro_hora_14','cloro_hora_15','cloro_hora_16','cloro_hora_17','cloro_hora_18','cloro_hora_19','cloro_hora_20','cloro_hora_21','cloro_hora_22','cloro_hora_23','cloro_hora_24','datos_bt_1','datos_bt_2','datos_bt_3','datos_bt_4','datos_bt_5','datos_bt_6','datos_bt_7','datos_bt_8','datos_bt_9','datos_bt_10','datos_bt_11','datos_bt_12','datos_bt_13','datos_bt_14','datos_bt_15','datos_bt_16','datos_bt_17','datos_bt_18','datos_bt_19','datos_bt_20','datos_bt_21','datos_bt_22','datos_bt_23','datos_bt_24','eq_oper_1','eq_oper_2','eq_oper_3','eq_oper_4','eq_oper_5','eq_oper_5','eq_oper_6','eq_oper_7','eq_oper_8','eq_oper_9','eq_oper_10','eq_oper_11','eq_oper_12','eq_oper_13','eq_oper_14','eq_oper_15','eq_oper_16','eq_oper_17','eq_oper_18','eq_oper_19','eq_oper_20','eq_oper_21','eq_oper_22','eq_oper_23','eq_oper_24','cl_eb2_1','cl_eb2_2','cl_eb2_3','cl_eb2_4','cl_eb2_5','cl_eb2_6','cl_eb2_7','cl_eb2_8','cl_eb2_9','cl_eb2_10','cl_eb2_11','cl_eb2_12','cl_eb2_13','cl_eb2_14','cl_eb2_15','cl_eb2_16','cl_eb2_17','cl_eb2_18','cl_eb2_19','cl_eb2_20','cl_eb2_21','cl_eb2_22','cl_eb2_23','cl_eb2_24','cl_eb3_1','cl_eb3_2','cl_eb3_3','cl_eb3_4','cl_eb3_5','cl_eb3_6','cl_eb3_7','cl_eb3_8','cl_eb3_9','cl_eb3_10','cl_eb3_11','cl_eb3_12','cl_eb3_13','cl_eb3_14','cl_eb3_15','cl_eb3_16','cl_eb3_17','cl_eb3_18','cl_eb3_19','cl_eb3_20','cl_eb3_21','cl_eb3_22','cl_eb3_23','cl_eb3_24','terminal_1','terminal_2','terminal_3','terminal_4','terminal_5','terminal_6','terminal_7','terminal_8','terminal_9','terminal_10','terminal_11','terminal_12','terminal_13','terminal_14','terminal_15','terminal_16','terminal_17','terminal_18','terminal_19','terminal_20','terminal_21','terminal_22','terminal_23','terminal_24','bv_1','bv_2','bv_3','bv_4','bv_5','bv_6','bv_7','bv_8','bv_9','bv_10','bv_11','bv_12','bv_13','bv_14','bv_15','bv_16','bv_17','bv_18','bv_19','bv_20','bv_21','bv_22','bv_23','bv_24','dato_hora_1','dato_hora_2','dato_hora_3','dato_hora_4','dato_hora_5','dato_hora_6','dato_hora_7','dato_hora_8','dato_hora_9','dato_hora_10','dato_hora_11','dato_hora_12','dato_hora_13','dato_hora_14','dato_hora_15','dato_hora_16','dato_hora_17','dato_hora_18','dato_hora_19','dato_hora_20','dato_hora_21','dato_hora_22','dato_hora_23','dato_hora_24','prom_bt','prom_cam','max_cam','min_cam','max_bt','min_bt','prom_rio','max_rio','min_rio','prom_coag','max_coag','min_coag','prom_cloro','max_cloro','min_cloro','prom_poli','max_poli','min_poli','prom_perm','max_perm','min_perm','prom_cal','max_cal','min_cal','prom_car','max_car','min_car','prom_cl_eb2','max_cl_eb2','min_cl_eb2','prom_cl_eb3','max_cl_eb3','min_cl_eb3'));

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

                //se retorna el valor utilizando caudal de EB1
                return round((($dato->dosis)*1000)/($eb1->caudal), 2);

                
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

        return view('producciones',compact('fecha','c_bt_1','c_bt_2','c_bt_3','c_bt_4','c_bt_5'
    ,'c_bt_6','c_bt_7','c_bt_8','c_bt_9','c_bt_10','c_bt_11','c_bt_12','c_bt_13','c_bt_14','c_bt_15','c_bt_16','c_bt_17','c_bt_18','c_bt_19','c_bt_20','c_bt_21','c_bt_22','c_bt_23','c_bt_24','c_eb1_1','c_eb1_2','c_eb1_3','c_eb1_4','c_eb1_5','c_eb1_6','c_eb1_7','c_eb1_8','c_eb1_9','c_eb1_10','c_eb1_11','c_eb1_12','c_eb1_13','c_eb1_14','c_eb1_15','c_eb1_16','c_eb1_17','c_eb1_18','c_eb1_19','c_eb1_20','c_eb1_21','c_eb1_22','c_eb1_23','c_eb1_24','c_eb2_1','c_eb2_2','c_eb2_3','c_eb2_4','c_eb2_5','c_eb2_6','c_eb2_7','c_eb2_8','c_eb2_9','c_eb2_10','c_eb2_11','c_eb2_12','c_eb2_13','c_eb2_14','c_eb2_15','c_eb2_16','c_eb2_17','c_eb2_18','c_eb2_19','c_eb2_20','c_eb2_21','c_eb2_22','c_eb2_23','c_eb2_24','c_eb3_1','c_eb3_2','c_eb3_3','c_eb3_4','c_eb3_5','c_eb3_6','c_eb3_7','c_eb3_8','c_eb3_9','c_eb3_10','c_eb3_11','c_eb3_12','c_eb3_13','c_eb3_14','c_eb3_15','c_eb3_16','c_eb3_17','c_eb3_18','c_eb3_19','c_eb3_20','c_eb3_21','c_eb3_22','c_eb3_23','c_eb3_24','suma_bocatoma','suma_eb1','suma_eb2','suma_eb3','aporte_zn'));




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

         



    
    return view ('editar-produccion', compact ('prod','id','id_bt','caudal','nombre','caudal1','id_1','caudal2','id_2','caudal3','id_3','key'));

    }

/*---------------------------------------SECCION EXCLUSIVA DE DASHBOARD----------------------------------*/

/*Controla la informacion de la vista Dashboard*/
public function dashboard(){

$bt_prod= $this->dashProduccion(1);

     
            

          


/*$bt_eb1= $this->dashProduccion(2);
$bt_eb2= $this->dashProduccion(3);
$bt_eb3= $this->dashProduccion(4);*/


return view('dashboard', compact('bt_prod'));
}

//Obtiene y muestra las producciones MENSUALES de las estaciones exclusivamente para el dashboard
public function dashProduccion($id_estacion){


/*$suma_prod_bt=DB::table('produccions')
                //->join('quimicos', 'cargas.id_quimico', '=', 'quimicos.id')
                //->where('fecha','=', $anio.'-'.$mes.'-'.$i)
                 ->whereRaw('month(fecha) = month(now())')
                 ->whereRaw('year(fecha) = year(now())')  
                ->where('id_estacion','=', $id_estacion)
                 ->select('caudal')
                 ->get();*/

 //$suma=0;
//recorriendo los valores de la base de datos y sumando
                /*foreach ($suma_prod_bt as $cau) {
                    
                  $valor1=$cau->caudal;
                  $suma += $valor1;
                                  

                }*/

                //return $suma;


$fecha='2022-11-10';


//tomamos la fecha que se pasa por parametro y extraemos el mes
$mes_entero= explode("-", $fecha);



//Extrayendo el mes de una determinada fecha, se pasa a entero para que pueda funcionar bien la extracción
$mes = $mes_entero[1];//asignamos el mes extraido anteriormente a la variable mes, el 1 significa la posicion donde se encuentra el mes que deseamos extraer
$anio= date("Y", strtotime($fecha));//capturando el año de la fecha dada



$array=array();
//For que permite generar un arreglo y llenarlo con los dias del mes, tomando como referencia el mes según la fecha que se pasa por parametro
for ($i=0; $i < 32; $i++) { 
    $array[$i]=$anio.'-'.$mes.'-'.$i;//llenando el arreglo con las fechas
}



$bt_caudal=array();//arreglo que llenará los promedios del caudal de BT por dia, segun la fecha que se pase
//For que recorre y llena el arreglo con los promedios de caudales de BT

$suma=0;
    for ($i=0; $i < 32; $i++) { 

        $bt_caudal[$i] = DB::table('produccions')
                ->where('fecha' ,'=', $array[$i])//array hace referencia a la fecha que se llena segun el mes
                //->whereRaw('month(fecha) = month(12)')
                ->where('id_estacion' ,'=' ,1)//1 significa el id de BT
                ->get('caudal');




      }  
         


 /* foreach ($bt_caudal as $cau) {
                    
                  $valor1=$cau->caudal;
                  $suma += $valor1;
                                  

                }*/


return $bt_caudal;





}





}
