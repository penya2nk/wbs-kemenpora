@extends('pages.layout.container-alt')

@section('main')

    <!-- <div class="row text-center">
        <div class="col-sm-12" style="padding-left: 30px;padding-right: 30px;">
            @include('pages.contents.tab-lapor')
        </div>
    </div>
    <br> -->
    <div class="row text-center">
        @include('auth.login-form')
    </div>

@stop