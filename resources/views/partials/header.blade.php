<link rel='stylesheet' href="{{ asset('custom/css/header.css')}}" />
<nav>
  <div class="nav-wrapper cyan darken-4">
    <div class='container'>
      <a href="{{ route('productIndexRoute')}}" class="brand-logo">LRVL Shop</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li  class='nav_li'>
          <a href="{{ route('userProfileRoute')}}">
            <span class='nav_span'> Profile Settings </span>
            <i class='material-icons'>settings</i>
          </a>
        </li>
        <li class='nav_li'>
          <a href="/#/" >
            <span class='nav_span'> Cart </span>
            <i class='material-icons '>shopping_cart</i>
          </a>
        </li>
        @if(Auth::check())
          <li class='nav_li'>
            <a href="{{ route('userPostSignoutRoute')}}">
              <span class='nav_span'> Sign Out</span>
              <i class='material-icons '>call_made</i>
            </a>
          </li>
        @else
          <li class='nav_li'>
            <a href="{{ route('userGetSignupRoute')}}">
              <span class='nav_span'> Sign up</span>
              <i class='material-icons '>person_add</i>
            </a>
          </li>
          <li class='nav_li'>
            <a href="{{ route('userGetSigninRoute')}}">
              <span class='nav_span'> Sign in</span>
              <i class='material-icons '>input</i>
            </a>
          </li>
        @endif
      </ul>
    </div>

  </div>
</nav>

<script src="{{ asset('custom/js/header.js')}}">
</script>
