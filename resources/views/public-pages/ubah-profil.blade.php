@extends('public-pages.template')

@section('title')
	Ubah Profile
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
								<h3 class="page-content-title first">Ubah Profil</h3>
								<hr>
								<p class="main-text">Silahkan berikan informasi Anda selengkap mungkin.</p>
								@if( !empty(Session::get('status')) )
								<div class="alert alert-success" role="alert">
									{{ Session::get('msg') }}
								</div>
								@endif
								{!! Form::model($user,['method'=>'PATCH', 'action'=> ['UserController@update', 'id'=>Auth::user()->id]]) !!}

							        <div class="row">
									    <div class="col-sm-12">
									        <div class="form-group ">
									            <div class="input-group">
									                <span class="input-group-addon text-danger"><span class="fa fa-user"></span></span>
									                {!! Form::text('fullname',null,['class'=>'form-control','placeholder'=>'Nama lengkap']) !!}
									            </div>
									        </div>
									    </div>
									</div>
									@include('errors.each',['field'=>'fullname'])

									<div class="row">
									    <div class="col-sm-12">
									        <div class="form-group ">
									            <div class="input-group">
									                <span class="input-group-addon text-danger"><span class="fa fa-user-secret"></span></span>
									                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'EMail','disabled'=>true]) !!}
									            </div>
									        </div>
									    </div>
									</div>
									@include('errors.each',['field'=>'email'])

									@if (!empty(Auth::user()->nip))
									<div class="row">
									    <div class="col-sm-12">
									        <div class="form-group ">
									            <div class="input-group">
									                <span class="input-group-addon text-danger"><span class="fa fa-user-secret"></span></span>
									                {!! Form::text('nip',null,['class'=>'form-control','placeholder'=>'NIP','disabled'=>true]) !!}
									            </div>
									        </div>
									    </div>
									</div>
									@include('errors.each',['field'=>'nip'])
									@endif
								
									<div class="row">
									    <div class="col-sm-12">
									        <div class="form-group">
									            <div class="input-group">
									                <span class="input-group-addon text-danger""><span class="fa fa-map-marker"></span></span>
									                {!! Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Alamat','rows'=>'5']) !!}
									            </div>
									        </div>
									    </div>
									</div>
									@include('errors.each',['field'=>'address'])

									<div class="row">
									    <div class="col-sm-12">
									        <div class="form-group ">
									            <div class="input-group">
									                <span class="input-group-addon text-danger""><span class="fa fa-fax"></span></span>
									                {!! Form::text('phoneNumber',null,['class'=>'form-control','placeholder'=>'Nomor Telepon']) !!}
									            </div>
									        </div>
									    </div>
									</div>
									@include('errors.each',['field'=>'phoneNumber'])

									<div class="row">
									    <div class="col-sm-12">
									        <div class="form-group ">
									            <div class="input-group">
									                <span class="input-group-addon text-danger""><span class="fa fa-phone"></span></span>
									                {!! Form::text('handphoneNumber',null,['class'=>'form-control','placeholder'=>'Nomor Handphone']) !!}
									            </div>
									        </div>
									    </div>
									</div>
									@include('errors.each',['field'=>'handphoneNumber'])
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