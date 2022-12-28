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

</style>






</head>
<body>


  <div class="container">
  
  <a href="http://127.0.0.1:8000"> <i class="fas fa-home"></i> </a>
  </div>

  <div class="grid-container">
      @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
     
      <div class="card">
        <section class="card-header" >
          <h6>  Producción del mes (m³) </h6>

          <table class=" table-striped">
            <thead>
              <tr>
                <th scope="col" id="dia">Día</th>
                <th scope="col">BT</th>
                <th scope="col">EB1</th>
                <th scope="col">EB2</th>
                <th scope="col">EB3</th>
              </tr>
            </thead>
            <tbody>

            @for($i=1; $i<32; $i++)
              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$bt_prod[$i]}} </td>
                <td>{{$eb1_prod[$i]}}</td>
                <td>{{$eb2_prod[$i]}}</td>
                <td>{{$eb3_prod[$i]}}</td>
              </tr>


            @endfor

            <tr>
              <td></td>
                  <td>
               

                 

                
                  </td>
              <td>c</td>
              <td>d</td>
              <td>e</td>
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
@for($i=1; $i<32; $i++)
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
         </table>




             
            
      



        </section>
      </div> 


<div class="card">
        <section class="card-header">
          <p> Nivel del Rio </p>
          <table class=" table-striped">
            <thead>
              <tr>
                <th scope="col">Día</th>
                <th scope="col">Promedio (msnm)</th>
               
            

          
              </tr>
            </thead>
            <tbody>

            @for($i=1; $i<32; $i++)
              <tr>
                <td scope="row">{{$i}} </td>
                <td>{{$nivel_rio[$i]}}</td>

                
              
              </tr>
            @endfor
          
            
            </tbody>
         </table>
      



        </section>
  </div> 

<div class="card">
        <section class="card-header">
          <p> Nivel Reservorio</p>
          <table class=" table-striped">
            <thead>
              <tr>
                <th scope="col">Día</th>
                <th scope="col">Promedio </th>
               
            

          
              </tr>
            </thead>
            <tbody>

            @for($i=1; $i<32; $i++)
              <tr>
                <td scope="row">{{$i}} </td>
                <td>{{$nivel_reservorio[$i]}}%</td>
                              
              </tr>
            @endfor
          
            
            </tbody>
         </table>
      



        </section>
  </div> 


      
      <div class="card">
        <section class="card-header">
          <p> Consumo mensual de químicos </p>
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

            @for($i=1; $i<32; $i++)
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
          
            
            </tbody>
         </table>
      



        </section>
      </div> 


      





          

  
  </div>







</body>
</html>
