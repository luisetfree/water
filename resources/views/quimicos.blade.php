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

          .card{
            margin: 10%;

             display: flex;

           
            width: 50%;
  
          }

            /*centrando todo el contenido*/
            .container{

               display: flex;
              justify-content: center;
            }

              /*Div donde estan internamente los elementos del formulario*/
            .grid-container {
           
              display: grid;
              /*auto representa cada columna*/
              
              
              gap: 10px;
              padding: 10px;

            }
            

            .checkbox{
              font-size: 15px;
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
   
<!-- container-fluid -->
  <div class="container">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      CONSUMO DE QUIMICOS

    </div>
    <div class="card-body ">




      <form name="" id="" method="post" action="{{url('cargas')}}">
       @csrf
       
       <div class="grid-container">

        <!-- Fecha  -->
        
        
        <label for="cantidad">Quimico</label>
        <!-- Lista que se llena con los quimicos que se encuentran en la DB, en el valor se almacena 
          el id que servirá para guardar la carga-->
        <select name="idquimico">
          @foreach($quimicos as $quimic)

            <option value="{{$quimic->id}}">{{$quimic->nombre}}</option>

          @endforeach

           

        </select>

        <label for="cantidad">Cantidad</label>
        <input id="cantidad" type="number" name="cantidad" placeholder="Cantidad ">
        <label for="">Fecha</label>
        <input type="date" name="fecha">
        <label for="">Hora</label>
        <select name="hora">
          @for($i = 1; $i < 25; $i++)


            @if ($i <= 9)
                <option value="0{{$i}}:00">0{{$i}}:00</option>
          
            @else
                <option value="{{$i}}:00">{{$i}}:00</option>
            @endif
          

          @endfor
          
        </select>
        <label for="">Grupo de turno</label>
        <select name="grupo">
                
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
   
        </select>

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Guardar</button>


      </div>


      </form>





     



    </div>

  </div>

</div>

<div class="container">
  
  <h4>Consumo de quimicos</h4>

 <!-- Tabla que muestra el movimiento de las cargas de los quimicos para el mes

  -->

  <table class="table">

    <thead class="thead-light">
      <tr>
        <th>Fecha</th>
        <th>Quimico</th>
        <th>Carga</th>
        <th>Hora</th>
        <th>Grupo</th>


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
      </tr>

  @endforeach



       
    </tbody>
  </table>
</div>
     
</body>
</html>
