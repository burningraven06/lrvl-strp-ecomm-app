<link rel='stylesheet' href="{{ asset('custom/css/header.css')}}" />
<nav>
  <div class="nav-wrapper cyan darken-4">
    <div class='row'>
      <div class='col s10 offset-s1'>
        <a href="{{ route('productIndexRoute')}}" class="brand-logo" title="Shop">Rafael Store</a>
        <ul id="nav-mobile" class="right">
          <li  class='nav_li'>
            <a href="{{ route('userProfileRoute')}}">
              <span class='nav_span center-align'> Profile </span>
              <i class='material-icons'>settings</i>
            </a>
          </li>
          <li class='nav_li'>
            <a href="{{ route('productShowCartRoute')}}" >
              <span class='nav_span center-align'> Cart </span>
              <span>
                <i class='material-icons ' >shopping_cart</i>
                @if(Session::has('cart'))
                <span class="badge"> {{ Session::has('cart') ? Session::get('cart')->totalQty :  ""}}</span>
                @endif
              </span>
            </a>
          </li>
          @if(Auth::check())
            <li class='nav_li'>
              <a href="{{ route('userPostSignoutRoute')}}">
                <span class='nav_span center-align'> Sign Out</span>
                <i class='material-icons '>call_made</i>
              </a>
            </li>
          @else
            <li class='nav_li'>
              <a href="{{ route('userGetSignupRoute')}}">
                <span class='nav_span center-align'> Sign up</span>
                <i class='material-icons '>person_add</i>
              </a>
            </li>
            <li class='nav_li'>
              <a href="{{ route('userGetSigninRoute')}}">
                <span class='nav_span center-align'> Sign in</span>
                <i class='material-icons '>input</i>
              </a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</nav>

<script src="{{ asset('custom/js/header.js')}}"></script>
