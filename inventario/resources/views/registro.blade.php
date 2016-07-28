@extends('layouts/principal')

@section('content')
<div class="row">
    <form class="col s12" method="POST" action="{{asset('registro')}}">
      	{{Csrf_field ()}}
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="first_name">
          <label for="first_name">First Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="pass" type="password" class="validate" name="pass">
          <label for="password">Confirm your password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email" data-error="wrong">Email</label>
        </div>
      </div>
      <div class="center">
      <button type="submit" name="btn-registro" class="btn blue-grey darken-3">Registrarme</button>
      <button type="submit" name="btn-cancel" class="btn blue-grey darken-3">Cancelar</button>
      </div>
    </form>
  </div>
  <footer class="animated bounceInLeft center"><p>{{$error}}</p></footer>



@stop
