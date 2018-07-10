@extends('public-pages.template')

@section('title')
	Sukses Daftar
@stop

@section('content')
	@inject('global_service','rni\Services\GlobalServices')
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">

					<div class="row">
						<div class="col-md-4">
							@include('public-pages.sidebar-member')
						</div>

						<div class="col-md-8">
							<h3 class="widget-title text-danger"><u>Pendaftaran berhasil !</u></h3>
						    <p class="main-text">Selamat anda telah terdaftar sebagai member. Anda sudah dapat membuat pelaporan.</p><br>
						    <a class="btn btn-primary" href="{{ route('user.buat-pelaporan') }}">Buat pelaporan sekarang</a>
						</div>

					</div>

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@stop

@section('javascript')
	
@stop