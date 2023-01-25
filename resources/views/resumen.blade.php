

<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Controla el menu -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Fin barra menu -->

    <style>
        table {
          font-family: times, sans-serif;
          border-collapse: collapse;
          width: 100%;

        }

        td, th {
          border: 1px solid black;
          text-align: center;
          padding: 4px;
          font-size: 14px;

        }
        /*maneja los encabezados de las tablas*/
        th {
        background-color: #dddddd;
        }

        tr:nth-child(even) {
          /* background-color: #dddddd;*/


        }


            /*Maneja los encabezados bocatoma-eb1-2-3*/
            .grid-container {
              display: grid;
              /*auto representa cada columna*/
              grid-template-columns: auto auto auto auto auto auto auto auto auto;
              grid-template-rows: 80px 120px;
              gap: 10px;
              
              padding: 10px;
            }


            .checkbox{
              font-size: 15px;
            }


/*Formulario mostrar*/
.mostrar{

  position: absolute;
  right: 0px;
  width: 18%;
/*  border: 3px solid #73AD21;*/

  

}

.card{

border-radius: 30px;
border: solid #e5e3e3;
}

/*Division entre controles y tabla de datos*/
.linea{
border: solid #e5e3e3;
margin: 1%;
border-radius: 10px;
opacity: 40%;
}

.resumen{

    text-align: center;
    font-weight: bold;

}

    </style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Torogoz App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="/"><button class="btn"><i class="fa fa-home" ></i></button> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/resumen{{date('Y-m-d')}}">Control de Procesos</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="/calidad">Calidades</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/cargas">Carga de Químicos</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/paros">Paros de Operación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/producciones">Producciones</a>
      </li>

   
      <li class="nav-item">
        <a class="nav-link" href="/operacion">Operación Equipos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/bitacora">Bitacora</a>
      </li>
     
  
    </ul>
    
  </div>
</nav>












</head>
<body>
   

  <div class="container-fluid">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Producción 

    </div>

    <!-- Controles de ingreso de datos -->
    <div class="card-body">

<!-- Formulario exclusivo para mostrar una fecha determinada -->
        <form name="" class="mostrar" method="post" action="{{url('muestra')}}">
       @csrf
        <label>Ver fecha:</label>
        <input type="date" name="fecha" class="" value="{{$fecha}}">  
        <button type="submit" class="btn btn-outline-primary">Mostrar</button>


        </form>

<!-- Formulario exclusivo para guardar toda la informacion -->
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
       

       
       <!-- Select mostrará unicamente las horas que hacen falta agregar al registro diario -->
       <label for="hora">Hora:</label>

            <select id="" name="hora" class="" required=""> 
                   <!-- Validando para hora que no se haya ingresado un dato previamente -->
                  @if( $dato_hora_1 == "vacio" )
                 <option value="01:00">01:00</option>
                                    
                  @else
            
                  @endif
                
                 @if( $dato_hora_2 == "vacio" )
                 <option value="02:00">02:00</option>
                                    
                @else
            
                @endif

                @if( $dato_hora_3 == "vacio" )
                 <option value="03:00">03:00</option>
                                    
                @else
            
                @endif

                @if( $dato_hora_4 == "vacio" )
                 <option value="04:00">04:00</option>
                                    
                @else
            
                @endif

                @if( $dato_hora_5 == "vacio" )
                 <option value="05:00">05:00</option>
                                    
                @else
            
                @endif
                @if( $dato_hora_6 == "vacio" )
                 <option value="06:00">06:00</option>
                                    
                @else
            
                @endif
                @if( $dato_hora_7 == "vacio" )
                 <option value="07:00">07:00</option>
                                    
                @else
            
                @endif
                        
                 @if( $dato_hora_8 == "vacio" )
                 <option value="08:00">08:00</option>
                                    
                @else
            
                @endif
                @if( $dato_hora_9 == "vacio" )
                 <option value="09:00">09:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_10 == "vacio" )
                 <option value="10:00">10:00</option>
                                    
                @else
            
                @endif
                  @if( $dato_hora_11 == "vacio" )
                 <option value="11:00">11:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_12 == "vacio" )
                 <option value="12:00">12:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_13 == "vacio" )
                 <option value="13:00">13:00</option>
                                    
                @else
            
                @endif
                @if( $dato_hora_14 == "vacio" )
                 <option value="14:00">14:00</option>
                                    
                @else
            
                @endif
                @if( $dato_hora_15 == "vacio" )
                 <option value="15:00">15:00</option>
                                    
                @else
            
                @endif
                @if( $dato_hora_16 == "vacio" )
                 <option value="16:00">16:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_17 == "vacio" )
                 <option value="17:00">17:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_18 == "vacio" )
                 <option value="18:00">18:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_19 == "vacio" )
                 
                <option value="19:00">19:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_20 == "vacio" )
                   
                
                <option value="20:00">20:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_21 == "vacio" )
                
                <option value="21:00">21:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_22 == "vacio" )
                 <option value="22:00">22:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_23 == "vacio" )
                 <option value="23:00">23:00</option>
                                    
                @else
            
                @endif
                 @if( $dato_hora_24 == "vacio" )
                 <option value="24:00">24:00</option>
                                    
                @else
            
                @endif
                
                
                
                
                
                
                
                
                
               
                
                
                
                       
            </select>
            <!-- Muestra fecha actual -->
            <label>Fecha:</label>
        <input type="date" name="fecha" value="{{$fecha}}">



       <!-- Inicio inputs -->
        <div class="grid-container" >
       
           <div class="form-group" >

                <h5>Dosificaciones</h5>

                <!-- verficar para mostrar el input deacuerdo al item seleccionado -->
              <!--   <select class="">
                    
                    <option name="sulf" value="sulfato">Sulfato</option>
                    <option value="pac">Pac</option>


                   

                </select> -->
                       

                     <!-- coagulante cambiar a un select para tomar en cuenta el PAC tambien-->
                <input type="text" id=""  name="dosificacion_coagulante" class="form-control" placeholder="Coagulante - PPM" required="">
                
                        
                
                

                

                          <!-- Dosificacion de cal -->
                <input type="text" id=""  name="dosif_cal" class="form-control" placeholder="Cal - PPM">
                         <!-- Representa el id de la Cal -->
                <input type="hidden" id="" min="0" name="id_cal" class="form-control" value="4" >

                      
                      
                      
                      
                 
                        <!-- Dosificacion de permanganato -->
                      <input type="text" id=""  name="dosif_permanganato" class="form-control" placeholder="Permanganato ">

                      <!-- Dosificacion polimero--> 
                      <input type="text" id="" name="dosif_polimero" class="form-control" placeholder="Polimero ">
                     
                       <!-- Dosificacion Carbon--> 
                      <input type="text" id=""  name="dosif_carbon" class="form-control" placeholder="Carbon Act ">

                      <!-- Dosificacion Cloro -->
                      <input type="text" id=""  name="dosif_cloro" class="form-control" placeholder="Cloro kg/h">
                     
                      



                    </div>

             




            <div class="form-group" >
                <h5 >Bocatoma</h5>
              
              <input type="number" id="" min="0" name="caudal" class="form-control" required="" placeholder="Caudal">
              <input type="number" id="" min="0" name="nivel_camara" class="form-control" placeholder="N.Camara">
              <input type="text" id=""  name="nivel_rio" class="form-control" placeholder="N.Rio">
              
              
              
              <label>Equipos Operando</label>
              
              <!-- Representa el id de Bocatoma -->
              <input type="hidden" id="" name="id_estacion" class="form-control" value="1" >
              <div class="checkbox" >
                    <label > 1</label>
                    <input type="checkbox" id="" name= "eq1" value="Operando">
                    <input type="hidden" id="" name= "ideq1" value="1">
                    <label> 2</label>
                    <input type="checkbox" id="" name= "eq2" value="Operando">
                    <input type="hidden" id="" name= "ideq2" value="2">
                    <label> 3</label>
                    <input type="checkbox" id="" name= "eq3" value="Operando">
                    <input type="hidden" id="" name= "ideq3" value="3">
                    <label> 4</label>
                    <input type="checkbox" id="" name= "eq4" value="Operando"><br>
                    <input type="hidden" id="" name= "ideq4" value="4">
                    <label> 5</label>
                    <input type="checkbox" id="" name= "eq5" value="Operando">
                    <input type="hidden" id="" name= "ideq5" value="5">
                    <label> 6</label>
                    <input type="checkbox" id="" name= "eq6" value="Operando">
                    <input type="hidden" id="" name= "ideq6" value="6">
                    <label> 7</label>
                    <input type="checkbox" id="" name= "eq7" value="Operando">
                    <input type="hidden" id="" name= "ideq7" value="7">
                    <label> 8</label>
                    <input type="checkbox" id="" name= "eq8" value="Operando">
                    <input type="hidden" id="" name= "ideq8" value="8">
                </div>

            </div>
            <div class="form-group" >
                <h5>EB1</h5>
              
             <input type="number" id="" min="0" name="caudaleb1" class="form-control" placeholder="Caudal">
              <input type="number" id="" min="0" name="nivel1" class="form-control" placeholder="N.Camara">
              <input type="text" id=""  name="cloro1" class="form-control" placeholder="Cloro">
              
              <label>Equipos Operando</label>
              
              <!-- EB1 -->
                <div class="checkbox" >
                    <label> 1</label>
                    <input type="checkbox" id="" name= "eb11" value="Operando">
                    <input type="hidden" id="" name= "ideq11" value="9">
                    <label> 2</label>
                    <input type="checkbox" id="" name= "eb12" value="Operando">
                    <input type="hidden" id="" name= "ideq21" value="10">
                    <label> 3</label>
                    <input type="checkbox" id="" name= "eb13" value="Operando ">
                    <input type="hidden" id="" name= "ideq31" value="11">
                    <label> 4</label>
                    <input type="checkbox" id="" name= "eb14" value="Operando">
                    <input type="hidden" id="" name= "ideq41" value="12"> <br>
                    <label> 5</label>
                    <input type="checkbox" id="" name= "eb15" value="Operando">
                    <input type="hidden" id="" name= "ideq51" value="13">
                    <label> 6</label>
                    <input type="checkbox" id="" name= "eb16" value="Operando">
                    <input type="hidden" id="" name= "ideq61" value="14">
                    <label> 7</label>
                    <input type="checkbox" id="" name= "eb17" value="Operando">
                    <input type="hidden" id="" name= "ideq71" value="15">
                   
                </div>
              
              
              
              <!-- Representa el id de EB1 -->
              <input type="hidden" id="" name="id_eb1" class="form-control" value="2" >
              
            </div>
            <div class="form-group" >
                <h5>EB2</h5>
              
              <input type="number" id="" min="0" name="caudaleb2" class="form-control" placeholder="Caudal">
              <input type="number" id="" min="0" name="nivel2" class="form-control" placeholder="N.Camara">
              <input type="text" id=""  name="cloro2" class="form-control" placeholder="Cloro">
              
              <!-- EB2 -->
              <label>Equipos Operando</label>
              <div class="checkbox" >
                    <label> 1</label>
                    <input type="checkbox" id="" name= "eb21" value="Operando">
                    <input type="hidden" id="" name= "ideq12" value="16">
                    <label> 2</label>
                    <input type="checkbox" id="" name= "eb22" value="Operando">
                    <input type="hidden" id="" name= "ideq22" value="17">
                    <label> 3</label>
                    <input type="checkbox" id="" name= "eb23" value="Operando">
                    <input type="hidden" id="" name= "ideq32" value="18">
                    <label> 4</label>
                    <input type="checkbox" id="" name= "eb24" value="Operando">
                    <input type="hidden" id="" name= "ideq42" value="19"><br>
                    <label> 5</label>
                    <input type="checkbox" id="" name= "eb25" value="Operando">
                    <input type="hidden" id="" name= "ideq52" value="20">
                    <label> 6</label>
                    <input type="checkbox" id="" name= "eb26" value="Operando">
                    <input type="hidden" id="" name= "ideq62" value="21">
                    <label> 7</label>
                    <input type="checkbox" id="" name= "eb27" value="Operando">
                    <input type="hidden" id="" name= "ideq72" value="22">
                   
                </div>
              
              
              
              
              <!-- Representa el id de EB2 -->
              <input type="hidden" id="" name="id_eb2" class="form-control" value="3" >
              
              
            </div>
             <div class="form-group" >
                <h5>EB3</h5>
                <input type="number" id="" min="0" name="caudaleb3" class="form-control" placeholder="Caudal">
                <input type="number" id="" min="0" name="nivel3" class="form-control" placeholder="N.Camara">
              <input type="text" id=""  name="cloro3" class="form-control" placeholder="Cloro">
               <!-- Representa el id de EB3 -->
              <input type="hidden" id="" name="id_eb3" class="form-control" value="4" >
              <!-- EB3 -->
              <label>Equipos Operando</label>
              <div class="checkbox" >
                    <label> 1</label>
                    <input type="checkbox" id="" name= "eb31" value="Operando">
                    <input type="hidden" id="" name= "ideq13" value="23">
                    <label> 2</label>
                    <input type="checkbox" id="" name= "eb32" value="Operando">
                    <input type="hidden" id="" name= "ideq23" value="24">
                    <label> 3</label>
                    <input type="checkbox" id="" name= "eb33" value="Operando">
                    <input type="hidden" id="" name= "ideq33" value="25">
                    <label> 4</label>
                    <input type="checkbox" id="" name= "eb34" value="Operando">
                    <input type="hidden" id="" name= "ideq43" value="26"><br>
                    <label> 5</label>
                    <input type="checkbox" id="" name= "eb35" value="Operando">
                    <input type="hidden" id="" name= "ideq53" value="27">
                    <label> 6</label>
                    <input type="checkbox" id="" name= "eb36" value="Operando">
                    <input type="hidden" id="" name= "ideq63" value="28">
                    <label> 7</label>
                    <input type="checkbox" id="" name= "eb37" value="Operando">
                    <input type="hidden" id="" name= "ideq73" value="29">
                   
                </div>

              
            </div>

             <div class="form-group" >
                <h5>Terminales</h5>
              
              <label for="">Nivel</label>
              <input type="number" id="" min="0" name="nivel4" class="form-control" placeholder="Terminales">
              <label for="">Cloro</label>
              <input type="text" id="" name="cloro4" class="form-control" placeholder="Terminales">
               <!-- Representa el id de tanques terminales -->
              <input type="hidden" id="" name="id_terminal" class="form-control" value="5" >
              
            </div>
            <div class="form-group" >
                <h5>B.V. Nuevo </h5>
              
              <label for="">Nivel</label>
              <input type="number" id="" min="0" name="nivel5" class="form-control" placeholder="Nuevo" >
              <label for="">Cloro</label>
              <input type="text" id=""  name="cloro5" class="form-control" placeholder="B.V.Nuevo">
               <!-- Representa el id de Bella vista nuevo -->
              <input type="hidden" id="" name="id_nuevo" class="form-control" value="6" >
              
            </div>
            <div class="form-group" >
                <h5>B.V. Viejo </h5>
              
              <label for="">Nivel</label>
              <input type="number" id="" min="0" name="nivel6" class="form-control" placeholder="Viejo">
             <!--  <label for="">Cloro</label>
              <input type="text" id="" name="cloro6" class="form-control" placeholder="B.V.Viejo"> -->
               <!-- Representa el id de Bella vista viejo -->
              <input type="hidden" id="" name="id_viejo" class="form-control" value="7" >
              
            </div>


            <!-- Se verifica que no se haya agregado un valor anteriormente a Tanque Las Pavas durante el dia, de lo contrario no se mostrarán los controles en la vista -->
            @if( empty($tanque_pavas ))
             <div class="form-group" >
                <h5>Tanque Las Pavas</h5>
              
              <label for="">Aporte (m³/d)</label>
              <input type="number" id="" min="0" name="aporte_pavas" class="form-control" placeholder="Tanque Las Pavas">
            
              <input type="hidden" id="" name="id_pavas" class="form-control" value="8" >
              
            </div>
            
            @endif
           
                    


        </div>
        <!-- Fin inputs -->

        <br>
        <br>
       <section class="linea"></section>

    
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        <!-- <input type="date" class="date" id="date" name="date"> -->




      </form>





     



    </div>

    <!-- Tabla que muestra los valores almacenados -->

    <div class="resumen">Tabla Resumen</div>
        <table>
            

   
                <!-- Encabezados de la tabla -->

              <tr>
                <th>Hora</th>
                <th>Caudal BT <br>(m³/h)</th>
                <th>Nivel <br> Cámara BT</th>
                <th>Nivel Rio <br> (msnm)</th>
                <th>Nº Equipos <br> Operando</th>
                <th colspan="2">Coagulante</th>
                             
                                
                <th colspan="2">Dosificación Polimero</th>
                <th colspan="2" >Dosificación Permanganato</th>
                <th colspan="2" >Dosificación CAL</th>
                <th colspan="2" >Dosificación Carbon</th>
                <th>Cloro mg/L</th>
                <th colspan="2" >Cloro residual</th>
                <th colspan="2" >Niveles tanques %</th>
              </tr>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>%</th>
                <th>mg/L</th>
                <th>%</th>
                <th>mg/L</th>
                <th>%</th>
                <th>mg/L</th>
                <th>%</th>
                <th>mg/L</th>
                <th>%</th>
                <th>mg/L</th>
                <th></th>
                <th>EB-2</th>
                <th>EB-3</th>
                <th>TTS</th>
                <th>B. Vista</th>
              </tr>
             
               
               <!-- Datos desde el controlador, se rellena la tabla con la info -->
               
             @for ($i = 1; $i < 25; $i++) 
              <tr>
                

                <!-- imprime las horas en formato 00:00-->
                @if ($i < 10)
                <td>0{{ $i}}:00</td>
                @else
                <td>{{ $i}}:00</td>
                @endif
                
                 <!-- Caudal de BT -->
                <td> 
                    @switch($i)
                                 
                                @case(1)
                                      @foreach ($datos_bt_1 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                             
                                @case(2)
                                   @foreach ($datos_bt_2 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(3)
                                     @foreach ($datos_bt_3 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($datos_bt_4 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($datos_bt_5 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($datos_bt_6 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($datos_bt_7 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(8)
                                   @foreach ($datos_bt_8 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach

                                @break
                                @case(9)
                                      @foreach ($datos_bt_9 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(10)
                                     @foreach ($datos_bt_10 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($datos_bt_11 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($datos_bt_12 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(13)
                                      @foreach ($datos_bt_13 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($datos_bt_14 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(15)
                                     @foreach ($datos_bt_15 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(16)
                                     @foreach ($datos_bt_16 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($datos_bt_17 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($datos_bt_18 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($datos_bt_19 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($datos_bt_20 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($datos_bt_21 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($datos_bt_22 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($datos_bt_23 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($datos_bt_24 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch
                </td>
               <!-- Nivel de camara % BT -->
                <td>
                    @switch($i)
                                 
                                @case(1)
                                       @foreach ($datos_bt_1 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                             
                                @case(2)
                                     @foreach ($datos_bt_2 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(3)
                                       @foreach ($datos_bt_3 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(4)
                                     @foreach ($datos_bt_4 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(5)
                                       @foreach ($datos_bt_5 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(6)
                                      @foreach ($datos_bt_6 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(7)
                                      @foreach ($datos_bt_7 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(8)
                                    
                                     @foreach ($datos_bt_8 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(9)
                                       @foreach ($datos_bt_9 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(10)
                                       @foreach ($datos_bt_10 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(11)
                                       @foreach ($datos_bt_11 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($datos_bt_12 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(13)
                                       @foreach ($datos_bt_13 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(14)
                                       @foreach ($datos_bt_14 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(15)
                                       @foreach ($datos_bt_15 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(16)
                                       @foreach ($datos_bt_16 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(17)
                                       @foreach ($datos_bt_17 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($datos_bt_18 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(19)
                                       @foreach ($datos_bt_19 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(20)
                                       @foreach ($datos_bt_20 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(21)
                                       @foreach ($datos_bt_21 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(22)
                                       @foreach ($datos_bt_22 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(23)
                                       @foreach ($datos_bt_23 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(24)
                                       @foreach ($datos_bt_24 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch


                </td>
                <!-- Nivel del Rio -->
                <td>
                    @switch($i)
                                 
                                @case(1)
                                       @foreach ($datos_bt_1 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                             
                                @case(2)
                                     @foreach ($datos_bt_2 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(3)
                                       @foreach ($datos_bt_3 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(4)
                                     @foreach ($datos_bt_4 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(5)
                                       @foreach ($datos_bt_5 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(6)
                                      @foreach ($datos_bt_6 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(7)
                                      @foreach ($datos_bt_7 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(8)
                                    
                                     @foreach ($datos_bt_8 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(9)
                                       @foreach ($datos_bt_9 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(10)
                                       @foreach ($datos_bt_10 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(11)
                                       @foreach ($datos_bt_11 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($datos_bt_12 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(13)
                                       @foreach ($datos_bt_13 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(14)
                                       @foreach ($datos_bt_14 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(15)
                                       @foreach ($datos_bt_15 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(16)
                                       @foreach ($datos_bt_16 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(17)
                                       @foreach ($datos_bt_17 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($datos_bt_18 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(19)
                                       @foreach ($datos_bt_19 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                 @case(20)
                                       @foreach ($datos_bt_20 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(21)
                                       @foreach ($datos_bt_21 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(22)
                                       @foreach ($datos_bt_22 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(23)
                                       @foreach ($datos_bt_23 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                                @case(24)
                                       @foreach ($datos_bt_24 as $prod)
                                          {{$prod->nivel_rio}}
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch
                </td>

                <!-- Equipos Operando -->
                <td>
                    @switch($i)
                                 
                                @case(1)
                                     {{$eq_oper_1}}
                                @break
                                    
                                @case(2)
                                    {{$eq_oper_2}}
                                @break
                                @case(3)
                                    {{$eq_oper_3}}  
                                @break
                                 @case(4)
                                    {{$eq_oper_4}}
                                @break
                                 @case(5)
                                    {{$eq_oper_5}}  
                                @break
                                @case(6)
                                     {{$eq_oper_6}}
                                @break
                                @case(7)
                                    {{$eq_oper_7}} 
                                @break
                                @case(8)
                                    {{$eq_oper_8}}

                                @break
                                @case(9)
                                      {{$eq_oper_9}}
                                @break
                                @case(10)
                                      {{$eq_oper_10}}
                                @break
                                @case(11)
                                     {{$eq_oper_11}}
                                @break
                                 @case(12)
                                     {{$eq_oper_12}}
                                @break
                                 @case(13)
                                      {{$eq_oper_13}}
                                @break
                                 @case(14)
                                      {{$eq_oper_14}}
                                @break
                                 @case(15)
                                      {{$eq_oper_15}}
                                @break
                                 @case(16)
                                      {{$eq_oper_16}}
                                @break
                                 @case(17)
                                      {{$eq_oper_17}}
                                @break
                                 @case(18)
                                      {{$eq_oper_18}}
                                @break
                                 @case(19)
                                      {{$eq_oper_19}}
                                @break
                                 @case(20)
                                      {{$eq_oper_20}}
                                @break
                                @case(21)
                                      {{$eq_oper_21}}
                                @break
                                @case(22)
                                      {{$eq_oper_22}}
                                @break
                                @case(23)
                                      {{$eq_oper_23}}
                                @break
                                @case(24)
                                      {{$eq_oper_24}}
                                @break
                             
                                @default
                                    ------
                        @endswitch
                    

                </td>

                <td> </td>
                <!-- datos Coagulante, controlando las horas -->
                <td> 
                  @switch($i)
                                 
                                @case(1)
                                      @foreach ($con_coagu_1 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          
                                      </a>
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($con_coagu_2 as $prod)
                                         <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(3)
                                      @foreach ($con_coagu_3 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                      </a>
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($con_coagu_4 as $prod)
                                        <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($con_coagu_5 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($con_coagu_6 as $prod)
                                     <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($con_coagu_7 as $prod)
                                     <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($con_coagu_8 as $prod)
                                    <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach

                                @break
                                @case(9)
                                      @foreach ($con_coagu_9 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(10)
                                      @foreach ($con_coagu_10 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($con_coagu_11 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($con_coagu_12 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(13)
                                      @foreach ($con_coagu_13 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($con_coagu_14 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(15)
                                      @foreach ($con_coagu_15 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($con_coagu_16 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($con_coagu_17 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($con_coagu_18 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($con_coagu_19 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($con_coagu_20 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($con_coagu_21 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($con_coagu_22 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($con_coagu_23 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($con_coagu_24 as $prod)
                                      <a href="/editardosis{{$prod->id}}">
                                          {{$prod->dosis}}
                                          </a>
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch
                    
                 
                           
                 </td>
                   
            
                
                <td> </td>
                <!-- dosis Polimero -->
                <td>  @switch($i)
                                 
                                @case(1)
                                      @foreach ($con_poli_1 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($con_poli_2 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(3)
                                      @foreach ($con_poli_3 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($con_poli_4 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($con_poli_5 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($con_poli_6 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($con_poli_7 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($con_poli_8 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach

                                @break
                                @case(9)
                                      @foreach ($con_poli_9 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(10)
                                      @foreach ($con_poli_10 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($con_poli_11 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($con_poli_12 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(13)
                                      @foreach ($con_poli_13 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($con_poli_14 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(15)
                                      @foreach ($con_poli_15 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($con_poli_16 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($con_poli_17 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($con_poli_18 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($con_poli_19 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($con_poli_20 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($con_poli_21 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($con_poli_22 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($con_poli_23 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($con_poli_24 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch 
                    </td>
                <td> </td>
                <!-- Dosis Permanganato -->
                <td>

@switch($i)
                                 
                                @case(1)
                                      @foreach ($con_perm_1 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($con_perm_2 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(3)
                                      @foreach ($con_perm_3 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($con_perm_4 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($con_perm_5 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($con_perm_6 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($con_perm_7 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($con_perm_8 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach

                                @break
                                @case(9)
                                      @foreach ($con_perm_9 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(10)
                                      @foreach ($con_perm_10 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($con_perm_11 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($con_perm_12 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(13)
                                      @foreach ($con_perm_13 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($con_perm_14 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(15)
                                      @foreach ($con_perm_15 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($con_perm_16 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($con_perm_17 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($con_perm_18 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($con_perm_19 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($con_perm_20 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($con_perm_21 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($con_perm_22 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($con_perm_23 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($con_perm_24 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch 
                </td>
                <td> </td>
                <!-- Dosificacion cal -->
                <td> 
                    @switch($i)
                                 
                                @case(1)
                                      @foreach ($con_cal_1 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($con_cal_2 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(3)
                                      @foreach ($con_cal_3 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($con_cal_4 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($con_cal_5 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($con_cal_6 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($con_cal_7 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($con_cal_8 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach

                                @break
                                @case(9)
                                      @foreach ($con_cal_9 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(10)
                                      @foreach ($con_cal_10 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($con_cal_11 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($con_cal_12 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(13)
                                      @foreach ($con_cal_13 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($con_cal_14 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(15)
                                      @foreach ($con_cal_15 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($con_cal_16 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($con_cal_17 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($con_cal_18 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($con_cal_19 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($con_cal_20 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($con_cal_21 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($con_cal_22 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($con_cal_23 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($con_cal_24 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch 
                </td>
                <td> </td>
                <!-- Dosificacion carbon -->
                <td> 
                        @switch($i)
                                 
                                @case(1)
                                      @foreach ($con_carbon_1 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($con_carbon_2 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(3)
                                      @foreach ($con_carbon_3 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($con_carbon_4 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($con_carbon_5 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($con_carbon_6 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($con_carbon_7 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($con_carbon_8 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach

                                @break
                                @case(9)
                                      @foreach ($con_carbon_9 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(10)
                                      @foreach ($con_carbon_10 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($con_carbon_11 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($con_carbon_12 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(13)
                                      @foreach ($con_carbon_13 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($con_carbon_14 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(15)
                                      @foreach ($con_carbon_15 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($con_carbon_16 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($con_carbon_17 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($con_carbon_18 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($con_carbon_19 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($con_carbon_20 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($con_carbon_21 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($con_carbon_22 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($con_carbon_23 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($con_carbon_24 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch 
                </td>
                <!-- Cloro -->
            <td>
                   @switch($i)
                                 
                                @case(1)
                                      {{$cloro_hora_1}}
                                @break
                             
                                @case(2)
                                   {{$cloro_hora_2}} 
                                @break
                                @case(3)
                                    {{$cloro_hora_3}}  
                                @break
                                 @case(4)
                                    {{$cloro_hora_4}}
                                @break
                                 @case(5)
                                    {{$cloro_hora_5}}  
                                @break
                                @case(6)
                                    {{$cloro_hora_6}} 
                                @break
                                @case(7)
                                    {{$cloro_hora_7}} 
                                @break
                                @case(8)
                                   {{$cloro_hora_8}} 

                                @break
                                @case(9)
                                    {{$cloro_hora_9}}  
                                @break
                                @case(10)
                                     {{$cloro_hora_10}} 
                                @break
                                @case(11)
                                      {{$cloro_hora_11}}
                                @break
                                 @case(12)
                                     {{$cloro_hora_12}} 
                                @break
                                 @case(13)
                                     {{$cloro_hora_13}}
                                @break
                                 @case(14)
                                    {{$cloro_hora_14}}  
                                @break
                                 @case(15)
                                    {{$cloro_hora_15}}  
                                @break
                                 @case(16)
                                    {{$cloro_hora_16}}  
                                @break
                                 @case(17)
                                    {{$cloro_hora_17}}  
                                @break
                                 @case(18)
                                     {{$cloro_hora_18}} 
                                @break
                                 @case(19)
                                      {{$cloro_hora_19}}
                                @break
                                 @case(20)
                                     {{$cloro_hora_20}} 
                                @break
                                @case(21)
                                   {{$cloro_hora_21}}   
                                @break
                                @case(22)
                                     {{$cloro_hora_22}} 
                                @break
                                @case(23)
                                     {{$cloro_hora_23}} 
                                @break
                                @case(24)
                                    {{$cloro_hora_24}}  
                                @break
                             
                                @default
                                    ------
                        @endswitch 

                            
                    
                  
                
           
            </td>
            <!-- Cloro residual EB-2 -->
                <td>
                    @switch($i)
                                 
                                @case(1)
                                      @foreach ($cl_eb2_1 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($cl_eb2_2 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(3)
                                      @foreach ($cl_eb2_3 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($cl_eb2_4 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($cl_eb2_5 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($cl_eb2_6 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($cl_eb2_7 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($cl_eb2_8 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach

                                @break
                                @case(9)
                                     @foreach ($cl_eb2_9 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(10)
                                     @foreach ($cl_eb2_10 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($cl_eb2_11 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($cl_eb2_12 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(13)
                                     @foreach ($cl_eb2_13 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($cl_eb2_14 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(15)
                                     @foreach ($cl_eb2_15 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($cl_eb2_16 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($cl_eb2_17 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($cl_eb2_18 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($cl_eb2_19 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($cl_eb2_20 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($cl_eb2_21 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($cl_eb2_22 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($cl_eb2_23 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($cl_eb2_24 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch 
                </td>
                <!-- Cloro residual eb3 -->

                <td> 
                    @switch($i)
                                 
                                @case(1)
                                      @foreach ($cl_eb3_1 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($cl_eb3_2 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(3)
                                      @foreach ($cl_eb3_3 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($cl_eb3_4 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($cl_eb3_5 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($cl_eb3_6 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($cl_eb3_7 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($cl_eb3_8 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach

                                @break
                                @case(9)
                                     @foreach ($cl_eb3_9 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(10)
                                     @foreach ($cl_eb3_10 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($cl_eb3_11 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($cl_eb3_12 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(13)
                                     @foreach ($cl_eb3_13 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($cl_eb3_14 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(15)
                                     @foreach ($cl_eb3_15 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($cl_eb3_16 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($cl_eb3_17 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($cl_eb3_18 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($cl_eb3_19 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($cl_eb3_20 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($cl_eb3_21 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($cl_eb3_22 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($cl_eb3_23 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($cl_eb3_24 as $prod)
                                          {{$prod->cloro_residual}}
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch 
                </td>
                <!-- % tanques terminales -->
                <td>
                     @switch($i)
                                 
                                @case(1)
                                      @foreach ($terminal_1 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($terminal_2 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(3)
                                      @foreach ($terminal_3 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($terminal_4 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($terminal_5 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($terminal_6 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($terminal_7 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($terminal_8 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach

                                @break
                                @case(9)
                                     @foreach ($terminal_9 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(10)
                                     @foreach ($terminal_10 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($terminal_11 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($terminal_12 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(13)
                                     @foreach ($terminal_13 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($terminal_14 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(15)
                                     @foreach ($terminal_15 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($terminal_16 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($terminal_17 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($terminal_18 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($terminal_19 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($terminal_20 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($terminal_21 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($terminal_22 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($terminal_23 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($terminal_24 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch 
                </td>
                <!-- Nivel Bella Vista -->
                <td> 
                    @switch($i)
                                 
                                @case(1)
                                      @foreach ($bv_1 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($bv_2 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(3)
                                      @foreach ($bv_3 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($bv_4 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($bv_5 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($bv_6 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($bv_7 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($bv_8 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach

                                @break
                                @case(9)
                                     @foreach ($bv_9 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(10)
                                     @foreach ($bv_10 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($bv_11 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($bv_12 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(13)
                                     @foreach ($bv_13 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($bv_14 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(15)
                                     @foreach ($bv_15 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($bv_16 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($bv_17 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($bv_18 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($bv_19 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($bv_20 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($bv_21 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($bv_22 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($bv_23 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($bv_24 as $prod)
                                          {{$prod->nivel_camara}}%
                                      @endforeach
                                @break
                             
                                @default
                                    ------
                        @endswitch 
                </td>
                
                

               </tr>
               
       @endfor       
   
            {{-- Calculos de promedio, maximos y minimos --}}
           <tr>
            <td>x̄</td>
            <!-- promedio de produccion de bocatoma -->
            <td>{{$prom_bt}}</td>
            <td>{{$prom_cam}}%</td>
            <td>{{$prom_rio}}</td>
            <td></td>
            <td></td>
            <td>{{$prom_coag}}</td>
            <td></td>
            <td>{{$prom_poli}}</td>
            <td></td>
            <td>{{$prom_perm}}</td>
            <td></td>
            <td>{{$prom_cal}}</td>
            <td></td>
            <td>{{$prom_car}}</td>
            <td>{{$prom_cloro}}</td>
            <td>{{$prom_cl_eb2}}</td>
            <td>{{$prom_cl_eb3}}</td>
            <td></td>
            <td></td>
           </tr>

           <tr>
            
            <td>MAX</td>
            <td>{{$max_bt}}</td>
            <td>{{$max_cam}}%</td>
            <td>{{$max_rio}}</td>
            <td></td>
            <td></td>
            <td>{{$max_coag}}</td>
            <td></td>
            <td>{{$max_poli}}</td>
            <td></td>
            <td>{{$max_perm}}</td>
            <td></td>
            <td>{{$max_cal}}</td>
            <td></td>
            <td>{{$max_car}}</td>
            <td>{{$max_cloro}}</td>
            <td>{{$max_cl_eb2}}</td>
            <td>{{$max_cl_eb3}}</td>
            <td></td>
            <td></td>
           </tr>

           <tr>
    
            <td>MIN</td>
            <td>{{$min_bt}}</td>
            <td>{{$min_cam}}%</td>
            <td>{{$min_rio}}</td>
            
            <td></td>
            <td></td>
            <td>{{$min_coag}}</td>
            <td></td>
            <td>{{$min_poli}}</td>
            <td></td>
            <td>{{$min_perm}}</td>
            <td></td>
            <td>{{$min_cal}}</td>
            <td></td>
            <td>{{$min_car}}</td>
            <td>{{$min_cloro}}</td>
            <td>{{$min_cl_eb2}}</td>
            <td>{{$min_cl_eb3}}</td>
            <td></td>
            <td></td>
           </tr>
                
                   

               
               

                
        </table>



         


  </div>

</div>



     
</body>
</html>
