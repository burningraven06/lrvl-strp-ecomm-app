@extends('layouts.master')

@section('styles')
  <link rel='stylesheet' href='{{ asset('custom/css/about.css')}}' />
@endsection

@section('title')
  Raphael: About
@endsection

@section('content')
  <div class='row'>
    <div class='col s4 offset-s1'>
      <div class='col s12 mt32'>
        <div class='row'>
          <h3> About </h3>
        </div>
      </div>
      <div class='col s12 mt32'>
        <div class='row'>
          <h6> This is a Shopping Cart App with:</h6>
        </div>
        <div class='row mt32'>
          <div class='col s12'>
            <ul class="collection">
              <li class="collection-item"> Stripe for Payment Processing</li>
              <li class="collection-item"> Laravel for MVC</li>
              <li class="collection-item"> MaterializeCSS for Design </li>
              <li class="collection-item"> Heroku for Deployment</li>
              <li class="collection-item"> PGSQL for DB</li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <div class='col s4 offset-s1'>
      <h1 class='center-align about_heading'>
        <i class='material-icons xlarge'>shop</i>
      </h1>
      <div class='row'>
        <h6 class='center-align mt32'> Created by: <span class='about-me'> BurningRaven06</span> </h6>
      </div>
    </div>
  </div>
@endsection
