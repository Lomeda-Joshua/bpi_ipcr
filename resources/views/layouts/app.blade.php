<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- base:css -->
        <link rel="stylesheet" href="{{asset('resources/assets/vendors/typicons.font/font/typicons.css')}}">
        <link rel="stylesheet" href="{{asset('resources/assets/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        
        <!-- plugin css for this page -->
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="path-to/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
        <!-- End plugin css for this page -->
        
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('resources/assets/css/vertical-layout-light/style.css')}}">
        <!-- endinject -->
        
    </head>

    <body class="font-sans antialiased">

        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">

                <!-- Page Content -->   
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    {{ $slot }}
                </div>

            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->

    <!-- base:js -->
    
    <!-- endinject -->

    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->

    <!-- inject:js -->
    <script src="{{asset('./resources/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('./resources/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('./resources/assets/js/template.js')}}"></script>
    <script src="{{asset('./resources/assets/js/settings.js')}}"></script>
    <script src="{{asset('./resources/assets/js/todolist.js')}}"></script>
    <!-- endinject -->

    <!-- plugin js for this page -->
    <script src="{{asset('./resources/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('./resources/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <!-- End plugin js for this page -->

    <!-- Custom js for this page-->
    
    
    <!-- End custom js for this page-->

    </body>
</html>
