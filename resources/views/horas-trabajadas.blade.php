<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">






<style>
       

/*Maneja los encabezados bocatoma-eb1-2-3*/
.grid-container {
  display: grid;
  /*auto representa cada columna*/
  grid-template-columns: auto auto auto auto;
  grid-template-rows: 35px 70px;
  gap: 10px;
  
  padding: 10px;
  
}




.button { font-size: 14px;  }


table {
  font-family: times, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


</style>




</head>
<body>

<div class="grid-container">
    
    <label>Horas Trabajadas</label>
        
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

                  </tr>
                  @endforeach
               
            </table>

        </div>

    </div>
</div>
</body>
</html>
