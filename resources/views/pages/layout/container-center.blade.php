@extends('pages.layout.template')

<!-- Main Container -->

@section('content')

    <div class="container-fluid" style="padding-top:20px;padding-bottom:10px;">

        <div class="container">

            <div class="row" style="padding-bottom:0px;">

                <div class="col-sm-12" style="align-items: center; display: inline-flex;">

                    <div class="col-sm-4 col-sm-12">


                        @include('pages.layout.menu-kiri')


                    </div>


                    <div class="col-sm-8 col-sm-12" style="padding-left:40px;padding-right: 0px;height: 100%;">


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