<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;

class ProductController extends Controller{

  public function getIndex(){
    $products = Product::all();
    $context = [
      'products' => $products
    ];
    return view('shop.index', $context);
  }
  
}
