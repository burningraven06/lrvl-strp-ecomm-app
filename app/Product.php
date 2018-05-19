<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'imgPath', 'title', 'description', 'price'
  ];
}
