<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/animate.css">
    <title>Principal</title>
  </head>
  <body> @section('sidebar')
    <nav class="blue-grey darken-3">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo nav">El porvenir del productor</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="#" title="carrito de compras"><i class="material-icons">shopping_cart</i></a></li>
      <li><a href="#">Contacto</a></li>
      <li><a href="{{asset('logOut')}}">{{$estado}}</a></li>
    </ul>
  </div>
</nav>
    @show
    <div class="container">
           @yield('content')
    </div>
       <script src="../js/main.js"></script>
       <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  </body>
</html>
