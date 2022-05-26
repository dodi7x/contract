<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3 main-font" href="https://demos.creative-tim.com/material-kit/index" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                        العقود الالكترونية للمحامين
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto main-font">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    الرئيسية
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    حولنا
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a href="#" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    خدماتنا
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    تواصل معنا
                                </a>
                            </li>

                            <li class="nav-item my-auto ms-3 ms-lg-0">
                                @if (Route::has('login'))
                                        @auth
                                            @if(auth()->user()->hasRole('Lawyer'))
                                            <a href="{{ url('/Lawyer') }}" class="btn btn-sm  bg-gradient-success mb-0 me-1 mt-2 mt-md-0">@lang('site.dashboard')</a>
                                            @elseif(auth()->user()->hasRole('user'))
                                            <a href="{{ url('/home') }}" class="btn btn-sm  bg-gradient-success mb-0 me-1 mt-2 mt-md-0">@lang('site.dashboard')</a>
                                            @endif
                                        @else
                                        <a href="{{ route('login') }}" class="btn btn-sm  bg-gradient-info mb-0 me-1 mt-2 mt-md-0">@lang('site.login')</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="btn btn-sm  bg-gradient-success mb-0 me-1 mt-2 mt-md-0">@lang('site.register')ا</a>
                                                <a  class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"></a>
{{--                                                <a href="/Home" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
                                            @endif
                                        @endauth
                                @endif

{{--                                <a href="#" class="btn btn-sm  bg-gradient-success mb-0 me-1 mt-2 mt-md-0">سجـــل معنا</a>--}}

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>




{{--<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand  text-white " href="https://demos.creative-tim.com/material-kit/presentation" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">--}}
{{--            Material Kit 2--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon mt-2">--}}
{{--          <span class="navbar-toggler-bar bar1"></span>--}}
{{--          <span class="navbar-toggler-bar bar2"></span>--}}
{{--          <span class="navbar-toggler-bar bar3"></span>--}}
{{--        </span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">--}}
{{--            <ul class="navbar-nav navbar-nav-hover ms-auto">--}}
{{--                <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">--}}
{{--                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages2" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>--}}
{{--                        Pages--}}
{{--                        <img src="./assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-block d-none">--}}
{{--                        <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-none d-block">--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item dropdown dropdown-hover mx-2">--}}
{{--                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        <i class="material-icons opacity-6 me-2 text-md">view_day</i>--}}
{{--                        Sections--}}
{{--                        <img src="./assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-block d-none">--}}
{{--                        <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-none d-block">--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item dropdown dropdown-hover mx-2">--}}
{{--                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        <i class="material-icons opacity-6 me-2 text-md">article</i>--}}
{{--                        Docs--}}
{{--                        <img src="./assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-block d-none">--}}
{{--                        <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-none d-block">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">--}}
{{--                    <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-sm  bg-gradient-primary mb-0 me-1 mt-2 mt-md-0">Free Download</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
