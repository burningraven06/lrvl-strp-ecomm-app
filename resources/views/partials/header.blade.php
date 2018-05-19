<nav>
  <div class="nav-wrapper">
    <a href="/" class="brand-logo">LRVL Shop</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li>
        <a href="#!" class='dropdown-trigger' data-target="user_menuitems_dropdown" title="Settings">
          <i class='material-icons'> person</i>
        </a>
      </li>
      <li>
        <a href="#!" title="Cart">
          <i class='material-icons'>shopping_cart</i>
        </a>
      </li>
    </ul>
  </div>
</nav>

<ul id='user_menuitems_dropdown' class='dropdown-content'>
  <li> <a href="#"> Profile </a></li>
  <li> <a href="#"> Logout </a></li>
</ul>


@section('scripts')
<script>
   $('.dropdown-trigger').dropdown();
</script>
@endsection
