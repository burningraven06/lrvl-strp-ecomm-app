<!doctype html>
<html>
  <head>
    <meta charset='utf-8' />
    <title> @yield('title') </title>
    <link rel='stylesheet' href=' {{ asset('materialize/materialize.min.css') }}' />
    <link rel='stylesheet' href=' {{ asset('materialize/materialize-icons.css')}}' />
    {{-- <link ree='stylesheet' href=' {{ asset('custom/mystyles.css')}}' /> --}}
    @yield('styles')
  </head>

  <body>
    @include('partials.header')
    <div class='container'>
      @yield('content')
    </div>
  </body>

  <script src='{{ asset('jquery3/jquery.3.min.js')}}'> </script>
  <script src='{{ asset('materialize/materialize.min.js')}}'> </script>

  @yield('scripts')

</html>
