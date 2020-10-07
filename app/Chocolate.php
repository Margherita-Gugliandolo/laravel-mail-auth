<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chocolate extends Model
{
    protected $fillable = [

      'name',
      'types',
      'description',
      'calory',
      'price'

    ];
}
