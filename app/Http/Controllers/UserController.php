<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Auth as Auth;

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
    
    return redirect()->route('productIndexRoute');
  }

  public function getSignin(){
    return view('user.signin');
  }

  public function postSignin(Request $req){
    $this->validate($req, ['email' => 'required', 'password' => 'required']);

    if (Auth::attempt(['email' => $req['email'], 'password' => $req['password']]) ){
      return redirect()->route('userProfileRoute');
    }

    return redirect()->back()->with(['fail' => 'Invalid Credentials']);
  }

  public function getUserProfile(){
    $user = Auth::user();
    $context = [
      'user' => $user
    ];
    return view('user.profile', $context);
  }

  public function postSignout(){
    Auth::logout();
    return redirect()->route('productIndexRoute');
  }
}
