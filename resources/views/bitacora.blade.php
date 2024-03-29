<!DOCTYPE html>
<html>
<head>
    <title>Resumen de Bitacora</title>
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

<link rel="stylesheet" href="{{ asset('css/bitacora.css') }}" />


@extends('layouts.app')










</head>
<body>

  @section('navegador')
   

  <div class="container-fluid">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      CONTROL DE DATOS

    </div>
    <div class="card-body">



      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('bitacora')}}">
       @csrf
       

        <!-- Fecha  -->
        
        <label>Fecha</label>
        <input type="date" name="fecha" value="">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ver</button>





      </form>





     



    </div>

   
      


        



 <!-- Tabla resumen de Bitacora -->
      <TABLE >

                  <!-- Encabezados principales -->  
            <TR>
              <th rowspan="3">Fecha</th>
              <th rowspan="3">Caudal BT(m³/h)-X̅</th>
              <th rowspan="3">Cloro</th>
              <TH COLSPAN=6>PPM</TH>
              <th rowspan="3">Caudal BT (m³/d)</th>
              <th rowspan="3">Horas trabajadas</th>
              <TH COLSPAN=6>Agua Cruda</TH>
              <TH COLSPAN=6>Agua Clarificada</TH>
              <TH COLSPAN=6>Agua Filtrada</TH>
              <TH COLSPAN=6>Agua Tratada</TH>

              
            </TR>
            <!-- Encabezados secundarios -->  
            <TR>
              
              
              
              <TH COLSPAN=3>Cloro residual</TH> <TH COLSPAN=3>Coagulante</TH> 
               
              
              <th colspan="3">Turbidez</th><th colspan="3">PH</th>
              <th colspan="3">Turbidez</th><th colspan="3">PH</th>
              <th colspan="3">Turbidez</th><th colspan="3">PH</th>
              <th colspan="3">Turbidez</th><th colspan="3">PH</th>
              
            </TR>
            <TR>
              
              
              
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              
              
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
            </TR>
            

            
       <!-- De forma automatica se imprimen todos los dias del mes mediante este FOR -->
            @for ($i = 1; $i < 32; $i++)
              


            <TR>
              <td>{{$fecha_[$i]}}</td><!-- Es fecha -->
              <td>{{number_format($bt_caudal[$i])}}</td>
              <td>{{$cloro[$i]}}</td>
              <td>{{$cloro_eb1_min[$i]}}</td><td>{{$cloro_eb1_max[$i]}}</td><td>{{$cloro_eb1_prom[$i]}}</td>
              <td>{{$coag_min[$i]}}</td><td>{{$coag_max[$i]}}</td><td>{{ round($coag_prom[$i],2)}}</td>
              <td>{{ number_format($bt_suma[$i])}}</td>
              <td>{{$bt_horas[$i]}}</td>
              <td>{{$cruda_min[$i]}}</td><td>{{$cruda_max[$i]}}</td><td>{{$cruda_prom[$i]}}</td>
              <td>{{$cruda_ph_m[$i]}}</td><td>{{$cruda_ph_mx[$i]}}</td><td>{{$cruda_ph_p[$i]}}</td>
              <td>{{$clari_min[$i]}}</td><td>{{$clari_max[$i]}}</td><td>{{$clari_prom[$i]}}</td>
              <td>{{$clari_ph_m[$i]}}</td><td>{{$clari_ph_mx[$i]}}</td><td>{{$clari_ph_p[$i]}}</td>
              <td>{{$fil_min[$i]}}</td><td>{{$fil_max[$i]}}</td><td>{{$fil_prom[$i]}}</td>
              <td>{{$fil_ph_m[$i]}}</td><td>{{$fil_ph_mx[$i]}}</td><td>{{$fil_ph_p[$i]}}</td>
              <td>{{$trat_min[$i]}}</td><td>{{$trat_max[$i]}}</td><td>{{$trat_prom[$i]}}</td>
              <td>{{$trat_ph_m[$i]}}</td><td>{{$trat_ph_mx[$i]}}</td><td>{{$trat_ph_p[$i]}}</td>
              
            </TR>

            @endfor




      </TABLE>




         


  </div>

</div>

@endsection
     
</body>
</html>
