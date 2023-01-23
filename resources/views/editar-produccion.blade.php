<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        table {
          font-family: times, sans-serif;
          border-collapse: collapse;
          width: 100%;

        }

        td, th {
          border: 1px solid #dddddd;
          text-align: center;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;

        }



/*Maneja los encabezados bocatoma-eb1-2-3*/
.grid-container {
  display: grid;
  /*auto representa cada columna*/
  grid-template-columns: auto auto auto auto ;

  grid-template-rows: 80px 90px;
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


</body>
</html>
