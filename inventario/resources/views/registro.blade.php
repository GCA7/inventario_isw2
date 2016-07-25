@extends('principal')

@section('content')
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Confirm your password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email" data-error="wrong">Email</label>
        </div>
      </div>
      <button type="submit" name="btn-registro" class="btn blue-grey darken-3">Registrarme</button>
      <button type="submit" name="btn-cancel" class="btn blue-grey darken-3">Cancelar</button>
    </form>
  </div>



@stop
