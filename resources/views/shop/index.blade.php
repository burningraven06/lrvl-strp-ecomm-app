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

  @foreach($products->chunk(3) as $productChunk)
    <div class='row'>
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
                  <h5 class='center-align'> <em> {{ $product->price}}</em></h5>
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
      @endforeach
    </div>
  @endforeach

@endsection
