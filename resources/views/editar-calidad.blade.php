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
  grid-template-columns: auto auto auto ;
  grid-template-rows: 80px 90px;
  gap: 10px;
  
  padding: 10px;
}


.checkbox{
  font-size: 15px;
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
       <!-- @method('put') Permitirá actualizar valores -->

        <!-- Fecha -->
       <input type="date" name="fecha_calidad" value="" required="required">


        <!-- Select mostrará unicamente las horas que hacen falta agregar al registro diario -->
       <label for="hora">Hora</label>
       

        <!-- Gracias a la funcion precargar se muestra la hora de los valores que se está actualizando -->
            <select id="" name="hora" class="" required=""> 
                   <!-- Validando para hora que no se haya ingresado un dato previamente -->
                  
                 <option value="@foreach ($datos as $hora)
                   
                                              {{$hora->hora}} 

                        @endforeach ">

                        @foreach ($datos as $h)
                   
                                              {{$h->hora}} 

                        @endforeach 


                </option>
             
                                    
          
                       
             </select>



<br><br>

            <div class="grid-container">

                

                   <section class="card ">
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
                        <label>Turbidez</label>
                        <input type="text" name="turb_c" placeholder="Turbidez" required="" value="
                        @foreach ($datos as $turb)
                   
                                              {{ $turb->turbidez}} 

                        @endforeach    ">
                    

                        <label>PH</label>
                        <input type="text" name="ph_c" placeholder="PH" required="" value="
                        @foreach ($datos as $p)
                   
                                              {{$p->ph}} 

                        @endforeach 



                        ">
                        <label>Temperatura</label>
                        <input type="text" name="temp_c" placeholder="temperatura" required="" value="
                        @foreach ($datos as $tmp)
                   
                                              {{$tmp->temperatura}} 

                        @endforeach 




                        ">
                        <label>Color</label>
                        <input type="text" name="color_c" placeholder="Color" value="
                        @foreach ($datos as $cl)
                   
                                              {{$cl->color}} 

                        @endforeach 



                        ">

                    </section>
               
            </div>

            <div class="">

       <!--  <button type="submit" class="btn btn-outline-primary">Cargar</button> -->
       <br><br><br><br><br>
    
        <button type="submit" class="btn btn-outline-primary">Actualizar</button>
         <!-- <input type="hidden" class="date" id="date" name="fecha_fantasma">  -->

            </div>


      </form>


<div class="container">



      

</div> 



    </div>



                                   
                                 
               

                                          

                                
               
                                          

                                
         


  </div>

</div>


</body>
</html>
