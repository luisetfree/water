<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



<style>
        table {
          font-family: arial, sans-serif;
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
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
   <div class="card-header text-center font-weight-bold">
      Producciones 
    </div>

<!-- Seleccion de estacion -->

   <div class="form-group">
              <label for="cars">Estación:</label>
              <select id="id_estacion" name="id_estacion">
                <option value="1" selected>Bocatoma</option>
                <option value="2">EB1</option>
                <option value="3">EB2</option>
                <option value="4">EB3</option>        
                <option value="5">Tanques Terminales</option>   
                <option value="6">BV Nuevo</option>     
                <option value="7">BV Viejo</option>         
              </select>
    </div>
  
    <!-- Mostrar hora -->
    <!-- <p id="demo"></p>

    <script>
    const d = new Date();
    document.getElementById("demo").innerHTML = d;
    </script> -->



  </div>

          

  <table>
   
    <!-- Encabezados de la tabla -->
  <tr>
    <th>Caudal (m³/h)</th>
    <th>Cloro</th>
    <th>Estacion</th>
  </tr>
   @foreach ($datos as $dato)
   <!-- Datos desde el controlador, se rellena la tabla con la info -->
  <tr>
   
    <td>{{ $dato->caudal}} </td>
    <td>{{ $dato->cloro_residual}}</td>
    <td>{{ $dato->id_estacion}}</td>

    
  </tr>
    @endforeach 


 
</table>
  





</body>
</html>
