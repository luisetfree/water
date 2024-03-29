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

<link rel="stylesheet" href="{{ asset('css/producciones.css') }}" />

@extends('layouts.app')




</head>
<body>
   

@section('navegador')



  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      <h5>Producciones </h5> 

     
      
    </div>
    <div class="card-body">
        
           <form name="formulario-mostrar" id="" method="post" action="{{url('producciones') }}">
       @csrf

<!-- Contiene los controles de busqueda  -->
       <div class="row">
              

             
              <!-- Filtra la fecha que se desea ver -->
            <div class="grid-container">
              <label for="fecha">Fecha</label>
             <input type="date" class=" form-control"  name="fecha" required="" value="{{$fecha}}"/> <br>
              
               <button type="submit" class="btn btn-outline-primary">Ver</button>

            </div>


               <div class="col-sm-8">
                <label>Producción diaria</label>
                <table>

                    <tr>

                        <th>Bocatoma</th>
                        <th>EB1</th>
                        <th>EB2</th>
                        <th>EB3</th>
                        <th>Aporte ZN</th>
                        <th>Tanque Las Pavas</th>

                    </tr>

                    <tr>
                        <td title="{{$bt_m3_s}} m³/s">{{number_format($suma_bocatoma)}} m³/d</td>
                        <td title="{{$eb1_m3_s}} m³/s">{{number_format($suma_eb1)}} m³/d</td>
                        <td title="{{$eb2_m3_s}} m³/s"> {{number_format($suma_eb2)}} m³/d</td>
                        <td title="{{$eb3_m3_s}} m³/s"> {{number_format($suma_eb3)}} m³/d</td>
                        <td>{{number_format($aporte_zn)}} m³/d</td>
                        <td> {{number_format($aporte_tanque_pavas) }} m³/d</td>
                    </tr>

                </table>
               </div>
               

        </div>
       

      

        
      </form>
 



        
         <!-- Tabla que muestra el resumen de producciones-->
         <label class="card-body">Caudales</label>
         
         

        <table>
            <!-- Encabezado de la tabla -->
            <tr>

                
                
                
                <th>Hora </th>
                
                
                <th> 
                    Bocatoma m³/h
                </th>

                <th>EB1 m³/h</th>
                <th>EB2 m³/h</th>
                <th>EB3 m³/h</th>
                <th>Editar</th>
               
            </tr>
            <!-- Fin Encabezado de la tabla -->

            <!-- Conteo para mostrar las horas de 00:00 a 23:00 hrs-->
@for ($i = 1; $i < 25; $i++)
              <tr>

               <!-- imprime las horas en formato 00:00-->
                @if ($i < 10)
                <td>0{{ $i}}:00</td>
                @else
                <td>{{ $i}}:00</td>
                @endif

                        <td>
                        
                            <!-- Controla los casos por hora para BT-->
                         @switch($i)
                                 
                                @case(1)
                                      @foreach ($c_bt_1 as $prod)

                                          {{$prod->caudal}}
                                      
                                      @endforeach
                                @break
                                @case(2)
                                      @foreach ($c_bt_2 as $prod)

                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                 @case(3)
                                      @foreach ($c_bt_3 as $prod)

                                          {{$prod->caudal}}
                                     
                                      @endforeach
                                @break
                                 @case(4)
                                      @foreach ($c_bt_4 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($c_bt_5 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                 @case(6)
                                      @foreach ($c_bt_6 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                 @case(7)
                                      @foreach ($c_bt_7 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                 @case(8)
                                      @foreach ($c_bt_8 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                 @case(9)
                                      @foreach ($c_bt_9 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                 @case(10)
                                      @foreach ($c_bt_10 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                  @case(11)
                                      @foreach ($c_bt_11 as $prod)
                                       
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                  @case(12)
                                      @foreach ($c_bt_12 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                  @case(13)
                                      @foreach ($c_bt_13 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                  @case(14)
                                      @foreach ($c_bt_14 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                  @case(15)
                                      @foreach ($c_bt_15 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                  @case(16)
                                      @foreach ($c_bt_16 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                  @case(17)
                                      @foreach ($c_bt_17 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                  @case(18)
                                      @foreach ($c_bt_18 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                  @case(19)
                                      @foreach ($c_bt_19 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                @case(20)
                                      @foreach ($c_bt_20 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($c_bt_21 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($c_bt_22 as $prod)
                                       
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($c_bt_23 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($c_bt_24 as $prod)
                                      
                                          {{$prod->caudal}}
                                          
                                      @endforeach
                                @break
                             
                              
                             
                                @default
                                    ------
                        @endswitch



                        </td>
                     <!-- Caudales por hora para EB1 -->
                        <td>
                        

                            @switch($i)
                                 
                                @case(1)
                                      @foreach ($c_eb1_1 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(2)
                                      @foreach ($c_eb1_2 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(3)
                                      @foreach ($c_eb1_3 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(4)
                                      @foreach ($c_eb1_4 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($c_eb1_5 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(6)
                                      @foreach ($c_eb1_6 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(7)
                                      @foreach ($c_eb1_7 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(8)
                                      @foreach ($c_eb1_8 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(9)
                                      @foreach ($c_eb1_9 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(10)
                                      @foreach ($c_eb1_10 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(11)
                                      @foreach ($c_eb1_11 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(12)
                                      @foreach ($c_eb1_12 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(13)
                                      @foreach ($c_eb1_13 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(14)
                                      @foreach ($c_eb1_14 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(15)
                                      @foreach ($c_eb1_15 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(16)
                                      @foreach ($c_eb1_16 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(17)
                                      @foreach ($c_eb1_17 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(18)
                                      @foreach ($c_eb1_18 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(19)
                                      @foreach ($c_eb1_19 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(20)
                                      @foreach ($c_eb1_20 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($c_eb1_21 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($c_eb1_22 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($c_eb1_23 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($c_eb1_24 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                             
                              
                             
                                @default
                                    ------
                        @endswitch



                        </td>
                        <!-- Muestra caudales de EB2 -->
                        <td>

                            @switch($i)
                                 
                                @case(1)
                                      @foreach ($c_eb2_1 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(2)
                                      @foreach ($c_eb2_2 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(3)
                                      @foreach ($c_eb2_3 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(4)
                                      @foreach ($c_eb2_4 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($c_eb2_5 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(6)
                                      @foreach ($c_eb2_6 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(7)
                                      @foreach ($c_eb2_7 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(8)
                                      @foreach ($c_eb2_8 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(9)
                                      @foreach ($c_eb2_9 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                 @case(10)
                                      @foreach ($c_eb2_10 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(11)
                                      @foreach ($c_eb2_11 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(12)
                                      @foreach ($c_eb2_12 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(13)
                                      @foreach ($c_eb2_13 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(14)
                                      @foreach ($c_eb2_14 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(15)
                                      @foreach ($c_eb2_15 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(16)
                                      @foreach ($c_eb2_16 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(17)
                                      @foreach ($c_eb2_17 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(18)
                                      @foreach ($c_eb2_18 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                  @case(19)
                                      @foreach ($c_eb2_19 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(20)
                                      @foreach ($c_eb2_20 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($c_eb2_21 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($c_eb2_22 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($c_eb2_23 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($c_eb2_24 as $prod)
                                          {{$prod->caudal}}
                                      @endforeach
                                @break
                             
                              
                             
                                @default
                                    ------
                        @endswitch
                            



                        </td>
                        <!-- Muestra caudales de EB3 -->
                        <td>
                                
                            @switch($i)
                                 
                                @case(1)
                                      @foreach ($c_eb3_1 as $prod)
                                      
                                          {{$prod->caudal}}

                                          <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      
                                      @endforeach

                                @break
                                @case(2)
                                      @foreach ($c_eb3_2 as $prod)
                                      {{$prod->caudal}}
                                          <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                          
                                      @endforeach
                                @break
                                 @case(3)
                                      @foreach ($c_eb3_3 as $prod)
                                      {{$prod->caudal}}
                                          <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                          
                                      @endforeach
                                @break
                                 @case(4)
                                      @foreach ($c_eb3_4 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                 @case(5)
                                      @foreach ($c_eb3_5 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                 @case(6)
                                      @foreach ($c_eb3_6 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                 @case(7)
                                      @foreach ($c_eb3_7 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                 @case(8)
                                      @foreach ($c_eb3_8 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                 @case(9)
                                      @foreach ($c_eb3_9 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                 @case(10)
                                      @foreach ($c_eb3_10 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                  @case(11)
                                      @foreach ($c_eb3_11 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                  @case(12)
                                      @foreach ($c_eb3_12 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                  @case(13)
                                      @foreach ($c_eb3_13 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                  @case(14)
                                      @foreach ($c_eb3_14 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                  @case(15)
                                      @foreach ($c_eb3_15 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                  @case(16)
                                      @foreach ($c_eb3_16 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                  @case(17)
                                      @foreach ($c_eb3_17 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                  @case(18)
                                      @foreach ($c_eb3_18 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                  @case(19)
                                      @foreach ($c_eb3_19 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                @case(20)
                                      @foreach ($c_eb3_20 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                @case(21)
                                      @foreach ($c_eb3_21 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                @case(22)
                                      @foreach ($c_eb3_22 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                @case(23)
                                      @foreach ($c_eb3_23 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                                @case(24)
                                      @foreach ($c_eb3_24 as $prod)
                                          {{$prod->caudal}}
                                           <th>
                                          <a href="/produccion/{{$prod->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                                          </th>
                                      @endforeach
                                @break
                             
                              
                             
                                @default
                                    ------
                        @endswitch
                            


                        </td>

                    
                    
                     
                        
                        
                       
                        
                    




                
                   
                
                
               
                

            
               
              </tr>
@endfor


              




    </table>


  




      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
       
        <div class="grid-container" >
       
            



        </div>

    
      
        




      </form>





     



    </div>

   
        
    

         


  </div>

</div>


@endsection



</body>
</html>
