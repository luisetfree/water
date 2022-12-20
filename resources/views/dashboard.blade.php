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


  <div class="container">
  
  <a href="http://127.0.0.1:8000"> <i class="fas fa-home"></i> </a>
  </div>

  <div class="container mt-4">
      @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      <div class="card">
        <section class="card-header"> Torogoz</section>
       


      </div>

      <div class="card">
        <section class="card-header" >Producciones 

         
         
         
        
        @for($i=0; $i<32; $i++)

             {{$bt_prod[$i]}}  

        @endfor
          

         


        </section>
       


      </div>
      <div class="card">
        <section >Consumo de químicos </section>
       


      </div>


          

  
  </div>




</body>
</html>
