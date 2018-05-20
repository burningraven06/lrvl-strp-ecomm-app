<style>
  .nav_span{
    display:none;
  }
</style>
<nav>
  <div class="nav-wrapper cyan darken-4">
    <div class='container'>
      <a href="/" class="brand-logo">LRVL Shop</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li  class='nav_li'>
          <a href="{{ route('userProfileRoute')}}" title="Profile Settings">
            <span class='nav_span'> Profile Settings </span>
            <i class='material-icons'>settings</i>
          </a>
        </li>
        <li class='nav_li'>
          <a href="#!" title="Cart">
            <span class='nav_span'> Cart </span>
            <i class='material-icons '>shopping_cart</i>
          </a>
        </li>
        <li class='nav_li'>
          <a href="{{ route('userGetSignupRoute')}}" title="Sign Up">
            <span class='nav_span'> Sign up</span>
            <i class='material-icons '>person_add</i>
          </a>
        </li>
        @if(Auth::check())
          <li class='nav_li'>
            <a href="{{ route('userPostSignoutRoute')}}" title="Sign Out">
              <span class='nav_span'> Sign Out</span>
              <i class='material-icons '>call_made</i>
            </a>
          </li>
        @else
          <li class='nav_li'>
            <a href="{{ route('userGetSigninRoute')}}" title="Sign In">
              <span class='nav_span'> Sign in</span>
              <i class='material-icons '>input</i>
            </a>
          </li>
        @endif
      </ul>
    </div>

  </div>
</nav>

@section('scripts')
<script>
  var nav_lis = document.getElementsByClassName('nav_li');

  for (var i=0; i<nav_lis.length; i++){
    nav_lis[i].addEventListener('mouseover', function(){
      this.children[0].children[1].style.display = 'none';
      this.children[0].children[0].style.display = 'block';
      console.log("Enter", this.children[0].children[0]);
    });

    nav_lis[i].addEventListener('mouseout', function(){
      this.children[0].children[0].style.display = 'none';
      this.children[0].children[1].style.display = 'block';
      console.log("Exit", this.children[0].children[0]);
    });
  }
</script>
@endsection
