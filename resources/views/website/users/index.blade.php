@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">@lang('site.dashboard')</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">@lang('site.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('site.users')</li>
        </ol>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-7 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">@lang('site.lawyers')</h6>
                        <a class="m-0 float-right btn btn-danger btn-sm" href="#">View More <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>@lang('site.lawyer')</th>
                                <th>Item</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">RA0449</a></td>
                                <td>Udin Wayang</td>
                                <td>Nasi Padang</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">RA5324</a></td>
                                <td>Jaenab Bajigur</td>
                                <td>Gundam 90' Edition</td>
                                <td><span class="badge badge-warning">Shipping</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">RA8568</a></td>
                                <td>Rivat Mahesa</td>
                                <td>Oblong T-Shirt</td>
                                <td><span class="badge badge-danger">Pending</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">RA1453</a></td>
                                <td>Indri Junanda</td>
                                <td>Hat Rounded</td>
                                <td><span class="badge badge-info">Processing</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">RA1998</a></td>
                                <td>Udin Cilok</td>
                                <td>Baby Powder</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <!-- Message From Customer-->
            <div class="col-xl-4 col-lg-5 ">
                <div class="card">
                    <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-light">@lang('site.previous_decades')</h6>
                    </div>
                    <div>
                        <div class="customer-message align-items-center">
                            <a class="font-weight-bold" href="#">
                                <div class="text-truncate message-title">Hi there! I am wondering if you can help me with a
                                    problem I've been having.</div>
                                <div class="small text-gray-500 message-time font-weight-bold">Udin Cilok · 58m</div>
                            </a>
                        </div>
                        <div class="customer-message align-items-center">
                            <a href="#">
                                <div class="text-truncate message-title">But I must explain to you how all this mistaken idea
                                </div>
                                <div class="small text-gray-500 message-time">Nana Haminah · 58m</div>
                            </a>
                        </div>
                        <div class="customer-message align-items-center">
                            <a class="font-weight-bold" href="#">
                                <div class="text-truncate message-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </div>
                                <div class="small text-gray-500 message-time font-weight-bold">Jajang Cincau · 25m</div>
                            </a>
                        </div>
                        <div class="customer-message align-items-center">
                            <a class="font-weight-bold" href="#">
                                <div class="text-truncate message-title">At vero eos et accusamus et iusto odio dignissimos
                                    ducimus qui blanditiis
                                </div>
                                <div class="small text-gray-500 message-time font-weight-bold">Udin Wayang · 54m</div>
                            </a>
                        </div>
                        <div class="card-footer text-center">
                            <a class="m-0 small text-primary card-link" href="#">View More <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Row-->
{{--        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">--}}
{{--            <h6 class="m-0 font-weight-bold text-primary">@lang('site.customers')</h6>--}}
{{--            <a class="m-0 float-right btn btn-danger btn-sm" href="#"> @lang('site.view_more') <i--}}
{{--                    class="fas fa-chevron-right"></i></a>--}}
{{--        </div>--}}
{{--        <div class="card-footer"></div>--}}
    </div>
@stop




