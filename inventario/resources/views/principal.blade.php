<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="/css/main.css" media="screen" title="no title" charset="utf-8">
    <title>Principal</title>
  </head>
  <body> @section('sidebar')
    <nav class="blue-grey darken-3">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo nav">El porvenir del productor</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="#" title="carrito de compras"><i class="material-icons">shopping_cart</i></a></li>
      <li><a href="#">Contacto</a></li>
      <li><a href="#">Cerrar Sesion</a></li>
    </ul>
  </div>
</nav>
    @show
    <div class="">
           @yield('content')
       </div>
       <script type="text/javascript" src="/js/main.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  </body>
</html>
