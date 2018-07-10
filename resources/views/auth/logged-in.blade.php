@extends('pages.layout.panel',['title'=>'Selamat datang'])


@section('panel')
<!-- Logged in section -->


        <div style="padding-top:0px;padding-bottom:5px;font-size: 20px;" class="text-center">

{{--            {{ $data = UserData::where('user_id',Auth::user()->id) }}--}}
            {{--{{ $name = $data['fullname'] }}--}}
            {{--@inject('userData','rni\Services\UserDataServices')--}}

         <strong><span class="themeFontColor">{{ Auth::user()->fullname }}</span></strong><br>



        <form action="{{ url('/logout') }}" method="POST">
            <button class="btn btn-md btn-theme2" type="submit" name="btn-logout">Keluar</button>
            {{ csrf_field() }}
        </form>

        </div>
    <br>



<!-- Logged in section -->
@endsection