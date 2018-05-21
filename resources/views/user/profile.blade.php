@extends('layouts.master')

@section('title')
  Raphael: FIRSTNAME
@endsection

@section('content')
  <div class='row'>
    <div class='col s10 offset-s1'>
      <h3> Profile {{ $user->email}} </h3>
    </div>
  </div>
@endsection
