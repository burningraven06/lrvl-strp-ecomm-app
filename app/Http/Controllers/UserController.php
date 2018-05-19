<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

class UserController extends Controller{

  public function getSignup(){
    return view('user.signup');
  }

  public function postSignup(Request $req){
    $this->validate($req, ['email' => 'required | unique:users', 'password' => 'required | min:8']);

    $user = new User([
      'email' => $req['email'],
      'password' => bcrypt($req['password'])
    ]);

    $user->save();

    return redirect()->route('productIndexRoute');
  }
}
