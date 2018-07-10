@extends('pages.layout.template')

<!-- Main Container -->

@section('content')

<div class="container-fluid" style="padding-top:20px;padding-bottom:10px;">

    <div class="container">

        <div class="row" style="padding-bottom:0px;">

            <div class="col-sm-12" style="padding-left: 30px;padding-right: 30px;">

                @yield('main')

            </div>

        </div>


    </div>

</div>


@stop

<!-- Main Container -->