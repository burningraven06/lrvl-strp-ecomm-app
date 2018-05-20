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

  public function getShowCart(){
    if (!Session::has('cart')){
      $context = [
        'cart_products' => null
      ];
      return view('shop.shopping-cart', $context);
    }

    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);

    $context = [
      'sl_count' => 0,
      'cart_products' => $cart->unique_products,
      'cart_totalPrice' => $cart->totalPrice,
      'cart_totalQty' => $cart->totalQty
    ];
    return view('shop.shopping-cart', $context);
  }

  public function getCheckout(){
    if (!Session::has('cart')){
      $context = [
        'cart_products' => null
      ];
      return view('shop.shopping-cart', $context);
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);

    $context = [
      'cart_products' => true,
      'totalPrice' => $cart->totalPrice
    ];
    return view('shop.checkout', $context);
  }

  public function postCheckout(Request $req){
    return "wow";
  }

}
