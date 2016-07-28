@extends('layouts/principal')

@section('content')
<div class="">
<div class="row center cajon">
    <form class="col s12" method="POST" action="{{asset('login')}}">
      {{Csrf_field ()}}
      <div class="row">
        <div class="input-field col s12">
          <input id="log_email" type="email" class="validate" name="log_email">
          <label for="email" data-error="wrong">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="log_pass" type="password" class="validate" name="log_pass">
          <label for="password">Password</label>
        </div>
      </div class="">
      <button type="submit" name="btnlogin" class="btn blue-grey darken-3" >Iniciar Sesion</button>
    </form>
  </div>
</div>
<footer class="animated bounceInLeft center"><p>{{$error}}</p></footer>
@stop
