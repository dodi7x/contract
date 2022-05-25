@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">@lang('site.dashboard')</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">@lang('site.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('site.Record_civilian')</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">@lang('site.Record_civilian')</h6>
            @if(auth()->user()->hasPermission('users_create'))
            <a class="m-0 float-right btn btn-success btn-sm" href="{{route('dashboard.civilian.create')}}"> @lang('site.add')
                <i class="fa fa-plus"></i>
            </a>
                @else
                <a class="m-0 float-right btn btn-success btn-sm disabled" href="#"> @lang('site.add')<i class="fa fa-plus"></i></a>
            @endif
        </div>
        @include('dashboard.includes.partials._errors')
        @include('dashboard.includes.partials.flash')
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>@lang('site.name')</th>
                    <th>@lang('site.date')</th>
                    <th>@lang('site.id_number')</th>
                    <th>@lang('site.address')</th>
                    <th>@lang('site.profession')</th>
                    <th>@lang('site.created_at')</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($civilians as $index=>$civilian)
                <tr>
                    <td><a href="#">{{++$index}}</a></td>
                    <td>{{$civilian->name}}</td>
                    <td>{{$civilian->date_of_birth}}</td>
                    <td>{{$civilian->id_number}}</td>
                    <td>{{$civilian->address}}</td>
                    <td>{{$civilian->Profession}}</td>
                    <td>{{$civilian->created_at->format('Y/m/d')}}</td>
{{--                    <td>{{$civilian->created_at->format('Y/m/d H:i')}}</td>--}}
{{--                    <td><span class="badge badge-success">Delivered</span></td>--}}
                    <td><a href="{{route('dashboard.civilian.edit',$civilian->id)}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-edit"></i>
                            @lang('edit')
                        </a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
@stop




