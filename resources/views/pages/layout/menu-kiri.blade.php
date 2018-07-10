@include ('pages.contents.buat-laporan-button')

@if(Auth::user())
    @include('auth.logged-in')
@endif


@include ('pages.contents.tentang-rni')

{{--{!! Request::route()->getName(); !!}--}}