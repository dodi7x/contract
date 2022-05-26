@if(session('message'))
    <div id="session-alert" class="alert alert-{{session('alert-type')}} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> </h5>
        {!! session('message') !!}
    </div>


{{--    <div class="alert alert-dismissable alert-{{session('alert-type')}} alert-styled-left alert-arrow-left" id="session-alert">--}}
{{--        <button type="button" class="close" data-dismiss="alert"><span>x</span></button>--}}
{{--        {!! session('message') !!}--}}
{{--    </div>--}}

    @endif
