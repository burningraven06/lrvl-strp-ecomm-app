@extends('layouts.master')

@section('title')
  Raphael: FIRSTNAME
@endsection

@section('content')
  <div class='row'>
    <div class='col s12'>
      <h3> Profile {{ $user->email}} </h3>
    </div>
  </div>
@endsection
