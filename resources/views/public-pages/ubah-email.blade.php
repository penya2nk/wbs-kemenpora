@extends('public-pages.template')

@section('title')
	Ubah EMail
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
								<h3 class="page-content-title first">Ubah EMail</h3>
								<hr>
								@if( !empty(Session::get('status')) )
								<div class="alert alert-success" role="alert">
									{{ Session::get('msg') }}
								</div>
								@endif
								{!! Form::model($user,['method'=>'PATCH', 'action'=> ['UserController@updateEmail', 'id'=>Auth::user()->id]]) !!}
									
									<div class="form-group">
								        <div class="input-group">
								            <span class="input-group-addon text-danger"><span class="fa fa-user-secret"></span></span>
								            <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}">
								        </div>
								    </div>
								    @include('errors.each',['field'=>'email'])

									<button class="btn btn-primary">Simpan Perubahan</button>
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