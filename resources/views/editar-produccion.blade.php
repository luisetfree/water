<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{ asset('css/edit-produccion.css') }}" />

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
     Editar caudales de estaciones
    </div>
    <div class="card-body">

            





      <form name="form-calidad" id="" method="post" action="{{url('actualiza_caudal')}}">
       @csrf
       <!-- @method('put') Permitirá actualizar valores -->

        <!-- Fecha -->
       <input type="date" name="fecha" value="{{$fecha}}" required>


        <!-- Select mostrará unicamente las horas que hacen falta agregar al registro diario -->
       <label for="hora">Hora</label>

        <!-- Gracias a la funcion precargar se muestra la hora de los valores que se está actualizando -->
            <select id="" name="hora" class="" required=""> 
            <!-- Validando para hora que no se haya ingresado un dato previamente -->
                  
             
                <option value="@foreach ($prod as $hora)
                   
                                              {{$hora->hora}} 

                        @endforeach ">

                        @foreach ($prod as $h)
                   
                                              {{$h->hora}} 

                        @endforeach 


                </option> 
            
           
                                    
          
                       
             </select>





            <div class="grid-container">

                

            <section class="card ">
                    <!-- Muestra el nombre de la estacion -->
                  <label class="card-header">{{$nombre}}</label>

            <!-- Controla los inputs -->
            

                <!-- Precarga el caudal almacenado en la BD y el id correspondiente-->
                <input type="hidden" name="id_bt" value="{{$id_bt}}">

                <input type="text" name="caudalbt" placeholder="" required="" value="{{ $caudal}} ">

                
          
                        
            </section>
            <section class="card ">
                   
                <!-- EB1 -->
                <label class="card-header">EB1</label>
                <!-- se captura el id del campo de eb1 -->
                <input type="hidden" name="id_eb1" value="{{$id_1}}">

                <!-- Precarga el caudal almacenado en la BD -->
                <input type="text" name="caudal1" placeholder="" required="" value="{{ $caudal1}} ">
          
          
                        
            </section>

        <section class="card ">
              
                             <!-- EB2 -->
                <label class="card-header">EB2</label>
                <input type="hidden" name="id_eb2" value="{{$id_2}}">
                <!-- Precarga el caudal almacenado en la BD -->
                <input type="text" name="caudal2" placeholder="" required="" value="{{ $caudal2}} ">
          
                        
        </section>

             <section class="card ">
                    
                             <!-- EB2 -->
                <label class="card-header">EB3</label>
                <input type="hidden" name="id_eb3" value="{{$id_3}}">
                <!-- Precarga el caudal almacenado en la BD -->
                <input type="text" name="caudal3" placeholder="" required="" value="{{ $caudal3}}">
          
                        
            </section>




               
            </div>

            
           

        <div class="">

       <!--  <button type="submit" class="btn btn-outline-primary">Cargar</button> -->
    
        <button type="submit" class="btn btn-outline-primary">Actualizar</button>
         <!-- <input type="hidden" class="date" id="date" name="fecha_fantasma">  -->

        </div>


      </form>





    </div>



  </div>

</div>

@endsection

</body>
</html>
