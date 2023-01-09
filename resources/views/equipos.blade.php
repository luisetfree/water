<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- otros iconos -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <style>
        table {
          font-family: times, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }



/*Maneja los encabezados bocatoma-eb1-2-3*/
.grid-container {
  display: grid;
  /*auto representa cada columna*/
  grid-template-columns: auto auto auto auto;
  grid-template-rows: 35px 70px;
  gap: 10px;
  
  padding: 10px;
  
}


.checkbox{
  font-size: 15px;
}

.button { font-size: 14px;  }





</style>




</head>
<body>
    <!-- Inicio Boton Home -->
    <a href="/"><button class="btn"><i class="fa fa-home" ></i></button> </a>
    <!-- fin Boton Home -->

    <!-- Botones-->

<div class="container">
  
  <i class="fas fa-cloud"></i>
  <i class="fas fa-calendar"></i>
  
  <i class="fas fa-file"></i>
  <i class="fas fa-bars"></i>
</div>



  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      <h5>Operación de Equipos </h5> 

     
      
    </div>
    <div class="card-body">
        
           <form name="formulario-mostrar" id="" method="post" action="{{url('operacion') }}">
       @csrf

<!-- Contiene los controles de busqueda  -->
        <div class="row">
              

             
              <!-- Filtra la fecha que se desea ver -->
            <div class="grid-container">
              <label>Fecha</label>
             <input type="date" class=" form-control"  name="fecha" required="" value="{{$fechas}}"/> <br>
              
               <button type="submit" class="btn btn-outline-primary">Ver</button>

            </div>
              <div class="col-sm-8">
                <h5>Operación</h5>
                <table>

                    <tr>
                        <th>Estación</th>
                        
                        <th>6 eq.</th>
                        <th>5 eq.</th>
                        <th>4 eq.</th>
                        <th>3 eq.</th>
                        <th>2 eq.</th>
                        <th>1 eq.</th>
                        <th>0 eq.</th>
                       
                    
                    </tr>
                    <tr>
                        <th>Bocatoma</th>
                          <th>{{$bt_6_h}}h</th>
                          <th>{{$bt_5_h}}h</th>
                          <th>{{$bt_4_h}}h</th>
                          <th>{{$bt_3_h}}h</th>
                          <th>{{$bt_2_h}}h</th>
                          <th>{{$bt_1_h}}h</th>                          
                          <th>{{$bt_0_h}}h</th>
                       
                    </tr>
                    <tr>
                        <th>EB1</th>
                          <th>{{$eb1_6_h}}h</th>
                          <th>{{$eb1_5_h}}h</th>
                          <th>{{$eb1_4_h}}h</th>
                          <th>{{$eb1_3_h}}h</th>
                          <th>{{$eb1_2_h}}h</th>
                          <th>{{$eb1_1_h}}h</th>                          
                          <th>{{$eb1_0_h}}h</th>
                    </tr>
                     <tr>
                        <th>EB2</th>
                          <th>{{$eb2_6_h}}h</th>
                          <th>{{$eb2_5_h}}h</th>
                          <th>{{$eb2_4_h}}h</th>
                          <th>{{$eb2_3_h}}h</th>
                          <th>{{$eb2_2_h}}h</th>
                          <th>{{$eb2_1_h}}h</th>                          
                          <th>{{$eb2_0_h}}h</th>
                        
                    </tr>
                    <tr>
                        <th>EB3</th>
                          <th>{{$eb3_6_h}}h</th>
                          <th>{{$eb3_5_h}}h</th>
                          <th>{{$eb3_4_h}}h</th>
                          <th>{{$eb3_3_h}}h</th>
                          <th>{{$eb3_2_h}}h</th>
                          <th>{{$eb3_1_h}}h</th>                          
                          <th>{{$eb3_0_h}}h</th>
                        
                    </tr>
                </table>
               </div>
               

        </div>
       

      

        
      </form>
 



        
         <!-- Tabla que muestra los equipos operando -->
         <label class="form-control">Equipos operando</label>
        <table>
            <!-- Encabezado de la tabla -->
            <tr>

                
                
                
                <th>Hora   </th>
                
                
                <th> 
                    @foreach ($estacion as $nombre)
               
                         {{ $nombre->nombre}} 

                     @endforeach 
                </th>

                <th>EB1</th>
                <th>EB2</th>
                <th>EB3</th>
                <th>Editar</th>
                
               
            </tr>
            <!-- Fin Encabezado de la tabla -->

            <!-- Conteo para mostrar las horas de 00:00 a 23:00 hrs-->
@for ($i = 1; $i < 25; $i++)
              <tr>

                 

                     
                <!-- Primer caso para controlar las horas de 0 a 9, se agrego este if para controlar el formato: 00:00-->
                    @if ($i < 10)
                        <td>0{{ $i}}:00</td><!-- muestra las horas de las 00:00 a 09:00 hrs en la tabla respetando el formato 00:00, columna hora-->

                        <td>

                        
                            <!-- Controla los casos en las horas 01:00 a las 09:00 para BT-->
                        @switch($i)
                                 
                                @case(1)
                                    @foreach ($equipo_1 as $eqi)

                                        
                                         {{ $eqi->nombre}}-
                                                                                   
                                        

                                     @endforeach 
                                @break
                             
                                @case(2)
                                     @foreach ($equipo_2 as $eq2)

                                        {{ $eq2->nombre}}-

                                    @endforeach 
                                @break
                                @case(3)
                                     @foreach ($equipo_3 as $eq3)

                                        {{ $eq3->nombre}}-

                                    @endforeach 
                                @break
                                 @case(4)
                                     @foreach ($equipo_4 as $eq4)

                                        {{ $eq4->nombre}}-

                                    @endforeach 
                                @break
                                 @case(5)
                                     @foreach ($equipo_5 as $eq5)

                                        {{ $eq5->nombre}}-

                                    @endforeach 
                                @break
                                @case(6)
                                     @foreach ($equipo_6 as $eq6)

                                        {{ $eq6->nombre}}-

                                    @endforeach 
                                @break
                                @case(7)
                                     @foreach ($equipo_7 as $eq7)

                                        {{ $eq7->nombre}}-

                                    @endforeach 
                                @break
                                @case(8)
                                     @foreach ($equipo_8 as $eq8)

                                        {{ $eq8->nombre}}-

                                    @endforeach 
                                @break
                                @case(9)
                                     @foreach ($equipo_9 as $eq9)

                                        {{ $eq9->nombre}}-

                                    @endforeach 
                                @break
                             
                                @default
                                    ------
                        @endswitch



                        </td>
    <!-- Controla los casos en las horas 01:00 a las 09:00 para EB1-->
                        <td>
                        @switch($i)
                                 
                                @case(1)
                                    @foreach ($eq_eb1_1 as $eb1_1)

                                         {{ $eb1_1->nombre}}-

                                     @endforeach 
                                @break
                             
                                @case(2)
                                     @foreach ($eq_eb1_2 as $eb1_2)

                                        {{ $eb1_2->nombre}}-

                                    @endforeach 
                                @break
                                @case(3)
                                     @foreach ($eq_eb1_3 as $eb1_3)

                                        {{ $eb1_3->nombre}}-

                                    @endforeach 
                                @break
                                 @case(4)
                                     @foreach ($eq_eb1_4 as $eb1_4)

                                        {{ $eb1_4->nombre}}-

                                    @endforeach 
                                @break
                                 @case(5)
                                     @foreach ($eq_eb1_5 as $eb1_5)

                                        {{ $eb1_5->nombre}}-

                                    @endforeach 
                                @break
                                @case(6)
                                     @foreach ($eq_eb1_6 as $eb1_6)

                                        {{ $eb1_6->nombre}}-

                                    @endforeach 
                                @break
                                @case(7)
                                     @foreach ($eq_eb1_7 as $eb1_7)

                                        {{ $eb1_7->nombre}}-

                                    @endforeach 
                                @break
                                @case(8)
                                     @foreach ($eq_eb1_8 as $eb1_8)

                                        {{ $eb1_8->nombre}}-

                                    @endforeach 
                                @break
                                @case(9)
                                     @foreach ($eq_eb1_9 as $eb1_9)

                                        {{ $eb1_9->nombre}}-

                                    @endforeach 
                                @break
                                
                             
                                @default
                                    ------
                        @endswitch






                        </td>
                        <!-- Controla los casos en las horas 01:00 a las 09:00 para EB2-->
                        <td>

                            @switch($i)
                                 
                                @case(1)
                                    @foreach ($eq_eb2_1 as $eb2_1)

                                         {{ $eb2_1->nombre}}-

                                     @endforeach 
                                @break
                             
                                @case(2)
                                     @foreach ($eq_eb2_2 as $eb2_2)

                                        {{ $eb2_2->nombre}}-

                                    @endforeach 
                                @break
                                @case(3)
                                     @foreach ($eq_eb2_3 as $eb2_3)

                                        {{ $eb2_3->nombre}}-

                                    @endforeach 
                                @break
                                 @case(4)
                                     @foreach ($eq_eb2_4 as $eb2_4)

                                        {{ $eb2_4->nombre}}-

                                    @endforeach 
                                @break
                                 @case(5)
                                     @foreach ($eq_eb2_5 as $eb2_5)

                                        {{ $eb2_5->nombre}}-

                                    @endforeach 
                                @break
                                @case(6)
                                     @foreach ($eq_eb2_6 as $eb2_6)

                                        {{ $eb2_6->nombre}}-

                                    @endforeach 
                                @break
                                @case(7)
                                     @foreach ($eq_eb2_7 as $eb2_7)

                                        {{ $eb2_7->nombre}}-

                                    @endforeach 
                                @break
                                @case(8)
                                     @foreach ($eq_eb2_8 as $eb2_8)

                                        {{ $eb2_8->nombre}}-

                                    @endforeach 
                                @break
                                @case(9)
                                     @foreach ($eq_eb2_9 as $eb2_9)

                                        {{ $eb2_9->nombre}}-

                                    @endforeach 
                                @break
                                
                             
                                @default
                                    ------
                        @endswitch




                        </td>
                        <!-- Controla los casos en las horas 01:00 a las 09:00 para EB3-->

                        <td>

 @switch($i)            

                                 
                                @case(1)
                                    @foreach ($eq_eb3_1 as $eb3_1)

                                         {{ $eb3_1->nombre}}-
                                       

                                     @endforeach 
                                @break
                             
                                @case(2)
                                     @foreach ($eq_eb3_2 as $eb3_2)

                                        {{ $eb3_2->nombre}}-

                                    @endforeach 
                                @break
                                @case(3)
                                     @foreach ($eq_eb3_3 as $eb3_3)

                                        {{ $eb3_3->nombre}}-

                                    @endforeach 
                                @break
                                 @case(4)
                                     @foreach ($eq_eb3_4 as $eb3_4)

                                        {{ $eb3_4->nombre}}-

                                    @endforeach 
                                @break
                                 @case(5)
                                     @foreach ($eq_eb3_5 as $eb3_5)

                                        {{ $eb3_5->nombre}}-

                                    @endforeach 
                                @break
                                @case(6)
                                     @foreach ($eq_eb3_6 as $eb3_6)

                                        {{ $eb3_6->nombre}}-

                                    @endforeach 
                                @break
                                @case(7)
                                     @foreach ($eq_eb3_7 as $eb3_7)

                                        {{ $eb3_7->nombre}}-

                                    @endforeach 
                                @break
                                @case(8)
                                     @foreach ($eq_eb3_8 as $eb3_8)

                                        {{ $eb3_8->nombre}}-

                                    @endforeach 
                                @break
                                @case(9)
                                     @foreach ($eq_eb3_9 as $eb3_9)

                                        {{ $eb3_9->nombre}}-

                                    @endforeach 
                                @break
                                
                             
                                @default
                                    ------
                        @endswitch






                        </td>

                        <!-- Controlar ediciones de equipos trabajando -->
                     <!--    <th>
                                          <a href="">
                                            <img src="{{ asset('img/editar.png')}}" />
                                          </a>
                        </th> -->

                        


                    @else
                    <!-- Bloque de Conteo de las 10:00 hrs a las 23:00 hrs de todas las estaciones-->
                        <td>{{ $i}}:00</td><!-- muestra las horas de las 10:00 a 24:00 hrs en la tabla-->



                        <td>
                        
                            <!-- Controla los casos en las horas 10:00 a las 24:00 de BT-->
                        @switch($i)
                                @case(10)
                                    @foreach ($equipo_10 as $eq10)

                                         {{ $eq10->nombre}}-

                                     @endforeach 
                                @break
                             
                                @case(11)
                                     @foreach ($equipo_11 as $eq11)

                                        {{ $eq11->nombre}}-

                                    @endforeach 
                                @break
                                @case(12)
                                     @foreach ($equipo_12 as $eq12)

                                        {{ $eq12->nombre}}-

                                    @endforeach 
                                @break
                                 @case(13)
                                     @foreach ($equipo_13 as $eq13)

                                        {{ $eq13->nombre}}-

                                    @endforeach 
                                @break
                                 @case(14)
                                     @foreach ($equipo_14 as $eq14)

                                        {{ $eq14->nombre}}-

                                    @endforeach 
                                @break
                                @case(15)
                                     @foreach ($equipo_15 as $eq15)

                                        {{ $eq15->nombre}}-

                                    @endforeach 
                                @break
                                @case(16)
                                     @foreach ($equipo_16 as $eq16)

                                        {{ $eq16->nombre}}-

                                    @endforeach 
                                @break
                                @case(17)
                                     @foreach ($equipo_17 as $eq17)

                                        {{ $eq17->nombre}}-

                                    @endforeach 
                                @break
                                @case(18)
                                     @foreach ($equipo_18 as $eq18)

                                        {{ $eq18->nombre}}-

                                    @endforeach 
                                @break
                                @case(19)
                                     @foreach ($equipo_19 as $eq19)

                                        {{ $eq19->nombre}}-

                                    @endforeach 
                                @break
                                @case(20)
                                     @foreach ($equipo_20 as $eq20)

                                        {{ $eq20->nombre}}-

                                    @endforeach 
                                @break
                                @case(21)
                                     @foreach ($equipo_21 as $eq21)

                                        {{ $eq21->nombre}}-

                                    @endforeach 
                                @break
                                @case(22)
                                     @foreach ($equipo_22 as $eq22)

                                        {{ $eq22->nombre}}-

                                    @endforeach 
                                @break
                                @case(23)
                                     @foreach ($equipo_23 as $eq23)

                                        {{ $eq23->nombre}}-

                                    @endforeach 
                                @break
                                <!-- Verificar, no se muestra este dato -->
                                @case(24)
                                    @foreach ($equipo_0 as $eq)

                                         {{ $eq->nombre}}-

                                     @endforeach 
                                @break
                             
                                @default
                                    ------
                        @endswitch



                        </td>
                        <!-- Conteo de las 10:00 hrs a las 23:00 hrs de EB1-->
                        <td>

                            <!-- Controla los casos en las horas 10:00 a las 24:00 de EB1-->
                        @switch($i)
                                @case(10)
                                    @foreach ($eq_eb1_10 as $eb1_10)

                                         {{ $eb1_10->nombre}}-

                                     @endforeach 
                                @break
                             
                                @case(11)
                                     @foreach ($eq_eb1_11 as $eb1_11)

                                        {{ $eb1_11->nombre}}-

                                    @endforeach 
                                @break
                                @case(12)
                                     @foreach ($eq_eb1_12 as $eb1_12)

                                        {{ $eb1_12->nombre}}-

                                    @endforeach 
                                @break
                                 @case(13)
                                     @foreach ($eq_eb1_13 as $eb1_13)

                                        {{ $eb1_13->nombre}}-

                                    @endforeach 
                                @break
                                 @case(14)
                                     @foreach ($eq_eb1_14 as $eb1_14)

                                        {{ $eb1_14->nombre}}-

                                    @endforeach 
                                @break
                                @case(15)
                                     @foreach ($eq_eb1_15 as $eb1_15)

                                        {{ $eb1_15->nombre}}-

                                    @endforeach 
                                @break
                                @case(16)
                                     @foreach ($eq_eb1_16 as $eb1_16)

                                        {{ $eb1_16->nombre}}-

                                    @endforeach 
                                @break
                                @case(17)
                                     @foreach ($eq_eb1_17 as $eb1_17)

                                        {{ $eb1_17->nombre}}-

                                    @endforeach 
                                @break
                                @case(18)
                                     @foreach ($eq_eb1_18 as $eb1_18)

                                        {{ $eb1_18->nombre}}-

                                    @endforeach 
                                @break
                                @case(19)
                                     @foreach ($eq_eb1_19 as $eb1_19)

                                        {{ $eb1_19->nombre}}-

                                    @endforeach 
                                @break
                                @case(20)
                                     @foreach ($eq_eb1_20 as $eb1_20)

                                        {{ $eb1_20->nombre}}-

                                    @endforeach 
                                @break
                                @case(21)
                                     @foreach ($eq_eb1_21 as $eb1_21)

                                        {{ $eb1_21->nombre}}-

                                    @endforeach 
                                @break
                                @case(22)
                                     @foreach ($eq_eb1_22 as $eb1_22)

                                        {{ $eb1_22->nombre}}-

                                    @endforeach 
                                @break
                                @case(23)
                                     @foreach ($eq_eb1_23 as $eb1_23)

                                        {{ $eb1_23->nombre}}-

                                    @endforeach 
                                @break
                                @case(24)
                                    @foreach ($eq_eb1_0 as $eb1_0)

                                         {{ $eb1_0->nombre}}-

                                     @endforeach 
                                @break
                             
                                @default
                                    ------
                        @endswitch






                        </td>
                        <!-- Conteo de las 10:00 hrs a las 23:00 hrs de EB2-->
                        <td>
                                <!-- Controla los casos en las horas 10:00 a las 23:00 de EB2-->
                        @switch($i)
                                @case(10)
                                    @foreach ($eq_eb2_10 as $eb2_10)

                                         {{ $eb2_10->nombre}}-

                                     @endforeach 
                                @break
                             
                                @case(11)
                                     @foreach ($eq_eb2_11 as $eb2_11)

                                        {{ $eb2_11->nombre}}-

                                    @endforeach 
                                @break
                                @case(12)
                                     @foreach ($eq_eb2_12 as $eb2_12)

                                        {{ $eb2_12->nombre}}-

                                    @endforeach 
                                @break
                                 @case(13)
                                     @foreach ($eq_eb2_13 as $eb2_13)

                                        {{ $eb2_13->nombre}}-

                                    @endforeach 
                                @break
                                 @case(14)
                                     @foreach ($eq_eb2_14 as $eb2_14)

                                        {{ $eb2_14->nombre}}-

                                    @endforeach 
                                @break
                                @case(15)
                                     @foreach ($eq_eb2_15 as $eb2_15)

                                        {{ $eb2_15->nombre}}-

                                    @endforeach 
                                @break
                                @case(16)
                                     @foreach ($eq_eb2_16 as $eb2_16)

                                        {{ $eb2_16->nombre}}-

                                    @endforeach 
                                @break
                                @case(17)
                                     @foreach ($eq_eb2_17 as $eb2_17)

                                        {{ $eb2_17->nombre}}-

                                    @endforeach 
                                @break
                                @case(18)
                                     @foreach ($eq_eb2_18 as $eb2_18)

                                        {{ $eb2_18->nombre}}-

                                    @endforeach 
                                @break
                                @case(19)
                                     @foreach ($eq_eb2_19 as $eb2_19)

                                        {{ $eb2_19->nombre}}-

                                    @endforeach 
                                @break
                                @case(20)
                                     @foreach ($eq_eb2_20 as $eb2_20)

                                        {{ $eb2_20->nombre}}-

                                    @endforeach 
                                @break
                                @case(21)
                                     @foreach ($eq_eb2_21 as $eb2_21)

                                        {{ $eb2_21->nombre}}-

                                    @endforeach 
                                @break
                                @case(22)
                                     @foreach ($eq_eb2_22 as $eb2_22)

                                        {{ $eb2_22->nombre}}-

                                    @endforeach 
                                @break
                                @case(23)
                                     @foreach ($eq_eb2_23 as $eb2_23)

                                        {{ $eb2_23->nombre}}-

                                    @endforeach 
                                @break
                                @case(24)
                                    @foreach ($eq_eb2_0 as $eb2_0)

                                         {{ $eb2_0->nombre}}-

                                     @endforeach 
                                @break
                             
                                @default
                                    ------
                        @endswitch







                        </td>
                        <!-- Conteo de las 10:00 hrs a las 24:00 hrs de EB3-->

                        <td>
@switch($i)             

                                @case(10)
                                    @foreach ($eq_eb3_10 as $eb3_10)

                                         {{ $eb3_10->nombre}}-


                                     @endforeach 
                                @break
                             
                                @case(11)
                                     @foreach ($eq_eb3_11 as $eb3_11)

                                        {{ $eb3_11->nombre}}-

                                    @endforeach 
                                @break
                                @case(12)
                                     @foreach ($eq_eb3_12 as $eb3_12)

                                        {{ $eb3_12->nombre}}-

                                    @endforeach 
                                @break
                                 @case(13)
                                     @foreach ($eq_eb3_13 as $eb3_13)

                                        {{ $eb3_13->nombre}}-

                                    @endforeach 
                                @break
                                 @case(14)
                                     @foreach ($eq_eb3_14 as $eb3_14)

                                        {{ $eb3_14->nombre}}-

                                    @endforeach 
                                @break
                                @case(15)
                                     @foreach ($eq_eb3_15 as $eb3_15)

                                        {{ $eb3_15->nombre}}-

                                    @endforeach 
                                @break
                                @case(16)
                                     @foreach ($eq_eb3_16 as $eb3_16)

                                        {{ $eb3_16->nombre}}-

                                    @endforeach 
                                @break
                                @case(17)
                                     @foreach ($eq_eb3_17 as $eb3_17)

                                        {{ $eb3_17->nombre}}-

                                    @endforeach 
                                @break
                                @case(18)
                                     @foreach ($eq_eb3_18 as $eb3_18)

                                        {{ $eb3_18->nombre}}-

                                    @endforeach 
                                @break
                                @case(19)
                                     @foreach ($eq_eb3_19 as $eb3_19)

                                        {{ $eb3_19->nombre}}-

                                    @endforeach 
                                @break
                                @case(20)
                                     @foreach ($eq_eb3_20 as $eb3_20)

                                        {{ $eb3_20->nombre}}-

                                    @endforeach 
                                @break
                                @case(21)
                                     @foreach ($eq_eb3_21 as $eb3_21)

                                        {{ $eb3_21->nombre}}-

                                    @endforeach 
                                @break
                                @case(22)
                                     @foreach ($eq_eb3_22 as $eb3_22)

                                        {{ $eb3_22->nombre}}-

                                    @endforeach 
                                @break
                                @case(23)
                                     @foreach ($eq_eb3_23 as $eb3_23)

                                        {{ $eb3_23->nombre}}-

                                    @endforeach 
                                @break
                                @case(24)
                                    @foreach ($eq_eb3_0 as $eb3_0)

                                         {{ $eb3_0->nombre}}-



                                     @endforeach 
                                @break
                             
                                @default
                                    ------
                        @endswitch




                        </td>
                    @endif


                <!-- CONTROLA LA EDICION DE LOS EQUIPOS TRABAJANDO MEDIANTE EL CONTEO DE HORAS
                    Los datos que se tomaran como referencia son los de Bocatoma

                -->
                        <th>
                            

                            
                                        
                                                                                          
                            

                            @switch($i)

                           

                                 
                                @case(1)
                                  
                                    <a href="/editar-equipos/01:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>                              
                                @break
                             
                                @case(2)
                                <a href="/editar-equipos/02:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                     
                                @break
                                @case(3)
                                <a href="/editar-equipos/03:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                   
                                @break
                                 @case(4)
                                 <a href="/editar-equipos/04:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                    
                                @break
                                 @case(5)
                                     <a href="/editar-equipos/05:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                @case(6)
                                   <a href="/editar-equipos/06:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                @case(7)
                                     <a href="/editar-equipos/07:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                @case(8)
                                    <a href="/editar-equipos/08:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                @case(9)
                                    <a href="/editar-equipos/09:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(10)
                                    <a href="/editar-equipos/10:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(11)
                                    <a href="/editar-equipos/11:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(12)
                                    <a href="/editar-equipos/12:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(13)
                                    <a href="/editar-equipos/13:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(14)
                                    <a href="/editar-equipos/14:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(15)
                                    <a href="/editar-equipos/15:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(16)
                                    <a href="/editar-equipos/16:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(17)
                                    <a href="/editar-equipos/17:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(18)
                                    <a href="/editar-equipos/18:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(19)
                                    <a href="/editar-equipos/19:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(20)
                                    <a href="/editar-equipos/20:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(21)
                                    <a href="/editar-equipos/21:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(22)
                                    <a href="/editar-equipos/22:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(23)
                                    <a href="/editar-equipos/23:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                                  @case(24)
                                    <a href="/editar-equipos/24:00/{{$fechas}}/1"> <img src="{{ asset('img/editar.png')}}" />  </a>   
                                @break
                             
                                @default
                                    ------
                        @endswitch




                        </th>


                
                   
                
                
               
                

            
               
              </tr>


@endfor



              




    </table>


  




      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
       
        <div class="grid-container" >
       
            



        </div>

    
      
        <!-- <input type="date" class="date" id="date" name="date"> -->




      </form>





     



    </div>

   
        
    

         


  </div>

</div>





</body>
</html>
