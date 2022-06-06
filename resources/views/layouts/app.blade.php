<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/admin.js') }}" defer></script>
  <script src="{{ asset('js/store.js') }}" defer></script>
  <script src="{{ asset('js/clientsideValidation.js') }}" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <nav id="main-nav" class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
      {{-- LOGO --}}
      <a class="navbar-brand " href="{{ url('/') }}">
        <figure>
          <img src="{{ URL::to('/') }}/images/Airbnb-logo.png" alt="">
        </figure>
      </a>

      {{-- SEARCHBAR PLACEHOLDER --}}
      {{-- <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/search">Searchbar placeholder</a>
        </li>
        hello, qui dentro possiamo inserire i link di navigazione
      </ul> --}}

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          {{-- Pill prima di login --}}
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            <span
              class="
                  badge
                  rounded-pill
                  text-bg-light
                  d-flex
                  justify-content-end
                  align-items-center
                ">
              <i class="fa-solid fa-bars"></i>
              <i class="fa-solid fa-circle-user @guest @else logged @endguest"></i>
            </span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @guest
              {{-- Login --}}
              <a class="dropdown-item" href="{{ route('login') }}">
                {{ __('Login') }}
              </a>
              {{-- Register --}}
              @if (Route::has('register'))
                <a class="dropdown-item" href="{{ route('register') }}">
                  {{ __('Register') }}
                </a>
              @endif
            @else
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="{{ route('user.') }}">Profilo</a>
              <a class="dropdown-item" href="{{ route('user.houses.index', Auth::user()->id) }}">Le mie case</a>
              <a class="dropdown-item" href="{{ route('user.houses.create') }}">Aggiungi casa</a>
              <a class="dropdown-item" href="{{ route('user.sponporships.index') }}">Sponsorizzazioni</a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            @endguest
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <main>
    @yield('content')
  </main>
</body>

</html>
