<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  grid-template-columns: auto auto auto;
  grid-template-rows: 35px 70px;
  gap: 10px;
  
  padding: 10px;
}

.grid-container {
  
  
  padding: 20px 0;
  font-size: 15px;
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

  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Operación de Equipos 

      <!-- Muestra el nombre de la estacion -->
            @foreach ($estacion as $nombre)
               
             <h4>{{ $nombre->nombre}} </h4>   

            @endforeach 
      
    </div>
    <div class="card-body">
        
           <form name="formulario-mostrar" id="" method="post" action="{{url('operacion') }}">
       @csrf

       <div class="grid-container">
              <label for="">Estación:
                  <select id="" name="id_estacion">
                    <option value="1" selected>Bocatoma</option>
                    <option value="2">EB1</option>
                    <option value="3">EB2</option>
                    <option value="4">EB3</option>        
                           
                  </select>
              </label>

             
              <!-- Filtra la fecha que se desea ver -->
               <input type="date" class="form-control"  name="fecha" required="" value=""/>
               
               <button type="submit" class="btn btn-primary button">Ver</button>
               <label>{{$fechas}}</label>

        </div>
       

      

        
      </form>
 



        
         <!-- Tabla que muestra los equipos operando -->
        <table>
            <!-- Encabezado de la tabla -->
            <tr>

                
                
                
                <th>Hora   </th>
                
                
                <th>Equipos</th>
               
            </tr>
            <!-- Fin Encabezado de la tabla -->

            <!-- Conteo para mostrar las horas de 00:00 a 23:00 hrs-->
@for ($i = 0; $i < 24; $i++)
              <tr>

                 

                     
                <!-- Primer caso para controlar las horas de 0 a 9, se agrego este if para controlar el formato: 00:00-->
                    @if ($i < 10)
                        <td>0{{ $i}}:00</td><!-- muestra las horas de las 00:00 a 09:00 hrs en la tabla respetando el formato 00:00, columna hora-->

                        <td>
                        
                            <!-- Controla los casos en las horas 00:00 a las 09:00-->
                        @switch($i)
                                 @case(0)
                                    @foreach ($equipo_0 as $eq)

                                         {{ $eq->nombre}}

                                     @endforeach 
                                @break
                                @case(1)
                                    @foreach ($equipo_1 as $eqi)

                                         {{ $eqi->nombre}}

                                     @endforeach 
                                @break
                             
                                @case(2)
                                     @foreach ($equipo_2 as $eq2)

                                        {{ $eq2->nombre}}

                                    @endforeach 
                                @break
                                @case(3)
                                     @foreach ($equipo_3 as $eq3)

                                        {{ $eq3->nombre}}

                                    @endforeach 
                                @break
                                 @case(4)
                                     @foreach ($equipo_4 as $eq4)

                                        {{ $eq4->nombre}}

                                    @endforeach 
                                @break
                                 @case(5)
                                     @foreach ($equipo_5 as $eq5)

                                        {{ $eq5->nombre}}

                                    @endforeach 
                                @break
                                @case(6)
                                     @foreach ($equipo_6 as $eq6)

                                        {{ $eq6->nombre}}

                                    @endforeach 
                                @break
                                @case(7)
                                     @foreach ($equipo_7 as $eq7)

                                        {{ $eq7->nombre}}

                                    @endforeach 
                                @break
                                @case(8)
                                     @foreach ($equipo_8 as $eq8)

                                        {{ $eq8->nombre}}

                                    @endforeach 
                                @break
                                @case(9)
                                     @foreach ($equipo_9 as $eq9)

                                        {{ $eq9->nombre}}

                                    @endforeach 
                                @break
                             
                                @default
                                    ------
                        @endswitch



                        </td>

                    @else
                    <!-- Conteo de las 10:00 hrs a las 23:00 hrs -->
                        <td>{{ $i}}:00</td><!-- muestra las horas de las 10:00 a 23:00 hrs en la tabla-->
                        <td>
                        
                            <!-- Controla los casos en las horas 00:00 a las 09:00-->
                        @switch($i)
                                @case(10)
                                    @foreach ($equipo_10 as $eq10)

                                         {{ $eq10->nombre}}

                                     @endforeach 
                                @break
                             
                                @case(11)
                                     @foreach ($equipo_11 as $eq11)

                                        {{ $eq11->nombre}}

                                    @endforeach 
                                @break
                                @case(12)
                                     @foreach ($equipo_12 as $eq12)

                                        {{ $eq12->nombre}}

                                    @endforeach 
                                @break
                                 @case(13)
                                     @foreach ($equipo_13 as $eq13)

                                        {{ $eq13->nombre}}

                                    @endforeach 
                                @break
                                 @case(14)
                                     @foreach ($equipo_14 as $eq14)

                                        {{ $eq14->nombre}}

                                    @endforeach 
                                @break
                                @case(15)
                                     @foreach ($equipo_15 as $eq15)

                                        {{ $eq15->nombre}}

                                    @endforeach 
                                @break
                                @case(16)
                                     @foreach ($equipo_16 as $eq16)

                                        {{ $eq16->nombre}}

                                    @endforeach 
                                @break
                                @case(17)
                                     @foreach ($equipo_17 as $eq17)

                                        {{ $eq17->nombre}}

                                    @endforeach 
                                @break
                                @case(18)
                                     @foreach ($equipo_18 as $eq18)

                                        {{ $eq18->nombre}}

                                    @endforeach 
                                @break
                                @case(19)
                                     @foreach ($equipo_19 as $eq19)

                                        {{ $eq19->nombre}}

                                    @endforeach 
                                @break
                                @case(20)
                                     @foreach ($equipo_20 as $eq20)

                                        {{ $eq20->nombre}}

                                    @endforeach 
                                @break
                                @case(21)
                                     @foreach ($equipo_21 as $eq21)

                                        {{ $eq21->nombre}}

                                    @endforeach 
                                @break
                                @case(22)
                                     @foreach ($equipo_22 as $eq22)

                                        {{ $eq22->nombre}}

                                    @endforeach 
                                @break
                                @case(23)
                                     @foreach ($equipo_23 as $eq23)

                                        {{ $eq23->nombre}}

                                    @endforeach 
                                @break
                             
                                @default
                                    ------
                        @endswitch



                        </td>
                    @endif




                
                   
                
                
               
                

            
               
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
