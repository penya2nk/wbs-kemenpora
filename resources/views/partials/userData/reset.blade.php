@extends('pages.layout.module',['title'=>'Reset Password'])
<!-- Register Form-->

@section('modul')

    <form class="form" role="form" method="POST" action="{{ url('/password/reset') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group ">
                    <div class="input-group">
                        <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input id="email_tmp" type="email" class="form-control" name="email_tmp" value="{{ $email or old('email') }}" disabled>
                        <input type="hidden" name="email" value="{{ $email or old('email') }}">
                    </div>
                </div>
            </div>
        </div>

        @include('errors.each',['field'=>'email'])

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-paperclip"></span></span>
                <input class="form-control" type="password" name="password" placeholder="New Password" autofocus>
            </div>
        </div>

        @include('errors.each',['field'=>'password'])

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-paperclip"></span></span>
                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm New Password">
            </div>
        </div>

        @include('errors.each',['field'=>'password-confirmation'])

        <br>
        <div class="form-group text-center">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-default btn-theme2">
                    Reset Password
                </button>
            </div>
        </div>
    </form>

@endsection