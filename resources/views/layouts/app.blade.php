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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Libre+Baskerville:wght@400;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar">
            <div class="container d-flex justify-content-between align-items-center">
                <a id="ancora_nav" style="width: 50px; height: 50px;" class="navbar-brand d-flex align-items-center fixed-top-left" href="{{ url('/') }}">
                    <img style="width: 100%; " id="logo_nav" src="{{ asset('img/logoNero.png') }}" alt="">
                </a>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                       <li class="nav-item">
                          <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/search">Search</a>
                        </li>
                        
                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    {{-- <ul class="navbar-nav ml-auto"> --}}
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown drop-custom">
                                <a id="navbarDropdown" class="fixed-top-right nav-link dropdown-toggle badge badge-pill badge-light" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('user.') }}">Profilo</a>
                                    <a class="dropdown-item" href="{{ route('user.houses.index', Auth::user()->id) }}">Le mie case</a>
                                    <a class="dropdown-item" href="{{ route('user.houses.create') }}">Aggiungi casa</a>
                                    <a class="dropdown-item" href="{{ route('user.sponporships.index') }}">Sponsorizzazioni</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    {{-- </ul> --}}
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>

<style scoped>
    @import '../../sass/_variables';


.navbar li{
    list-style: none;
}

.navbar a{
    color: currentColor;
    text-decoration: none;
}

.drop-custom{
    font-size: 25px;
    color: rgb(220	59	91);
    background-color: rgba( white, 0.7);
}

.drop-custom a:hover{
    color: white;
    background-color: rgb(220	59	91);
}
</style>

</html>


