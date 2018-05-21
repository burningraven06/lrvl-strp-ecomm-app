<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;
use App\Cart as Cart;
use App\Order as Order;
use Session;
use Auth;
use \Stripe;

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
    $context = [
      'success_message' => "Product Added to Cart"
    ];

    return redirect()->route('productIndexRoute')->with($context);
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
    if (!Session::has('cart')){
      return redirect()->route('productShowCartRoute');
    }

    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);

    $stripeKey = env('STRIPE_SECRET_KEY');
    Stripe\Stripe::setApiKey($stripeKey);

    $charge_description = $req['first_name']." ".$req['last_name']." has been charged $".$cart->totalPrice ;

    try {

      $stripeChargeOptions = [
        "amount" => $cart->totalPrice * 100,
        "currency" => "usd",
        "source" => $req['stripeToken'],
        "description" => $charge_description
      ];

      $stripeCharge = Stripe\Charge::create($stripeChargeOptions);

      $order = new Order();

      $order->cart = serialize($cart);
      $order->cust_full_name = $req['first_name'] ." ".$req['last_name'];
      $order->cust_email = $req['email'];
      $order->cust_contact_phone = $req['cellno'];
      $order->cust_shipping_address = $req['address'];
      $order->order_note = $req['order_note'];
      $order->payment_id = $stripeCharge->id;

      Auth::user()->orders()->save($order);

      // $order->user_id = Auth::user()->id;
      // $order->save();

    } catch (\Exception $e){
      $context = [
        'error' => $e->getMessage()
      ];
      return redirect()->route('checkoutRoute')->with($context);
    }

    $context = [
      'success_message' => "Checkout Successfull. Products Purchased"
    ];

    Session::forget('cart');

    return redirect()->route('productIndexRoute')->with($context);

  }

}
