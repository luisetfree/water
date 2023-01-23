<!DOCTYPE html>
<html>
<head>
    <title>Quimicos</title>
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

     /* body{
        align-content: center;
      }*/

        table {
          font-family: times, sans-serif;
          border-collapse: collapse;
          width: 100%;
        
        }

        td, th {
          border: 1px solid black;
          text-align: center;
          padding: 4px;
          font-size: 16px;
        }
        /*maneja los encabezados de las tablas*/
        th {
        background-color: #dddddd;
        }

        tr:nth-child(even) {
          /* background-color: #dddddd;*/

        }




          .card{
          
 /* 
             display: flex;
*/
           
            width: 50%;

            margin: 10%;
            display: grid;
        
            
            
            border-radius: 30px;
            border: solid #e5e3e3;
  
          }

          /*boton guardar*/
          .card-footer{

            background-color: white;


          }

            /*Centrando todo el contenido*/
            .container{


               /*display: flex;*/
             /* justify-content: center;*/

            }

              /*Div donde estan internamente los elementos del formulario*/
            .grid-container {
           
              display: grid;
              /*auto representa cada columna*/
              
              grid-template-columns: 750px 750px;
              gap: 10px;
              padding: 10px;

            }

            /*Formulario */
            .card-body{

              display: grid;
              /*grid-template-columns: 150px ;
              border: solid black;*/
              padding: 5%;
            }
            .formulario {

              text-align: left;
                display: grid;

                
                
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


  <!-- @if (auth()->check())
  @else
  
  @endif -->






  <div class="grid-container">
   
<!-- container-fluid -->
  <div class="container">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Registrar consumo de químicos

    </div>


    <div class="card-body ">


      <!-- Formulario para agregar una carga -->

      <form name="" id="" method="post" action="{{url('cargas')}}">
       @csrf
       
       <div class="formulario">

              <!-- Fecha  -->
              
              
              <label for="cantidad">Químico</label>
              <!-- Lista que se llena con los quimicos que se encuentran en la DB, en el valor se almacena 
                el id que servirá para guardar la carga-->
              <select name="idquimico">
                @foreach($quimicos as $quimic)

                  <option value="{{$quimic->id}}">{{$quimic->nombre}}</option>

                @endforeach

                 

              </select>

              <label for="cantidad">Cantidad</label>
              <input id="cantidad" type="number" name="cantidad" placeholder="Cantidad " required>
              <label for="">Fecha</label>
              <input type="date" name="fecha" required>
              <label for="">Hora</label>
               <input type="text" name="hora" placeholder="Formato: 00:00" required> 
             
              <label for="">Grupo de turno</label>
              <select name="grupo">
                      
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
         
              </select>


              <div class="card-footer">

              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Guardar</button>
              </div>


      </div>


      </form>





     



    </div>

  </div>





</div>

 <!-- Tabla que muestra el movimiento de las cargas de los quimicos para el mes  -->

<div class="historial">
  
        




      <h5>Historial de consumo de químicos</h5>

      <!-- Formulario para realizar busqueda -->
      <form name="" id="" method="post" action="{{url('quimico') }}">
      @csrf

      <!-- Listado de quimicos a mostrar -->
      <label>Químico:</label>

       <select name="idquimico">
            <option value=" ">Todos</option>
                @foreach($quimicos as $quimic)

                  <option value="{{$quimic->id}}">{{$quimic->nombre}}</option>

                @endforeach

                 

        </select>
        <label for="fecha">Fecha:</label>
         <input type="date" name="fecha" value="{{$fecha}}">
        <button class="btn btn-outline-success" type="submit">Mostrar</button>
      </form>





        <table class="table">

          <thead class="thead-light">
            <tr>
              <th>Fecha</th>
              <th>Químico</th>
              <th>Carga</th>
              <th>Hora</th>
              <th>Grupo</th>
              <th>Editar</th>


            </tr>
          </thead>
          <tbody>


        @foreach($cargas_mes as $carga)

      <!-- Fecha  Quimico   Carga   Hora  Grupo -->
            <tr>
              <td>{{$carga->fecha}}</td>
              <td>{{$carga->nombre}}</td>
              <td>{{$carga->cantidad}}</td>
              <td>{{$carga->hora}}</td>
              <td>{{$carga->grupo}}</td>
                <td>
                                          <a href="/editarCarga{{$carga->id}}">
                                            <img src="{{ asset('img/editar.png')}}"  />
                                          </a>
                 </td>
                 
            </tr>



        @endforeach

<!-- Mostrando la sumatoria de la carga del quimico filtrado para un mes, se obtiene y se muestra de igual forma la unidad de peso con la que se almacenó en la BD. Los datos solo se muestran para un solo quimico en particular, por ello se pone la restriccion  -->
        @if(($suma_carga) > 0)

        <tr>

          <td>Total</td>
          <td></td>
          <td> {{number_format($suma_carga)}} {{$unidad->unidad}}

                
           </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

        @endif
       
        

             
          </tbody>
        </table>
</div>



</div>



     
</body>
</html>
