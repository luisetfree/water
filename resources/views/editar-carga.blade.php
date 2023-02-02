<!DOCTYPE html>
<html>
<head>
    <title>Paros de operación</title>
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

  <link rel="stylesheet" href="{{ asset('css/edit-carga.css') }}" />

   @extends('layouts.app')




</head>
<body>
   <!-- Maneja exclusivamente la barra de menú -->
  @section('navegador')

   
<div class="grid-container"> 



<!-- container-fluid -->
  <div class="">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Editar carga

    </div>

    <div  class="card-body">




      <form name="" id="" method="post" action="{{url('actualizar-carga')}}">
       @csrf
       
       <div class="">

        <!-- Elemento oculto que captura el id de la carga a actualizar  -->
        <input type="hidden" name="id_carga" value="{{$id}}">
        
        
        <label for="cantidad">Químico:</label>
        <!-- Lista que se llena con los quimicos que se encuentran en la DB, en el valor se almacena 
          el id que servirá para guardar la carga-->
        <select name="id_quimico">
          

            <option value="{{$quimico->id}}"> {{$quimico->nombre}}</option>
            
           

        </select>
<br>
        <label for="">Fecha:</label>
        <input type="date" name="fecha" value="{{$carga->fecha}}" required>
        
<br>
        <label for="cantidad">Cantidad:</label>
        <input id="cantidad" type="text" name="cantidad" placeholder="00:00" value=" {{$carga->cantidad}}" required>
       
        
        
        <br>
        
        <label for="">Hora:</label>
         <input type="text" name="hora" placeholder="00:00" value=" {{$carga->hora}}" required> 
         <br>
        
         
        
        <label for="">Grupo de turno:</label>
        <select name="grupo" required>
                <option value=" {{$carga->grupo}}" default > {{$carga->grupo}}</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
   
        </select>
        <br>

        
        




      </div>

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Guardar</button>

      </form>




    </div>

    <div class="card-footer">







        <!--Formulario para la eliminacion de un paro en específico-->
        <form name="" id="" method="post" action="{{url('eliminar-carga')}}">
         @csrf

        <!-- Elemento oculto que captura el id unico de la carga de quimico y lo utilizamos para eliminar los datos en la BD -->
        <input type="hidden" name="id_carga" value="{{$id}}">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Eliminar</button>

        

        </form>
    </div>
     

  </div>





</div>






</div>

@endsection
     
</body>
</html>
