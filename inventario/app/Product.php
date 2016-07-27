<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'nombre', 'cantidad', 'descripcion','precio','imagen',
  ];
  protected $hidden = [
      'idproduct', 'remember_token',
  ];
}
