@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">@lang('site.dashboard')</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.civilian.index')}}">@lang('site.Record_civilian')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('site.add')</li>
        </ol>
    </div>
    <form action="{{route('dashboard.civilian.store')}}" method="post">
        @csrf
        {{method_field('post')}}

        <div class="card ">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">@lang('site.Record_civilian')</h6>
                <a class="m-0 float-right btn btn-success btn-sm" href="{{route('dashboard.civilian.index')}}"> @lang('site.show')
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            @include('dashboard.includes.partials._errors')
        <div class="card-body">
            <div class="form-group" >
                <label for="decadeView">@lang('site.full_name') </label>
                <div class="input-group date">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="name" value="" id="decadeView">
                </div>
            </div>

            <div class="form-group" id="simple-date2">
                <label for="oneYearView"> @lang('site.date') </label>
                <div class="input-group date">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input type="date" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}" id="oneYearView" >
                </div>
            </div>
            <div class="form-group" >
                <label for="decadeView">@lang('site.id_number')</label>
                <div class="input-group date">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="number" name="id_number" class="form-control" value="{{old('id_number')}}">
                </div>
            </div>
            <div class="form-group" >
                <label for="decadeView">@lang('site.address')</label>
                <div class="input-group date">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                    </div>
                    <input type="text" name="address" class="form-control" value="{{old('address')}}" >
                </div>
            </div>
            <div class="form-group">
                <label for="decadeView"> @lang('site.profession') </label>
                <div class="input-group date">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                    </div>
                    <input type="text" class="form-control" name="Profession" value="{{old('profession')}}" >
                </div>
            </div>

            <button type="submit" class="btn btn-success form-control" >@lang('site.add')</button>
{{--            <p>For documentations Bootstrap Datepicker you can visit <a href="https://github.com/uxsolutions/bootstrap-datepicker" target="_blank">here.</a></p>--}}
        </div>
    </div>
    </form>
@endsection




