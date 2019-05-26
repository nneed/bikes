<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('build/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('build/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <div class="col-md-10 text-center">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h3>Adventure Bike Specs</h3>
                        <p>Compare adv bikes on Fully Loaded Weight and Fuel Range</p>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="metrics">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="metrics" id="us_units" value="us_units" checked>
                                <label class="form-check-label" for="us_units">
                                    Us Units
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="metrics" id="metric_units" value="metric_units">
                                <label class="form-check-label" for="metric_units">
                                    Metric Units
                                </label>
                            </div>
                        </li>
                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container-fluid ">
            @yield('content')
        </main>
</body>
</html>
