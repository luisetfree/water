<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{ asset('css/calidades.css') }}" />
@extends('layouts.app')

</head>
<body>

  <!-- Maneja exclusivamente la barra de menú -->
  @section('navegador')


  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Calidades de agua
    </div>
    <div class="card-body">







      <form name="form-calidad" id="" method="post" action="{{url('calidades')}}">
       @csrf

        <div class="">

    
        
          <input type="date" class="date" id="date" name="fecha_calidad" value="{{$fecha}}" required="">  


          <!-- Select mostrará unicamente las horas que hacen falta agregar al registro diario -->
       <label for="hora">Hora</label>
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
            <button type="submit" class="btn btn-outline-primary">Guardar</button>

            </div>
        





            <div class="grid-container">

                

                    <section class="card ">
                        Cruda
                        <!-- este input hace referencia al id del agua cruda 1 -->
                        <input type="hidden" name="id_agua_c" value="1" >
                        <input type="number" step="0.01" min="0"  name="turb_c" placeholder="Turbidez" >
                        <input type="number" step="0.01" min="0"  name="ph_c" placeholder="PH" >
                        <input type="number" step="0.01" min="0"  name="temp_c" placeholder="temperatura" >
                        <input type="number" step="0.01"  min="0"  name="color_c" placeholder="Color">

                    </section>
                
                    <section class="card">
                        Clarificada
                        <input type="hidden" name="id_agua_cl" value="2" >
                        <input type="number" step="0.01" min="0" name="turb_cl" placeholder="Turbidez" >
                        <input type="number" step="0.01" min="0" name="ph_cl" placeholder="PH" >
                        <input type="number" step="0.01" min="0" name="temp_cl" placeholder="temperatura"  >
                        <input type="number" step="0.01" min="0" name="color_cl" placeholder="Color">

                    </section>
                    <section class="card">
                        Filtrada

                        <input type="hidden" name="id_agua_f" value="3" >
                        <input type="number" step="0.01" min="0"name="turb_f" placeholder="Turbidez" >
                        <input type="number" step="0.01" min="0" name="ph_f" placeholder="PH" >
                        <input type="number" step="0.01" min="0" name="temp_f" placeholder="temperatura" >
                        <input type="text"  name="color_f" placeholder="Color">

                    </section>
                    <section class="card">
                        Tratada
                        <input type="hidden" name="id_agua_t" value="4" >
                        <input type="number"  min="0" max="5" step="0.01" name="turb_t" placeholder="Turbidez" >
                        <input type="number"  min="6" max="8.5" step="0.01" name="ph_t" placeholder="PH" required="">
                        <input type="text"  min="0"  name="temp_t" placeholder="temperatura" required="">
                        <input type="text"   name="color_t" placeholder="Color">

                    </section>

            </div>

           


      </form>
<div class="container">
<!-- Controla la  busqueda por fecha -->
      
    <form name="form-calidad" id="" method="post" action="{{url('muestra-calidad')}}">
       @csrf
            

                <!-- para filtrar por fecha -->
                <input type="date" name="fecha_calidad" value="{{$fecha}}">  
                <!-- mostrar calidades por fecha seleccionada -->
                 <button type="submit" class="btn btn-outline-primary">Ver</button>
  
      </form>

     






</div> 



    </div>
<!-- Tabla con el resumen de calidades -->


    <table class="table" name="">
    <thead>
      <tr>
        <th>Hora</th>

        <th colspan="4">Cruda</th>
        <th colspan="4" >Clarificada</th>
        <th colspan="4" >Filtrada</th>
        <th colspan="5" >Tratada</th>
        


      </tr>
     <tr>
        
            <th></th>
            <th>NTU</th>
            <th>PH</th>
            <th>°C</th>
            <th>Color</th>

             <th>NTU</th>
            <th>PH</th>
            <th>°C</th>
            <th>Color</th>

             <th>NTU</th>
            <th>PH</th>
            <th>°C</th>
            <th>Color</th>

             <th>NTU</th>
            <th>PH</th>
            <th>°C</th>
            <th>Color</th>
            <!-- Cloro corresponde al de la cisterna de EB1 -->
            <th>Cloro</th>
            
        

      </tr>
    </thead>
    <tbody>

        <!-- For para imprimir las horas y llevar la secuencia del tiempo -->
    @for ($i = 1; $i < 25; $i++)
      <tr>

        @if ($i < 10)
        <td>0{{ $i}}:00</td><!-- conteo de 0 a 9 hrs -->
        @else
        <td>{{ $i}}:00</td><!-- conteo de 10 a 23 hrs -->
        @endif
        
        <!-- Turbidez agua cruda -->
        <td>
            @switch($i)
                               
                                @case(1)

                                 
                                   @foreach ($a_cruda_1 as $c1)
                         <a href="/edit/{{$c1->id}}"> 
                                              {{ $c1->turbidez}} 
                         </a>
                                    @endforeach               
                                
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_cruda_2 as $c2)
                                            <a href="/edit/{{$c2->id}}">
                                              {{ $c2->turbidez}} 
                                            </a>  
                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_cruda_3 as $c3)
                                <a href="/edit/{{$c3->id}}">
                                              {{ $c3->turbidez}} 
                                </a>  
                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_cruda_4 as $c4)
                                        <a href="/edit/{{$c4->id}}">
                                              {{ $c4->turbidez}} 
                                        </a>  
                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_cruda_5 as $c5)
                                    <a href="/edit/{{$c5->id}}">
                                              {{ $c5->turbidez}} 
                                    </a>         
                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_cruda_6 as $c6)
                                        <a href="/edit/{{$c6->id}}">
                                              {{ $c6->turbidez}} 
                                        </a>  
                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_cruda_7 as $c7)
                                     <a href="/edit/{{$c7->id}}">
                                              {{ $c7->turbidez}} 
                                     </a>  
                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_cruda_8 as $c8)
                                             <a href="/edit/{{$c8->id}}">
                                              {{ $c8->turbidez}} 
                                              </a>    
                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_cruda_9 as $c9)
                                            <a href="/edit/{{$c9->id}}">
                                              {{ $c9->turbidez}} 
                                            </a>    
                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_cruda_10 as $c10)
                                            <a href="/edit/{{$c10->id}}">
                                              {{ $c10->turbidez}} 
                                               </a>   
                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_cruda_11 as $c11)
                                    <a href="/edit/{{$c11->id}}">
                                              {{ $c11->turbidez}} 
                                             </a>     
                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_cruda_12 as $c12)
                                             <a href="/edit/{{$c12->id}}">
                                              {{ $c12->turbidez}} 
                                              </a>
                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_cruda_13 as $c13)
                                        <a href="/edit/{{$c13->id}}">
                                              {{ $c13->turbidez}} 
                                               </a>
                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_cruda_14 as $c14)
                                        <a href="/edit/{{$c14->id}}">
                                              {{ $c14->turbidez}} 
                                              </a>
                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_cruda_15 as $c15)
                                        <a href="/edit/{{$c15->id}}">
                                              {{ $c15->turbidez}} 
                                              </a>
                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_cruda_16 as $c16)
                   <a href="/edit/{{$c16->id}}">
                                              {{ $c16->turbidez}} 
                    </a>
                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_cruda_17 as $c17)
                                        <a href="/edit/{{$c17->id}}">
                                              {{ $c17->turbidez}} 
                                            </a>
                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_cruda_18 as $c18)
                                    <a href="/edit/{{$c18->id}}">
                                              {{ $c18->turbidez}} 
                                              </a>
                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_cruda_19 as $c19)
                                     <a href="/edit/{{$c19->id}}">
                                              {{ $c19->turbidez}} 
                                              </a>
                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_cruda_20 as $c20)
                                          <a href="/edit/{{$c20->id}}">
                                              {{ $c20->turbidez}} 
                                              </a>
                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_cruda_21 as $c21)
                                            <a href="/edit/{{$c21->id}}">
                                              {{ $c21->turbidez}} 
                                            </a>
                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_cruda_22 as $c22)
                                            <a href="/edit/{{$c22->id}}">
                                              {{ $c22->turbidez}} 
                                              </a>
                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_cruda_23 as $c23)
                                       <a href="/edit/{{$c23->id}}">
                                              {{ $c23->turbidez}} 
                                              </a>
                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_cruda_24 as $c24)
                                <a href="/edit/{{$c24->id}}">
                                          {{ $c24->turbidez}} 
                                </a>
                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch


        </td>
        <!-- Ph cruda -->
        <td>
            @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_cruda_1 as $c1)
                                    
                                              {{ $c1->ph}} 
                                    
                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_cruda_2 as $c2)
                   
                                              {{ $c2->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_cruda_3 as $c3)
                   
                                              {{ $c3->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_cruda_4 as $c4)
                   
                                              {{ $c4->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_cruda_5 as $c5)
                   
                                              {{ $c5->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_cruda_6 as $c6)
                   
                                              {{ $c6->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_cruda_7 as $c7)
                   
                                              {{ $c7->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_cruda_8 as $c8)
                   
                                              {{ $c8->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_cruda_9 as $c9)
                   
                                              {{ $c9->ph}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_cruda_10 as $c10)
                   
                                              {{ $c10->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_cruda_11 as $c11)
                   
                                              {{ $c11->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_cruda_12 as $c12)
                   
                                              {{ $c12->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_cruda_13 as $c13)
                   
                                              {{ $c13->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_cruda_14 as $c14)
                   
                                              {{ $c14->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_cruda_15 as $c15)
                   
                                              {{ $c15->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_cruda_16 as $c16)
                   
                                              {{ $c16->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_cruda_17 as $c17)
                   
                                              {{ $c17->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_cruda_18 as $c18)
                   
                                              {{ $c18->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_cruda_19 as $c19)
                   
                                              {{ $c19->ph}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_cruda_20 as $c20)
                   
                                              {{ $c20->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_cruda_21 as $c21)
                   
                                              {{ $c21->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_cruda_22 as $c22)
                   
                                              {{ $c22->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_cruda_23 as $c23)
                   
                                              {{ $c23->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_cruda_24 as $c24)
               
                                          {{ $c24->ph}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch


        </td>
        <!-- Temperatura Cruda -->
        <td>
           @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_cruda_1 as $c1)
                   
                                              {{ $c1->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_cruda_2 as $c2)
                   
                                              {{ $c2->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_cruda_3 as $c3)
                   
                                              {{ $c3->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_cruda_4 as $c4)
                   
                                              {{ $c4->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_cruda_5 as $c5)
                   
                                              {{ $c5->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_cruda_6 as $c6)
                   
                                              {{ $c6->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_cruda_7 as $c7)
                   
                                              {{ $c7->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_cruda_8 as $c8)
                   
                                              {{ $c8->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_cruda_9 as $c9)
                   
                                              {{ $c9->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_cruda_10 as $c10)
                   
                                              {{ $c10->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_cruda_11 as $c11)
                   
                                              {{ $c11->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_cruda_12 as $c12)
                   
                                              {{ $c12->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_cruda_13 as $c13)
                   
                                              {{ $c13->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_cruda_14 as $c14)
                   
                                              {{ $c14->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_cruda_15 as $c15)
                   
                                              {{ $c15->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_cruda_16 as $c16)
                   
                                              {{ $c16->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_cruda_17 as $c17)
                   
                                              {{ $c17->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_cruda_18 as $c18)
                   
                                              {{ $c18->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_cruda_19 as $c19)
                   
                                              {{ $c19->temperatura}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_cruda_20 as $c20)
                   
                                              {{ $c20->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_cruda_21 as $c21)
                   
                                              {{ $c21->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_cruda_22 as $c22)
                   
                                              {{ $c22->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_cruda_23 as $c23)
                   
                                              {{ $c23->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_cruda_24 as $c24)
               
                                          {{ $c24->temperatura}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch 
        </td>
        <!-- Color cruda -->
        <td>
@switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_cruda_1 as $c1)
                   
                                              {{ $c1->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_cruda_2 as $c2)
                   
                                              {{ $c2->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_cruda_3 as $c3)
                   
                                              {{ $c3->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_cruda_4 as $c4)
                   
                                              {{ $c4->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_cruda_5 as $c5)
                   
                                              {{ $c5->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_cruda_6 as $c6)
                   
                                              {{ $c6->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_cruda_7 as $c7)
                   
                                              {{ $c7->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_cruda_8 as $c8)
                   
                                              {{ $c8->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_cruda_9 as $c9)
                   
                                              {{ $c9->color}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_cruda_10 as $c10)
                   
                                              {{ $c10->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_cruda_11 as $c11)
                   
                                              {{ $c11->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_cruda_12 as $c12)
                   
                                              {{ $c12->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_cruda_13 as $c13)
                   
                                              {{ $c13->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_cruda_14 as $c14)
                   
                                              {{ $c14->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_cruda_15 as $c15)
                   
                                              {{ $c15->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_cruda_16 as $c16)
                   
                                              {{ $c16->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_cruda_17 as $c17)
                   
                                              {{ $c17->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_cruda_18 as $c18)
                   
                                              {{ $c18->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_cruda_19 as $c19)
                   
                                              {{ $c19->color}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_cruda_20 as $c20)
                   
                                              {{ $c20->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_cruda_21 as $c21)
                   
                                              {{ $c21->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_cruda_22 as $c22)
                   
                                              {{ $c22->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_cruda_23 as $c23)
                   
                                              {{ $c23->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_cruda_24 as $c24)
               
                                          {{ $c24->color}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch
        </td>

<!-- Maneja datos de turbidez de agua CLARIFICADA -->
        <td>
@switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_clari_1 as $c1)
                                <a href="/edit/{{$c1->id}}">
                                              {{ $c1->turbidez}} 
                                </a>
                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_clari_2 as $c2)
                                <a href="/edit/{{$c2->id}}">
                                              {{ $c2->turbidez}} 
                                            </a>  
                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_clari_3 as $c3)
                                     <a href="/edit/{{$c3->id}}">
                                              {{ $c3->turbidez}} 
                                     </a>
                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_clari_4 as $c4)
                                      <a href="/edit/{{$c4->id}}">
                                              {{ $c4->turbidez}} 
                                            </a>
                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_clari_5 as $c5)
                                    <a href="/edit/{{$c5->id}}">
                                              {{ $c5->turbidez}} 
                                    </a>
                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_clari_6 as $c6)
                                <a href="/edit/{{$c6->id}}">
                                              {{ $c6->turbidez}} 
                                </a>
                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_clari_7 as $c7)
                                      <a href="/edit/{{$c7->id}}">
                                              {{ $c7->turbidez}} 
                                     </a>
                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_clari_8 as $c8)
                                  <a href="/edit/{{$c8->id}}">
                                              {{ $c8->turbidez}} 
                                    </a>
                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_clari_9 as $c9)
                                <a href="/edit/{{$c9->id}}">
                                              {{ $c9->turbidez}} 
                                    </a>
                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_clari_10 as $c10)
                                <a href="/edit/{{$c10->id}}">
                                              {{ $c10->turbidez}} 
                                    </a>
                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_clari_11 as $c11)
                                <a href="/edit/{{$c11->id}}">
                                              {{ $c11->turbidez}} 
                                    </a>
                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_clari_12 as $c12)
                                 <a href="/edit/{{$c12->id}}">
                                              {{ $c12->turbidez}} 
                                    </a>
                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_clari_13 as $c13)
                                <a href="/edit/{{$c13->id}}">
                                              {{ $c13->turbidez}} 
                                    </a>
                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_clari_14 as $c14)
                                    <a href="/edit/{{$c14->id}}">
                                              {{ $c14->turbidez}} 
                                        </a>
                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_clari_15 as $c15)
                                 <a href="/edit/{{$c15->id}}">
                                              {{ $c15->turbidez}} 
                                    </a>
                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_clari_16 as $c16)
                                     <a href="/edit/{{$c16->id}}">
                                              {{ $c16->turbidez}} 
                                        </a>
                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_clari_17 as $c17)
                   <a href="/edit/{{$c17->id}}">
                                              {{ $c17->turbidez}} 
                    </a>
                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_clari_18 as $c18)
                   <a href="/edit/{{$c18->id}}">
                                              {{ $c18->turbidez}} 
                                </a>
                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_clari_19 as $c19)
                                <a href="/edit/{{$c19->id}}">
                                              {{ $c19->turbidez}} 
                                    </a>
                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_clari_20 as $c20)
                                <a href="/edit/{{$c20->id}}">
                                              {{ $c20->turbidez}} 
                                    </a>
                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_clari_21 as $c21)
                                    <a href="/edit/{{$c21->id}}">
                                              {{ $c21->turbidez}} 
                                        </a>
                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_clari_22 as $c22)
                                <a href="/edit/{{$c22->id}}">
                                              {{ $c22->turbidez}} 
                                    </a>
                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_clari_23 as $c23)
                                 <a href="/edit/{{$c23->id}}">
                                              {{ $c23->turbidez}} 
                                    </a>
                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_clari_24 as $c24)
                             <a href="/edit/{{$c24->id}}">
                                          {{ $c24->turbidez}} 
                            </a>
                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch


        </td>
        <!-- PH clarificada -->
        <td>
                    @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_clari_1 as $c1)
                   
                                              {{ $c1->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_clari_2 as $c2)
                   
                                              {{ $c2->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_clari_3 as $c3)
                   
                                              {{ $c3->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_clari_4 as $c4)
                   
                                              {{ $c4->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_clari_5 as $c5)
                   
                                              {{ $c5->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_clari_6 as $c6)
                   
                                              {{ $c6->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_clari_7 as $c7)
                   
                                              {{ $c7->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_clari_8 as $c8)
                   
                                              {{ $c8->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_clari_9 as $c9)
                   
                                              {{ $c9->ph}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_clari_10 as $c10)
                   
                                              {{ $c10->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_clari_11 as $c11)
                   
                                              {{ $c11->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_clari_12 as $c12)
                   
                                              {{ $c12->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_clari_13 as $c13)
                   
                                              {{ $c13->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_clari_14 as $c14)
                   
                                              {{ $c14->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_clari_15 as $c15)
                   
                                              {{ $c15->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_clari_16 as $c16)
                   
                                              {{ $c16->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_clari_17 as $c17)
                   
                                              {{ $c17->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_clari_18 as $c18)
                   
                                              {{ $c18->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_clari_19 as $c19)
                   
                                              {{ $c19->ph}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_clari_20 as $c20)
                   
                                              {{ $c20->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_clari_21 as $c21)
                   
                                              {{ $c21->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_clari_22 as $c22)
                   
                                              {{ $c22->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_clari_23 as $c23)
                   
                                              {{ $c23->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_clari_24 as $c24)
               
                                          {{ $c24->ph}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch
        </td>
        <!-- Temperatura Clarificada -->
        <td>
            @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_clari_1 as $c1)
                   
                                              {{ $c1->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_clari_2 as $c2)
                   
                                              {{ $c2->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_clari_3 as $c3)
                   
                                              {{ $c3->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_clari_4 as $c4)
                   
                                              {{ $c4->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_clari_5 as $c5)
                   
                                              {{ $c5->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_clari_6 as $c6)
                   
                                              {{ $c6->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_clari_7 as $c7)
                   
                                              {{ $c7->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_clari_8 as $c8)
                   
                                              {{ $c8->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_clari_9 as $c9)
                   
                                              {{ $c9->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_clari_10 as $c10)
                   
                                              {{ $c10->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_clari_11 as $c11)
                   
                                              {{ $c11->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_clari_12 as $c12)
                   
                                              {{ $c12->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_clari_13 as $c13)
                   
                                              {{ $c13->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_clari_14 as $c14)
                   
                                              {{ $c14->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_clari_15 as $c15)
                   
                                              {{ $c15->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_clari_16 as $c16)
                   
                                              {{ $c16->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_clari_17 as $c17)
                   
                                              {{ $c17->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_clari_18 as $c18)
                   
                                              {{ $c18->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_clari_19 as $c19)
                   
                                              {{ $c19->temperatura}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_clari_20 as $c20)
                   
                                              {{ $c20->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_clari_21 as $c21)
                   
                                              {{ $c21->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_clari_22 as $c22)
                   
                                              {{ $c22->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_clari_23 as $c23)
                   
                                              {{ $c23->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_clari_24 as $c24)
               
                                          {{ $c24->temperatura}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch
        </td>
        <!-- Color Clarificada -->
        <td>
           @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_clari_1 as $c1)
                   
                                              {{ $c1->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_clari_2 as $c2)
                   
                                              {{ $c2->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_clari_3 as $c3)
                   
                                              {{ $c3->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_clari_4 as $c4)
                   
                                              {{ $c4->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_clari_5 as $c5)
                   
                                              {{ $c5->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_clari_6 as $c6)
                   
                                              {{ $c6->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_clari_7 as $c7)
                   
                                              {{ $c7->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_clari_8 as $c8)
                   
                                              {{ $c8->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_clari_9 as $c9)
                   
                                              {{ $c9->color}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_clari_10 as $c10)
                   
                                              {{ $c10->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_clari_11 as $c11)
                   
                                              {{ $c11->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_clari_12 as $c12)
                   
                                              {{ $c12->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_clari_13 as $c13)
                   
                                              {{ $c13->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_clari_14 as $c14)
                   
                                              {{ $c14->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_clari_15 as $c15)
                   
                                              {{ $c15->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_clari_16 as $c16)
                   
                                              {{ $c16->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_clari_17 as $c17)
                   
                                              {{ $c17->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_clari_18 as $c18)
                   
                                              {{ $c18->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_clari_19 as $c19)
                   
                                              {{ $c19->color}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_clari_20 as $c20)
                   
                                              {{ $c20->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_clari_21 as $c21)
                   
                                              {{ $c21->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_clari_22 as $c22)
                   
                                              {{ $c22->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_clari_23 as $c23)
                   
                                              {{ $c23->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_clari_24 as $c24)
               
                                          {{ $c24->color}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch 

        </td>

<!-- Maneja la turbidez de agua Filtrada -->
        <td>
            @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_fil_1 as $c1)
                   <a href="/edit/{{$c1->id}}">
                                              {{ $c1->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_fil_2 as $c2)
                   <a href="/edit/{{$c2->id}}">
                                              {{ $c2->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_fil_3 as $c3)
                   <a href="/edit/{{$c3->id}}">
                                              {{ $c3->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_fil_4 as $c4)
                   <a href="/edit/{{$c4->id}}">
                                              {{ $c4->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_fil_5 as $c5)
                   <a href="/edit/{{$c5->id}}">
                                              {{ $c5->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_fil_6 as $c6)
                   <a href="/edit/{{$c6->id}}">
                                              {{ $c6->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_fil_7 as $c7)
                   <a href="/edit/{{$c7->id}}">
                                              {{ $c7->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_fil_8 as $c8)
                   <a href="/edit/{{$c8->id}}">
                                              {{ $c8->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_fil_9 as $c9)
                   <a href="/edit/{{$c9->id}}">
                                              {{ $c9->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_fil_10 as $c10)
                   <a href="/edit/{{$c10->id}}">
                                              {{ $c10->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_fil_11 as $c11)
                   <a href="/edit/{{$c11->id}}">
                                              {{ $c11->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_fil_12 as $c12)
                   <a href="/edit/{{$c12->id}}">
                                              {{ $c12->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_fil_13 as $c13)
                   <a href="/edit/{{$c13->id}}">
                                              {{ $c13->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_fil_14 as $c14)
                   <a href="/edit/{{$c14->id}}">
                                              {{ $c14->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_fil_15 as $c15)
                   <a href="/edit/{{$c15->id}}">
                                              {{ $c15->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_fil_16 as $c16)
                   <a href="/edit/{{$c16->id}}">
                                              {{ $c16->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_fil_17 as $c17)
                   <a href="/edit/{{$c17->id}}">
                                              {{ $c17->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_fil_18 as $c18)
                   <a href="/edit/{{$c18->id}}">
                                              {{ $c18->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_fil_19 as $c19)
                   <a href="/edit/{{$c19->id}}">
                                              {{ $c19->turbidez}} 
</a>
                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_fil_20 as $c20)
                   <a href="/edit/{{$c20->id}}">
                                              {{ $c20->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_fil_21 as $c21)
                   <a href="/edit/{{$c21->id}}">
                                              {{ $c21->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_fil_22 as $c22)
                   <a href="/edit/{{$c22->id}}">
                                              {{ $c22->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_fil_23 as $c23)
                   <a href="/edit/{{$c23->id}}">
                                              {{ $c23->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_fil_24 as $c24)
               <a href="/edit/{{$c24->id}}">
                                          {{ $c24->turbidez}} 
</a>
                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch

        </td>
        <!-- PH filtrada -->
        <td>
            @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_fil_1 as $c1)
                   
                                              {{ $c1->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_fil_2 as $c2)
                   
                                              {{ $c2->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_fil_3 as $c3)
                   
                                              {{ $c3->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_fil_4 as $c4)
                   
                                              {{ $c4->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_fil_5 as $c5)
                   
                                              {{ $c5->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_fil_6 as $c6)
                   
                                              {{ $c6->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_fil_7 as $c7)
                   
                                              {{ $c7->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_fil_8 as $c8)
                   
                                              {{ $c8->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_fil_9 as $c9)
                   
                                              {{ $c9->ph}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_fil_10 as $c10)
                   
                                              {{ $c10->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_fil_11 as $c11)
                   
                                              {{ $c11->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_fil_12 as $c12)
                   
                                              {{ $c12->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_fil_13 as $c13)
                   
                                              {{ $c13->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_fil_14 as $c14)
                   
                                              {{ $c14->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_fil_15 as $c15)
                   
                                              {{ $c15->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_fil_16 as $c16)
                   
                                              {{ $c16->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_fil_17 as $c17)
                   
                                              {{ $c17->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_fil_18 as $c18)
                   
                                              {{ $c18->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_fil_19 as $c19)
                   
                                              {{ $c19->ph}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_fil_20 as $c20)
                   
                                              {{ $c20->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_fil_21 as $c21)
                   
                                              {{ $c21->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_fil_22 as $c22)
                   
                                              {{ $c22->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_fil_23 as $c23)
                   
                                              {{ $c23->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_fil_24 as $c24)
               
                                          {{ $c24->ph}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch

        </td>
        <!-- Temperatura Filtrada -->
        <td>
             @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_fil_1 as $c1)
                   
                                              {{ $c1->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_fil_2 as $c2)
                   
                                              {{ $c2->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_fil_3 as $c3)
                   
                                              {{ $c3->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_fil_4 as $c4)
                   
                                              {{ $c4->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_fil_5 as $c5)
                   
                                              {{ $c5->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_fil_6 as $c6)
                   
                                              {{ $c6->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_fil_7 as $c7)
                   
                                              {{ $c7->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_fil_8 as $c8)
                   
                                              {{ $c8->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_fil_9 as $c9)
                   
                                              {{ $c9->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_fil_10 as $c10)
                   
                                              {{ $c10->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_fil_11 as $c11)
                   
                                              {{ $c11->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_fil_12 as $c12)
                   
                                              {{ $c12->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_fil_13 as $c13)
                   
                                              {{ $c13->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_fil_14 as $c14)
                   
                                              {{ $c14->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_fil_15 as $c15)
                   
                                              {{ $c15->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_fil_16 as $c16)
                   
                                              {{ $c16->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_fil_17 as $c17)
                   
                                              {{ $c17->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_fil_18 as $c18)
                   
                                              {{ $c18->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_fil_19 as $c19)
                   
                                              {{ $c19->temperatura}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_fil_20 as $c20)
                   
                                              {{ $c20->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_fil_21 as $c21)
                   
                                              {{ $c21->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_fil_22 as $c22)
                   
                                              {{ $c22->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_fil_23 as $c23)
                   
                                              {{ $c23->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_fil_24 as $c24)
               
                                          {{ $c24->temperatura}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch
        </td>
        <!-- Color Filtrada -->
        <td>
             @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_fil_1 as $c1)
                   
                                              {{ $c1->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_fil_2 as $c2)
                   
                                              {{ $c2->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_fil_3 as $c3)
                   
                                              {{ $c3->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_fil_4 as $c4)
                   
                                              {{ $c4->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_fil_5 as $c5)
                   
                                              {{ $c5->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_fil_6 as $c6)
                   
                                              {{ $c6->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_fil_7 as $c7)
                   
                                              {{ $c7->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_fil_8 as $c8)
                   
                                              {{ $c8->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_fil_9 as $c9)
                   
                                              {{ $c9->color}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_fil_10 as $c10)
                   
                                              {{ $c10->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_fil_11 as $c11)
                   
                                              {{ $c11->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_fil_12 as $c12)
                   
                                              {{ $c12->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_fil_13 as $c13)
                   
                                              {{ $c13->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_fil_14 as $c14)
                   
                                              {{ $c14->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_fil_15 as $c15)
                   
                                              {{ $c15->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_fil_16 as $c16)
                   
                                              {{ $c16->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_fil_17 as $c17)
                   
                                              {{ $c17->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_fil_18 as $c18)
                   
                                              {{ $c18->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_fil_19 as $c19)
                   
                                              {{ $c19->color}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_fil_20 as $c20)
                   
                                              {{ $c20->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_fil_21 as $c21)
                   
                                              {{ $c21->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_fil_22 as $c22)
                   
                                              {{ $c22->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_fil_23 as $c23)
                   
                                              {{ $c23->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_fil_24 as $c24)
               
                                          {{ $c24->color}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch
        </td>

<!-- MAneja turbidez de agua TRATADA -->
        <td>
            @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_trat_1 as $c1)
                   <a href="/edit/{{$c1->id}}">
                                              {{ $c1->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_trat_2 as $c2)
                   <a href="/edit/{{$c2->id}}">
                                              {{ $c2->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_trat_3 as $c3)
                   <a href="/edit/{{$c3->id}}">
                                              {{ $c3->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_trat_4 as $c4)
                   <a href="/edit/{{$c4->id}}">
                                              {{ $c4->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_trat_5 as $c5)
                   <a href="/edit/{{$c5->id}}">
                                              {{ $c5->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_trat_6 as $c6)
                   <a href="/edit/{{$c6->id}}">
                                              {{ $c6->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_trat_7 as $c7)
                   <a href="/edit/{{$c7->id}}">
                                              {{ $c7->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_trat_8 as $c8)
                   <a href="/edit/{{$c8->id}}">
                                              {{ $c8->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_trat_9 as $c9)
                   <a href="/edit/{{$c9->id}}">
                                              {{ $c9->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_trat_10 as $c10)
                   <a href="/edit/{{$c10->id}}">
                                              {{ $c10->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_trat_11 as $c11)
                   <a href="/edit/{{$c11->id}}">
                                              {{ $c11->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_trat_12 as $c12)
                   <a href="/edit/{{$c12->id}}">
                                              {{ $c12->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_trat_13 as $c13)
                   <a href="/edit/{{$c13->id}}">
                                              {{ $c13->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_trat_14 as $c14)
                   <a href="/edit/{{$c14->id}}">
                                              {{ $c14->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_trat_15 as $c15)
                   <a href="/edit/{{$c15->id}}">
                                              {{ $c15->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_trat_16 as $c16)
                   <a href="/edit/{{$c16->id}}">
                                              {{ $c16->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_trat_17 as $c17)
                   <a href="/edit/{{$c17->id}}">
                                              {{ $c17->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_trat_18 as $c18)
                   <a href="/edit/{{$c18->id}}">
                                              {{ $c18->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_trat_19 as $c19)
                   <a href="/edit/{{$c19->id}}">
                                              {{ $c19->turbidez}} 
</a>
                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_trat_20 as $c20)
                   <a href="/edit/{{$c20->id}}">
                                              {{ $c20->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_trat_21 as $c21)
                   <a href="/edit/{{$c21->id}}">
                                              {{ $c21->turbidez}} 
</a>
                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_trat_22 as $c22)
                   <a href="/edit/{{$c22->id}}">
                                              {{ $c22->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_trat_23 as $c23)
                   <a href="/edit/{{$c23->id}}">
                                              {{ $c23->turbidez}} 
</a>
                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_trat_24 as $c24)
               <a href="/edit/{{$c24->id}}">
                                          {{ $c24->turbidez}} 
</a>
                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch


        </td>
        <!-- PH tratada -->
        <td>
            @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_trat_1 as $c1)
                   
                                              {{ $c1->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_trat_2 as $c2)
                   
                                              {{ $c2->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_trat_3 as $c3)
                   
                                              {{ $c3->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_trat_4 as $c4)
                   
                                              {{ $c4->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_trat_5 as $c5)
                   
                                              {{ $c5->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_trat_6 as $c6)
                   
                                              {{ $c6->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_trat_7 as $c7)
                   
                                              {{ $c7->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_trat_8 as $c8)
                   
                                              {{ $c8->ph}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_trat_9 as $c9)
                   
                                              {{ $c9->ph}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_trat_10 as $c10)
                   
                                              {{ $c10->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_trat_11 as $c11)
                   
                                              {{ $c11->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_trat_12 as $c12)
                   
                                              {{ $c12->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_trat_13 as $c13)
                   
                                              {{ $c13->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_trat_14 as $c14)
                   
                                              {{ $c14->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_trat_15 as $c15)
                   
                                              {{ $c15->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_trat_16 as $c16)
                   
                                              {{ $c16->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_trat_17 as $c17)
                   
                                              {{ $c17->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_trat_18 as $c18)
                   
                                              {{ $c18->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_trat_19 as $c19)
                   
                                              {{ $c19->ph}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_trat_20 as $c20)
                   
                                              {{ $c20->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_trat_21 as $c21)
                   
                                              {{ $c21->ph}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_trat_22 as $c22)
                   
                                              {{ $c22->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_trat_23 as $c23)
                   
                                              {{ $c23->ph}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_trat_24 as $c24)
               
                                          {{ $c24->ph}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch


        </td>
        <!-- Temperatura Tratada -->
        <td>
            @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_trat_1 as $c1)
                   
                                              {{ $c1->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_trat_2 as $c2)
                   
                                              {{ $c2->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_trat_3 as $c3)
                   
                                              {{ $c3->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_trat_4 as $c4)
                   
                                              {{ $c4->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_trat_5 as $c5)
                   
                                              {{ $c5->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_trat_6 as $c6)
                   
                                              {{ $c6->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_trat_7 as $c7)
                   
                                              {{ $c7->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_trat_8 as $c8)
                   
                                              {{ $c8->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_trat_9 as $c9)
                   
                                              {{ $c9->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_trat_10 as $c10)
                   
                                              {{ $c10->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_trat_11 as $c11)
                   
                                              {{ $c11->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_trat_12 as $c12)
                   
                                              {{ $c12->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_trat_13 as $c13)
                   
                                              {{ $c13->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_trat_14 as $c14)
                   
                                              {{ $c14->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_trat_15 as $c15)
                   
                                              {{ $c15->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_trat_16 as $c16)
                   
                                              {{ $c16->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_trat_17 as $c17)
                   
                                              {{ $c17->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_trat_18 as $c18)
                   
                                              {{ $c18->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_trat_19 as $c19)
                   
                                              {{ $c19->temperatura}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_trat_20 as $c20)
                   
                                              {{ $c20->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_trat_21 as $c21)
                   
                                              {{ $c21->temperatura}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_trat_22 as $c22)
                   
                                              {{ $c22->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_trat_23 as $c23)
                   
                                              {{ $c23->temperatura}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_trat_24 as $c24)
               
                                          {{ $c24->temperatura}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch


        </td>
        <!-- Color Tratada -->
        <td>
            @switch($i)
                               
                                @case(1)

                                     
                                   @foreach ($a_trat_1 as $c1)
                   
                                              {{ $c1->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_trat_2 as $c2)
                   
                                              {{ $c2->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(3)

                                     
                                   @foreach ($a_trat_3 as $c3)
                   
                                              {{ $c3->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($a_trat_4 as $c4)
                   
                                              {{ $c4->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_trat_5 as $c5)
                   
                                              {{ $c5->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(6)

                                     
                                   @foreach ($a_trat_6 as $c6)
                   
                                              {{ $c6->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_trat_7 as $c7)
                   
                                              {{ $c7->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_trat_8 as $c8)
                   
                                              {{ $c8->color}} 

                                    @endforeach               
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_trat_9 as $c9)
                   
                                              {{ $c9->color}} 

                                    @endforeach               
                                  
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_trat_10 as $c10)
                   
                                              {{ $c10->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                   @foreach ($a_trat_11 as $c11)
                   
                                              {{ $c11->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_trat_12 as $c12)
                   
                                              {{ $c12->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_trat_13 as $c13)
                   
                                              {{ $c13->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_trat_14 as $c14)
                   
                                              {{ $c14->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($a_trat_15 as $c15)
                   
                                              {{ $c15->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_trat_16 as $c16)
                   
                                              {{ $c16->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_trat_17 as $c17)
                   
                                              {{ $c17->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_trat_18 as $c18)
                   
                                              {{ $c18->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_trat_19 as $c19)
                   
                                              {{ $c19->color}} 

                                    @endforeach               
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($a_trat_20 as $c20)
                   
                                              {{ $c20->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(21)

                                     
                                   @foreach ($a_trat_21 as $c21)
                   
                                              {{ $c21->color}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($a_trat_22 as $c22)
                   
                                              {{ $c22->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_trat_23 as $c23)
                   
                                              {{ $c23->color}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                               @foreach ($a_trat_24 as $c24)
               
                                          {{ $c24->color}} 

                                @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch


        </td>
        
        <!-- Cloro de EB1 -->
        <td>
            @switch($i)
                               
                                @case(1)

                                   
                                   @foreach ($cl1 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach  
                                 
                                @break
                                 @case(2)

                                @foreach ($cl2 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach              
                                  
                                @break
                                @case(3)

                                     
                                    @foreach ($cl3 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach                
                                  
                                @break
                                @case(4)

                                     
                                   @foreach ($cl4 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach                  
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($cl5 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach                 
                                  
                                @break
                                @case(6)

                                     
                                    @foreach ($cl6 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach                 
                                 
                                @break
                                 @case(7)

                                     
                                    @foreach ($cl7 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach                
                                 
                                @break
                                 @case(8)

                                     
                                    @foreach ($cl8 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach                 
                                 
                                @break
                                 @case(9)

                                     
                                    @foreach ($cl9 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach                 
                                  
                                @break
                                 @case(10)

                                     
                                    @foreach ($cl10 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach               
                                  
                                @break
                                @case(11)

                                     
                                    @foreach ($cl11 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach               
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($cl12 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach               
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($cl13 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach                
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($cl14 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach              
                                  
                                @break
                                @case(15)

                                     
                                   @foreach ($cl15 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach               
                                 
                                @break
                                @case(16)

                                     
                                  @foreach ($cl16 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach               
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($cl17 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach               
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($cl18 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach              
                                 
                                @break
                                @case(19)

                                     
                                @foreach ($cl19 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach              
                                   
                                @break
                                @case(20)

                                     
                                   @foreach ($cl20 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach                
                                  
                                @break
                                @case(21)

                                     
                                  @foreach ($cl21 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach               
                                  
                                @break
                                @case(22)

                                     
                                   @foreach ($cl22 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach              
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($cl23 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach               
                                 
                                @break
                                @case(24)

                                     
                                     @foreach ($cl24 as $c1)
                   
                                              {{ $c1->cloro_residual}} 

                                    @endforeach               
                                
                                @break
                             
                                @default
                                    ------
            @endswitch


        </td>
        

      </tr>
      @endfor

      <!-- --Media- -->
      <tr>
        <td>X</td>

        <td> {{$prom_c_ntu}}</td>
        <td>{{$prom_c_ph}}</td>
        <td>{{$prom_c_temp}}</td>
        <td>{{$prom_c_col}}</td>
    <!-- --Clarificada---->
        <td> {{$prom_cl_ntu}}</td>
        <td>{{$prom_cl_ph}}</td>
        <td>{{$prom_cl_temp}}</td>
        <td>{{$prom_cl_col}}</td>
    <!-- --Filtrada- -->
        <td> {{$prom_f_ntu}}</td>
        <td>{{$prom_f_ph}}</td>
        <td>{{$prom_f_temp}}</td>
        <td>{{$prom_f_col}}</td>
 <!-- --tratada- -->
        <td> {{$prom_t_ntu}}</td>
        <td>{{$prom_t_ph}}</td>
        <td>{{$prom_t_temp}}</td>
        <td>{{$prom_t_col}}</td>
        <td>{{$prom_cl_eb1}}</td>
      </tr>


    <!--   Maximo---->
      <tr>
        <td>Máx</td>

        <td>{{$max_c_ntu}}</td>
        <td>{{$max_c_ph}}</td>
        <td>{{$max_c_tmp}}</td>
        <td>{{$max_c_col}}</td>
        <!-- Clarificada -->
        <td>{{$max_cl_ntu}}</td>
        <td>{{$max_cl_ph}}</td>
        <td>{{$max_cl_tmp}}</td>
        <td>{{$max_cl_col}}</td>
           <!-- Filtrada -->
        <td>{{$max_f_ntu}}</td>
        <td>{{$max_f_ph}}</td>
        <td>{{$max_f_tmp}}</td>
        <td>{{$max_f_col}}</td>
            <!-- Tratada -->
        <td>{{$max_t_ntu}}</td>
        <td>{{$max_t_ph}}</td>
        <td>{{$max_t_tmp}}</td>
        <td>{{$max_t_col}}</td>
        <td>{{$max_cl_eb1}}</td>

      </tr>
       <!--  Minimo  ---->
      <tr>
        <td>Min</td>
        <td>{{$min_c_ntu}}</td>
        <td>{{$min_c_ph}}</td>
        <td>{{$min_c_tmp}}</td>
        <td>{{$min_c_col}}</td>
        <!-- Clarificada -->
        <td>{{$min_cl_ntu}}</td>
        <td>{{$min_cl_ph}}</td>
        <td>{{$min_cl_tmp}}</td>
        <td>{{$min_cl_col}}</td>
           <!-- Filtrada -->
        <td>{{$min_f_ntu}}</td>
        <td>{{$min_f_ph}}</td>
        <td>{{$min_f_tmp}}</td>
        <td>{{$min_f_col}}</td>
            <!-- Tratada -->
        <td>{{$min_t_ntu}}</td>
        <td>{{$min_t_ph}}</td>
        <td>{{$min_t_tmp}}</td>
        <td>{{$min_t_col}}</td>
        <td>{{$min_cl_eb1}}</td>

        

      </tr>

    </tbody>
    
  </table>


                                   
                                 
               

                                          

                                
               
                                          

                                
         


  </div>

</div>

@endsection
</body>
</html>
