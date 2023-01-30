<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




<link rel="stylesheet" href="{{ asset('css/stilo.css') }}" />

<style>
    


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
     
      <li class="nav-item">
        
         <a class="nav-link"  href="/horas-trabajadas/{{date('Y-m-d')}}/{{date('m')}}">Horas trabajadas/Eq.</a>
      </li>
    </ul>

    
  

    
  </div>
</nav>


</head>
<body>
<br>
 
<div id="datos">
     <form name="" id="" method="post" action="{{url('worktime')}}">
        @csrf
        <label>Horas Trabajadas:</label> 

        <input type="date" name="fecha" value="{{$fecha}}">
        
        <label > Mes</label>
        <input type="checkbox" id="" name= "mes" value="ok">
                    
                   
        <button class="btn btn-outline-success my-2 my-sm-0">Ver</button>
        

    </form>
</div>

<div class="grid-container">
    

        
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <label> Equipos Bocatoma</label>
        </div>

        <div class="card-body">

            <table>

                 <tr>
                    <th>Equipo Nº</th>
                    <th>Horas Trabajadas</th>                    
                 </tr>

                
                  
                
                  @foreach($eqbt as $dat)
                  <tr>
                    <td>{{$dat->nombre}}</td>
                        <!-- validando que sea el equipo 1 de BT -->
                        @if(($dat->id)==1)

                            <td>{{$eq1_bt}}  </td>  

                        @endif
                        @if(($dat->id)==2)

                            <td>{{$eq2_bt}}  </td>  

                        @endif
                         @if(($dat->id)==3)

                            <td>{{$eq3_bt}}  </td>  

                        @endif
                        @if(($dat->id)==4)

                            <td>{{$eq4_bt}}  </td>  

                        @endif
                        @if(($dat->id)==5)

                            <td>{{$eq5_bt}}  </td>  

                        @endif
                        @if(($dat->id)==6)

                            <td>{{$eq6_bt}}  </td>  

                        @endif
                        @if(($dat->id)==7)

                            <td>{{$eq7_bt}}  </td>  

                        @endif
                        @if(($dat->id)==8)

                            <td>{{$eq8_bt}}  </td>  

                        @endif

                  </tr>
                  @endforeach
               
            </table>

        </div>

    </div>

    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <label> Equipos EB1</label>
        </div>

        <div class="card-body">

            <table>

                 <tr>
                    <th>Equipo Nº</th>
                    <th>Horas Trabajadas</th>                    
                 </tr>

                
                  
                
                  @foreach($eqeb1 as $dat)
                  <tr>
                    <td>{{$dat->nombre}}</td>
                        <!-- validando que sea el equipo 1 de EB1 -->
                        @if(($dat->id)==9)

                            <td>{{$eq1_eb1}}  </td>  

                        @endif
                        @if(($dat->id)==10)

                            <td>{{$eq2_eb1}}  </td>  

                        @endif
                         @if(($dat->id)==11)

                            <td>{{$eq3_eb1}}  </td>  

                        @endif
                        @if(($dat->id)==12)

                            <td>{{$eq4_eb1}}  </td>  

                        @endif
                        @if(($dat->id)==13)

                            <td>{{$eq5_eb1}}  </td>  

                        @endif
                        @if(($dat->id)==14)

                            <td>{{$eq6_eb1}}  </td>  

                        @endif
                        @if(($dat->id)==15)

                            <td>{{$eq7_eb1}}  </td>  

                        @endif
                       

                  </tr>
                  @endforeach
               
            </table>

        </div>

    </div>

    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <label> Equipos EB2</label>
        </div>

        <div class="card-body">

            <table>

                 <tr>
                    <th>Equipo Nº</th>
                    <th>Horas Trabajadas</th>                    
                 </tr>

                
                  
                
                  @foreach($eqeb2 as $dat)
                  <tr>
                    <td>{{$dat->nombre}}</td>
                        <!-- validando que sea el equipo 1 de EB2 -->
                        @if(($dat->id)==16)

                            <td>{{$eq1_eb2}}  </td>  

                        @endif
                        @if(($dat->id)==17)

                            <td>{{$eq2_eb2}}  </td>  

                        @endif
                         @if(($dat->id)==18)

                            <td>{{$eq3_eb2}}  </td>  

                        @endif
                        @if(($dat->id)==19)

                            <td>{{$eq4_eb2}}  </td>  

                        @endif
                        @if(($dat->id)==20)

                            <td>{{$eq5_eb2}}  </td>  

                        @endif
                        @if(($dat->id)==21)

                            <td>{{$eq6_eb2}}  </td>  

                        @endif
                        @if(($dat->id)==22)

                            <td>{{$eq7_eb2}}  </td>  

                        @endif
                       

                  </tr>
                  @endforeach
               
            </table>

        </div>

    </div>


<div class="card">
        <div class="card-header text-center font-weight-bold">
            <label> Equipos EB3</label>
        </div>

        <div class="card-body">

            <table>

                 <tr>
                    <th>Equipo Nº</th>
                    <th>Horas Trabajadas</th>                    
                 </tr>

                
                  
                
                  @foreach($eqeb3 as $dat)
                  <tr>
                    <td>{{$dat->nombre}}</td>
                        <!-- validando que sea el equipo 1 de EB3 -->
                        @if(($dat->id)==23)

                            <td>{{$eq1_eb3}}  </td>  

                        @endif
                        @if(($dat->id)==24)

                            <td>{{$eq2_eb3}}  </td>  

                        @endif
                         @if(($dat->id)==25)

                            <td>{{$eq3_eb3}}  </td>  

                        @endif
                        @if(($dat->id)==26)

                            <td>{{$eq4_eb3}}  </td>  

                        @endif
                        @if(($dat->id)==27)

                            <td>{{$eq5_eb3}}  </td>  

                        @endif
                        @if(($dat->id)==28)

                            <td>{{$eq6_eb3}}  </td>  

                        @endif
                        @if(($dat->id)==29)

                            <td>{{$eq7_eb3}}  </td>  

                        @endif
                       

                  </tr>
                  @endforeach
               
            </table>

        </div>

    </div>


    



</div>
</body>
</html>
