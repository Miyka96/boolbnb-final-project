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
  
  <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.18.0/maps/maps.css'>
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.18.0/maps/maps-web.min.js'></script>
{{-- <script> (function(){ window.SS = window.SS || {}; SS.Require = function (callback){ if (typeof callback === 'function') { if (window.SS && SS.EventTrack) { callback(); } else { var siteSpect = document.getElementById('siteSpectLibraries'); var head = document.getElementsByTagName('head')[0]; if (siteSpect === null && typeof head !== 'undefined') { siteSpect = document.createElement('script'); siteSpect.type = 'text/javascript'; siteSpect.src = '/__ssobj/core.js+ssdomvar.js+generic-adapter.js';siteSpect.async = true; siteSpect.id = 'siteSpectLibraries'; head.appendChild(siteSpect); } if (window.addEventListener){ siteSpect.addEventListener('load', callback, false); } else { siteSpect.attachEvent('onload', callback, false); } } } };})(); </script>  --}}
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.18.0/services/services-web.min.js'></script>
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/plugins/SearchBox/3.1.12//SearchBox-web.js'></script>
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.18.0/services/services-web.min.js'></script>
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/plugins/SearchBox/3.1.12//SearchBox-web.js'></script>
    <script src="https://unpkg.com/prettyalert/dist/prettyalert.min.js"></script>


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div>
    <nav id="main-nav" class="navbar navbar-expand navbar-light bg-light shadow-sm fixed-top">
      <div class="container-xl d-flex justify-content-between align-items-center">
        {{-- LOGO --}}
        <a class="navbar-brand d-none d-lg-inline" href="{{ url('/') }}">
          <figure>
            <img src="{{ URL::to('/') }}/images/logo-montserrat.png" alt="">
          </figure>
        </a>
        <a class="navbar-brand d-lg-none" href="{{ url('/') }}">
          <figure>
            <img src="{{ URL::to('/') }}/images/logoColoratoMinimal.png" alt="">
          </figure>
        </a>
  
        {{-- SEARCHBAR PLACEHOLDER --}}
        <div id="app">
          <search-bar></search-bar>
        </div>
  
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
                <i class="fa-solid fa-circle-user @guest @else logged @endguest d-none d-md-inline"></i>
              </span>
            </a>
  
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @guest
                {{-- Login --}}
                <a class="dropdown-item" href="{{ route('login') }}">
                  Accedi
                </a>
                {{-- Register --}}
                @if (Route::has('register'))
                  <a class="dropdown-item" href="{{ route('register') }}">
                    Registrati
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
  
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              @endguest
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <main>
    @yield('content')
  </main>

  @include('partials.footer')
</body>

</html>
