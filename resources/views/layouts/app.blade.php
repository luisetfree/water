
<link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
 


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Just an image -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
<a id="logo" class="navbar-brand" href="/">
    <img src="{{ asset('img/logo.JPG') }}" width="30" height="30" alt="">
    Torogoz App
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse botones" id="navbarSupportedContent">
   
<ul class="navbar-nav mr-auto "> 
   <!-- 
    * Roles de usuarios asignados:
   Rol 1, Admin, Acceso completo a todos los apartados
   Rol 2, Supervisor, Acceso completo a los datos de produccion excepto (Dashboard y horas trabajadas)
   Rol 3, Visitante, solo podra ver dashboard y bitacora,

   -->

<!-- Switch que controla las opciones de menu que se mostraran de acuerdo al usuario logueado -->
@switch(auth()->user()->rol )
    @case(3)

        <li class="nav-item">
        <a class="nav-link" href="/dashboard">Resumen</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/bitacora">Bitacora</a>
      </li>
     
        @break
 
    @case(2)
      <li class="nav-item" id="procesos">
        <a class="nav-link " href="/resumen{{date('Y-m-d')}}">Procesos</a>
      </li>
      <li class="nav-item" id="calidad">
        <a class="nav-link" href="/calidad">Calidades</a>
      </li>
        <li class="nav-item" id="quimico">
        <a class="nav-link" href="/cargas">Carga-Químicos</a>
      </li>
        <li class="nav-item" id="paro">
        <a class="nav-link" href="/paros">Paros-Operación</a>
      </li>
      <li class="nav-item" id="produccion">
        <a class="nav-link" href="/producciones">Producciones</a>
      </li>

   
      <li class="nav-item" id="equipo">
        <a class="nav-link" href="/operacion">Operación Equipos</a>
      </li>
      <li class="nav-item" id="bitacora">
        <a class="nav-link" href="/bitacora">Bitacora</a>
      </li>
        @break
 
    @default

      
      <li class="nav-item" id="procesos">
        <a class="nav-link" href="/resumen{{date('Y-m-d')}}">Procesos</a>
      </li>
      <li class="nav-item" id="calidad">
        <a class="nav-link" href="/calidad">Calidades</a>
      </li>
        <li class="nav-item" id="quimico">
        <a class="nav-link" href="/cargas">Carga-Químicos</a>
      </li>
        <li class="nav-item" id="paro">
        <a class="nav-link" href="/paros">Paros-Operación</a>
      </li>
      <li class="nav-item" id="produccion">
        <a class="nav-link" href="/producciones">Producciones</a>
      </li>

   
      <li class="nav-item" id="equipo">
        <a class="nav-link" href="/operacion">Operación Equipos</a>
      </li>
      <li class="nav-item" id="bitacora">
        <a class="nav-link" href="/bitacora">Bitacora</a>
      </li>
     
      <li class="nav-item" id="horas">
         <a class="nav-link"  href="/horas-trabajadas/{{date('Y-m-d')}}/{{date('m')}}">Horas trabajadas/Eq.</a>
      </li>
    
        
@endswitch

</ul>


   
  </div>

<section title="Usuario activo" class="usuario">

  <!-- Nombre de Usuario  -->
 {{ auth()->user()->name}}

 </section>
</nav>
<br>
 @yield('navegador')
