@extends('pages.layout.template')

<!-- Main Container -->

@section('content')

    <div class="container-fluid" style="padding-top:20px;padding-bottom:10px;">

        <div class="container">

            <div class="row" style="padding-bottom:0px;">

                <div class="col-sm-12">

                    <div class="col-sm-4 col-sm-12" style="padding-right: 20px;position: relative;">


                        @include('pages.layout.menu-kiri')


                    </div>


                    <div class="col-sm-8 col-sm-12 animated bounceInRight" style="padding-left:20px;padding-right: 0px;">

                            <!-- FRAME -->

                            @yield('main')

                            <!-- FRAME -->

                    </div>

                </div>

            </div>


        </div>

    </div>


@stop

<!-- Main Container -->