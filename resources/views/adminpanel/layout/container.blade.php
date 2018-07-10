@extends('adminpanel.layout.template')

<!-- Main Container -->

@section('content')

	@include('adminpanel.contents.breadcrumb', ['title'=>$title_bread,'child'=>$child_bread])	

	<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                    	@yield('main')

                    </div>
                </div>
            </div>
        </div>
    </div>

	

@endsection