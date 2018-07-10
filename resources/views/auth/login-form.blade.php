@extends('pages.layout.module',['title'=>'Masuk sebagai member','detail'=>'Silahkan anda login menggunakan akun yang sudah anda miliki'])
<!-- Login Form-->

@section('modul')
    <form id="formLogin" class="form" data-toggle="validator" role="form" method="post" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <div class="input-group">

                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-envelope"></span></span>
                {{--<input type="text" class="form-control" name="email" placeholder="Email">--}}
                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon themeFontColor2"><span class="glyphicon glyphicon-paperclip"></span></span>
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
        </div>

        @include('errors.list')
        {{--@include('errors.each',['field'=>'email']) ===>>> Contoh Pemanggilan Error Satu field --}}

        <div class="form-group">
            <div class="col-sm-12">
                <div class="checkbox">
                    <label class="">
                        <input class="" type="checkbox" name="remember">Ingat saya</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" name="btn-login" class="btn btn-default btn-theme2">Masuk</button>
                <button type="reset" name="btn-reset" class="btn btn-default">Ulang</button>
            </div>
        </div>

        <div class="form-group last themeLink">
            <div class="col-sm-12"><br>
                <a href="{{ url('/reset') }}">
                    Lupa Password?
                </a>
            </div>
        </div>

    </form>
    <div class="row text-left">
        <div class="col-sm-12"><br>
            Untuk membuat laporan melalui member silahkan login terlebih dahulu.
            Jika anda belum memiliki akun, <strong><span class="themeLink"><a href="{{ url('/register') }}">klik disini</a> </span></strong> untuk melakukan pendaftaran.<br><br>
        </div>
    </div>
@endsection



<!-- Login Form -->