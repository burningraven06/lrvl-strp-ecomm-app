@extends('layouts.master')

@section('styles')
  {{-- <link rel='stylesheet' href='{{ asset('custom/shop_index.css')}}' /> --}}
@endsection

@section('title')
  FIRSTNAME
@endsection

@section('content')
  {{ $user->email}}
@endsection
