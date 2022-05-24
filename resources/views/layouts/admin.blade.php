<!DOCTYPE html>
<html dir="{{LaravelLocalization::getCurrentLocaleDirection() }}" >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Admin - Dashboard</title>
    <link href="{{asset('assets/dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/dashboard/css/ruang-admin.min.css')}}" rel="stylesheet">
    @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <link href="{{asset('assets/dashboard/css/custom.css')}}" rel="stylesheet">
        <style>
            .ml-auto
            {
                margin-right: auto!important;
            }
            .mx-auto
            {
                margin-right: auto!important;
            }
        </style>
    @endif
    @yield('style')
</head>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    @include('dashboard.includes._aside')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            @include('dashboard.includes._navbar')
            <!-- Topbar -->

            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
                @yield('content')


            </div>
            <!---Container Fluid-->
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
                </div>
            </div>
        </footer>
        <!-- Footer -->
    </div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="{{asset('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/ruang-admin.min.js')}}"></script>
<script src="{{asset('assets/dashboard/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/demo/chart-area-demo.js')}}"></script>
@yield('script')
</body>

</html>
