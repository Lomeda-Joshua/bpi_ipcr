<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
          <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        {{-- CSS data tables --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
        
        <link rel="shortcut icon" type="image/png" href="{{asset('resources/assets/images/logos/bpi_logo.png')}}" />

        {{-- Template CSS --}}
        <link rel="stylesheet" href="{{asset('resources/assets/css/styles.min.css')}}" />     

        {{-- Jquery Script --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
    </head>

    <body>

        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

            {{-- Sidebar navigation --}}
            <x-layout_component.navigation />

            <!--  Main wrapper -->
            <div class="body-wrapper">      

                {{-- Header Navigation --}}
                <x-layout_component.Header-Navigation />

                <div class="container-fluid">
                    {{ $slot }}
                </div>


            </div>

        </div>

        {{-- Data tables Javascript --}}
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
        {{-- End Data tables Javascript --}}

        {{-- Base Javascripts from template --}}
        <script src="{{asset('resources/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('resources/assets/js/sidebarmenu.js')}}"></script>
        <script src="{{asset('resources/assets/js/app.min.js')}}"></script>
        <script src="{{asset('resources/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
        <script src="{{asset('resources/assets/libs/simplebar/dist/simplebar.js')}}"></script>
        <script src="{{asset('resources/assets/js/dashboard.js')}}"></script>
        {{-- End base Javascripts from template --}}

    </body>
</html>

