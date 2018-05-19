@extends('layouts.master')

@section('styles')
  <link rel='stylesheet' href='{{ asset('custom/shop_index.css')}}' />
@endsection

@section('title')
  Shop
@endsection

@section('content')
  <div class='row'>
    <h1> Shop </h1>
  </div>

  <div class="row">
    <div class="col s12 m4 mt16">
      <div class="card">
        <div class="card-image">
          <img class='responsive-img' src="{{ asset('images/dummy_product_2.jpg')}}">
          {{-- <span class="card-title">Card Title</span> --}}
        </div>
        <div class="card-content">
          <h5> Card Title</h5>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action ">
          <div class='row mb0'>
            <div class='col s6'>
              <h5 class='center-align'> <em>$15.99</em></h5>
            </div>
            <div class='col s6'>
              <h5 class='center-align'>
                <a href="#" title='Add to Cart'>
                  <i class='material-icons cust_fz36'>add_shopping_cart</i>
                </a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4 mt16">
      <div class="card">
        <div class="card-image">
          <img class='responsive-img' src="{{ asset('images/dummy_product_1.jpg')}}">
          {{-- <span class="card-title">Card Title</span> --}}
        </div>
        <div class="card-content">
          <h5> Card Title</h5>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action ">
          <div class='row mb0'>
            <div class='col s6'>
              <h5 class='center-align'> <em>$15.99</em></h5>
            </div>
            <div class='col s6'>
              <h5 class='center-align'>
                <a href="#" title='Add to Cart'>
                  <i class='material-icons cust_fz36'>add_shopping_cart</i>
                </a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4 mt16">
      <div class="card">
        <div class="card-image">
          <img class='responsive-img' src="{{ asset('images/dummy_product_3.jpg')}}">
          {{-- <span class="card-title">Card Title</span> --}}
        </div>
        <div class="card-content">
          <h5> Card Title</h5>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action ">
          <div class='row mb0'>
            <div class='col s6'>
              <h5 class='center-align'> <em>$15.99</em></h5>
            </div>
            <div class='col s6'>
              <h5 class='center-align'>
                <a href="#" title='Add to Cart'>
                  <i class='material-icons cust_fz36'>add_shopping_cart</i>
                </a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4 mt16">
      <div class="card">
        <div class="card-image">
          <img class='responsive-img' src="{{ asset('images/dummy_product_1.jpg')}}">
          {{-- <span class="card-title">Card Title</span> --}}
        </div>
        <div class="card-content">
          <h5> Card Title</h5>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action ">
          <div class='row mb0'>
            <div class='col s6'>
              <h5 class='center-align'> <em>$15.99</em></h5>
            </div>
            <div class='col s6'>
              <h5 class='center-align'>
                <a href="#" title='Add to Cart'>
                  <i class='material-icons cust_fz36'>add_shopping_cart</i>
                </a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4 mt16">
      <div class="card">
        <div class="card-image">
          <img class='responsive-img' src="{{ asset('images/dummy_product_2.jpg')}}">
          {{-- <span class="card-title">Card Title</span> --}}
        </div>
        <div class="card-content">
          <h5> Card Title</h5>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action ">
          <div class='row mb0'>
            <div class='col s6'>
              <h5 class='center-align'> <em>$15.99</em></h5>
            </div>
            <div class='col s6'>
              <h5 class='center-align'>
                <a href="#" title='Add to Cart'>
                  <i class='material-icons cust_fz36'>add_shopping_cart</i>
                </a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4 mt16">
      <div class="card">
        <div class="card-image">
          <img class='responsive-img' src="{{ asset('images/dummy_product_3.jpg')}}">
          {{-- <span class="card-title">Card Title</span> --}}
        </div>
        <div class="card-content">
          <h5> Card Title</h5>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action ">
          <div class='row mb0'>
            <div class='col s6'>
              <h5 class='center-align'> <em>$15.99</em></h5>
            </div>
            <div class='col s6'>
              <h5 class='center-align'>
                <a href="#" title='Add to Cart'>
                  <i class='material-icons cust_fz36'>add_shopping_cart</i>
                </a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4 mt16">
      <div class="card">
        <div class="card-image">
          <img class='responsive-img' src="{{ asset('images/dummy_product_1.jpg')}}">
          {{-- <span class="card-title">Card Title</span> --}}
        </div>
        <div class="card-content">
          <h5> Card Title</h5>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action ">
          <div class='row mb0'>
            <div class='col s6'>
              <h5 class='center-align'> <em>$15.99</em></h5>
            </div>
            <div class='col s6'>
              <h5 class='center-align'>
                <a href="#" title='Add to Cart'>
                  <i class='material-icons cust_fz36'>add_shopping_cart</i>
                </a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4 mt16">
      <div class="card">
        <div class="card-image">
          <img class='responsive-img' src="{{ asset('images/dummy_product_2.jpg')}}">
          {{-- <span class="card-title">Card Title</span> --}}
        </div>
        <div class="card-content">
          <h5> Card Title</h5>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action ">
          <div class='row mb0'>
            <div class='col s6'>
              <h5 class='center-align'> <em>$15.99</em></h5>
            </div>
            <div class='col s6'>
              <h5 class='center-align'>
                <a href="#" title='Add to Cart'>
                  <i class='material-icons cust_fz36'>add_shopping_cart</i>
                </a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m4 mt16">
      <div class="card">
        <div class="card-image">
          <img class='responsive-img' src="{{ asset('images/dummy_product_1.jpg')}}">
          {{-- <span class="card-title">Card Title</span> --}}
        </div>
        <div class="card-content">
          <h5> Card Title</h5>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action ">
          <div class='row mb0'>
            <div class='col s6'>
              <h5 class='center-align'> <em>$15.99</em></h5>
            </div>
            <div class='col s6'>
              <h5 class='center-align'>
                <a href="#" title='Add to Cart'>
                  <i class='material-icons cust_fz36'>add_shopping_cart</i>
                </a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
