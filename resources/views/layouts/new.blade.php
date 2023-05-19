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
</head>

<body id="app" class="container">
    <header class="d-flex justify-content-between py-5 header-signin">
        <div>
            <svg width="122" height="38" viewBox="0 0 122 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.06694 23.422V13.0444H0.53493C0.178309 13.0444 0 12.8661 0 12.5094V8.90758C0 8.55096 0.178309 8.37265 0.53493 8.37265H3.06694V3.5226C3.06694 3.16598 3.24525 2.98767 3.60187 2.98767H8.20228C8.5589 2.98767 8.73721 3.16598 8.73721 3.5226V8.37265H12.767C13.1236 8.37265 13.302 8.55096 13.302 8.90758V12.5094C13.302 12.8661 13.1236 13.0444 12.767 13.0444H8.73721V22.6375C8.73721 23.9213 9.52178 24.5632 10.9483 24.5632H12.767C13.1236 24.5632 13.302 24.7415 13.302 25.0982V29.0923C13.302 29.4489 13.1236 29.6272 12.767 29.6272H10.0567C5.63461 29.6272 3.06694 27.3449 3.06694 23.3864V23.422Z" fill="#003344" />
                <path d="M16.5823 29.0921V8.87168C16.5823 8.51506 16.7606 8.33675 17.1172 8.33675H21.682C22.0386 8.33675 22.2169 8.51506 22.2169 8.87168V11.582C23.2868 9.72757 25.2482 8.01579 28.6717 8.05145C29.0284 8.05145 29.2067 8.22976 29.2067 8.58638V12.9728C29.2067 13.3294 29.0284 13.5077 28.6361 13.4721C25.3195 13.3294 23.3581 14.1853 22.3952 16.5034V29.0564C22.3952 29.413 22.2169 29.5913 21.8603 29.5913H17.0816C16.7249 29.5913 16.5466 29.413 16.5466 29.0564L16.5823 29.0921Z" fill="#003344" />
                <path d="M71.5383 29.0924V0.812396C71.5383 0.455775 71.7166 0.277466 72.0733 0.277466H76.852C77.2086 0.277466 77.3869 0.455775 77.3869 0.812396V29.0924C77.3869 29.4491 77.2086 29.6274 76.852 29.6274H72.0733C71.7166 29.6274 71.5383 29.4491 71.5383 29.0924Z" fill="#003344" />
                <path d="M81.7012 32.2663C81.7012 30.3049 82.7711 28.6287 85.0534 27.7372C84.0192 26.8813 83.5556 25.7758 83.5556 24.7772C83.5556 23.4934 84.2332 22.3879 85.624 21.7103C83.4486 20.3908 82.3074 18.2511 82.3074 15.6477C82.3074 11.7249 84.9108 8.37268 90.8664 8.37268H100.531C100.887 8.37268 101.066 8.55099 101.066 8.90761V12.2955C101.066 12.6521 100.887 12.8304 100.531 12.8304H97.4638C98.4267 13.7577 99.033 15.0415 99.033 16.7176C99.033 20.1055 96.4296 22.9941 91.009 22.9941H89.9035C88.7979 22.9941 88.37 23.4221 88.37 24.0283C88.37 24.5989 88.8336 25.0269 89.9035 25.0269H93.7906C99.1756 25.0269 101.351 27.4876 101.351 30.8755C101.351 34.6556 98.5337 37.7582 90.902 37.7582C84.1619 37.7582 81.6655 35.3332 81.6655 32.3019L81.7012 32.2663ZM91.2586 33.9067C94.4682 33.9067 95.8234 32.8369 95.8234 31.4461C95.8234 30.4475 95.2171 29.4846 93.2914 29.4846H89.4042C87.6211 29.4846 86.9435 30.4832 86.9435 31.5174C86.9435 32.8725 88.0847 33.9067 91.2586 33.9067ZM90.8307 19C92.8991 19 94.1473 17.8588 94.1473 15.7904C94.1473 13.8646 93.0417 12.6521 90.8307 12.6521C88.6196 12.6521 87.4785 13.829 87.4785 15.7904C87.4785 17.7518 88.584 19 90.8307 19Z" fill="#003344" />
                <path d="M103.099 21.0684V16.6819C103.099 11.083 105.952 7.87338 110.552 7.87338C113.049 7.87338 114.939 8.83626 116.151 10.548V0.776629C116.151 0.420008 116.33 0.241699 116.686 0.241699H121.465C121.821 0.241699 122 0.420008 122 0.776629V29.0567C122 29.4133 121.821 29.5916 121.465 29.5916H116.936C116.579 29.5916 116.401 29.4133 116.401 29.0567V26.9526C115.224 28.914 113.263 30.0552 110.552 30.0552C105.952 30.0552 103.099 26.7386 103.099 21.0327V21.0684ZM112.407 25.0269C114.689 25.0269 116.187 23.4577 116.187 21.0684V16.6819C116.187 14.2926 114.582 12.9731 112.407 12.9731C110.231 12.9731 108.947 14.3282 108.947 16.6819V21.0684C108.947 23.6004 110.231 25.0269 112.407 25.0269Z" fill="#003344" />
                <path d="M39.6201 7.90918C37.7301 7.9805 35.947 9.62096 35.2694 12.2243L30.134 29.6631H35.1981L39.7985 14.2927L44.3989 29.6631H49.4629L44.3275 12.2243C43.65 9.62096 41.8669 7.9805 39.9768 7.90918H39.6201Z" fill="#003344" />
                <path d="M58.5214 29.6631C60.4115 29.5917 62.1946 27.9513 62.8722 25.3479L68.0076 7.90918H62.9435L58.3431 23.2795L53.7427 7.90918H48.6787L53.8141 25.3479C54.4916 27.9513 56.2747 29.5917 58.1648 29.6631H58.5214Z" fill="#003344" />
            </svg>
        </div>
        <div>
            <a href="#" class="text-decoration-none text-primary-color fs-18 btn btn-custom">
                <span>Sign up</span>
            </a>
        </div>
    </header>

    <main class="pt-4 row justify-content-center">
        @yield('content')
    </main>

    <footer class="container">
        
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @stack('script')
</body>
</html>