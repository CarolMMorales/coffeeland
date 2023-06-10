<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="https://kit.fontawesome.com/9fd1a302e2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./scripts/app.js"></script>
    @yield('head')
</head>
<body>
    <div id="app">
        <header>
            <div class="navbar ">
                <div class="container-fluid text-secondary-emphasis">
                  <a class="navbar-brand"><strong>COFFEELAND</strong>
                    <i class="fa-solid fa-mug-hot"></i>
                  </a>
                  <ul class="nav nav-underline justify-content-end">
                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        @endguest
                    @auth
                    @if (Auth::user()->name == "admin")
                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="{{route('orders.index')}}">Ordenes</a>
                    </li>
                    @endif


                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="{{route('products.index')}}">Productos</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link text-secondary" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form>
</li>
@endauth
</div>
</div>
</header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="footer container-fluid fixed-bottom mt-lg-5">
        <div class="footerItems"><i class="fa-regular fa-envelope"></i> cflbog@gmail.com
        </div>
        <div class="footerItems"><i class="fa-solid fa-phone"></i> 3108935224
        </div>
        <div class="footerItems"><i class="fa-brands fa-facebook-f"></i> <i class="fa-brands fa-twitter"></i> <i class="fa-brands fa-instagram"></i>
        </div>
      </footer>
    @yield('scripts')
</body>
</html>
