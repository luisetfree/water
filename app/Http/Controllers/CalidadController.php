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
        /*Fecha temporal solamente para hacer la busqueda*/
        $fecha='2022-10-12';


        $hora0='00:00';
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

        $id_cruda=1;
        $a_cruda_0= $this->show($id_cruda,$fecha,$hora0);
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


        /*Se retorna a la vista calidad y se pasan las variables con los datos que se mostraran en la tabla*/
        return view('calidad', compact('a_cruda_0','a_cruda_1','a_cruda_2','a_cruda_3','a_cruda_4','a_cruda_5','a_cruda_6','a_cruda_7','a_cruda_8','a_cruda_9','a_cruda_10','a_cruda_11','a_cruda_12','a_cruda_13','a_cruda_14','a_cruda_15','a_cruda_16','a_cruda_17','a_cruda_18','a_cruda_19','a_cruda_20','a_cruda_21','a_cruda_22','a_cruda_23'));
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
