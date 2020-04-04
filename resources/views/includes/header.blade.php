<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('product.index') }}">Shopping Mall</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('getCart') }}"><i class="fa fa-shopping-cart"></i>  Shopping Cart <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"> User Settings</i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @if(Auth::check())
                      <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                        @else
                        <a class="dropdown-item" href="{{ route('user.login') }}">Login</a>
                        <a class="dropdown-item" href="{{ route('user.register') }}">Register</a>
                        <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                        @endif
                  </div>
              </li>
          </ul>
      </div>
  </nav>
