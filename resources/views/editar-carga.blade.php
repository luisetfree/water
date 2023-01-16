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
        

          .card{
            margin: 2%;
            
            display: flex;
            justify-content: center;
            
            border-radius: 30px;
            border: solid #e5e3e3;


  
          }

         

              /*Div donde estan internamente los elementos del formulario*/
            .grid-container {
                /*grid*/
                display: grid;
                justify-content: center;
                grid-template-columns: 30% ;
                gap: 10px;
                
                padding: 10px;
              
  
            }
            
           input {
                  width: 90%;
                  height: 30px;
                  margin: 0.5rem;
                }


            /*Boton de eliminar */
            .card-footer{

              text-align: center;
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
      Editar carga

    </div>

    <div  class="card-body">




      <form name="" id="" method="post" action="{{url('')}}">
       @csrf
       
       <div class="">

        <!-- Fecha  -->
        
        
        <label for="cantidad">Químico:</label>
        <!-- Lista que se llena con los quimicos que se encuentran en la DB, en el valor se almacena 
          el id que servirá para guardar la carga-->
        <select name="id_quimico">
          

            <option value="{{$quimico->id}}"> {{$quimico->nombre}}</option>
            
           

        </select>
<br>
        <label for="">Fecha:</label>
        <input type="date" name="fecha" value="{{$carga->fecha}}" required>
        <!-- ID del paro a actualizar -->
        <input type="hidden" name="id_paro" value="">
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
     
</body>
</html>
