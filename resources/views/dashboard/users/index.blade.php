@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">@lang('site.dashboard')</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">@lang('site.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('site.users')</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">@lang('site.customers')</h6>
            <a class="m-0 float-right btn btn-danger btn-sm" href="#"> @lang('site.view_more') <i
                    class="fas fa-chevron-right"></i></a>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>@lang('site.name')</th>
                    <th>@lang('site.email')</th>
                    <th>@lang('site.created_at')</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $index=>$user)
                <tr>
                    <td><a href="#">{{++$index}}</a></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->format('Y/m/d H:i')}}</td>
{{--                    <td><span class="badge badge-success">Delivered</span></td>--}}
                    <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
@stop




