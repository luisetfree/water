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
            
           /* display: flex;
            justify-content: center;*/
            
            border-radius: 30px;
            border: solid #e5e3e3;





  
          }

         

              /*Div donde estan internamente los elementos del formulario*/
            .grid-container {
                /*grid*/
                display: grid;
              
                padding: 10px;


              
            border: solid black;
            }
            
           input {
                  width: 90%;
                  height: 30px;
                  margin: 0.5rem;
                }

                /*Contiene todos los inputs */
              .form-principal{

          display: grid;
          grid-template-columns: 150px auto auto auto auto auto auto auto auto auto;
          gap: 10px;
          
          padding: 10px;

          
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
   
<div class=""> 



<!-- container-fluid -->
  <div class="grid-container">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Editar Datos

    </div>

    <div  class="card-body">




      <form name="" id="" class="form-principal" method="post" action="{{url('actualizar-dosis')}}">
       @csrf
       
       
              <div>
                      <!-- Elemento oculto que captura el id de la carga a actualizar  -->
                      <input type="hidden" name="id_carga" value="">
                      
                  
                      <label for="">Fecha:</label>
                      <input type="date" name="fecha" class="form-control" value="{{$coagulante->fecha}}" required>
                      <label for="">Hora:</label>
                      <select name="hora" class="form-control">
                        <option value="{{$coagulante->hora}}">{{$coagulante->hora}}</option>
                      </select>


              </div>
         <!--
        
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
 -->
        
        
<!-- Ini -->
<!-- Inicio inputs -->
        
       
           <div class="" >

                <h5>Dosificaciones PPM</h5>

                                 

                <!-- coagulante cambiar a un select para tomar en cuenta el PAC tambien-->
                <label>Coagulante</label>
                <input type="hidden"  name="id_coagulante"  value="{{$coagulante->id}}" required>
                <input id="cantidad" type="text" class="form-control" name="coagulante"  value="{{$coagulante->dosis}}" placeholder="Coagulante - PPM" required>
                
                      
                   <!-- Dosificacion de cal -->
                  <label>Cal</label>
                    <input type="hidden" name="id_cal"  value="{{$cal->id}}" required>
                   <input type="text" class="form-control" name="cal"  value="{{$cal->dosis}}" required> 

                     
                        <!-- Dosificacion de permanganato -->
                        <label>Permanganato</label>
                      <input type="hidden" name="id_permanganato"  value="{{$perma->id}}" required>
                      <input type="text" class="form-control" name="permanganato"  value="{{$perma->dosis}}" required> 

                      <!-- Dosificacion polimero--> 
                      <label>Polimero</label>
                      <input type="hidden" name="id_polimero"  value="{{$polime->id}}" required>
                      <input type="text" class="form-control" name="polimero"  value="{{$polime->dosis}}" required> 
                      <!-- Dosificacion Carbon--> 
                      <label>Carbón</label>
                       
                      <input type="hidden" name="id_carbon"  value="{{$carbon->id}}" required>
                      <input type="text" name="carbon" class="form-control" value="{{$carbon->dosis}}" required> 
                      <label>Cloro (kg/h)</label>
                      <!-- Dosificacion Cloro -->
                      
                      <input type="hidden" name="id_cloro"  value="{{$cloro->id}}" required>
                     <input type="text" name="cloro" class="form-control"  value="{{$cloro->dosis}}" required> 
                     
              

            </div>

             




            <div class="" >
                <h5 >Bocatoma</h5>
              
              <input type="text" id="" name="caudal" class="form-control"  placeholder="Caudal">
              <input type="text" id="" name="nivel_camara" class="form-control" placeholder="N.Camara">
              <input type="text" id="" name="nivel_rio" class="form-control" placeholder="N.Rio">
              
              
            </div>
            <div class="" >
                <h5>EB1</h5>
              
             <input type="text" id="" name="caudaleb1" class="form-control" placeholder="Caudal">
              <input type="text" id="" name="nivel1" class="form-control" placeholder="N.Camara">
              <input type="text" id="" name="cloro1" class="form-control" placeholder="Cloro">
              
             
              
              
              
              <!-- Representa el id de EB1 -->
              <input type="hidden" id="" name="id_eb1" class="form-control" value="2" >
              
            </div>
            <div class="" >
                <h5>EB2</h5>
              
              <input type="text" id="" name="caudaleb2" class="form-control" placeholder="Caudal">
              <input type="text" id="" name="nivel2" class="form-control" placeholder="N.Camara">
              <input type="text" id="" name="cloro2" class="form-control" placeholder="Cloro">
              
                 
              
              <!-- Representa el id de EB2 -->
              <input type="hidden" id="" name="id_eb2" class="form-control" value="3" >
              
              
            </div>
             <div class="" >
                <h5>EB3</h5>
                <input type="text" id="" name="caudaleb3" class="form-control" placeholder="Caudal">
                <input type="text" id="" name="nivel3" class="form-control" placeholder="N.Camara">
              <input type="text" id="" name="cloro3" class="form-control" placeholder="Cloro">
               <!-- Representa el id de EB3 -->
              <input type="hidden" id="" name="id_eb3" class="form-control" value="4" >
              <!-- EB3 -->
              

              
            </div>

             <div class="" >
                <h5>Terminales</h5>
              
              <label for="">Nivel</label>
              <input type="text" id="" name="nivel4" class="form-control" placeholder="Terminales">
              <label for="">Cloro</label>
              <input type="text" id="" name="cloro4" class="form-control" placeholder="Terminales">
               <!-- Representa el id de tanques terminales -->
              <input type="hidden" id="" name="id_terminal" class="form-control" value="5" >
              
            </div>
            <div class="" >
                <h5>B.V. Nuevo </h5>
              
              <label for="">Nivel</label>
              <input type="text" id="" name="nivel5" class="form-control" placeholder="Nuevo" >
              <label for="">Cloro</label>
              <input type="text" id="" name="cloro5" class="form-control" placeholder="B.V.Nuevo">
               <!-- Representa el id de Bella vista nuevo -->
              <input type="hidden" id="" name="id_nuevo" class="form-control" value="6" >
              
            </div>
            <div class="" >
                <h5>B.V. Viejo </h5>
              
              <label for="">Nivel</label>
              <input type="text" id="" name="nivel6" class="form-control" placeholder="Viejo">
             <!--  <label for="">Cloro</label>
              <input type="text" id="" name="cloro6" class="form-control" placeholder="B.V.Viejo"> -->
               <!-- Representa el id de Bella vista viejo -->
              <input type="hidden" id="" name="id_viejo" class="form-control" value="7" >
              
            </div>


            <!-- Se verifica que no se haya agregado un valor anteriormente a Tanque Las Pavas durante el dia, de lo contrario no se mostrarán los controles en la vista -->
            
             <div class="" >
                <h5>Tanque Las Pavas</h5>
              
              <label for="">Aporte (m³/d)</label>
              <input type="text" id="" name="aporte_pavas" class="form-control" placeholder="Tanque Las Pavas">
            
              <input type="hidden" id="" name="id_pavas" class="form-control" value="8" >
              
            </div>
            
            
           
                    


        
<!-- Fin inputs-->



      

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Actualizar</button>

      </form>




    </div>
    <!-- Fin card-body -->

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
