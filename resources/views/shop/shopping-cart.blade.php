@extends('layouts.master')

@section('title')
  Raphael: Cart
@endsection

@section('styles')
  <link rel='stylesheet' href='{{ asset('custom/css/shopping-cart.css')}}' />
@endsection

@section('content')
  @if($cart_products)
    <div class='row'>
      <div class='col s10 offset-s1'>
        <h3> Cart Details</h3>
      </div>
    </div>
    <div class='row'>
      <div class='col s10 offset-s1'>
      <div class='col s8'>
        <table>
          <thead class='teal lighten-4'>
            <tr >
              <th class='center-align'>#</th>
              <th >Product</th>
              <th class='center-align'>Qty</th>
              <th class='center-align'>Action</th>
              <th class='center-align'>Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cart_products as $product)
              <?php $sl_count++ ?>
              <tr class='border_color'>
                <td class='center-align'> {{ $sl_count}}</td>
                <td> {{ $product['item']['title'] }}</td>
                <td class='center-align'> {{ $product['qty']}}</td>
                <td class='center-align'>
                  <a class='cart_action_anc ml8' href="{{ route('increaseCartProductByOne', ['id' => $product['item']['id']]) }}" title='Increase by 1'>
                    <i class='material-icons'>add</i>
                  </a>
                  <a class='cart_action_anc ml8' href="{{ route('reduceCartProductByOne', ['id' => $product['item']['id']])}}" title='Reduce by 1'>
                    <i class='material-icons'>remove</i>
                  </a>
                  <a class='cart_action_anc ml8' href="{{ route('removeCartItem', ['id' => $product['item']['id']]) }}" title='Remove Completely'>
                    <i class='material-icons'>remove_shopping_cart</i>
                  </a>
                </td>
                <td class='center-align'> ${{ $product['price']}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class='col s3 offset-s1'>
        <h5 class='cart_summary_heading5'> Cart Summary</h5>
        <p class='mt32'>
          Total Items: <h4 class='ml8 cart_summary_heading4 '> {{ $cart_totalQty}} </h4>
        </p>
        <p>
          Total Price: <h4 class='ml8 cart_summary_heading4'> ${{ $cart_totalPrice}}</h4>
        </p>
        <a class='btn btn-large mt32 teal darken-3 waves-effect waves-light' href="{{ route('checkoutRoute')}}"> Checkout <i class='material-icons right'>send</i></a>
      </div>
    </div>
    </div>

  @else
    <div class='row'>
      <div class='col s8 offset-s2'>
        <h1 class='pink-text'> Cart Empty! </h1>
        <h4 class='mt64'>
          Please <a href="{{ route('productIndexRoute')}}"> shop some products </a>
        </h4>
      </div>
    </div>
  @endif
@endsection
