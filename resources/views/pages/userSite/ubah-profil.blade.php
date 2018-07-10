@extends('pages.layout.container-alt')

@section('main')

    @include('partials.userData.edit',['user'=>Auth::user()])

@endsection