<!doctype html>
<html>
  <head>
    <meta charset='utf-8' />
    <title> @yield('title') </title>
    <link rel='stylesheet' href=' {{ asset('materialize/css/materialize.min.css') }}' />
    <link rel='stylesheet' href=' {{ asset('materialize/icons/materialize-icons.css')}}' />
    {{-- <link ree='stylesheet' href=' {{ asset('custom/css/mystyles.css')}}' /> --}}
    @yield('styles')
  </head>

  <body>
    @include('partials.header')
    @include('partials.messages')

    {{-- <div class='container'> --}}
      @yield('content')
    {{-- </div> --}}
  </body>

  <script src='{{ asset('jquery3/jquery.3.min.js')}}'> </script>
  <script src='{{ asset('materialize/js/materialize.min.js')}}'> </script>

  @yield('scripts')

</html>
