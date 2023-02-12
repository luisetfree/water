<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Exclusivo para el grafico -->
    <script src="{{ asset('js/Chart.min.js') }}"></script>


<link rel="stylesheet" href="{{ asset('css/stilo.css') }}" />

@extends('layouts.app')




</head>
<body>

    @section('navegador')
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


<div class="graficos">

            
                <!-- Manejo del grafico para BT -->
                <canvas id="myChart" style="width:100%;max-width:550px"></canvas>

                
                <script>
                var xValues = ["Eq.1", "Eq.2", "Eq.3", "Eq.4", "Eq.5", "Eq.6", "Eq.7", "Eq.8"];
                var yValues = [{{$eq1_bt}},{{$eq2_bt}},{{$eq3_bt}},{{$eq4_bt}},{{$eq5_bt}},{{$eq6_bt}},{{$eq7_bt}},{{$eq8_bt}}];
                var barColors = ["#ff3333", "#00e64d","#00b8e6","#cccc00","#dfbf9f","#4d4dff","#ff9900","#00b33c"];

                new Chart("myChart", {
                  type: "bar",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Equipos Bocatoma"
                    }
                  }
                });
                </script>

            

            

                    <!-- Manejo del grafico para EB1 -->
                    <canvas id="myChart_eb1" style="width:100%;max-width:550px"></canvas>

                   
                    <script>
                    var xValues = ["Eq.1", "Eq.2", "Eq.3", "Eq.4", "Eq.5", "Eq.6", "Eq.7"];
                    var yValues = [{{$eq1_eb1}},{{$eq2_eb1}},{{$eq3_eb1}},{{$eq4_eb1}},{{$eq5_eb1}},{{$eq6_eb1}},{{$eq7_eb1}}];
                    var barColors = ["#ff3333", "#00e64d","#00b8e6","#cccc00","#dfbf9f","#4d4dff","#ff9900"];

                    new Chart("myChart_eb1", {
                      type: "bar",
                      data: {
                        labels: xValues,
                        datasets: [{
                          backgroundColor: barColors,
                          data: yValues
                        }]
                      },
                      options: {
                        legend: {display: false},
                        title: {
                          display: true,
                          text: "Equipos EB1"
                        }
                      }
                    });
                    </script>

            

            

                     <!-- Manejo del grafico para EB2 -->
                    <canvas id="myChart_eb2" style="width:100%;max-width:550px"></canvas>

                   
                    <script>
                    var xValues = ["Eq.1", "Eq.2", "Eq.3", "Eq.4", "Eq.5", "Eq.6", "Eq.7"];
                    var yValues = [{{$eq1_eb2}},{{$eq2_eb2}},{{$eq3_eb2}},{{$eq4_eb2}},{{$eq5_eb2}},{{$eq6_eb2}},{{$eq7_eb2}}];
                    var barColors = ["#ff3333", "#00e64d","#00b8e6","#cccc00","#dfbf9f","#4d4dff","#ff9900"];

                    new Chart("myChart_eb2", {
                      type: "bar",
                      data: {
                        labels: xValues,
                        datasets: [{
                          backgroundColor: barColors,
                          data: yValues
                        }]
                      },
                      options: {
                        legend: {display: false},
                        title: {
                          display: true,
                          text: "Equipos EB2"
                        }
                      }
                    });
                    </script>

            

        

                    <!-- Manejo del grafico para EB3 -->
                    <canvas id="myChart_eb3" style="width:100%; max-width:550px"></canvas>

                   
                    <script>
                    var xValues = ["Eq.1", "Eq.2", "Eq.3", "Eq.4", "Eq.5", "Eq.6", "Eq.7"];
                    var yValues = [{{$eq1_eb3}},{{$eq2_eb3}},{{$eq3_eb3}},{{$eq4_eb3}},{{$eq5_eb3}},{{$eq6_eb3}},{{$eq7_eb3}}];
                    var barColors = ["#ff3333", "#00e64d","#00b8e6","#cccc00","#dfbf9f","#4d4dff","#ff9900"];

                    new Chart("myChart_eb3", {
                      type: "bar",
                      data: {
                        labels: xValues,
                        datasets: [{
                          backgroundColor: barColors,
                          data: yValues
                        }]
                      },
                      options: {
                        legend: {display: false},
                        title: {
                          display: true,
                          text: "Equipos EB3"
                        }
                      }
                    });
                    </script>
        


</div>


@endsection
</body>
</html>
