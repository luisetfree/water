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

    <style>
        table {
          font-family: times, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid black;
          text-align: center;
          padding: 4px;
          font-size: 14px;
        }
        /*maneja los encabezados de las tablas*/
        th {
        background-color: #dddddd;
        }

        tr:nth-child(even) {
          /* background-color: #dddddd;*/

        }



            /*Maneja los encabezados bocatoma-eb1-2-3*/
            .grid-container {
              display: grid;
              /*auto representa cada columna*/
              grid-template-columns: auto auto auto auto auto auto auto auto auto;
              grid-template-rows: 80px 120px;
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>












</head>
<body>
   

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
              <th rowspan="3">Caudal BT(m³/h) - X̅</th>
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
              <td>{{$bt_caudal[$i]}}</td>
              <td>{{$cloro[$i]}}</td>
              <td>{{$cloro_eb1_min[$i]}}</td><td>{{$cloro_eb1_max[$i]}}</td><td>{{$cloro_eb1_prom[$i]}}</td>
              <td>{{$coag_min[$i]}}</td><td>{{$coag_max[$i]}}</td><td>{{ round($coag_prom[$i],2)}}</td>
              <td>{{$bt_suma[$i]}}</td>
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

     
</body>
</html>
