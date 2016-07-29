<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'idproduct', 'nombre', 'cantidad', 'descripcion','precio','imagen',
  ];
  protected $hidden = [
      'idproduct', 'remember_token',
  ];
}
