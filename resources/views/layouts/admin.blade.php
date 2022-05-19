<!DOCTYPE html>
<html>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- vendor css -->

   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
   <link href="assets/css/coreui-chartjs.css" rel="stylesheet">
   <!-- Therichpost JS -->
   <script src="assets/js/coreui.bundle.min.js"></script>
   <!--[if IE]><!-->
   <script src="assets/js/svgxuse.min.js"></script>
   <!--<![endif]-->
   <script src="assets/js/coreui-chartjs.bundle.js"></script>
   <script src="assets/js/coreui-utils.js"></script>
   <script src="assets/js/main.js"></script>
   </head>
   <body class="c-app">

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
   </body>
</html>