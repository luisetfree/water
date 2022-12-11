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



      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('')}}">
       @csrf
       








      </form>





     



    </div>

    <!-- Tabla que muestra los valores almacenados -->
        <table>
            

   
                <!-- Encabezados de la tabla -->

              <tr>
                <th>Fecha</th>
                <th>Caudal BT(m³/h)</th>
                <th>Cloro</th>
                <th colspan="6">Partes Por Millón

                </th>
                <th>Equipos Operando</th>
                <th colspan="2">Coagulante</th>
                             
                                
                <th colspan="2">Dosificación Polimero</th>
                <th colspan="2" >Dosificación Permanganato</th>
                <th colspan="2" >Dosificación CAL</th>
                <th colspan="2" >Dosificación Carbon</th>
                <th>Cloro mg/L</th>
                <th colspan="2" >Cloro residual</th>
                <th colspan="2" >Niveles tanques %</th>
              </tr>

              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th > 
                  g
                </th>
                <th >o</th>
                <th>%</th>
                <th>mg/L</th>
                <th>%</th>
                <th>mg/L</th>
                <th>%</th>
                <th>mg/L</th>
                <th>%</th>
                <th>mg/L</th>
                <th>%</th>
                <th>mg/L</th>
                <th></th>
                <th>EB-2</th>
                <th>EB-3</th>
                <th>TTS</th>
                <th>B. Vista</th>
              </tr>
             <td>jjj</td>
               
           

               
               

                
        </table>

        <br>

      <TABLE >

                    
            <TR>
              <TH COLSPAN=2>PPM</TH>
              <TH COLSPAN=2>Head2</TH>
            </TR>
            <TR>
              <TH>Cloro residual</TH> <TH>Coagulante</TH> 
              
            </TR>
            <TR>
              <TD>A</TD> <TD>B</TD> <TD>C</TD> <TD>D</TD> 
            </TR>
            <TR>
              <TD>E</TD> <TD>F</TD> <TD>G</TD> <TD>H</TD> 
            </TR>
             <TR>
              <TD>i</TD> <TD>y</TD> <TD>7</TD> <TD>0</TD> 
            </TR>


      </TABLE>




         


  </div>

</div>

     
</body>
</html>
