@extends('pages.layout.module',['title'=>'Ubah Profil','detail'=>'Silahkan ubah data diri anda melalui form dibawah ini.'])
<!-- Ubah Profil Form-->

@section('modul')

    {!! Form::model($user,['method'=>'PATCH', 'action'=> ['UserController@update', 'id'=>$user->id]]) !!}

        @include('partials.userData.default',['buttonText'=>'Simpan Perubahan','mode'=>'ubah-profil'])

    {!! Form::close() !!}


@endsection
