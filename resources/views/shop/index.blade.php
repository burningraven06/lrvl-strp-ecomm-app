@extends('layouts.master')

@section('styles')
  <link rel='stylesheet' href='{{ asset('custom/css/shop_index.css')}}' />
@endsection

@section('title')
  Rafael: Shop
@endsection

@section('content')
  <div class='row'>
    <div class='col s10 offset-s1'>
      <h3> Shop </h3>
    </div>
  </div>

  @foreach($products->chunk(3) as $productChunk)
    <div class='row'>
      <div class='col s10 offset-s1'>
        @foreach($productChunk as $product)
          <div class="col s12 m4 mt16">
            <div class="card">
              <div class="card-image">
                <img class='responsive-img' src= "{{ $product->imgPath }}" title=" {{ $product->title}}" />
              </div>
              <div class="card-content">
                <h5> {{ $product->title }}</h5>
                <p> {{ substr($product->description, 0, 60) }} ...</p>
              </div>
              <div class="card-action ">
                <div class='row mb0'>
                  <div class='col s6'>
                    <h5 class='center-align'>
                      <em>
                        <span class='cust_fs24'>$</span>
                        <span class='cust_fs30'>{{ $product->price}} </span>
                      </em>
                    </h5>
                  </div>
                  <div class='col s6'>
                    <h5 class='right-align'>
                      <a href="{{ route('productAddToCartRoute', ['id' => $product->id])}}" title='Add to Cart'>
                        <i class='material-icons cust_fs30'>add_shopping_cart</i>
                      </a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @endforeach

@endsection
