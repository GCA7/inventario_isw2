<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  protected $fillable = [
      'nombreproducto', 'cantidad','precio',
  ];
  protected $hidden = [
      'idproduct', 'remember_token',
  ];
}
