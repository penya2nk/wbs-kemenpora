@extends('pages.layout.module',['title'=>'Pendaftaran'])
<!-- Register Form-->

@section('modul')

	<div class="row">

        <div class="col-sm-12">

            <p>Silahkan isi data diri anda dibawah.
            <i>Field dengan <span class="themeFontColor">icon merah</span> harus diisi.</i></p><br>

        </div>

    </div>

    {!! Form::open(['method'=>'POST', 'action'=>'Auth\RegisterController@register']) !!}

    @include('partials.userData.default',['buttonText'=>'Kirim Pendaftaran','mode'=>'register'])

    {!! Form::close() !!}


@endsection
