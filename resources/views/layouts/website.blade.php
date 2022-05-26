<!doctype html>
<html lang="#"  dir="{{LaravelLocalization::getCurrentLocaleDirection()}}">

<head>
    <title>
        @yield('title')
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Nucleo Icons -->
    <link href="{{asset('assets/website/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/website/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- Material Kit CSS -->
    <link href="{{asset('assets/website/assets/css/material-kit.min.css')}}" rel="stylesheet" />
    <link id="pagestyle" href="{{asset('assets/website/assets/css/style.css')}}" rel="stylesheet" />
</head>

<body>
<!-- Navbar Transparent -->
@include('website.includes._navbar')
<!-- End Navbar -->

@yield('header')

@yield('content')

<footer class="footer py-5">
    <div class="container z-index-1 position-relative">
        <div class="row">
            <div class="col-lg-4 me-auto mb-lg-0 mb-4 text-lg-start text-center">
                <h6 class="text-dark font-weight-bolder text-uppercase mb-lg-4 mb-3">Material Design</h6>
                <ul class="nav flex-row ms-n3 justify-content-lg-start justify-content-center mb-4 mt-sm-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark opacity-8" href="#" target="_blank">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark opacity-8" href="#" target="_blank">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark opacity-8" href="#" target="_blank">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark opacity-8" href="#" target="_blank">
                            Services
                        </a>
                    </li>
                </ul>
                <p class="text-sm text-dark opacity-8 mb-0">
                    Copyright © <script>
                        document.write(new Date().getFullYear())
                    </script> Material Design by Creative Tim.
                </p>
            </div>
            <div class="col-lg-6 ms-auto text-lg-end text-center">
                <p class="mb-5 text-lg text-dark font-weight-bold">
                    The reward for getting on the stage is fame. The price of fame is you can’t get off the stage.
                </p>
                <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
                    <span class="fab fa-dribbble"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
                    <span class="fab fa-twitter"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
                    <span class="fab fa-pinterest"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-dark opacity-5">
                    <span class="fab fa-github"></span>
                </a>
            </div>
        </div>
    </div>
</footer>


<!--   Core JS Files   -->
<script src="{{asset('assets/website/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/website/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/website/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>

<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{asset('assets/website/assets/js/plugins/countup.min.js')}}"></script>

<script src="{{asset('assets/website/assets/js/plugins/choices.min.js')}}"></script>

<script src="{{asset('assets/website/assets/js/plugins/prism.min.js')}}"></script>
<script src="{{asset('assets/website/assets/js/plugins/highlight.min.js')}}"></script>

<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{asset('assets/website/assets/js/plugins/rellax.min.js')}}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{asset('assets/website/assets/js/plugins/tilt.min.js')}}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{asset('assets/website/assets/js/plugins/choices.min.js')}}"></script>

<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="{{asset('assets/website/assets/js/plugins/parallax.min.js')}}"></script>

<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{{asset('assets/website/assets/js/material-kit.min.js?v=3.0.2')}}" type="text/javascript"></script>

<script type="text/javascript">

    if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('state2')) {
        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
            countUp1.start();
        } else {
            console.error(countUp1.error);
        }
    }
    if (document.getElementById('state3')) {
        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
            countUp2.start();
        } else {
            console.error(countUp2.error);
        };
    }
</script>


</body>

</html>
