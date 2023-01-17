<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
     
      .card{
        display: grid;
        
        width: 40%;
        border: solid #e5e3e3;;
        border-radius: 30px;
     }





input{
align-content: left;
width: 100%;
border-radius: 10px;
}

.card-footer{

text-align: center;
/**border: solid black;*/

}

    


</style>




</head>
<body>
    <!-- Inicio Boton Home -->
    <a href="/"><button class="btn"><i class="fa fa-home" ></i></button> </a>
    <!-- fin Boton Home -->

  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
     Editar calidades de agua

    </div>
    <div class="card-body">

      
      <form name="form-calidad" id="" method="post" action="{{url('actualizar')}}">
       @csrf
   

        <!-- Fecha --><label>Fecha</label>
       <input type="date" name="fecha_calidad" value="{{$datos->fecha}}"  required >



      
          <br><br>

        <!-- Select mostrará unicamente las horas que hacen falta agregar al registro diario -->
       <label for="hora">Hora</label>
       

        <!-- Gracias a la funcion precargar se muestra la hora de los valores que se está actualizando -->
            <select id="" name="hora" class="" required=""> 
                   <!-- Validando para hora que no se haya ingresado un dato previamente -->
                  
            <option value="{{$datos->hora}}">{{$datos->hora}}  </option>
             
                                    
          
                       
             </select>



<br><br>

            

                

                   <label>Tipo de Agua:</label>
                    <select id="" name="agua" class="" required=""> 
                <!-- Recibe la variable Tipo que corresponde al ID del agua que se seleccionó, esto ayudará a mostrar el nombre correcto del agua-->
                  
                @switch($tipo)
                    @case(1)
                        <option value="1">Cruda</option>
                        @break

                    @case(2)
                        <option value="2">Clarificada</option>
                        @break
                    @case(3)
                        <option value="3">Filtrada</option>
                        @break
                    @case(4)
                        <option value="4">Tratada</option>
                        @break

                    @default
                        Seleccionar...
                @endswitch


                       
                    </select>

                    
                        <!-- este input hace referencia al id del agua cruda 1 
                        <input type="hidden" name="id_agua_c" value="1" >  -->
                        <br><br>
                        <label>Turbidez</label>
                        <input type="text" name="turb_c" placeholder="Turbidez" required="" value="{{ $datos->turbidez}}">
                    

                        <label>PH</label>
                        <input type="text" name="ph_c" placeholder="PH" required="" value="{{$datos->ph}}">
                        <label>Temperatura</label>
                        <input type="text" name="temp_c" placeholder="temperatura" required="" value="{{$datos->temperatura}}">
                        <label>Color</label>
                        <input type="text" name="color_c" placeholder="Color" value="{{$datos->color}}">


               
            

            

       <!--  <button type="submit" class="btn btn-outline-primary">Cargar</button> -->
       <br><br><br>
    
        <button type="submit" class="btn btn-outline-primary">Actualizar</button>
         <!-- <input type="hidden" class="date" id="date" name="fecha_fantasma">  -->

            


      </form>
      <br>

    



    </div>

   <!--  <div class="card-footer">

        <form name="form-calidad" class="form" method="post" action="{{url('eliminar-calidad')}}">
        @csrf
        
        <input type="hidden" name="id_calidad" value="{{$datos->id}}">
        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
    
    </div> -->



                           
   
  </div>


</div>


</body>
</html>
