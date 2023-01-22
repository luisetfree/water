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


<style>

  table, td, th {
  border: 1px solid #dddddd;
  font-size: 10px;
  font-family: times;
}
          
table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 10px;
  width: 10px;
}
   

  .card{
    width: 100%;          
    text-align: center;
     height: 100%;


   }

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto;
  margin-left: 3%;
}

#dia{
width: 5px;

}
/*Controla los totales de las tablas*/
#totales{

font-weight: bold;
}

</style>






</head>
<body>
<!-- Controla la fecha que se desea ver -->
 <form name="" id="" method="post" action="{{url('dashboard') }}">
       @csrf

      <div class="container">
        
        <a href="http://127.0.0.1:8000"> <i class="fas fa-home"></i> </a>
        <!-- Fecha -->
        <label >Fecha:</label>

        <input class="" type="date" name="fecha" value="{{$fecha}}">
        <button class="btn btn-outline-success" type="submit">Ver</button>
      </div>

  </form>

<section>
  <a href="{{url('/horas-trabajadas') }}">Horas trabajadas/Equipos de bombeo</a>

 </section>

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
          <p> Nivel Reservorio</p>
          <br>
          <table class=" table-striped">
            <thead>
              <tr>
                <th scope="col">Día</th>
                <th scope="col">Promedio </th>

            
              </tr>
            </thead>
            <tbody>

            @for($i=1; $i<count($bt_prod); $i++)
              <tr>
                <td scope="row">{{$i}} </td>
                <td>{{$nivel_reservorio[$i]}}%</td>

              </tr>
            @endfor
      
            
            </tbody>

            <tr id="totales">
              <td>Mínimo</td>
              <td>{{$nivel_reser_min}}</td>
              
              
            </tr>
            <tr id="totales">
             
              <td>Máximo</td>
              <td>{{$nivel_reser_max}}</td>
              
            </tr>
             <tr id="totales">
             
              <td>Promedio</td>
              <td>{{$nivel_reser_prom}}</td>
              
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







</body>
</html>
