<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 

<!-- para iconos y barra -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/dash.css') }}" />

<!-- Controla ventana Modal -->
<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
<!-- Controla gráfico de paro Operaciones -->
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<!-- Grafico turbidez -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
 
<!-- Maneja grafico de pastel -->
<script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>
@extends('layouts.app')
 


</head>
<body>

@section('navegador')

 

<!-- Controla la fecha que se desea ver -->
<div class="controles">


       <form name="" id="" method="post" action="{{url('dashboard') }}">
             @csrf

            <div class="form-group">
              
              
              <!-- Fecha -->
              <label >Fecha:</label>

              <input class="" type="date" name="fecha" value="{{$fecha}}">
              <button class="btn btn-outline-success" type="submit">Ver</button>
            </div>

        </form>


      <!-- Inicio ventana Modal -->
       <button onclick="document.getElementById('id01').style.display='block'" class="w3-button btn-grafico">
          <img src="{{ asset('img/grafico.png') }}">
        </button>
  </div>
<div class="w3-container">
  

 

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Estadisticas</h2>

      </header>
      <div class="w3-container">
       
       <!-- Inicio Grafico dona Paro de operaciones -->

         <!--  <div id="myPlot" style="width:80%;max-width:400px"></div>

          <script>
          var xArray = ["Corte Energia", "Variación Voltaje", "Turbidez", "Paro Programado", "Producción"];
          var yArray = [{{$paro_corte}}, {{$paro_variacion}}, {{$paro_turbidez}}, {{$paro_programado}}, {{$paro_produccion}}];

          var layout = {title:"Causas de Paros"};

          var data = [{labels:xArray, values:yArray, hole:.4, type:"pie"}];

          Plotly.newPlot("myPlot", data, layout);
          </script> -->

        <!-- Fin Grafico dona Paro de operaciones -->


<!-- Inicio Grafico pastel Paro de operaciones -->
              <div
              id="parosChart" style="width:100%; max-width:600px; height:500px;">
              </div>

              <script>
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['Corte Energia',{{$paro_corte}}],
                ['Variación Voltaje',{{$paro_variacion}}],
                ['Turbidez',{{$paro_turbidez}}],
                ['Paro Programado',{{$paro_programado}}],
                ['Producción',{{$paro_produccion}}]
              ]);

              var options = {
                title:'Causas de Paros de Operación',
                is3D:true
              };

              var chart = new google.visualization.PieChart(document.getElementById('parosChart'));
                chart.draw(data, options);
              }
              </script>

<!-- Fin Grafico pastel Paro de operaciones -->

    

          <!-- Inicio Grafico turbidez -->

        <canvas id="turbidezChart" style="width:100%;max-width:400px"></canvas>

              <script>
                /*Dias en eje x, generados por el for*/
              var xValues = [

                        @for ($i = 1; $i < 32; $i++)
                           {{ $i }},
                        @endfor
 ];
              /*Valores del eje Y, representan el promedio de la turbidez que se refleja en la tabla calidades*/
               var yValues = [
                  @for ($i = 1; $i < 32; $i++)
                           {{$prom_cruda[$i]}},
                        @endfor
 ];

              new Chart("turbidezChart", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues
                  }]
                },
                options: {
                  legend: {display: false},
                  title: {
                      display: true,
                      text: "Turbidez Agua Cruda"
                    },
                    scales: {
                    yAxes: [{ticks: {min: 6, max:16}}]

                  }
                }
              });
              </script>

    <!-- Fin Grafico turbidez -->



      </div>
      <br>
      <br>


      
      

      

      <footer class="w3-container w3-teal">
        <p>Estadísticas Producción: {{$fecha}}</p>
        Variacion:{{$paro_variacion}}
        Corte: {{$paro_corte}}
       Turbidez: {{ $paro_turbidez}}
       Programado: {{$paro_programado}}
       Produccion: {{$paro_produccion}}
      </footer>
    </div>
  </div>
</div>
<!-- Fin ventana Modal -->



  <div class="grid-container">
      @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
     
      <div class="card">
        <section class="card-header" >
          <h6>  Producción del mes (m³) </h6>
          <br>
          

          <table class=" table-striped">
            <thead>
              <tr>
                <th scope="col" id="dia">Día</th>
                <th scope="col">BT</th>
                <th scope="col">EB1</th>
                <th scope="col">EB2</th>
                <th scope="col">EB3</th>
                <th scope="col">Aporte ZN</th>
                <th scope="col">Las Pavas</th>
              </tr>
            </thead>
            <tbody>

            @for($i=1; $i<count($bt_prod); $i++)
              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{number_format($bt_prod[$i])}} </td>
                <td>{{number_format($eb1_prod[$i])}}</td>
                <td>{{number_format($eb2_prod[$i])}}</td>
                <td>{{number_format($eb3_prod[$i])}}</td>
                <td>{{ number_format($eb2_prod[$i]-$eb3_prod[$i])}}</td><!-- Calculo de aporte a zona norte -->
                <td>{{$pavas_aporte[$i]}}</td>
              </tr>



            @endfor

            <tr id="totales">
              <td>Total</td>
              <td>{{number_format($total_bt)}}</td>
              <td>{{number_format($total_eb1)}}</td>
              <td>{{number_format($total_eb2)}}</td>
              <td>{{number_format($total_eb3)}}</td>
              <td>{{number_format($total_eb2-$total_eb3)}}</td><!-- total de aporte a zona norte -->
              <td>{{$suma_pavas}}</td><!--Sumatoria de aporte tanque Las Pavas-->
            </tr>
            
            </tbody>
         </table>
      

        </section>




      </div>
<!-- Tabla calidades -->

<div class="card">
        <section class="card-header">
          <p> Calidades</p>
          <table class=" table-striped">
            <thead>
                    <!-- Encabezados principales -->  
            <TR>
              <th rowspan="3">Día</th>
            
              <TH COLSPAN=6>Agua Cruda</TH>
              
              <TH COLSPAN=6>Agua Tratada</TH>

              
            </TR>
            <!-- Encabezados secundarios -->  
            <TR>
              
              
              
              
               
              
              
              <th colspan="3">Turbidez</th><th colspan="3">PH</th>
              <th colspan="3">Turbidez</th><th colspan="3">PH</th>
              
              
            </TR>
            <TR>
              
              
              
              
             
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              <TD>Minimo</TD> <TD>Maximo</TD> <TD>X̅</TD>
              
            </TR>
            
            </thead>
            <tbody>
@for($i=1; $i<count($bt_prod); $i++)
          <tr>

            <td>{{$i}}</td>
            <td>{{$min_cruda[$i]}}</td>
            <td>{{$max_cruda[$i]}}</td>
            <td>{{$prom_cruda[$i]}}</td>
            <td>{{$min_c_ph[$i]}}</td>
            <td>{{$max_cruda_ph[$i]}}</td>
            <td>{{$prom_cruda_ph[$i]}}</td>
            <td>{{$min_trat[$i]}}</td>
            <td>{{$max_trat[$i]}}</td>
            <td>{{$prom_trat[$i]}}</td>
            <td>{{$min_t_ph[$i]}}</td>
            <td>{{$max_trat_ph[$i]}}</td>
            <td>{{$prom_trat_ph[$i]}}</td>


          </tr>
 @endfor    



            </tbody>
          <tr id="totales">
              <td>Mínimo</td>
              <td>
                @if(empty($min_cruda_t))
                0
                @else
                {{$min_cruda_t}}
                @endif



              </td>
              <td>{{$min_cruda_m}}</td>
              <td>{{$min_cruda_t_prom}}</td>
              <td>{{$min_crud_ph_t}}</td>
              <td>{{$min_crud_ph_t1}}</td>
              <td>{{$min_prom_ph_t}}</td>
              <td>{{$min_trat_t}}</td>
              <td>{{$min_trat_m_t}}</td>
              <td>{{$min_trat_p_t}}</td>
              <td>{{$min_trat_t_ph}}</td>
              <td>{{$min_trat_m_ph}}</td>
              <td>{{$min_trat_prom_ph}}</td>

              
            </tr>
            <tr id="totales">
             
              <td>Máximo</td>
              <td>{{$max_cruda_t}}</td>
              <td>{{$max_cruda_m}}</td>
              <td>{{$max_cruda_t_prom}}</td>
              <td>{{$max_crud_ph_t}}</td>
              <td>{{$max_crud_ph_t1}}</td>
              <td>{{$max_prom_ph_t}}</td>
              <td>{{$max_trat_t}}</td>
              <td>{{$max_trat_m_t}}</td>
              <td>{{$max_trat_p_t}}</td>
              <td>{{$max_trat_t_ph}}</td>
              <td>{{$max_trat_m_ph}}</td>
              <td>{{$max_trat_prom_ph}}</td>

            </tr>
             <tr id="totales">
             
              <td>Promedio</td>
              <td>{{$prom_cruda_t}}</td>
              <td>{{$prom_cruda_m}}</td>
              <td>{{$prom_prom_cruda}}</td>
              <td>{{$prom_min_crud_ph_t}}</td>
              <td>{{$prom_max_ph_t}}</td>
              <td>{{$prom_max_prom_ph_t}}</td>
              <td>{{$prom_min_trat_t}}</td>
              <td>{{$prom_min_trat_m_t}}</td>
              <td>{{$prom_min_trat_p_t}}</td>
              <td>{{$prom_min_trat_t_ph}}</td>
              <td>{{$prom_max_trat_m_ph}}</td>
              <td>{{$prom_prom_trat_ph}}</td>

            </tr>





         </table>




             
            
      



        </section>
      </div> 


<div class="card">
        <section class="card-header">
          <p> Nivel del Rio </p>
          <br>
          <table class=" table-striped">
            <thead>
              <tr>
                <th scope="col">Día</th>
                <th scope="col">Promedio (msnm)</th>
               
            

          
              </tr>
            </thead>
            <tbody>

            @for($i=1; $i<count($bt_prod); $i++)
              <tr>
                <td scope="row">{{$i}} </td>
                <td>{{$nivel_rio[$i]}}</td>

                
              
              </tr>
            @endfor
            
            <tr id="totales">
              <td>X̅</td>
              <td>{{$promedio_nivel_rio}}</td>
            </tr>
            
            </tbody>
         </table>
      



        </section>
  </div> 

<div class="card">
        <section class="card-header">
          <p> Nivel Cámaras</p>
          <br>
          <table class=" table-striped">
            <thead>
              <tr>
                <th scope="col">Día</th>
                <th scope="col">X̅ Reservorio</th>
                <th scope="col">X̅ EB2</th>
                <th scope="col">X̅ EB3</th>

            
              </tr>
            </thead>
            <tbody>

            @for($i=1; $i<count($bt_prod); $i++)
              <tr>
                <td scope="row">{{$i}} </td>
                <td>{{$nivel_reservorio[$i]}}%</td>
                <td>{{$nivel_eb2[$i]}}%</td>
                <td>{{$nivel_eb3[$i]}}%</td>
              </tr>
            @endfor
      
            
            </tbody>

            <tr id="totales">
              <td>Mínimo</td>
              <td>{{$nivel_reser_min}}</td>
              <td>{{$nivel_eb2_min}}</td>
              <td>{{$nivel_eb3_min}}</td>
              
              
            </tr>
            <tr id="totales">
             
              <td>Máximo</td>
              <td>{{$nivel_reser_max}}</td>
              <td>{{$nivel_eb2_max}}</td>
              <td>{{$nivel_eb3_max}}</td>
              
            </tr>
             <tr id="totales">
             
              <td>Promedio</td>
              <td>{{$nivel_reser_prom}}</td>
              <td>{{$nivel_eb2_prom}}</td>
              <td>{{$nivel_eb3_prom}}</td>
              
            </tr>

         </table>
      



        </section>
  </div> 


      
      <div class="card">
        <section class="card-header">
          <p> Consumo mensual de químicos </p>
          <br>
          <table class=" table-striped">
            <thead>
              <tr>
                <th scope="col">Día</th>
                <th scope="col">Sulfato</th>
                <th scope="col">Polimero B</th>
                <th scope="col">Polimero A</th>
                <th scope="col">Permanganato</th>
                <th scope="col">Carbón</th>
                <th scope="col">Hipoclorito</th>
                <th scope="col">Cal</th>
                <th scope="col">Pac</th>
                <th scope="col">Cloro</th>

          
              </tr>
            </thead>
            <tbody>

            @for($i=1; $i<count($bt_prod); $i++)
              <tr>
                <td scope="row">{{$i}} </td>
                <td>{{$sulfato[$i]}} </td>
                <td>{{$polimero[$i]}} </td>
                <td>{{$polimeroA[$i]}} </td>
                <td>{{$perm[$i]}} </td>
                <td> {{$carbon[$i]}}</td>
                <td> {{$hip[$i]}}</td>
                <td> {{$cal[$i]}}</td>
                <td> {{$pac[$i]}}</td>
                <td> {{$cloro[$i]}}</td>
              
              </tr>
            @endfor
            <!-- Totales de carga del mes -->
           <tr id="totales">
            
                <td>Total</td>
                <td>{{$sulf}}</td>
                <td>{{$pol_b}}</td>
                <td>{{$poli_alta}}</td>
                <td>{{$perma}}</td>
                <td>{{$carbon_}}</td>
                <td>{{$hipo}}</td>
                <td>{{$cal_}}</td>
                <td>{{$pac_}}</td>
                <td>{{$clor_}}</td>

            </tr>

            
            </tbody>
         </table>
      



        </section>
      </div> 


      





          

  
  </div>

@endsection





</body>
</html>


