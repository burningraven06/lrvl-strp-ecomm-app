@extends('layouts.master')

@section('title')
  Raphael: Orders
@endsection

@section('styles')
  <link rel='stylesheet' href='{{ asset('custom/css/profile.css')}}' />
@endsection

@section('content')
  <div class='row'>
    <div class='col s10 offset-s1'>
      @if($orders->count())
      <div class='row'>
        <div class='col s8 offset-s2'>
          <h4 class='mt32 center-align'>My Orders</h4>

          @foreach($orders as $order)

            <h5 class='mt48 teal pad_24 white-text'>
              Order Date
              <span class='right'> {{ substr($order->created_at, 0, 10) }}</span>
            </h5>

            <p class='order_total_summary'>
              Total Items: {{ $order->cart->totalQty}} Unit(s),
              Total Price: $<strong>{{ $order->cart->totalPrice}}</strong>
            </p>

            <ul class="collection">
              @foreach($order->cart->unique_products as $item)

              <li class="collection-item avatar">
                <img src="{{ $item['item']['imgPath']}}" alt="" class="circle">
                <h5>
                  <strong> {{$item['item']['title'] }} </strong>
                </h5>
                <p>
                  Qty: <strong>{{ $item['qty']}} Unit(s)</strong>,
                  Price: $<strong>{{ $item['price']}}</strong>
                </p>
                <span class='secondary-content'>
                  <i class="material-icons">shopping_cart</i>
                </span>
              </li>
            @endforeach
          </ul>
          @endforeach

        </div>
      </div>
      @else
        <div class='row'>
          <h2 class='pink-text'>You haven't placed any orders yet! </h2>
          <h4 class='mt64'>
            Please <a href="{{ route('productShowCartRoute')}}"> checkout to place orders</a>
          </h4>
        </div>
      @endif
    </div>
  </div>
@endsection
