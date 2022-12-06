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
     Editar equipos
    </div>
    <div class="card-body">

            





      <form name="form-calidad" id="" method="post" action="{{url('updatEquipos')}}">
       @csrf
       <!-- @method('put') Permitirá actualizar valores -->

        <!-- Fecha -->
       <input type="date" name="fecha" value="{{$fecha}}" required="required">

        <!-- Select mostrará unicamente las horas que hacen falta agregar al registro diario -->
       <label for="hora">Hora</label>

        <!-- Gracias a la funcion precargar se muestra la hora de los valores que se está actualizando -->
            <select id="" name="hora" class="" required=""> 
            <!-- Validando para hora que no se haya ingresado un dato previamente -->
                  
             
                <option value="
                   
                                              {{$hora}} 

                         ">

                        
                   
                                              {{$hora}} 

                        


                </option> 
            
           
                                    
          
                       
             </select>





            <div class="grid-container">

                <!-- Extrayendo los ids de la tabla OPERACIONS de los equipos Operando BT -->
                @foreach ($ids as $prod)
                                          {{$prod->id}}-

                                          {{$prod->id_equipo}}/
                @endforeach
                
                 
                                          
                                          
                                          
                
                <!-- Extrayendo los ids de la tabla OPERACIONS de los equipos Sin Operar BT -->
             
                

            <section class="card ">
                    <!-- Muestra el nombre de la estacion -->
                  <label class="card-header">BT</label>

            <!-- Controla los inputs -->
            



                <!-- Precarga el caudal almacenado en la BD y el id correspondiente-->
                <input type="hidden" name="id_bt" value="">
                
               
                                    
                
                <br>
                
                                


               <div class="checkbox" >

                
                <!-- Se captura la variable $ids para utilizar sus valores en los chekbox y hidden -->
                @foreach ($ids as $prod)
                <!-- Con este switch se captura el id_equipo y se imprimen los datos, ademas los valores correspondientes a cada equipo se utilizaran para realizar las modificaciones necesarias -->
                         @switch($prod->id_equipo)
                                 
                                @case(1)
                    <label > 1</label>

                    <input type="checkbox" id="" name= "eq1" value="Operando">
                    <input type="hidden" id="" name= "ideq1" value="1">
                    <!-- se obtiene previamente el id correspondiente del equipo a modificar el estado y se agrega a este elemento oculto para luego enviarlo por el formulario -->
                    <input type="hidden" id="" name= "id1" value="{{$prod->id}}">
                                @break
                             
                          
                             
                                @default
                                    
                        @endswitch
                   
                  <!--   <label> 2</label>
                    <input type="checkbox" id="" name= "eq2" value="Operando">
                    <input type="hidden" id="" name= "ideq2" value="2">
                    <label> 3</label>
                    <input type="checkbox" id="" name= "eq3" value="Operando">
                    <input type="hidden" id="" name= "ideq3" value="3">
                    <label> 4</label>
                    <input type="checkbox" id="" name= "eq4" value="Operando">
                    <input type="hidden" id="" name= "ideq4" value="4">
                    <label> 5</label>
                    <input type="checkbox" id="" name= "eq5" value="Operando">
                    <input type="hidden" id="" name= "ideq5" value="5">
                    <label> 6</label>
                    <input type="checkbox" id="" name= "eq6" value="Operando">
                    <input type="hidden" id="" name= "ideq6" value="6">
                    <label> 7</label>
                    <input type="checkbox" id="" name= "eq7" value="Operando">
                    <input type="hidden" id="" name= "ideq7" value="7">
                    <label> 8</label>
                    <input type="checkbox" id="" name= "eq8" value="Operando">
                    <input type="hidden" id="" name= "ideq8" value="8"> -->

                @endforeach

                </div>
                
          
                        
            </section>
            <section class="card ">
                   
                <!-- EB1 -->
                <label class="card-header">EB1</label>
                <!-- se captura el id del campo de eb1 -->
                <input type="hidden" name="id_eb1" value="">
                <div class="checkbox" >
                    <label> 1</label>
                    <input type="checkbox" id="" name= "eb11" value="Operando">
                    <input type="hidden" id="" name= "ideq11" value="9">
                    <label> 2</label>
                    <input type="checkbox" id="" name= "eb12" value="Operando">
                    <input type="hidden" id="" name= "ideq21" value="10">
                    <label> 3</label>
                    <input type="checkbox" id="" name= "eb13" value="Operando ">
                    <input type="hidden" id="" name= "ideq31" value="11">
                    <label> 4</label>
                    <input type="checkbox" id="" name= "eb14" value="Operando">
                    <input type="hidden" id="" name= "ideq41" value="12">
                    <label> 5</label>
                    <input type="checkbox" id="" name= "eb15" value="Operando">
                    <input type="hidden" id="" name= "ideq51" value="13">
                    <label> 6</label>
                    <input type="checkbox" id="" name= "eb16" value="Operando">
                    <input type="hidden" id="" name= "ideq61" value="14">
                    <label> 7</label>
                    <input type="checkbox" id="" name= "eb17" value="Operando">
                    <input type="hidden" id="" name= "ideq71" value="15">
                   
                </div>

             
          
          
                        
            </section>

        <section class="card ">
              
                             <!-- EB2 -->
                <label class="card-header">EB2</label>
                <input type="hidden" name="id_eb2" value="">
                
               <div class="checkbox" >
                    <label> 1</label>
                    <input type="checkbox" id="" name= "eb21" value="Operando">
                    <input type="hidden" id="" name= "ideq12" value="16">
                    <label> 2</label>
                    <input type="checkbox" id="" name= "eb22" value="Operando">
                    <input type="hidden" id="" name= "ideq22" value="17">
                    <label> 3</label>
                    <input type="checkbox" id="" name= "eb23" value="Operando">
                    <input type="hidden" id="" name= "ideq32" value="18">
                    <label> 4</label>
                    <input type="checkbox" id="" name= "eb24" value="Operando">
                    <input type="hidden" id="" name= "ideq42" value="19">
                    <label> 5</label>
                    <input type="checkbox" id="" name= "eb25" value="Operando">
                    <input type="hidden" id="" name= "ideq52" value="20">
                    <label> 6</label>
                    <input type="checkbox" id="" name= "eb26" value="Operando">
                    <input type="hidden" id="" name= "ideq62" value="21">
                    <label> 7</label>
                    <input type="checkbox" id="" name= "eb27" value="Operando">
                    <input type="hidden" id="" name= "ideq72" value="22">
                   
                </div>
          
                        
        </section>

             <section class="card ">
                    
                             <!-- EB2 -->
                <label class="card-header">EB3</label>
                <input type="hidden" name="id_eb3" value="">
                <!-- Precarga equipos operando EB3 -->
                 <div class="checkbox" >
                    <label> 1</label>
                    <input type="checkbox" id="" name= "eb31" value="Operando">
                    <input type="hidden" id="" name= "ideq13" value="23">
                    <label> 2</label>
                    <input type="checkbox" id="" name= "eb32" value="Operando">
                    <input type="hidden" id="" name= "ideq23" value="24">
                    <label> 3</label>
                    <input type="checkbox" id="" name= "eb33" value="Operando">
                    <input type="hidden" id="" name= "ideq33" value="25">
                    <label> 4</label>
                    <input type="checkbox" id="" name= "eb34" value="Operando">
                    <input type="hidden" id="" name= "ideq43" value="26">
                    <label> 5</label>
                    <input type="checkbox" id="" name= "eb35" value="Operando">
                    <input type="hidden" id="" name= "ideq53" value="27">
                    <label> 6</label>
                    <input type="checkbox" id="" name= "eb36" value="Operando">
                    <input type="hidden" id="" name= "ideq63" value="28">
                    <label> 7</label>
                    <input type="checkbox" id="" name= "eb37" value="Operando">
                    <input type="hidden" id="" name= "ideq73" value="29">
                   
                </div>

          
                        
            </section>




               
            </div>
<br><br><br><br>
            
           

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
