<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/coreui-chartjs.css') }}" rel="stylesheet">
</head>
   <body class="c-app">

        @guest

            @yield('content')
             
        @else
    
            @include('partials.sidebar')

            <div class="c-wrapper c-fixed-components">

                @include('partials.header')

                <div class="c-body">
                    <main class="c-main">
                        <div class="container-fluid">

                            @yield('content')

                        </div>
                    </main>

                    @include('partials.footer')
                    
                </div>
            </div>

        @endguest

   </body>

    <script src="{{ asset('assets/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/svgxuse.min.js') }}"></script>
    <script src="{{ asset('assets/js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    
</html>