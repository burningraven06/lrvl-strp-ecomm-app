@extends ('layouts.master')

@section('title')
  Raphael: Sign Up
@endsection

@section('styles')
  <link rel='stylesheet' href='{{ asset('custom/css/signup_signin.css')}}' />
@endsection

@section('content')

  <div class="row">
    <div class='col m8 offset-m2'>
      <h3> Sign Up</h3>
      <form action="{{ route('userGetSignupRoute')}}" method="post">
        <input type='hidden' name="_token" value="{{ Session::token()}}" />
        <div class='row'>
          <div class='col s6 input-field'>
            <i class="material-icons prefix">account_circle</i>
            <input id='first_name' type='text' class='validate cust_fs36' name='first_name' required="" minlength="3" maxlength="30" />
            <label for='first_name' data-error="wrong" data-success="right"> First Name </label>
          </div>
          <div class='col s6 input-field'>
            <i class="material-icons prefix">account_circle</i>
            <input id='last_name' type='text' class='validate cust_fs36' name='last_name' required=""  minlength="3" maxlength="30" />
            <label for='last_name' data-error="wrong" data-success="right"> Last Name </label>
          </div>
        </div>
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
  </div>

@endsection
