@extends('public-pages.template')

@section('title')
	Ubah Password
@stop

@section('content')
	@inject('gs','rni\Services\GlobalServices')
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">

					<div class="row">
						<div class="col-md-4">
							@include('public-pages.sidebar-member')
						</div>

						<div class="col-md-8">
							<div class="wrap-text">
								<h3 class="page-content-title first">Ubah Password</h3>
								<hr>
								@if( !empty(Session::get('status')) )
								<div class="alert alert-success" role="alert">
									{{ Session::get('msg') }}
								</div>
								@endif
								{!! Form::model($user,['method'=>'PATCH', 'action'=> ['UserController@updatePassword', 'id'=>Auth::user()->id]]) !!}
									
									<div class="form-group">
								        <div class="input-group">
								            <span class="input-group-addon text-danger"><span class="fa fa-circle"></span></span>
								            <input class="form-control" type="password" name="password" placeholder="New Password">
								        </div>
								    </div>

								    @include('errors.each',['field'=>'password'])

								    <div class="form-group">
								        <div class="input-group">
								            <span class="input-group-addon text-danger"><span class="fa fa-circle"></span></span>
								            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
								        </div>
								    </div>

								    @include('errors.each',['field'=>'password-confirmation'])

									<button class="btn btn-primary">Ubah Password</button>
							    {!! Form::close() !!}
							</div>
						</div>
					</div>

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@stop

@section('javascript')
@stop