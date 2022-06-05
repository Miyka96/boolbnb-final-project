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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                       <li class="nav-item">
                          <a class="nav-link ms-logo" href="/">
                            <img src="{{url('/img/logoNero.png')}}" alt="logo">
                          </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/search">Advanced <br>Search</a>
                        </li>
                        {{-- hello, qui dentro possiamo inserire i link di navigazione --}}
                    </ul>

                    <searchbar-component></searchbar-component>

                    <div class="d-flex flex-column align-items-end">
                        <div onclick="showMenu()">
                            <span id="msPill" class="badge rounded-pill text-bg-light d-flex justify-content-end align-items-center">
                                <i class="fa-solid fa-bars"></i>
                                <i class="fa-solid fa-circle-user"></i>
                            </span>
                        </div>
                
                        <div id="hidden-menu" class="ms-hidden py-3">
                            <div class="d-flex justify-content-start flex-column align-items-evenly ms-link">
                                
                                @guest
                                    <a class="ms-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @if (Route::has('register'))
                                        <a class="ms-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="ms-link dropdown-toggle" href="#" role="button"
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
                                
                            </div>
                        </div>
                    </div>

                    {{-- <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
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
                    </ul> --}}
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <script>
        export default {
            methods: {
                showMenu() {
                    document.getElementById('hidden-menu').classList.toggle('ms-hidden');
                    document.getElementById("msPill").classList.toggle("ms-box-shadow");
                }
            },
            mounted() {
                    document.onclick = function(e) {
                        let hiddenMenu = document.getElementById('hidden-menu');
                        let pillButton = document.getElementById("msPill");
    
                        if(e.target.id !== 'hidden-menu' && e.target.id !== 'msPill' && e.target.className !== 'ms-link') {
                            hiddenMenu.classList.add('ms-hidden');
                            pillButton.classList.remove("ms-box-shadow");
                        }
                    }
                }
            }
    </script>

    <script>
        import SearchbarComponent from 'js/components/SearchbarComponent.vue'
        
        new Vue({
            el: '#app',
            'searchbar-component': SearchbarComponent
        })
    </script>

    <style>
        .ms-logo {
            height: 55px;
            width: 55px;
        }

        .ms-logo > img {
                height: 100%;
            }

        .ms-box-shadow {
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
        }

        .ms-hidden {
            display: none;
        }

        span {
            border: 1px solid #C9C4BE;
            color: #717171;
            width: 80px;
            height: 44px;
            gap: 15px;
            cursor: pointer;
        }

        span > .fa-circle-user {
            font-size: 30px;
            position: relative;
            z-index: -1;
        }

        span > .fa-bars {
            font-size: 16px;
            position: relative;
            z-index: -1;
        }

        span:hover {
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
        }

        #hidden-menu {
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
            width: 200px;
            border-radius: 10px;
            position: fixed;
            top: 75px;
            background-color: white;
        }

        #hidden-menu > a {
            padding-left: 20px;
        }

        #hidden-menu > span {
            border: 0;
            border-bottom: 1px solid #C9C4BE;
            height: 0px;
            width: 100%;
            margin: 6px 0px;
            cursor: default;
        }

        #hidden-menu > span:hover {
            box-shadow: none;
        }

        #hidden-menu > a:first-child {
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: #717171;
        }

        a:hover {
            background-color:rgb(243, 243, 243);
        }
        </style>
</body>

</html>