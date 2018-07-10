@extends('public-pages.template')

@section('title')
    Login
@stop

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <h4>Permintaan Ulang Password:</h4>
                    <form id="formLogin" class="form" data-toggle="validator" role="form" method="post" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="input-group">

                                <span class="input-group-addon"><span class="fa fa-user-secret"></span></span>
                                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
                            </div>
                        </div>

                        @include('errors.each',['field'=>'email'])

                        <div class="form-group text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    Kirim Permintaan
                                </button>
                            </div>
                        </div>

                        <div class="form-group text-center themeLink">
                            <div class="col-12">
                                <a class="main-text" href="{{ url('/lapor/login-page') }}">
                                    Kembali ke halaman masuk (Login)
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop