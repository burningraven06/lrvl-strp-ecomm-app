<!doctype html>
<html>
  <head>
    <meta charset='utf-8' />
    <title> @yield('title') </title>
    <link rel='stylesheet' href=' {{ asset('materialize/materialize.min.css') }}' />
    <script src='{{ asset('materialize/materialize.min.js')}}'> </script>
    @yield('styles')
  </head>
  <body>
    <div class='container'>
      @yield('content')
    </div>
  </body>
  @yield('scripts')
</html>
