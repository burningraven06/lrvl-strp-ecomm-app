<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;
use App\Cart as Cart;
use Session;

class ProductController extends Controller{

  public function getIndex(){
    $products = Product::all();
    $context = [
      'products' => $products
    ];
    return view('shop.index', $context);
  }

  public function getAddToCart(Request $req, $id){
    $product = Product::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;

    $cart = new Cart($oldCart);
    $cart->addToCart($product, $product->id);

    Session::put('cart', $cart);

    // dd(Session::get('cart'));

    return redirect()->route('productIndexRoute')->with(['success_message' => "Product Added to Cart"]);
  }

}
