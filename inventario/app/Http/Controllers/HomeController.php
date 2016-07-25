<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Cache;
use Crypt;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
  public function insertar(Request $request)
  {
      if($request->input('password') == $request->input('pass') ){
      $user = new User;
      $user->name = $request->input('first_name');
      $user->email = $request->input('email');
      $user->password = Crypt::encrypt($request->input('password'));
      $user->save();
      return redirect('login');
    }else{
      return view('registro', ['error' => 'Las contraseñas no coinciden']);
    }
  }

  public function login(Request $request){
    $user= DB::table('users')->select('password', 'email')->where('email',$request->input("log_email"))->get();
    var_dump($request->input("log_email"));
    foreach ($user as $user) {
      $contraseña= Crypt::decrypt($user->password);
      if ($contraseña == $request->input("log_pass") && $user->email == $request->input("log_email") ){
        Cache::add('usuario',$request->input("log_email"),60);
        return redirect('principal');
    }else{
        return view('login', ['error' => 'Usuario o contraseña incorrecta']);
    }
}
}



}