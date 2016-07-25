@extends('principal')

@section('content')
<div class="container">
<div class="row center cajon">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email" data-error="wrong">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div class="">
      <button type="submit" name="btnlogin" >Iniciar Sesion</button>
    </form>
  </div>
</div>


@stop
