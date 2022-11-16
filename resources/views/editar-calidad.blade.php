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
            <select id="" name="hora" class="" required=""> 
                   <!-- Validando para hora que no se haya ingresado un dato previamente -->
                  
                 <option value="01:00">01:00</option>
                 <option value="02:00">02:00</option>
                 <option value="03:00">03:00</option>
                 <option value="04:00">04:00</option>
                 <option value="05:00">05:00</option>
                 <option value="06:00">06:00</option>
                 <option value="07:00">07:00</option>
                 <option value="08:00">08:00</option>
                 <option value="09:00">09:00</option>
                 <option value="10:00">10:00</option>
                 <option value="11:00">11:00</option>
                 <option value="12:00">12:00</option>
                 <option value="13:00">13:00</option>
                 <option value="14:00">14:00</option>
                 <option value="15:00">15:00</option>
                 <option value="16:00">16:00</option>
                 <option value="17:00">17:00</option>
                 <option value="18:00">18:00</option>
                 <option value="19:00">19:00</option>
                 <option value="20:00">20:00</option>
                 <option value="21:00">21:00</option>
                 <option value="22:00">22:00</option>
                 <option value="23:00">23:00</option>
                 <option value="24:00">24:00</option>
                                    
          
                       
             </select>





            <div class="grid-container">

                

                   <section class="card ">
                    <select id="" name="agua" class="" required=""> 
                   <!-- Para seleccionar el tipo de agua a modificar, los numeros representan el id respectivo para cada tipo de agua -->
                  
                             <option value="1">Cruda</option>
                             <option value="2">Clarificada</option>
                             <option value="3">Filtrada</option>
                             <option value="4">Tratada</option>
       
                       
                    </select>


                        <!-- este input hace referencia al id del agua cruda 1 
                        <input type="hidden" name="id_agua_c" value="1" >  -->
                        <input type="text" name="turb_c" placeholder="Turbidez" required="" value="
                        @foreach ($datos as $turb)
                   
                                              {{ $turb->turbidez}} 

                        @endforeach    ">
                        <input type="text" name="ph_c" placeholder="PH" required="" value="
                        @foreach ($datos as $p)
                   
                                              {{$p->ph}} 

                        @endforeach 



                        ">
                        <input type="text" name="temp_c" placeholder="temperatura" required="" value="
                        @foreach ($datos as $tmp)
                   
                                              {{$tmp->temperatura}} 

                        @endforeach 




                        ">
                        <input type="text" name="color_c" placeholder="Color" value="
                        @foreach ($datos as $cl)
                   
                                              {{$cl->color}} 

                        @endforeach 



                        ">

                    </section>
               
            </div>

            <div class="">

       <!--  <button type="submit" class="btn btn-outline-primary">Cargar</button> -->
    
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
