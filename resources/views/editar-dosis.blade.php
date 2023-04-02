<!DOCTYPE html>
<html>
<head>
    <title>Paros de operación</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="{{ asset('css/edit-dosis.css') }}" />



  <!-- Controla el menu -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Fin barra menu -->


@extends('layouts.app')



</head>
<body>
  @section('navegador')
   
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
      Edición de datos: {{$coagulante->fecha}}, {{$coagulante->hora}} horas

    </div>

    <div  class="card-body">




      <form name="" id="" class="form-principal" method="post" action="{{url('actualizar-dosis')}}">
       @csrf
       
       
              <div>
                      <!-- Elemento oculto que captura el id de la carga a actualizar  -->
                      <input type="hidden" name="id_carga" value="">
                      
                    <!-- Fecha y hora ocultos, pues se muestran en el titulo superior, sin embargo se toman en cuentra para editar los datos en la BD -->
                      
                      <input type="hidden" name="fecha" class="form-control" value="{{$coagulante->fecha}}" required>
                      
                      
                      <input type="hidden" name="hora" class="form-control"  value="{{$coagulante->hora}}">


              </div>
        
        
        
<!-- Ini -->
<!-- Inicio inputs -->
        
       
           <div class="" >

                <h5>Dosificaciones PPM</h5>

                                 

                <!-- coagulante cambiar a un select para tomar en cuenta el PAC tambien-->
                <label>Coagulante</label>
                <input type="hidden"  name="id_coagulante"  value="{{$coagulante->id}}" required>
                <input id="cantidad" type="text" class="form-control" name="coagulante"  value="{{$coagulante->dosis}}" placeholder="Coagulante - PPM" required>
                
                      
                   <!-- Dosificacion de cal -->
                  
                  <!-- Si el dato esta vacio se deberá guardar con la fecha y hora correspondiente -->
                  @if(empty($cal))
                 
                  @else
                  <label>Cal</label>
                  <input type="hidden" name="id_cal"  value="{{$cal->id}}" >
                  <input type="text" class="form-control" name="cal"  value="{{$cal->dosis}}" > 
                  @endif
                    

                     
                        <!-- Dosificacion de permanganato -->
                        <label>Permanganato</label>
                      <input type="hidden" name="id_permanganato"  value="{{$perma->id}}" >
                      <input type="text" class="form-control" name="permanganato"  value="{{$perma->dosis}}" > 

                      <!-- Dosificacion polimero--> 
                      <label>Polimero</label>
                      <input type="hidden" name="id_polimero"  value="{{$polime->id}}" >
                      <input type="text" class="form-control" name="polimero"  value="{{$polime->dosis}}" > 
                      <!-- Dosificacion Carbon--> 
                      <label>Carbón</label>
                       
                      <input type="hidden" name="id_carbon"  value="{{$carbon->id}}" >
                      <input type="text" name="carbon" class="form-control" value="{{$carbon->dosis}}" > 
                      <label>Cloro (kg/h)</label>
                      <!-- Dosificacion Cloro -->
                      
                      <input type="hidden" name="id_cloro"  value="{{$cloro->id}}" >
                     <input type="text" name="cloro" class="form-control"  value="{{$cloro->dosis}}" > 
                     
              

            </div>

             




            <div class="" >
                <h5 >Bocatoma</h5>
              
              <label >Nivel cámara</label>
              <input type="text" id="" name="nivel_c_bt" class="form-control" value="{{$bt->nivel_camara}}" placeholder="N.Camara">
              <label >Nivel Río</label>
              <input type="text" id="" name="nivel_rio" class="form-control" value="{{$bt->nivel_rio}}" placeholder="N.Rio">
              <!-- Corresponde al id unico de la tabla producciones, con este luego actualizamos los datos  -->
              <input type="hidden" name="idbt" value="{{$bt->id}}"> 
              
              
            </div>
            <div class="" >
                <h5>EB1</h5>
             
              <label >Nivel cámara</label>
              <input type="text" id="" name="nivel1" class="form-control" value="{{$eb1->nivel_camara}}" placeholder="N.Camara">
              <label >Cloro</label>
              <input type="text" id="" name="cloro1" class="form-control" value="{{$eb1->cloro_residual}}" placeholder="Cloro">
               <input type="hidden" name="ideb1" value="{{$eb1->id}}"> 
              
             
              
            </div>
            <div class="" >
                <h5>EB2</h5>
              
              <label >Nivel cámara</label>
              <input type="text" id="" name="nivel2" class="form-control" value="{{$eb2->nivel_camara}}" placeholder="N.Camara">
              <label >Cloro</label>
              <input type="text" id="" name="cloro2" class="form-control" value="{{$eb2->cloro_residual}}" placeholder="Cloro">
                <input type="hidden" name="ideb2" value="{{$eb2->id}}"> 
              
              
            </div>
             <div class="" >
                <h5>EB3</h5>
                
                <label >Nivel cámara</label>
                <input type="text" id="" name="nivel3" class="form-control" value="{{$eb3->nivel_camara}}" placeholder="N.Camara">
                <label >Cloro</label>
              <input type="text" id="" name="cloro3" class="form-control" value="{{$eb3->cloro_residual}}" placeholder="Cloro">
              <input type="hidden" name="ideb3" value="{{$eb3->id}}"> 
              
              

              
            </div>

             <div class="" >
              <h5>Terminales</h5>
              
              <label for="">Nivel</label>
              <input type="text" id="" name="nivel4" class="form-control" value="{{$tt->nivel_camara}}" placeholder="Terminales">
              <label for="">Cloro</label>
              <input type="text" id="" name="cloro4" class="form-control" value="{{$tt->cloro_residual}}" placeholder="Terminales">
              <input type="hidden" name="idtt" value="{{$tt->id}}"> 
             
              
            </div>
            <div class="" >
                <h5>B.V. Nuevo </h5>
              
              <label for="">Nivel</label>
              <input type="text" id="" name="nivel5" class="form-control" value="{{$bvn->nivel_camara}}" placeholder="Nuevo" >
              <label for="">Cloro</label>
              <input type="text" id="" name="cloro5" class="form-control" value="{{$bvn->cloro_residual}}" placeholder="B.V.Nuevo">
             <input type="hidden" name="idbvn" value="{{$bvn->id}}"> 
              
            </div>
            <div class="" >
                <h5>B.V. Viejo </h5>
              
              <label for="">Nivel</label>
              <input type="text" id="" name="nivel6" class="form-control" value="{{$bvv->nivel_camara}}" placeholder="Viejo">
              <input type="hidden" name="idbvv" value="{{$bvv->id}}">
            
              
            </div>


            <!-- Se verifica que no se haya agregado un valor anteriormente a Tanque Las Pavas durante el dia, de lo contrario no se mostrarán los controles en la vista -->
            

              @if(empty($pv))

              @else

              <div class="" >
                <h5>Tanque Las Pavas</h5>
              
              <label for="">Aporte (m³/d)</label>
              <input type="text" id="" name="aporte_pavas" class="form-control" value="{{$pv->caudal}}" placeholder="Tanque Las Pavas">
            <input type="hidden" name="idpv" value="{{$pv->id}}">

              
              
            </div>
              @endif


             
            
            
           
                    


        
<!-- Fin inputs-->


      
      <div></div>

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Actualizar</button>

      </form>




    </div>
    <!-- Fin card-body -->

    <div class="card-footer">


        
    </div>
     

  </div>





</div>











</div>

@endsection
     
</body>
</html>
