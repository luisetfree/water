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
      Editar Dosificaciones

    </div>

    <div  class="card-body">




      <form name="" id="" method="post" action="{{url('actualizar-dosis')}}">
       @csrf
       
       <div class="">

        <!-- Elemento oculto que captura el id de la carga a actualizar  -->
        <input type="hidden" name="id_carga" value="">
        
        
       
<br>
        <label for="">Fecha:</label>
        <input type="date" name="fecha" value="{{$coagulante->fecha}}" required>
        <label for="">Hora:</label>
        <select name="hora">
          <option value="{{$coagulante->hora}}">{{$coagulante->hora}}</option>
        </select>
        
<br>
        <label for="cantidad">Coagulante:</label>
        <input type="hidden" name="id_coagulante"  value="{{$coagulante->id}}" required>
        <input id="cantidad" type="text" name="coagulante"  value="{{$coagulante->dosis}}" required>
       
        
        
        <br>
        
        <label for="">Polímero:</label>
        <input type="hidden" name="id_polimero"  value="{{$polime->id}}" required>
         <input type="text" name="polimero"  value="{{$polime->dosis}}" required> 
         <br>
          <label for="">Permanganato:</label>
          <input type="hidden" name="id_permanganato"  value="{{$perma->id}}" required>
         <input type="text" name="permanganato"  value="{{$perma->dosis}}" required> 
        <br>

        <label for="">Cal:</label><br>
        <input type="hidden" name="id_cal"  value="{{$cal->id}}" required>
         <input type="text" name="cal"  value="{{$cal->dosis}}" required> 
         <br>
         <label for="">Carbón:</label>
         <input type="hidden" name="id_carbon"  value="{{$carbon->id}}" required>
         <input type="text" name="carbon"  value="{{$carbon->dosis}}" required> 

         <label for="">Cloro:</label>
         <input type="hidden" name="id_cloro"  value="{{$cloro->id}}" required>
         <input type="text" name="cloro"  value="{{$cloro->dosis}}" required> 
         
      
        <br>

        
        




      </div>

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Guardar</button>

      </form>




    </div>

    <div class="card-footer">







        <!--Formulario para la eliminacion de un paro en específico-->
        <form name="" id="" method="post" action="{{url('')}}">
         @csrf

        <!-- Elemento oculto que captura el id unico de la carga de quimico y lo utilizamos para eliminar los datos en la BD -->
        <input type="hidden" name="id_carga" value="">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Eliminar</button>

        

        </form>
    </div>
     

  </div>





</div>






</div>
     
</body>
</html>
