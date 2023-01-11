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

    <style>
        table {
          font-family: times, sans-serif;
          border-collapse: collapse;
          width: 50%;
        }

        td, th {
          border: 1px solid #e5e3e3;
          text-align: center;
          padding: 4px;
          font-size: 16px;
        }
        /*maneja los encabezados de las tablas*/
        th {
        background-color: #e5e3e3;
        }

        tr:nth-child(even) {
          /* background-color: #dddddd;*/

        }

          .card{
            margin: 2%;
            display: flex;
            grid-template-columns: 60% 60%;
            width: 70%;
            border-radius: 30px;
            border: solid #e5e3e3;
  
          }

            /*Centrando todo el contenido*/
            .container{


               /*display: flex;*/
              /*justify-content: center;*/

            }

              /*Div donde estan internamente los elementos del formulario*/
            .grid-container {
                /*grid*/
              display: grid;
              grid-template-columns: 800px 800px ;
              
              /*border: solid #e5e3e3;*/
             
              justify-content: start;

              padding: 5%;
              
  
            }
            

            .checkbox{
              font-size: 15px;
            }


            .historial{
            border-radius: 30px;
            border: solid #e5e3e3;
            margin: 1%;
            width: 100%;
            text-align: center;


            }

            #formulario{

            display: flex;
            grid-template-columns: auto auto;
            align-content: center;

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
        <a class="nav-link" href="/calidad">Calidades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/operacion">Equipos</a>
      </li>
       
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Herramientas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/producciones">Producciones</a>
          <a class="dropdown-item" href="#">Bitacora</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Más</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
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
      Registro de paro de operación

    </div>
    <div id="formulario" class="card-body ">




      <form name="" id="" method="post" action="{{url('suspension')}}">
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
        <label for="">Fecha:</label>
        <input type="date" name="fecha" required>
<br>
        <label for="cantidad">Hora suspensión:</label>
        <input id="cantidad" type="text" name="hora_inicio" placeholder="00:00" required>
        
        
        <br>
        
        <label for="">Hora arranque:</label>
         <input type="text" name="hora_fin" placeholder="00:00" required> 
         <br>
         <label for="">Causa:</label>
         <select name="causa">
         
            <option value="Corte de energía">Corte de energía</option>
            <option value="Alta Turbidez en rio">Alta Turbidez en rio</option>
            <option value="Paro programado">Paro programado</option>

        
         </select>
         
         <br>
        
        <label for="">Grupo de turno:</label>
        <select name="grupo">
                
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
   
        </select>
        <br>

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Guardar</button>


      </div>


      </form>



    </div>

  </div>





</div>



<div class="historial">
  
  

 <!-- Tabla que muestra los cortes de operación para el mes

  -->
  <section class="card-header font-weight-bold">

   Historial de cortes
  </section>

<section class="card-body">


          <form name="" id="" method="post" action="{{url('') }}">
          @csrf

          <!-- Listado de quimicos a mostrar -->
          <label>Estación:</label>

           <select name="id_estacion">
   
                      <option value="1">BT</option>
                      <option value="2">EB1</option>
                      <option value="3">EB2</option>
                      <option value="4">EB3</option>

            </select>
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
                      <td>{{intval($dato->hora_fin)-intval($dato->hora_inicio)}}</td>
                      <td>{{$dato->causa}}</td>
                      
                </tr>
          
          @endforeach
           


                 
              </tbody>
            </table>

  </section>
</div>


</div>
     
</body>
</html>
