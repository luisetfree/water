<!DOCTYPE html>
<html>
<head>
    <title>Produccion Torogoz</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Libreria para iconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  grid-template-rows: 80px 200px;
  gap: 10px;
  
  padding: 10px;
}


.checkbox{
  font-size: 15px;
}






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
      Calidades de agua
    </div>
    <div class="card-body">







      <form name="form-calidad" id="" method="post" action="{{url('calidades')}}">
       @csrf

       
       <label for="hora">Hora</label>
            <select id="" name="hora" class="" required=""> 
                    
                <option value="00:00" selected>00:00</option>
                <option value="01:00">01:00</option>
                <option value="02:00">02:00</option>
                <option value="03:00">03:00</option>        
                <option value="04:00">04:00</option>
                <option value="05:00">05:00</option>
                <option value="06:00">06:00</option>
                <option value="07:00">07:00</option>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
                <option value="23:00">23:00</option>
                       
            </select>
            <div class="grid-container">

                

                    <section class="card ">
                        Cruda
                        <!-- este input hace referencia al id del agua cruda 1 -->
                        <input type="hidden" name="id_agua_c" value="1" >
                        <input type="text" name="turb_c" placeholder="Turbidez" required="">
                        <input type="text" name="ph_c" placeholder="PH">
                        <input type="text" name="temp_c" placeholder="temperatura">
                        <input type="text" name="color_c" placeholder="Color">

                    </section>
                
                    <section class="card">
                        Clarificada
                        <input type="hidden" name="id_agua_cl" value="2" >
                        <input type="text" name="turb_cl" placeholder="Turbidez" >
                        <input type="text" name="ph_cl" placeholder="PH">
                        <input type="text" name="temp_cl" placeholder="temperatura">
                        <input type="text" name="color_cl" placeholder="Color">

                    </section>
                    <section class="card">
                        Filtrada

                        <input type="hidden" name="id_agua_f" value="3" >
                        <input type="text" name="turb_f" placeholder="Turbidez" >
                        <input type="text" name="ph_f" placeholder="PH">
                        <input type="text" name="temp_f" placeholder="temperatura">
                        <input type="text" name="color_f" placeholder="Color">

                    </section>
                    <section class="card">
                        Tratada
                        <input type="hidden" name="id_agua_t" value="4" >
                        <input type="text" name="turb_t" placeholder="Turbidez" >
                        <input type="text" name="ph_t" placeholder="PH">
                        <input type="text" name="temp_t" placeholder="temperatura">
                        <input type="text" name="color_t" placeholder="Color">

                    </section>

            </div>

            <div class="card-footer">
    
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        <!-- <input type="date" class="date" id="date" name="date"> -->

            </div>


      </form>





     



    </div>
<!-- Tabla con el resumen de calidades -->


    <table class="table" name="">
    <thead>
      <tr>
        <th>Hora</th>

        <th colspan="4">Cruda         
        </th>
        <th colspan="4" >Clarificada</th>
        <th colspan="4" >Filtrada</th>
        <th colspan="4" >Tratada</th>
      </tr>
    </thead>
    <tbody>

        <!-- For para imprimir las horas y llevar la secuencia del tiempo -->
    @for ($i = 0; $i < 24; $i++)
      <tr>
        @if ($i < 10)
        <td>0{{ $i}}:00</td><!-- conteo de 0 a 9 hrs -->
        @else
        <td>{{ $i}}:00</td><!-- conteo de 10 a 23 hrs -->
        @endif
        
        <td>
            @switch($i)
                                @case(0)

                                     
                               @foreach ($a_cruda_0 as $c0)
               
                                          {{ $c0->turbidez}} 

                                @endforeach               
                                   

                                     
                                 
                                @break
                                @case(1)

                                     
                                   @foreach ($a_cruda_1 as $c1)
                   
                                              {{ $c1->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                 @case(2)

                                     
                                   @foreach ($a_cruda_2 as $c2)
                   
                                              {{ $c2->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(3)

                                     
                                   @foreach ($a_cruda_3 as $c3)
                   
                                              {{ $c3->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(4)

                                     
                                   @foreach ($a_cruda_4 as $c4)
                   
                                              {{ $c4->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(5)

                                     
                                   @foreach ($a_cruda_5 as $c5)
                   
                                              {{ $c5->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(6)

                                     
                                   @foreach ($a_cruda_6 as $c6)
                   
                                              {{ $c6->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                 @case(7)

                                     
                                   @foreach ($a_cruda_7 as $c7)
                   
                                              {{ $c7->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                 @case(8)

                                     
                                   @foreach ($a_cruda_8 as $c8)
                   
                                              {{ $c8->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                 @case(9)

                                     
                                   @foreach ($a_cruda_9 as $c9)
                   
                                              {{ $c9->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                 @case(10)

                                     
                                   @foreach ($a_cruda_10 as $c10)
                   
                                              {{ $c10->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(11)

                                     
                                   @foreach ($a_cruda_11 as $c11)
                   
                                              {{ $c11->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(12)

                                     
                                   @foreach ($a_cruda_12 as $c12)
                   
                                              {{ $c12->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(13)

                                     
                                   @foreach ($a_cruda_13 as $c13)
                   
                                              {{ $c13->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(14)

                                     
                                   @foreach ($a_cruda_14 as $c14)
                   
                                              {{ $c14->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(15)

                                     
                                   @foreach ($a_cruda_15 as $c15)
                   
                                              {{ $c15->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(16)

                                     
                                   @foreach ($a_cruda_16 as $c16)
                   
                                              {{ $c16->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(17)

                                     
                                   @foreach ($a_cruda_17 as $c17)
                   
                                              {{ $c17->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(18)

                                     
                                   @foreach ($a_cruda_18 as $c18)
                   
                                              {{ $c18->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(19)

                                     
                                   @foreach ($a_cruda_19 as $c19)
                   
                                              {{ $c19->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(20)

                                     
                                   @foreach ($a_cruda_20 as $c20)
                   
                                              {{ $c20->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(21)

                                     
                                   @foreach ($a_cruda_21 as $c21)
                   
                                              {{ $c21->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(22)

                                     
                                   @foreach ($a_cruda_22 as $c22)
                   
                                              {{ $c22->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                                @case(23)

                                     
                                   @foreach ($a_cruda_23 as $c23)
                   
                                              {{ $c23->turbidez}} 

                                    @endforeach               
                                   

                                     
                                 
                                @break
                             
                                @default
                                    ------
            @endswitch


        </td>
        <td>cr</td>
        <td>cr</td>
        <td>cr</td>

        <td>cl</td>
        <td>cl</td>
        <td>cl</td>
        <td>cl</td>


        <td>fl</td>
        <td>fl</td>
        <td>fl</td>
        <td>fl</td>


        <td>tt</td>
        <td>tt</td>
        <td>tt</td>
        <td>tt</td>
      </tr>
      @endfor
    </tbody>
    
  </table>



         


  </div>

</div>


</body>
</html>
