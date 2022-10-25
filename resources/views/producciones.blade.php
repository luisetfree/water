<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- otros iconos -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <style>
        table {
          font-family: times, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: center;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }



/*Maneja los encabezados bocatoma-eb1-2-3*/
.grid-container {
  display: grid;
  /*auto representa cada columna*/
  grid-template-columns: auto auto auto auto;
  grid-template-rows: 35px 70px;
  gap: 10px;
  
  padding: 10px;
  
}


.checkbox{
  font-size: 15px;
}

.button { font-size: 14px;  }





</style>




</head>
<body>
    <!-- Inicio Boton Home -->
    <a href="/"><button class="btn"><i class="fa fa-home" ></i></button> </a>
    <!-- fin Boton Home -->






  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      <h5>Producciones </h5> 

     
      
    </div>
    <div class="card-body">
        
           <form name="formulario-mostrar" id="" method="post" action="{{url('') }}">
       @csrf

<!-- Contiene los controles de busqueda  -->
       <div class="grid-container">
              

             
              <!-- Filtra la fecha que se desea ver -->

              
                <input type="date" class=" form-control"  name="fecha" required="" value=""/>
              
               <button type="submit" class="btn btn-outline-primary">Ver</button>
               

        </div>
       

      

        
      </form>
 



        
         <!-- Tabla que muestra el resumen de producciones-->
         <label class="form-control">Estaciones de operación</label>
        <table>
            <!-- Encabezado de la tabla -->
            <tr>

                
                
                
                <th>Hora </th>
                
                
                <th> 
                    Bocatoma
                </th>

                <th>EB1</th>
                <th>EB2</th>
                <th>EB3</th>
               
            </tr>
            <!-- Fin Encabezado de la tabla -->

            <!-- Conteo para mostrar las horas de 00:00 a 23:00 hrs-->
@for ($i = 1; $i < 25; $i++)
              <tr>

                 

                     
                <!-- Primer caso para controlar las horas de 0 a 9, se agrego este if para controlar el formato: 00:00-->
                    @if ($i < 10)
                        <td>0{{ $i}}:00</td><!-- muestra las horas de las 00:00 a 09:00 hrs en la tabla respetando el formato 00:00, columna hora-->

                        <td>
                        
                            <!-- Controla los casos en las horas 01:00 a las 09:00 para BT-->
                        



                        </td>
    <!-- Controla los casos en las horas 01:00 a las 09:00 para EB1-->
                        <td>
                        





                        </td>
                        <!-- Controla los casos en las horas 01:00 a las 09:00 para EB2-->
                        <td>

                            



                        </td>
                        <!-- Controla los casos en las horas 01:00 a las 09:00 para EB3-->
                        <td>
                                




                        </td>

                    @else
                    <!-- Bloque de Conteo de las 10:00 hrs a las 23:00 hrs de todas las estaciones-->
                        <td>{{ $i}}:00</td><!-- muestra las horas de las 10:00 a 24:00 hrs en la tabla-->
                        <td>
                        
                            <!-- Controla los casos en las horas 10:00 a las 24:00 de BT-->
                        

                        </td>
                        <!-- Conteo de las 10:00 hrs a las 23:00 hrs de EB1-->
                        <td>

                            <!-- Controla los casos en las horas 10:00 a las 24:00 de EB1-->
                       



                        </td>
                        <!-- Conteo de las 10:00 hrs a las 23:00 hrs de EB2-->
                        <td>
                                <!-- Controla los casos en las horas 10:00 a las 23:00 de EB2-->
                       





                        </td>
                        <!-- Conteo de las 10:00 hrs a las 24:00 hrs de EB3-->
                        <td>


                        </td>
                    @endif




                
                   
                
                
               
                

            
               
              </tr>
@endfor


              




    </table>


  




      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
       
        <div class="grid-container" >
       
            



        </div>

    
      
        




      </form>





     



    </div>

   
        
    

         


  </div>

</div>





</body>
</html>
