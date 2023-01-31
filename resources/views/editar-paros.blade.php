<!DOCTYPE html>
<html>
<head>
    <title>Paros de operación</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{ asset('css/edit-paro.css') }}" />




  <!-- Controla el menu -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Fin barra menu -->

    

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
      Editar paro de operación

    </div>
    <div  class="card-body ">




      <form name="" id="" method="post" action="{{url('actualizar-paro')}}">
       @csrf
       
       <div class="">

        <!-- Fecha  -->
        
        
        <label for="cantidad">Estación:</label>
        <!-- Lista que se llena con los quimicos que se encuentran en la DB, en el valor se almacena 
          el id que servirá para guardar la carga-->
        <select name="id_estacion">
          

            <option value="1">BT</option>
            <option value="2">EB1</option>
            <option value="3">EB2</option>
            <option value="4">EB3</option>

          

           

        </select>
        <br>
        <label for="">Fecha:</label><br>
        <input type="date" name="fecha" value="{{$datos_paro->fecha}}" required>
        <!-- ID del paro a actualizar -->
        <input type="hidden" name="id_paro" value="{{$datos_paro->id}}">
<br>
        <label for="cantidad">Hora suspensión:</label>
        <input id="cantidad" type="text" name="hora_inicio" placeholder="00:00" value="{{$datos_paro->hora_inicio}}" required>
       
        
        
        <br>
        
        <label for="">Hora arranque:</label>
         <input type="text" name="hora_fin" placeholder="00:00" value="{{$datos_paro->hora_fin}}" required> 
         <br>
         <label for="">Causa:</label>
         <select name="causa">
            <option value="{{$datos_paro->causa}}" default >{{$datos_paro->causa}}</option>
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

        
         </select>
         
         <br>
        
        <label for="">Grupo de turno:</label>
        <select name="grupo">
                <option value="{{$datos_paro->grupo}}" default >{{$datos_paro->grupo}}</option>
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
        <form name="" id="" method="post" action="{{url('eliminar-paro')}}">
         @csrf

        <!-- Elemento oculto que captura el id unico de este paro y lo utilizamos para eliminar los datos en la BD -->
        <input type="hidden" name="id_paro" value="{{$datos_paro->id}}">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Eliminar</button>

        

        </form>
    </div>
     

  </div>





</div>






</div>








     
</body>
</html>




