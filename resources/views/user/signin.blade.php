@extends ('layouts.master')

@section('title')
  Raphael: Sign In
@endsection

@section('styles')
  <link rel='stylesheet' href='{{ asset('custom/css/signup_signin.css')}}' />
@endsection

@section('content')

  <div class="row">
    <div class='col s6 offset-s3 '>
      <div class='row'>
        <div class='s12'>
          <h3> Sign In</h3>
        </div>
      </div>
      <form action="{{ route('userPostSigninRoute')}}" method="post">
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
          <button class='btn waves-effect waves-light btn-large teal' type='submit'> Sign in <i class="material-icons right">send</i> </button>
          <button class='btn waves-effect waves-light btn-large red accent-1' type='reset'> Cancel <i class='material-icons right'>block</i> </button>
        </div>
      </form>

      <div class='row'>
        <div class='s12 mt64'>
          <h5> Don't have an account yet?</h5>
          <p>
            Click <a href="{{ route('userGetSignupRoute')}}"> Here to Sign Up</a> Now!
          </p>
        </div>
      </div>
    </div>
  </div>

@endsection
