<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Auth as Auth;
use Session;

class UserController extends Controller{

  public function getSignup(){
    return view('user.signup');
  }

  public function postSignup(Request $req){
    $this->validate($req, [
      'email' => 'required | unique:users',
      'password' => 'required | min:8',
      'first_name' => 'required | min:3 | max:30',
      'last_name' => 'required | min:3 | max: 30'
    ]);

    $user = new User([
      'first_name' => $req['first_name'],
      'last_name' => $req['last_name'],
      'email' => $req['email'],
      'password' => bcrypt($req['password'])
    ]);

    $user->save();
    Auth::login($user);

    // if(Session::has('oldUrl')){
    //
    //   $oldUrl = Session::get('oldUrl');
    //   Session::forget('oldUrl');
    //
    //   return redirect()->to($oldUrl);
    // }

    return redirect()->route('productIndexRoute');
  }

  public function getSignin(){
    return view('user.signin');
  }

  public function postSignin(Request $req){
    $this->validate($req, ['email' => 'required', 'password' => 'required']);

    if (Auth::attempt(['email' => $req['email'], 'password' => $req['password']]) ){
      $context = [
        'success_message' => "Welcome " . Auth::user()->email
      ];

      // if(Session::has('oldUrl')){
      //
      //   $oldUrl = Session::get('oldUrl');
      //   Session::forget('oldUrl');
      //
      //   return redirect()->to($oldUrl)->with($context);
      // }

      return redirect()->route('userProfileRoute')->with($context);
    }

    return redirect()->back()->with(['fail_message' => 'Invalid Credentials']);
  }

  public function getUserProfile(){
    $user = Auth::user();
    $orders = Auth::user()->orders;

    $orders->transform(function($order, $key){
      $order->cart = unserialize($order->cart);
      return $order;
    });

    // $orders = Order::where('user_id', Auth::user()->id);
    $context = [
      'user' => $user,
      'orders' => $orders
    ];
    return view('user.profile', $context);
  }

  public function getSignout(){
    Auth::logout();
    return redirect()->route('productIndexRoute');
  }
}
