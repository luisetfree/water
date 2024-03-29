<!DOCTYPE html>
<html>
<head>
    <title>Paros de operación</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{ asset('css/paros-operacion.css') }}" />

@extends('layouts.app')
   


</head>
<body>

  @section('navegador')
   
<div class="grid-container"> 




 
<!-- container-fluid -->

  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Registro de paro de operación

    </div>
    

    <div id="formulario" class="card-body">  


      <form name="" id="" method="post" action="{{url('suspension')}}">
       @csrf
       
       

        <!-- Fecha  -->
        
        
        <label for="cantidad">Estación:</label>
        <!-- Lista que se llena con los quimicos que se encuentran en la DB, en el valor se almacena 
          el id que servirá para guardar la carga-->
        <select name="id_estacion">
          

            <option value="1">BT</option>
            <option value="2">EB1</option>
            <option value="3">EB2</option>
            <option value="4">EB3</option>

          

           

        </select> <br>
        <label for="">Fecha:</label>
        <input type="date" name="fecha" value="{{$fecha}}" required>
<br>
        <label for="cantidad">Hora suspensión:</label><br>
        <input id="cantidad" type="text" pattern="\d{2}:\d{2}" title="Introduce una hora en formato hh:mm" name="hora_inicio" placeholder="00:00" required>
        
        
        <br>
        
        <label for="">Hora arranque:</label><br>
         <input type="text" pattern="\d{2}:\d{2}" title="Introduce una hora en formato hh:mm" name="hora_fin" placeholder="00:00" required> 
         <br>
         <label for="">Causa:</label><br>
         <select name="causa">
         
            <option value="Corte de energía en BT">Corte de energía en BT</option>
            <option value="Corte de energía en EB1">Corte de energía en EB1</option>
            <option value="Corte de energía en EB2">Corte de energía en EB2</option>
            <option value="Corte de energía en EB3">Corte de energía en EB3</option>
            <option value="Variación de voltaje en BT">Variación de voltaje en BT</option>
            <option value="Variación de voltaje en EB1">Variación de voltaje en EB1</option>
            <option value="Variación de voltaje en EB2">Variación de voltaje en EB2</option>
            <option value="Variación de voltaje en EB3">Variación de voltaje en EB3</option>
            <option value="Alta Turbidez en rio">Alta Turbidez en rio</option>
            <option value="Paro programado interno">Paro programado interno</option>
            <option value="Paro programado externo">Paro programado externo</option>
            <option value="Falla en linea de producción">Falla en linea de producción</option>
            <option value="Alta concentración de algas">Alta concentración de algas</option>

        
         </select>
         
         <br><br>
        
        <label for="">Grupo de turno:</label>
        <select name="grupo">
                
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
   
        </select>
        <br>

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Guardar</button>


      </form>

 </div>

    

  </div>


<div class="historial ">
  
  

 <!-- Tabla que muestra los cortes de operación para el mes

  -->
  <section class="card-header font-weight-bold">

   Historial de cortes
  </section>

<section class="card-body">


          <form name="" id="" method="post" action="{{url('filtrar-cortes') }}">
          @csrf

          <!-- Listado de quimicos a mostrar -->
          <label>Estación:</label>

           <select name="id_estacion">
                       <option value="0" default >Todas</option>
                      <option value="1">BT</option>
                      <option value="2">EB1</option>
                      <option value="3">EB2</option>
                      <option value="4">EB3</option>

            </select>
            <label>Fecha:</label>
            <input type="date" name="fecha" required value="{{$fecha}}">
            <button class="btn btn-outline-success" type="submit">Mostrar</button>
          </form>




<!-- Tabla que muestra el historial de los paros  -->
            <table class="table">

              <thead class="thead-light">
                <tr>
                  <th>Fecha</th>
                  <th>Estación</th>
                  <th>Hora inicio</th>
                  <th>Hora Fin</th>
                  <th>Tiempo suspendido</th>
                  <th>Causa</th>
                  <th>Grupo</th>
                  <th>Editar</th>


                </tr>
              </thead>
              <tbody>


            

          <!-- Fecha  Quimico   Carga   Hora  Grupo -->
          @foreach($total_paros as $dato)
                <tr>
                      
                      <td>{{$dato->fecha}}</td>
                      <td>{{$dato->nombre}}</td>
                      <td>{{$dato->hora_inicio}}</td>
                      <td>{{$dato->hora_fin}}</td>
                      <!-- Calculo de tiempo suspendido -->
                      <td>

 <?php 
            //separando horas y minutos
            $minutos_inicio=explode(':',$dato->hora_inicio);
            $minutos_fin=explode(':',$dato->hora_fin);

            //resta de las horas
            $tiempo=intval($dato->hora_fin)-intval($dato->hora_inicio);

            $rest_minutos=($minutos_fin[1]-$minutos_inicio[1]);

            //validacion para que a un valor negativo le sean sumados 60 minutos, de esta forma se obtiene el valor real
            if ($rest_minutos < 0) {
                $rest_minutos=$rest_minutos + 60;
                //reajustando las horas, pues al ser minutos negativos se debe disminuir una hora de la resta de las horas
                $tiempo = $tiempo - 1;
            }



            //formando nuevamente la hora completa a formato 00:00
            if ($rest_minutos < 10) {
                // si obtenemos minutos abajo de 10 le anteponemos un 0
                 $hora=$tiempo.':0'.$rest_minutos;
            }
            else{ 

                $hora=$tiempo.':'.$rest_minutos;
            }
           
            
            echo $hora;

 ?>

                      </td>
                      <td>{{$dato->causa}}</td>
                       <td>
                           {{$dato->grupo}}          
                           
                      </td>
                      <td>
                                          <a href="/editarParo{{$dato->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                      </td>
                     
                      
                      
                      
                </tr>
          


          @endforeach
           
         

            
         
             
              </tbody>
            </table>

  </section>
</div>


</div>

@endsection
     
</body>
</html>
