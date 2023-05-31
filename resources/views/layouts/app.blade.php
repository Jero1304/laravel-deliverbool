<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DeliveBoo</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
    <script type="text/javascript" src="dataValidation.js"></script>
</head>

<body>
    <div id="app">


        <nav class="navbar nav-main navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_laravel">
                        <img src="../public/logo-deliveboo1.png" alt="">
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                        </li> -->
                        @auth
                        <li>
                            <a class="nav-link" href="{{route('restaurants.index')}}">{{__('Dashboards')}}</a>
                        </li>
                        @endauth

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

        <footer>
        <section class="wave-section">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
            <path fill="CC3300" fill-opacity="1"
                d="M0,192L48,181.3C96,171,192,149,288,133.3C384,117,480,107,576,90.7C672,75,768,53,864,64C960,75,1056,117,1152,138.7C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <section class="nav-footer">
        <div class="container">
            <div class="row d-flex">
                <div class="col d-flex justify-content-center align-item-center">
                    <figure class="thumb img-fluid flex-shrink-0">
                        <img src="/images/hamburger-logo.png" alt="">
                    </figure>
                </div>
                <div class="col flex-wrap">
                    <ul class="menu">
                        <li>
                            <h4>scopri deliveboo</h4>
                        </li>
                        <li class="menu_item">
                            <span>Chi siamo</span>
                        </li>
                        <li class="menu_item">
                            <span>Lavora con noi</span>
                        </li>
                        <li class="menu_item">
                            <span>Diventa nostro partner</span>
                        </li>
                    </ul>
                </div>
                <div class="col flex-wrap">
                    <ul class="menu">
                        <li>
                            <h4>note legali</h4>
                        </li>
                        <li class="menu_item">
                            <span>Termini & condizioni</span>
                        </li>
                        <li class="menu_item">
                            <span>Informativa sulla privacy</span>
                        </li>
                    </ul>
                </div>
                <div class="col flex-wrap">
                    <ul class="menu">
                        <li>
                            <h4>follow us</h4>
                        </li>
                        <li class="menu_item social_icon">
                            <a href="https://www.facebook.com/" target="_blank" class="icon fb">
                                <font-awesome-icon :icon="['fab', 'facebook']" />
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="icon tw">
                                <font-awesome-icon :icon="['fab', 'twitter']" />
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="icon insta">
                                <font-awesome-icon :icon="['fab', 'instagram']" />
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </section>

    <section class="copy">
        <div class="container text-center">
            <span>
                <i>DeliveBoo 2023&copy; created by <strong>Team 6</strong> of Boolean #Class86</i>
            </span>
        </div>

    </section>

        </footer>
    </div>


    


    
</body>

</html>

