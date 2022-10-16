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
          
          





          
        return view ('equipos',compact('estacion','equipo_0','equipo_1','equipo_2','equipo_3','equipo_4','equipo_5','equipo_6','equipo_7','equipo_8','equipo_9','equipo_10','equipo_11','equipo_12','equipo_13','equipo_14','equipo_15','equipo_16','equipo_17','equipo_18','equipo_19','equipo_20','equipo_21','equipo_22','equipo_23','eq_eb1_0','eq_eb1_1','eq_eb1_2','eq_eb1_3','eq_eb1_4','eq_eb1_5','eq_eb1_6','eq_eb1_7','eq_eb1_8','eq_eb1_9','eq_eb1_10','eq_eb1_11','eq_eb1_12','eq_eb1_13','eq_eb1_14','eq_eb1_15','eq_eb1_16','eq_eb1_17','eq_eb1_18','eq_eb1_19','eq_eb1_20','eq_eb1_21','eq_eb1_22','eq_eb1_23','eq_eb2_0','eq_eb2_1','eq_eb2_2','eq_eb2_3','eq_eb2_4','eq_eb2_5','eq_eb2_6','eq_eb2_7','eq_eb2_8','eq_eb2_9','eq_eb2_10','eq_eb2_11','eq_eb2_12','eq_eb2_13','eq_eb2_14','eq_eb2_15','eq_eb2_16','eq_eb2_17','eq_eb2_18','eq_eb2_19','eq_eb2_20','eq_eb2_21','eq_eb2_22','eq_eb2_23','eq_eb3_0','eq_eb3_1','eq_eb3_2','eq_eb3_3','eq_eb3_4','eq_eb3_5','eq_eb3_6','eq_eb3_7','eq_eb3_8','eq_eb3_9','eq_eb3_10','eq_eb3_11','eq_eb3_12','eq_eb3_13','eq_eb3_14','eq_eb3_15','eq_eb3_16','eq_eb3_17','eq_eb3_18','eq_eb3_19','eq_eb3_20','eq_eb3_21','eq_eb3_22','eq_eb3_23','fechas'));           



        
      

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
