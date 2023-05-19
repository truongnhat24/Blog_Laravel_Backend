<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Blog Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">

    {{-- Bootstrap --}}
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- CSS --}}
    @stack('style')
    @vite(['resources/css/app.css', 'resources/css/main.css', 'resources/js/app.js'])
</head>

<body id="app">
    <header class="pb-5 mb-2">
        <nav class="navbar navbar-expand-md navbar-info fixed-top bg-dark">
            <div class="container">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <a class="navbar-brand text-warning" href="#">LaravelWeb</a>
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            @if (Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('blogs.blogIndex', ['id' => Auth::id()]) }}">Blogs</a>
                                </li>
                            @endif
                        </ul>
                        
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="btn btn-custom-auth text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
        
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="btn btn-custom-auth text-light ms-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="text-warning text-decoration-none dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <span class="text-light">welcome, </span> {{ Auth::user()->name }}
                                    </a>
        
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('users.userIndex', ['id' => Auth::id()]) }}">Profile</a>
                                        <a  class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="   event.preventDefault(); 
                                                        document.getElementById('logout-form').submit();" >
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
            </div>
        </nav>
    </header>

    <main class="py-5">
        @yield('content')
    </main>

    <footer class="container">
        <hr class="featurette-divider">
        <p class="float-end"><a href="#">Back to top</a></p>
        <div class="footer">
            <p>MyViewers &copy; {{date('d-m-y')}}</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @stack('script')
</body>
</html>
