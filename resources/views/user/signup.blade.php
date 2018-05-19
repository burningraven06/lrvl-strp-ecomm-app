@extends ('layouts.master')

@section('title')
  Sign Up
@endsection

@section('styles')
  <link rel='stylesheet' href='{{ asset('custom/signup_signin.css')}}' />
@endsection

@section('content')

@include('partials.messages')

  <div class="row">
    <form class='col s8 ' action="{{ route('userGetSignupRoute')}}" method="post">
      <div class='row'>
        <div class='col s12'>
          <h2> Sign Up</h2>
        </div>
      </div>
      <input type='hidden' name="_token" value="{{ Session::token()}}" />
      <div class='row'>
        <div class='col s12 input-field'>
          <i class="material-icons prefix">email</i>
          <input id='email' type='email' class='validate cust_fs36' name='email' required="" />
          <label for='email' data-error="wrong" data-success="right"> Email </label>
        </div>
      </div>
      <div class='row'>
        <div class='col s12 input-field'>
          <i class="material-icons prefix">lock</i>
          <input id='password' type='password' class='validate cust_fs36' required="" minlength="8" name='password'  />
          <label for='password' data-error="wrong" data-success="right"> Password</label>
        </div>
      </div>
      <div class='row'>
        <button class='btn waves-effect waves-light btn-large teal' type='submit'> Signup <i class="material-icons right">send</i> </button>
        <button class='btn waves-effect waves-light btn-large red accent-1' type='reset'> Cancel <i class='material-icons right'>block</i> </button>
      </div>
    </form>
  </div>

@endsection
