@extends('layouts/principal')

@section('content')

<div class="container alto">
  <div class="row col m8">
     <div class="collection">
        <p href="#!" class="collection-item center">Buscar producto <input class="badge center"/>
        <button class="center btn" type="submit" name="button"><i class="material-icons center">search</i></button></p>
    </div>
  </div>
</div>
        <div class="row text-center" >
          @if ($products!='')
            @foreach ($products as $product)
          <form class="" action="" method="post">
            <div class="center col m4">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator center" src="{{$product->imagen}}"/>
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">{{$product->nombre}}<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">{{$product->nombre}}<i class="material-icons right">close</i></span>
                  <p>{{$product->descripcion}}</p>
                  <p><span>Precio: </span>₡{{$product->precio}} </p>
                  <ul class="collapsible" data-collapsible="accordion">
                      <li>
                      <div class="collapsible-header center"><i class="material-icons">shopping_cart</i>Comprar</div>
                      <div class="collapsible-body"><p>En stock: {{$product->cantidad}}</p>
                            <a href="#!" class="collection-item">Elija cantidad<input class="new badge center" placeholder="cantidad"></a>
                            <button type="submit" name="button" class="btn">Añadir al carrito</button></br>
                      </div>
                      </li>
                  </ul>
                </div>
              </div>
            </div>
</form>
        @endforeach
     @endif
</div>
     <div id="modal1" class="modal">
       <div class="modal-content">
         <h4>Modal Header</h4>
         <p>A bunch of text</p>
       </div>
       <div class="modal-footer">
         <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
       </div>
     </div>
@stop
