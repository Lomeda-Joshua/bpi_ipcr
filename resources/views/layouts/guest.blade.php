<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- base:css -->
        <link rel="stylesheet" href="{{asset('./resources/assets/vendors/typicons.font/font/typicons.css')}}">
        <link rel="stylesheet" href="{{asset('./resources/assets/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->

        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->

        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('resources/assets/css/vertical-layout-light/style.css')}}">
        <!-- endinject -->

    </head>

    <body>

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
        
    </body>

</html>

