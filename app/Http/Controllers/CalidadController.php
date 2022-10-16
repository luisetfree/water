<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calidad;
use Illuminate\Support\Facades\DB;

class CalidadController extends Controller
{
    /**
     * se encarga de desplegar la vista principal y tambien realiza las busquedas de las calidades de agua
     * para mostrarlas en la tabla
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*Obteniendo la fecha del dia actual, para que en la tabla se muestre por defecto estos datos*/
        $fecha=date("Y-m-d");
        //$fechaActual = date('d-m-Y');

        
        
        



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
        $id_cruda=1;//ID por defecto, si se modifica hay que cambiarlo aqui
        

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

         
        $ph_cruda_1= $this->show($id_cruda,$fecha,$hora1);
        $ph_cruda_2= $this->show($id_cruda,$fecha,$hora2);
        $ph_cruda_3= $this->show($id_cruda,$fecha,$hora3);
        $ph_cruda_4= $this->show($id_cruda,$fecha,$hora4);
        $ph_cruda_5= $this->show($id_cruda,$fecha,$hora5);
        $ph_cruda_6= $this->show($id_cruda,$fecha,$hora6);
        $ph_cruda_7= $this->show($id_cruda,$fecha,$hora7);
        $ph_cruda_8= $this->show($id_cruda,$fecha,$hora8);
        $ph_cruda_9= $this->show($id_cruda,$fecha,$hora9);
        $ph_cruda_10= $this->show($id_cruda,$fecha,$hora10);
        $ph_cruda_11= $this->show($id_cruda,$fecha,$hora11);
        $ph_cruda_12= $this->show($id_cruda,$fecha,$hora12);
        $ph_cruda_13= $this->show($id_cruda,$fecha,$hora13);
        $ph_cruda_14= $this->show($id_cruda,$fecha,$hora14);
        $ph_cruda_15= $this->show($id_cruda,$fecha,$hora15);
        $ph_cruda_16= $this->show($id_cruda,$fecha,$hora16);
        $ph_cruda_17= $this->show($id_cruda,$fecha,$hora17);
        $ph_cruda_18= $this->show($id_cruda,$fecha,$hora18);
        $ph_cruda_19= $this->show($id_cruda,$fecha,$hora19);
        $ph_cruda_20= $this->show($id_cruda,$fecha,$hora20);
        $ph_cruda_21= $this->show($id_cruda,$fecha,$hora21);
        $ph_cruda_22= $this->show($id_cruda,$fecha,$hora22);
        $ph_cruda_23= $this->show($id_cruda,$fecha,$hora23);
        $ph_cruda_24= $this->show($id_cruda,$fecha,$hora24);



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

/*--------------------------------PH---------------------*/
/*-------------------------PH CRUDA---------------------*/




               

        /*Se retorna a la vista calidad y se pasan las variables con los datos que se mostraran en la tabla*/
        return view('calidad', compact('a_cruda_24','a_cruda_1','a_cruda_2','a_cruda_3','a_cruda_4','a_cruda_5','a_cruda_6','a_cruda_7','a_cruda_8','a_cruda_9','a_cruda_10','a_cruda_11','a_cruda_12','a_cruda_13','a_cruda_14','a_cruda_15','a_cruda_16','a_cruda_17','a_cruda_18','a_cruda_19','a_cruda_20','a_cruda_21','a_cruda_22','a_cruda_23','a_clari_24','a_clari_1','a_clari_2','a_clari_3','a_clari_4','a_clari_5','a_clari_6','a_clari_7','a_clari_8','a_clari_9','a_clari_10','a_clari_11','a_clari_12','a_clari_13','a_clari_14','a_clari_15','a_clari_16','a_clari_17','a_clari_18','a_clari_19','a_clari_20','a_clari_21','a_clari_22','a_clari_23','a_fil_24','a_fil_1','a_fil_2','a_fil_3','a_fil_4','a_fil_5','a_fil_6','a_fil_7','a_fil_8','a_fil_9','a_fil_10','a_fil_11','a_fil_12','a_fil_13','a_fil_14','a_fil_15','a_fil_16','a_fil_17','a_fil_18','a_fil_19','a_fil_20','a_fil_21','a_fil_22','a_fil_23','a_trat_24','a_trat_1','a_trat_2','a_trat_3','a_trat_4','a_trat_5','a_trat_6','a_trat_7','a_trat_8','a_trat_9','a_trat_10','a_trat_11','a_trat_12','a_trat_13','a_trat_14','a_trat_15','a_trat_16','a_trat_17','a_trat_18','a_trat_19','a_trat_20','a_trat_21','a_trat_22','a_trat_23'));
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

         //return view ('calidad');
          
         //return view ('calidad', compact ('prueba','a_cruda'));
  //return redirect('/calidad')->with('status', 'Guardado');
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



   


}
