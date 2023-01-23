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


<br><br>
<h5>Equipos operando</h5>  

            <div class="grid-container">

                
                                        
                                          
                                          
                
                <!-- Extrayendo los ids de la tabla OPERACIONS de los equipos Sin Operar BT -->
             
                

            <section class="card ">
                    <!-- Muestra el nombre de la estacion -->
                  <label class="card-header">BT</label>

            <!-- Controla los inputs -->
            



                
               
                                    
                
                <br>
                
                                


               <div class="checkbox" >

                
                <!-- Se captura la variable $ids para utilizar sus valores en los chekbox y hidden -->
                @foreach ($ids as $prod)
                <!-- Con este switch se captura el id_equipo y se imprimen los datos, ademas los valores correspondientes a cada equipo se utilizaran para realizar las modificaciones necesarias -->
                         @switch($prod->id_equipo)
                                 
                                @case(1)
                    <label > 1</label>

                    
                    <!-- Se valida en los checkbox si previamente los equipos estaban operando, de ser asi se seleccionan  -->
                    <input type="checkbox" id="" name= "eq1" value="Operando" 

                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

                    >
                 

                    
                    <input type="hidden" id="" name= "ideq1" value="1">
                    <!-- se obtiene previamente el id correspondiente del equipo a modificar el estado y se agrega a este elemento oculto para luego enviarlo por el formulario -->
                    <input type="hidden" id="" name= "id1" value="{{$prod->id}}">
                                @break
                                @case(2)
                                <label> 2</label>
                    <input type="checkbox" id="" name= "eq2" value="Operando"
                     
                     <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

                    >
                    <input type="hidden" id="" name= "ideq2" value="2">
                    <!-- Manejando el id del campo a modificar en la tabla operacions -->
                    <input type="hidden" id="" name= "id2" value="{{$prod->id}}">
                                @break
                                @case(3)
                    <label> 3</label>
                    <input type="checkbox" id="" name= "eq3" value="Operando"

                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

                    >
                    <input type="hidden" id="" name= "ideq3" value="3">
                    <input type="hidden" id="" name= "id3" value="{{$prod->id}}">
                                @break
                            @case(4)
                    <label> 4</label>
                    <input type="checkbox" id="" name= "eq4" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

                    >
                    <input type="hidden" id="" name= "ideq4" value="4">
                    <input type="hidden" id="" name= "id4" value="{{$prod->id}}">

                            @break
                            @case(5)
                    <label> 5</label>
                    <input type="checkbox" id="" name= "eq5" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>


                    >
                    <input type="hidden" id="" name= "ideq5" value="5">
                    <input type="hidden" id="" name= "id5" value="{{$prod->id}}">
                            @break
                            @case(6)
                    <label> 6</label>
                    <input type="checkbox" id="" name= "eq6" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

                    >
                    <input type="hidden" id="" name= "ideq6" value="6">
                    <input type="hidden" id="" name= "id6" value="{{$prod->id}}">
                            @break
                            @case(7)
                    <label> 7</label>
                    <input type="checkbox" id="" name= "eq7" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

                    >
                    <input type="hidden" id="" name= "ideq7" value="7">
                    <input type="hidden" id="" name= "id7" value="{{$prod->id}}">
                            @break
                            @case(8)
                    <label> 8</label>
                    <input type="checkbox" id="" name= "eq8" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

                    >
                    <input type="hidden" id="" name= "ideq8" value="8">
                    <input type="hidden" id="" name= "id8" value="{{$prod->id}}">
                            @break
                          
                             
                                @default
                                    
                        @endswitch
                   
            

                @endforeach

                </div>
                
          
                        
            </section>
            <section class="card ">
                   
                <!-- EB1 -->
                <label class="card-header">EB1</label>
                <!-- se captura el id del campo de eb1 -->
                <input type="hidden" name="id_eb1" value="">
                <div class="checkbox" >

@foreach ($id1 as $prod)
    <!-- El filtro es el id de cada equipo, en el campo oculto se puede ver el que tienen asignado segun 
    la BD -->
        @switch($prod->id_equipo)
        @case(9)
        <label> 1</label>
        <input type="checkbox" id="" name= "eb11" value="Operando" 
        <?php if ($prod->estado === "Operando"): ?>
                        checked
        <?php endif ?>

        >
        <input type="hidden" id="" name= "ideq11" value="9">
        <input type="hidden" id="" name= "id9" value="{{$prod->id}}">
        @break
        @case(10)
        <label> 2</label>
        <input type="checkbox" id="" name= "eb12" value="Operando"
                <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

        >
        <input type="hidden" id="" name= "ideq21" value="10">
        <input type="hidden" id="" name= "id10" value="{{$prod->id}}">
        @break
        @case(11)
        <label> 3</label>
        <input type="checkbox" id="" name= "eb13" value="Operando "
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

        >
        <input type="hidden" id="" name= "ideq31" value="11">
        <input type="hidden" id="" name= "id11" value="{{$prod->id}}">
        @break
        @case(12)
         <label> 4</label>
        <input type="checkbox" id="" name= "eb14" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

        >
        <input type="hidden" id="" name= "ideq41" value="12">
        <input type="hidden" id="" name= "id12" value="{{$prod->id}}">
        @break
        @case(13)
        <label> 5</label>
        <input type="checkbox" id="" name= "eb15" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>
        >
        <input type="hidden" id="" name= "ideq51" value="13">
        <input type="hidden" id="" name= "id13" value="{{$prod->id}}">
        @break
        @case(14)
          <label> 6</label>
        <input type="checkbox" id="" name= "eb16" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>
        >
        <input type="hidden" id="" name= "ideq61" value="14">
        <input type="hidden" id="" name= "id14" value="{{$prod->id}}">
        @break
        @case(15)
        <label> 7</label>
        <input type="checkbox" id="" name= "eb17" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>
        >
        <input type="hidden" id="" name= "ideq71" value="15">
        <input type="hidden" id="" name= "id15" value="{{$prod->id}}">
        @break
        @default
        @endswitch
@endforeach




                    
                    
                    
                   
                    
                  
                    
                   
                </div>

             
          
          
                        
            </section>

        <section class="card ">
              
                             <!-- EB2 -->
                <label class="card-header">EB2</label>
                <input type="hidden" name="id_eb2" value="">
                
               <div class="checkbox" >

@foreach ($id2 as $prod)
    <!-- El filtro es el id de cada equipo, en el campo oculto se puede ver el que tienen asignado segun 
    la BD -->
        @switch($prod->id_equipo)
        @case(16)
        <label> 1</label>
        <input type="checkbox" id="" name= "eb21" value="Operando" 
        <?php if ($prod->estado === "Operando"): ?>
                        checked
        <?php endif ?>

        >
        <input type="hidden" id="" name= "ideq12" value="16">
        <input type="hidden" id="" name= "id16" value="{{$prod->id}}">
        @break
        @case(17)
        <label> 2</label>
        <input type="checkbox" id="" name= "eb22" value="Operando"
            <?php if ($prod->estado === "Operando"): ?>
                        checked
            <?php endif ?>
        >
        <input type="hidden" id="" name= "ideq22" value="17">
        
        <input type="hidden" id="" name= "id17" value="{{$prod->id}}">
        @break
        @case(18)
        <label> 3</label>
        <input type="checkbox" id="" name= "eb23" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

        >
        <input type="hidden" id="" name= "ideq32" value="18">
        
        <input type="hidden" id="" name= "id18" value="{{$prod->id}}">
        @break
        @case(19)
         <label> 4</label>
        <input type="checkbox" id="" name= "eb24" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

        >
        <input type="hidden" id="" name= "ideq42" value="19">
        
        <input type="hidden" id="" name= "id19" value="{{$prod->id}}">
        @break
        @case(20)
        <label> 5</label>
         <input type="checkbox" id="" name= "eb25" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

         >
        <input type="hidden" id="" name= "ideq52" value="20">
        
        <input type="hidden" id="" name= "id20" value="{{$prod->id}}">
        @break
        @case(21)
          <label> 6</label>
        <input type="checkbox" id="" name= "eb26" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>
        >
        <input type="hidden" id="" name= "ideq62" value="21">
        
        <input type="hidden" id="" name= "id21" value="{{$prod->id}}">
        @break
        @case(22)
        <label> 7</label>
        <input type="checkbox" id="" name= "eb27" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

        >
        <input type="hidden" id="" name= "ideq72" value="22">
        
        <input type="hidden" id="" name= "id22" value="{{$prod->id}}">
        @break
        @default
        @endswitch
@endforeach


                    
                   
                </div>
          
                        
        </section>

             <section class="card ">
                    
                             <!-- EB3 -->
                <label class="card-header">EB3</label>
                <input type="hidden" name="id_eb3" value="">
                <!-- Precarga equipos operando EB3 -->
                 <div class="checkbox" >

@foreach ($id3 as $prod)
    <!-- El filtro es el id de cada equipo, en el campo oculto se puede ver el que tienen asignado segun 
    la BD -->
        @switch($prod->id_equipo)
        @case(23)
        <label> 1</label>
        <input type="checkbox" id="" name= "eb31" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

        >
        
        <input type="hidden" id="" name= "id23" value="{{$prod->id}}">
        @break
        @case(24)
        <label> 2</label>
        <input type="checkbox" id="" name= "eb32" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

        >
        
        
        <input type="hidden" id="" name= "id24" value="{{$prod->id}}">
        @break
        @case(25)
        <label> 3</label>
        <input type="checkbox" id="" name= "eb33" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>
        >
        
        
        <input type="hidden" id="" name= "id25" value="{{$prod->id}}">
        @break
        @case(26)
         <label> 4</label>
        <input type="checkbox" id="" name= "eb34" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

        >
        
        
        <input type="hidden" id="" name= "id26" value="{{$prod->id}}">
        @break
        @case(27)
        <label> 5</label>
         <input type="checkbox" id="" name= "eb35" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>

         >
        
        
        <input type="hidden" id="" name= "id27" value="{{$prod->id}}">
        @break
        @case(28)
          <label> 6</label>
        <input type="checkbox" id="" name= "eb36" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>
        >
        
        
        <input type="hidden" id="" name= "id28" value="{{$prod->id}}">
        @break
        @case(29)
        <label> 7</label>
        <input type="checkbox" id="" name= "eb37" value="Operando"
                    <?php if ($prod->estado === "Operando"): ?>
                        checked
                    <?php endif ?>
        >
        
        
        <input type="hidden" id="" name= "id29" value="{{$prod->id}}">
        @break
        @default
        @endswitch
@endforeach



                   
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
