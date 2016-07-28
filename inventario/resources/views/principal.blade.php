<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="/css/main.css" media="screen" title="no title" charset="utf-8">
    <title>Principal</title>
  </head>
  <body>
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
           @yield('content')
              <div class="row" >
           @if ($products!='')
           @foreach ($products as $product)
           <div class="center col m4">
           <div class="card">
           <div class="card-image waves-effect waves-block waves-light">
           <img class="activator center" src="{{$product->imagen}}"/>
           </div>
           <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">{{$product->nombre}}<i class="material-icons right">more_vert</i></span>
           <p><a href="#">This is a link</a></p>
           </div>
           <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">{{$product->nombre}}<i class="material-icons right">close</i></span>
           <p>{{$product->descripcion}}</p>
           <p>₡{{$product->precio}} </p>
           <ul class="collapsible" data-collapsible="accordion">
           <li>
           <div class="collapsible-header"><i class="material-icons">filter_drama</i>Añadir al carrito</div>
           <div class="collapsible-body"><p>Producto disponible por unidad: {{$product->cantidad}}</p></div>
           </li>
           </ul>
           </div>
           </div>
           </div>
           @endforeach
           @endif
</div>
       <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script type="text/javascript" src="/js/main.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  </body>
</html>
