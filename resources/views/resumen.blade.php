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






    </style>




</head>
<body>
    <!-- Inicio Boton Home -->
    <a href="/"><button class="btn"><i class="fa fa-home" ></i></button> </a>
    <!-- fin Boton Home -->

  <div class="container-fluid">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Produccion 

    </div>
    <div class="card-body">



      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
       <label for="hora">Hora</label>
            <select id="" name="hora" class="" required=""> 
                    
                
                <option value="01:00" selected>01:00</option>
                <option value="02:00">02:00</option>
                <option value="03:00">03:00</option>        
                <option value="04:00">04:00</option>
                <option value="05:00">05:00</option>
                <option value="06:00">06:00</option>
                <option value="07:00">07:00</option>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
                <option value="23:00">23:00</option>
                <option value="24:00">24:00</option>
                       
            </select>




       
        <div class="grid-container" >
       
           <div class="form-group" >

                <h5>Dosificaciones</h5>

                <!-- verficar para mostrar el input deacuerdo al item seleccionado -->
                <select class="">
                    
                    <option name="sulf" value="sulfato">Sulfato</option>
                    <option value="pac">Pac</option>


                   

                </select>
                       

                     <!-- coagulante cambiar a un select para tomar en cuenta el PAC tambien-->
                <input type="text" id="" name="dosificacion_coagulante" class="form-control" placeholder="Sulfato - PPM" required="">
                
                        
                
                

                

                          <!-- Dosificacion de cal -->
                <input type="text" id="" name="dosif_cal" class="form-control" placeholder="Cal - PPM">
                         <!-- Representa el id de la Cal -->
                <input type="hidden" id="" name="id_cal" class="form-control" value="4" >

                      
                      
                      
                      
                 
                        <!-- Dosificacion de permanganato -->
                      <input type="text" id="" name="dosif_permanganato" class="form-control" placeholder="Permanganato ">

                      <!-- Dosificacion polimero--> 
                      <input type="text" id="" name="dosif_polimero" class="form-control" placeholder="Polimero ">
                     
                       <!-- Dosificacion Carbon--> 
                      <input type="text" id="" name="dosif_carbon" class="form-control" placeholder="Carbon Act ">

                      <!-- Dosificacion Cloro -->
                      <input type="text" id="" name="dosif_cloro" class="form-control" placeholder="Cloro kg/h">
                     
                      



                    </div>

             




            <div class="form-group" >
                <h5 >Bocatoma</h5>
              
              <input type="text" id="" name="caudal" class="form-control" required="" placeholder="Caudal">
              <input type="text" id="" name="nivel_camara" class="form-control" placeholder="N.Camara">
              <input type="text" id="" name="nivel_rio" class="form-control" placeholder="N.Rio">
              
              
              
              
              
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
              
             <input type="text" id="" name="caudaleb1" class="form-control" placeholder="Caudal">
              <input type="text" id="" name="nivel1" class="form-control" placeholder="N.Camara">
              <input type="text" id="" name="cloro1" class="form-control" placeholder="Cloro">
              
              
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
              
              <input type="text" id="" name="caudaleb2" class="form-control" placeholder="Caudal">
              <input type="text" id="" name="nivel2" class="form-control" placeholder="N.Camara">
              <input type="text" id="" name="cloro2" class="form-control" placeholder="Cloro">
              
              <!-- EB2 -->
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
                <input type="text" id="" name="caudaleb3" class="form-control" placeholder="Caudal">
                <input type="text" id="" name="nivel3" class="form-control" placeholder="N.Camara">
              <input type="text" id="" name="cloro3" class="form-control" placeholder="Cloro">
               <!-- Representa el id de EB3 -->
              <input type="hidden" id="" name="id_eb3" class="form-control" value="4" >
              <!-- EB3 -->
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
              <input type="text" id="" name="nivel4" class="form-control" placeholder="Terminales">
              <label for="">Cloro</label>
              <input type="text" id="" name="cloro4" class="form-control" placeholder="Terminales">
               <!-- Representa el id de tanques terminales -->
              <input type="hidden" id="" name="id_terminal" class="form-control" value="5" >
              
            </div>
            <div class="form-group" >
                <h5>B.V. Nuevo </h5>
              
              <label for="">Nivel</label>
              <input type="text" id="" name="nivel5" class="form-control" placeholder="Nuevo" >
              <label for="">Cloro</label>
              <input type="text" id="" name="cloro5" class="form-control" placeholder="B.V.Nuevo">
               <!-- Representa el id de Bella vista nuevo -->
              <input type="hidden" id="" name="id_nuevo" class="form-control" value="6" >
              
            </div>
            <div class="form-group" >
                <h5>B.V. Viejo </h5>
              
              <label for="">Nivel</label>
              <input type="text" id="" name="nivel6" class="form-control" placeholder="Viejo">
             <!--  <label for="">Cloro</label>
              <input type="text" id="" name="cloro6" class="form-control" placeholder="B.V.Viejo"> -->
               <!-- Representa el id de Bella vista viejo -->
              <input type="hidden" id="" name="id_viejo" class="form-control" value="7" >
              
            </div>
            
                    


        </div>
        <br>
        <br>
        <br>
        <br>


    
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        <!-- <input type="date" class="date" id="date" name="date"> -->




      </form>





     



    </div>

    <!-- Tabla que muestra los valores almacenados -->
        <table>
            

   
                <!-- Encabezados de la tabla -->

              <tr>
                <th>Hora</th>
                <th>Caudal BT(m³/h)</th>
                <th>Nivel Cámara BT</th>
                <th>Nivel Rio (msnm)</th>
                <th>Equipos Operando</th>
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
                
                 
                <td> </td>
               
                <td> </td>
                <td> </td>
                <td> </td>

                <td> </td>
                <!-- datos Coagulante, controlando las horas -->
                <td> 
                  @switch($i)
                                 
                                @case(1)
                                      @foreach ($con_coagu_1 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                             
                                @case(2)
                                    @foreach ($con_coagu_2 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @case(3)
                                      @foreach ($con_coagu_3 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(4)
                                    @foreach ($con_coagu_4 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($con_coagu_5 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(6)
                                     @foreach ($con_coagu_6 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(7)
                                     @foreach ($con_coagu_7 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(8)
                                    @foreach ($con_coagu_8 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach

                                @break
                                @case(9)
                                      @foreach ($con_coagu_9 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(10)
                                      @foreach ($con_coagu_10 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(11)
                                      @foreach ($con_coagu_11 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(12)
                                      @foreach ($con_coagu_12 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(13)
                                      @foreach ($con_coagu_13 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(14)
                                      @foreach ($con_coagu_14 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(15)
                                      @foreach ($con_coagu_15 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(16)
                                      @foreach ($con_coagu_16 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(17)
                                      @foreach ($con_coagu_17 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(18)
                                      @foreach ($con_coagu_18 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(19)
                                      @foreach ($con_coagu_19 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                 @case(20)
                                      @foreach ($con_coagu_20 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($con_coagu_21 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($con_coagu_22 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($con_coagu_23 as $prod)
                                          {{$prod->dosis}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($con_coagu_24 as $prod)
                                          {{$prod->dosis}}
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
                <td>cloro </td>
                <td>eb2 </td>
                <td> eb3</td>
                <td> </td>
                <td> </td>
                
                

               </tr>
               
       @endfor       
   

           
                
                   

               
               

                
        </table>



         


  </div>

</div>

     
</body>
</html>
