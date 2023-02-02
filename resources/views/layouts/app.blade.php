
<link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
 


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Just an image -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
<a class="navbar-brand" href="/">
    <img src="{{ asset('img/logo.JPG') }}" width="30" height="30" alt="">
    Torogoz App
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="/resumen{{date('Y-m-d')}}">Procesos</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="/calidad">Calidades</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/cargas">Carga-Químicos</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/paros">Paros-Operación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/producciones">Producciones</a>
      </li>

   
      <li class="nav-item">
        <a class="nav-link" href="/operacion">Operación Equipos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/bitacora">Bitacora</a>
      </li>
     
      <li class="nav-item">
         <a class="nav-link"  href="/horas-trabajadas/{{date('Y-m-d')}}/{{date('m')}}">Horas trabajadas/Eq.</a>
      </li>
    </ul>

   
  </div>
</nav>
<br>
 @yield('navegador')
