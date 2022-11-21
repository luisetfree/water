<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calidad;
use Illuminate\Support\Facades\DB;

class CalidadController extends Controller
{
    /**
     * se encarga de desplegar la vista CALIDAD con la fecha actual
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $fecha=date("Y-m-d");//fecha actual
        //manda a llamar la funcion que muestra todas las calidades segun la fecha actual
        return $this->verCalidades($fecha);

 
    }

/**
     * se encarga de desplegar la vista principal y tambien realiza las busquedas de las calidades de agua
     * para mostrarlas en la tabla
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request  $request)
    {
        
           $fecha=$request->fecha_calidad;   
           //retorna a la vista las calidades de acuerdo a la fecha seleccionada por el usuario
        return $this->verCalidades($fecha);

 
    }







    /**
     * Filtra por una fecha especifica las calidades del agua y las muestra en la vista CALIDAD
     *
     * @return \Illuminate\Http\Response
     */
    public function verCalidades($fechas)
    {
        //

$fecha=$fechas;//fecha actual
        

        //corresponde al id del agua cruda
        $id_cruda=1;
        
        
        



        $hora1='01:00';
        $hora2='02:00';
        $hora3='03:00';
        $hora4='04:00';
        $hora5='05:00';
        $hora6='06:00';
        $hora7='07:00';
        $hora8='08:00';
        $hora9='09:00';
        $hora10='10:00';
        $hora11='11:00';
        $hora12='12:00';
        $hora13='13:00';
        $hora14='14:00';
        $hora15='15:00';
        $hora16='16:00';
        $hora17='17:00';
        $hora18='18:00';
        $hora19='19:00';
        $hora20='20:00';
        $hora21='21:00';
        $hora22='22:00';
        $hora23='23:00';
        $hora24='24:00';

/*Filtra turbidez cruda*/
        
        

        $a_cruda_24= $this->show($id_cruda,$fecha,$hora24);
        $a_cruda_1= $this->show($id_cruda,$fecha,$hora1);
        $a_cruda_2= $this->show($id_cruda,$fecha,$hora2);
        $a_cruda_3= $this->show($id_cruda,$fecha,$hora3);
        $a_cruda_4= $this->show($id_cruda,$fecha,$hora4);
        $a_cruda_5= $this->show($id_cruda,$fecha,$hora5);
        $a_cruda_6= $this->show($id_cruda,$fecha,$hora6);
        $a_cruda_7= $this->show($id_cruda,$fecha,$hora7);
        $a_cruda_8= $this->show($id_cruda,$fecha,$hora8);
        $a_cruda_9= $this->show($id_cruda,$fecha,$hora9);
        $a_cruda_10= $this->show($id_cruda,$fecha,$hora10);
        $a_cruda_11= $this->show($id_cruda,$fecha,$hora11);
        $a_cruda_12= $this->show($id_cruda,$fecha,$hora12);
        $a_cruda_13= $this->show($id_cruda,$fecha,$hora13);
        $a_cruda_14= $this->show($id_cruda,$fecha,$hora14);
        $a_cruda_15= $this->show($id_cruda,$fecha,$hora15);
        $a_cruda_16= $this->show($id_cruda,$fecha,$hora16);
        $a_cruda_17= $this->show($id_cruda,$fecha,$hora17);
        $a_cruda_18= $this->show($id_cruda,$fecha,$hora18);
        $a_cruda_19= $this->show($id_cruda,$fecha,$hora19);
        $a_cruda_20= $this->show($id_cruda,$fecha,$hora20);
        $a_cruda_21= $this->show($id_cruda,$fecha,$hora21);
        $a_cruda_22= $this->show($id_cruda,$fecha,$hora22);
        $a_cruda_23= $this->show($id_cruda,$fecha,$hora23);

         
        



/*Filtra turbidez clarificada*/

         $id_clarificada=2;

        $a_clari_24= $this->show($id_clarificada,$fecha,$hora24);
        $a_clari_1= $this->show($id_clarificada,$fecha,$hora1);
        $a_clari_2= $this->show($id_clarificada,$fecha,$hora2);
        $a_clari_3= $this->show($id_clarificada,$fecha,$hora3);
        $a_clari_4= $this->show($id_clarificada,$fecha,$hora4);
        $a_clari_5= $this->show($id_clarificada,$fecha,$hora5);
        $a_clari_6= $this->show($id_clarificada,$fecha,$hora6);
        $a_clari_7= $this->show($id_clarificada,$fecha,$hora7);
        $a_clari_8= $this->show($id_clarificada,$fecha,$hora8);
        $a_clari_9= $this->show($id_clarificada,$fecha,$hora9);
        $a_clari_10= $this->show($id_clarificada,$fecha,$hora10);
        $a_clari_11= $this->show($id_clarificada,$fecha,$hora11);
        $a_clari_12= $this->show($id_clarificada,$fecha,$hora12);
        $a_clari_13= $this->show($id_clarificada,$fecha,$hora13);
        $a_clari_14= $this->show($id_clarificada,$fecha,$hora14);
        $a_clari_15= $this->show($id_clarificada,$fecha,$hora15);
        $a_clari_16= $this->show($id_clarificada,$fecha,$hora16);
        $a_clari_17= $this->show($id_clarificada,$fecha,$hora17);
        $a_clari_18= $this->show($id_clarificada,$fecha,$hora18);
        $a_clari_19= $this->show($id_clarificada,$fecha,$hora19);
        $a_clari_20= $this->show($id_clarificada,$fecha,$hora20);
        $a_clari_21= $this->show($id_clarificada,$fecha,$hora21);
        $a_clari_22= $this->show($id_clarificada,$fecha,$hora22);
        $a_clari_23= $this->show($id_clarificada,$fecha,$hora23);

      /* turbidez de agua filtrada*/  
        $id_filtrada=3;

        
        $a_fil_1= $this->show($id_filtrada,$fecha,$hora1);
        $a_fil_2= $this->show($id_filtrada,$fecha,$hora2);
        $a_fil_3= $this->show($id_filtrada,$fecha,$hora3);
        $a_fil_4= $this->show($id_filtrada,$fecha,$hora4);
        $a_fil_5= $this->show($id_filtrada,$fecha,$hora5);
        $a_fil_6= $this->show($id_filtrada,$fecha,$hora6);
        $a_fil_7= $this->show($id_filtrada,$fecha,$hora7);
        $a_fil_8= $this->show($id_filtrada,$fecha,$hora8);
        $a_fil_9= $this->show($id_filtrada,$fecha,$hora9);
        $a_fil_10= $this->show($id_filtrada,$fecha,$hora10);
        $a_fil_11= $this->show($id_filtrada,$fecha,$hora11);
        $a_fil_12= $this->show($id_filtrada,$fecha,$hora12);
        $a_fil_13= $this->show($id_filtrada,$fecha,$hora13);
        $a_fil_14= $this->show($id_filtrada,$fecha,$hora14);
        $a_fil_15= $this->show($id_filtrada,$fecha,$hora15);
        $a_fil_16= $this->show($id_filtrada,$fecha,$hora16);
        $a_fil_17= $this->show($id_filtrada,$fecha,$hora17);
        $a_fil_18= $this->show($id_filtrada,$fecha,$hora18);
        $a_fil_19= $this->show($id_filtrada,$fecha,$hora19);
        $a_fil_20= $this->show($id_filtrada,$fecha,$hora20);
        $a_fil_21= $this->show($id_filtrada,$fecha,$hora21);
        $a_fil_22= $this->show($id_filtrada,$fecha,$hora22);
        $a_fil_23= $this->show($id_filtrada,$fecha,$hora23);
        $a_fil_24= $this->show($id_filtrada,$fecha,$hora24);

 /* turbidez de agua tratada*/  
        $id_tratada=4;

        
        $a_trat_1= $this->show($id_tratada,$fecha,$hora1);
        $a_trat_2= $this->show($id_tratada,$fecha,$hora2);
        $a_trat_3= $this->show($id_tratada,$fecha,$hora3);
        $a_trat_4= $this->show($id_tratada,$fecha,$hora4);
        $a_trat_5= $this->show($id_tratada,$fecha,$hora5);
        $a_trat_6= $this->show($id_tratada,$fecha,$hora6);
        $a_trat_7= $this->show($id_tratada,$fecha,$hora7);
        $a_trat_8= $this->show($id_tratada,$fecha,$hora8);
        $a_trat_9= $this->show($id_tratada,$fecha,$hora9);
        $a_trat_10= $this->show($id_tratada,$fecha,$hora10);
        $a_trat_11= $this->show($id_tratada,$fecha,$hora11);
        $a_trat_12= $this->show($id_tratada,$fecha,$hora12);
        $a_trat_13= $this->show($id_tratada,$fecha,$hora13);
        $a_trat_14= $this->show($id_tratada,$fecha,$hora14);
        $a_trat_15= $this->show($id_tratada,$fecha,$hora15);
        $a_trat_16= $this->show($id_tratada,$fecha,$hora16);
        $a_trat_17= $this->show($id_tratada,$fecha,$hora17);
        $a_trat_18= $this->show($id_tratada,$fecha,$hora18);
        $a_trat_19= $this->show($id_tratada,$fecha,$hora19);
        $a_trat_20= $this->show($id_tratada,$fecha,$hora20);
        $a_trat_21= $this->show($id_tratada,$fecha,$hora21);
        $a_trat_22= $this->show($id_tratada,$fecha,$hora22);
        $a_trat_23= $this->show($id_tratada,$fecha,$hora23);
        $a_trat_24= $this->show($id_tratada,$fecha,$hora24);


 /*VERIFICACION DE HORAS GUARDADAS*/
       $dato_hora_1=$this->buscarHora($fecha,$hora1,$id_cruda);
       $dato_hora_2=$this->buscarHora($fecha,$hora2,$id_cruda);
       $dato_hora_3=$this->buscarHora($fecha,$hora3,$id_cruda);
       $dato_hora_4=$this->buscarHora($fecha,$hora4,$id_cruda);
       $dato_hora_5=$this->buscarHora($fecha,$hora5,$id_cruda);
       $dato_hora_6=$this->buscarHora($fecha,$hora6,$id_cruda);
       $dato_hora_7=$this->buscarHora($fecha,$hora7,$id_cruda);
       $dato_hora_8=$this->buscarHora($fecha,$hora8,$id_cruda);
       $dato_hora_9=$this->buscarHora($fecha,$hora9,$id_cruda);
       $dato_hora_10=$this->buscarHora($fecha,$hora10,$id_cruda);
       $dato_hora_11=$this->buscarHora($fecha,$hora11,$id_cruda);
       $dato_hora_12=$this->buscarHora($fecha,$hora12,$id_cruda);
       $dato_hora_13=$this->buscarHora($fecha,$hora13,$id_cruda);
       $dato_hora_14=$this->buscarHora($fecha,$hora14,$id_cruda);
       $dato_hora_15=$this->buscarHora($fecha,$hora15,$id_cruda);
       $dato_hora_16=$this->buscarHora($fecha,$hora16,$id_cruda);
       $dato_hora_17=$this->buscarHora($fecha,$hora17,$id_cruda);
       $dato_hora_18=$this->buscarHora($fecha,$hora18,$id_cruda);
       $dato_hora_19=$this->buscarHora($fecha,$hora19,$id_cruda);
       $dato_hora_20=$this->buscarHora($fecha,$hora20,$id_cruda);
       $dato_hora_21=$this->buscarHora($fecha,$hora21,$id_cruda);
       $dato_hora_22=$this->buscarHora($fecha,$hora22,$id_cruda);
       $dato_hora_23=$this->buscarHora($fecha,$hora23,$id_cruda);
       $dato_hora_24=$this->buscarHora($fecha,$hora24,$id_cruda);



       //MANEJO DE PROMEDIOS - MAX - MIN DE CALIDADES DE AGUA

       //representan los campos exactamente como estan definidos en la BD
       $turb='turbidez';
       $ph_='ph';
       $temp='temperatura';
       $color='color';
       //agua cruda
       $prom_c_ntu=$this->promedio($fecha,$id_cruda,$turb);
       $prom_c_ph=$this->promedio($fecha,$id_cruda,$ph_);
       $prom_c_temp=$this->promedio($fecha,$id_cruda,$temp);
       $prom_c_col=$this->promedio($fecha,$id_cruda,$color);
       //agua clarificada
       $prom_cl_ntu=$this->promedio($fecha,$id_clarificada,$turb);
       $prom_cl_ph=$this->promedio($fecha,$id_clarificada,$ph_);
       $prom_cl_temp=$this->promedio($fecha,$id_clarificada,$temp);
       $prom_cl_col=$this->promedio($fecha,$id_clarificada,$color);

        //agua Filtrada
       $prom_f_ntu=$this->promedio($fecha,$id_filtrada,$turb);
       $prom_f_ph=$this->promedio($fecha,$id_filtrada,$ph_);
       $prom_f_temp=$this->promedio($fecha,$id_filtrada,$temp);
       $prom_f_col=$this->promedio($fecha,$id_filtrada,$color);

        //agua Tratada
       $prom_t_ntu=$this->promedio($fecha,$id_tratada,$turb);
       $prom_t_ph=$this->promedio($fecha,$id_tratada,$ph_);
       $prom_t_temp=$this->promedio($fecha,$id_tratada,$temp);
       $prom_t_col=$this->promedio($fecha,$id_tratada,$color);//revisar no se muestra vien cuando ponen <5 


       /*MAXIMOS */
       /*Cruda*/
       $max_c_ntu=$this->maximo($fecha,$id_cruda,$turb);
       $max_c_ph=$this->maximo($fecha,$id_cruda,$ph_);
       $max_c_tmp=$this->maximo($fecha,$id_cruda,$temp);
       $max_c_col=$this->maximo($fecha,$id_cruda,$color);

       /*Clarificada*/
       $max_cl_ntu=$this->maximo($fecha,$id_clarificada,$turb);
       $max_cl_ph=$this->maximo($fecha,$id_clarificada,$ph_);
       $max_cl_tmp=$this->maximo($fecha,$id_clarificada,$temp);
       $max_cl_col=$this->maximo($fecha,$id_clarificada,$color);

        /*Filtrada*/
       $max_f_ntu=$this->maximo($fecha,$id_filtrada,$turb);
       $max_f_ph=$this->maximo($fecha,$id_filtrada,$ph_);
       $max_f_tmp=$this->maximo($fecha,$id_filtrada,$temp);
       $max_f_col=$this->maximo($fecha,$id_filtrada,$color);

        /*Tratada*/
       $max_t_ntu=$this->maximo($fecha,$id_tratada,$turb);
       $max_t_ph=$this->maximo($fecha,$id_tratada,$ph_);
       $max_t_tmp=$this->maximo($fecha,$id_tratada,$temp);
       $max_t_col=$this->maximo($fecha,$id_tratada,$color);


        /*MINIMOS */
       /*Cruda*/
       $min_c_ntu=$this->minimos($fecha,$id_cruda,$turb);
       $min_c_ph=$this->minimos($fecha,$id_cruda,$ph_);
       $min_c_tmp=$this->minimos($fecha,$id_cruda,$temp);
       $min_c_col=$this->minimos($fecha,$id_cruda,$color);

         /*Clarificada*/
       $min_cl_ntu=$this->minimos($fecha,$id_clarificada,$turb);
       $min_cl_ph=$this->minimos($fecha,$id_clarificada,$ph_);
       $min_cl_tmp=$this->minimos($fecha,$id_clarificada,$temp);
       $min_cl_col=$this->minimos($fecha,$id_clarificada,$color);

         /*Filtrada*/
       $min_f_ntu=$this->minimos($fecha,$id_filtrada,$turb);
       $min_f_ph=$this->minimos($fecha,$id_filtrada,$ph_);
       $min_f_tmp=$this->minimos($fecha,$id_filtrada,$temp);
       $min_f_col=$this->minimos($fecha,$id_filtrada,$color);

       /*Tratada*/
       $min_t_ntu=$this->minimos($fecha,$id_tratada,$turb);
       $min_t_ph=$this->minimos($fecha,$id_tratada,$ph_);
       $min_t_tmp=$this->minimos($fecha,$id_tratada,$temp);
       $min_t_col=$this->minimos($fecha,$id_tratada,$color);
     


               

        /*Se retorna a la vista CALIDAD y se pasan las variables con los datos que se mostraran en la tabla*/
        return view('calidad', compact('a_cruda_24','a_cruda_1','a_cruda_2','a_cruda_3','a_cruda_4','a_cruda_5','a_cruda_6','a_cruda_7','a_cruda_8','a_cruda_9','a_cruda_10','a_cruda_11','a_cruda_12','a_cruda_13','a_cruda_14','a_cruda_15','a_cruda_16','a_cruda_17','a_cruda_18','a_cruda_19','a_cruda_20','a_cruda_21','a_cruda_22','a_cruda_23','a_clari_24','a_clari_1','a_clari_2','a_clari_3','a_clari_4','a_clari_5','a_clari_6','a_clari_7','a_clari_8','a_clari_9','a_clari_10','a_clari_11','a_clari_12','a_clari_13','a_clari_14','a_clari_15','a_clari_16','a_clari_17','a_clari_18','a_clari_19','a_clari_20','a_clari_21','a_clari_22','a_clari_23','a_fil_24','a_fil_1','a_fil_2','a_fil_3','a_fil_4','a_fil_5','a_fil_6','a_fil_7','a_fil_8','a_fil_9','a_fil_10','a_fil_11','a_fil_12','a_fil_13','a_fil_14','a_fil_15','a_fil_16','a_fil_17','a_fil_18','a_fil_19','a_fil_20','a_fil_21','a_fil_22','a_fil_23','a_trat_24','a_trat_1','a_trat_2','a_trat_3','a_trat_4','a_trat_5','a_trat_6','a_trat_7','a_trat_8','a_trat_9','a_trat_10','a_trat_11','a_trat_12','a_trat_13','a_trat_14','a_trat_15','a_trat_16','a_trat_17','a_trat_18','a_trat_19','a_trat_20','a_trat_21','a_trat_22','a_trat_23','dato_hora_1','dato_hora_2','dato_hora_3','dato_hora_4','dato_hora_5','dato_hora_6','dato_hora_7','dato_hora_8','dato_hora_9','dato_hora_10','dato_hora_11','dato_hora_12','dato_hora_13','dato_hora_14','dato_hora_15','dato_hora_16','dato_hora_17','dato_hora_18','dato_hora_19','dato_hora_20','dato_hora_21','dato_hora_22','dato_hora_23','dato_hora_24','fecha','prom_c_ntu','prom_c_ph','prom_c_temp','prom_c_col','prom_cl_ntu','prom_cl_ph','prom_cl_temp','prom_cl_col','prom_f_ntu','prom_f_ph','prom_f_temp','prom_f_col','prom_t_ntu','prom_t_ph','prom_t_temp','prom_t_col','max_c_ntu','max_c_ph','max_c_tmp','max_c_col','max_cl_ntu','max_cl_ph','max_cl_tmp','max_cl_col','max_f_ntu','max_f_ph','max_f_tmp','max_f_col','max_t_ntu','max_t_ph','max_t_tmp','max_t_col','min_c_ntu','min_c_ph','min_c_tmp','min_c_col','min_cl_ntu','min_cl_ph','min_cl_tmp','min_cl_col','min_f_ntu','min_f_ph','min_f_tmp','min_f_col','min_t_ntu','min_t_ph','min_t_tmp','min_t_col'));


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

        


   

            /*Guarda pero manda a llamar al metodo index para que no haya error con las variables
            precargadas que se utilizan en la vista calidad, de lo contrario muestra error pues las variables utilizadas se encontrarian vacias*/
           return $this->index();

      
    }

    /**
     * Busca y extrae los datos del tipo de agua que se requiere segun fecha y hora
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_aguas,$fecha,$horas)
    {
        //
        $dato= DB::table('calidads')
        ->select('calidads.*')
        ->whereDate('created_at','=',$fecha)
        ->where('hora','=',$horas)
        ->where('id_agua','=',$id_aguas)
                            ->get();

                            return $dato;
    }


    /*Saca el promedio de una columna especificada en los parametros...se toma en cuenta solo los valores que
    se encuentran ingresados en la DB*/
public function promedio($fecha,$id_aguas,$campo_consultar)
    {
        //
        $dato= DB::table('calidads')
//        ->select($campo_consultar)
        ->whereDate('created_at','=',$fecha)
        ->where('id_agua','=',$id_aguas)
        ->avg($campo_consultar);//se pide saque promedio de la columna que se pasa por parametro

            return round($dato,2);
    }
   /*Saca el MAXIMO de una columna especificada en los parametros...se toma en cuenta solo los valores que
    se encuentran ingresados en la DB*/
public function maximo($fecha,$id_aguas,$campo_consultar)
    {
        //
        $dato= DB::table('calidads')
        
        ->whereDate('created_at','=',$fecha)
        ->where('id_agua','=',$id_aguas)

        ->max($campo_consultar)
            ;//obteniendo el valor máximo

            return $dato;//Dio error al redondearlo...porque se inserta un simbolo <5 
         //return   max($dato);
    }


   /*Saca el MINIMO de una columna especificada en los parametros...se toma en cuenta solo los valores que
    se encuentran ingresados en la DB*/
public function minimos($fecha,$id_aguas,$campo_consultar)
    {
        //
        $dato= DB::table('calidads')

        ->whereDate('created_at','=',$fecha)
        ->where('id_agua','=',$id_aguas)
        ->min($campo_consultar);//obteniendo el valor máximo

            return $dato;
         
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
     * Recibe los parametros del formulario con los datos a editar
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //capturando los datos del formulario editar
        $fecha=$request->fecha_calidad;
        $hora=$request->hora;
        $turb=$request->turb_c;
        $ph=$request->ph_c;
        $temp=$request->temp_c;
        $col=$request->color_c;
        //ASIGNARA el ID del agua seleccionada en el formulario de la vista EDITAR-CALIDAD
        $id_agua=$request->agua;



/*Switch que controla si en la vista Editar-calidad se selecciono agua cruda-clarificada-filtrada o tratada*/
        switch ($id_agua) {
    case 1:
         $id_cruda_=$this->obtenerID($fecha,$hora,$id_agua);
       $this->actualizar($id_cruda_,$turb,$hora,$ph,$temp,$col);

        return  $this->index();

        break;
    case 2:
        $id_clarificada_=$this->obtenerID($fecha,$hora,$id_agua);
        
        $this->actualizar($id_clarificada_,$turb,$hora,$ph,$temp,$col);
         
        return  $this->index();//retorna a la vista CALIDAD
        break;
    case 3:
      $id_filtrada_=$this->obtenerID($fecha,$hora,$id_agua);
        
        $this->actualizar($id_filtrada_,$turb,$hora,$ph,$temp,$col);
         
        return  $this->index();//retorna a la vista CALIDAD
        break;
    case 4:
         $id_tratada=$this->obtenerID($fecha,$hora,$id_agua);
        
        $this->actualizar($id_tratada,$turb,$hora,$ph,$temp,$col);
         
        return  $this->index();//retorna a la vista CALIDAD
        break;
        }

  


      
    }

        /*Funcion que realiza las actualizaciones de cualquier tipo de*/

       public function actualizar($id_agua,$turbidez,$hora,$ph,$temp,$color){
        //busca el elemento en particular y luego lo modifica
        $cruda= Calidad::find($id_agua);
        $cruda->turbidez = $turbidez;
        $cruda->hora = $hora;
        $cruda->ph = $ph;
        $cruda->temperatura = $temp;
        $cruda->color = $color;
        $cruda->save();

        }



//Funcion que recibe un ID, busca los datos de calidad y los envía a la vista EDITAR-CALIDAD
public function precargar($id){

$datos= DB::table('calidads')
        ->where('id','=',$id)
        ->get();

/*foreach ($datos as $turb) {
    $turbidez= $turb->turbidez;
}*/


foreach ($datos as $agua) {
    //se obtiene el id_agua segun el ID que se pasa por parametro, para identificar de cual agua se trata
    $tipo=$agua->id_agua;
}



 return view('editar-calidad', compact('datos','tipo')) ;

}

//Obtener el id de un campo en especial

    public  function obtenerID($fecha,$hora,$id_aguas)
        {
            
             $id= DB::table('calidads')
        ->select('calidads.id')
        ->whereDate('created_at','=',$fecha)
        ->where('hora','=',$hora)
        ->where('id_agua','=',$id_aguas)
                            ->get();


        //Recorriendo la variable para devolver el id en el formato  correcto, de lo contrario darà error por no tratarse de una variable entera o string
            foreach ($id as $key ){
                
                return $key->id;
            }



                          
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
Funcion que busca las horas que ya fueron ingresadas durante el dia, para mostrar en el select de la vista CALIDAD las horas que faltan por ingresar. Se hara la busqueda de acuerdo a calidad de agua CRUDA
*/
public function buscarHora($fecha,$hora,$id_agua){

$dato=DB::table('calidads')
                ->select('turbidez')
                ->where('hora','=',$hora)
                ->whereDate('updated_at', '=', $fecha)
                ->where('id_agua', '=', $id_agua)
                ->get()
                ->count();

if ($dato > 0) {
    return "lleno";
}else {
return "vacio";
}


}


/**
     * Pre-carga los datos en la vista EDITAR-CALIDAD 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function editar(){
    //$agua_cruda->turbidez='';

  return view('editar-calidad' );


   }


}
