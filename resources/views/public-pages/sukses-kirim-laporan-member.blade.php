@extends('public-pages.template')

@section('title')
	Sukses Kirim Laporan (Member)
@stop

@section('content')
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">

					<div class="col-lg-12 col-md-12 col-xs-12">

						<div class="row">
							<div class="col-md-4">
								@include('public-pages.sidebar-member')
							</div>

							<div class="col-md-8">
						        <h3 class="page-content-title first">Laporan berhasil dibuat</h3>
						        <hr>

						        <div class="col-sm-12">
						            <div class="row">
						               <p class="bg-success main-text" style="padding: 10px; border-radius: 5px;">Terimakasih atas partisipasi anda dalam pembuatan pelaporan ini.</p><br>

						                <a class="btn btn-primary" href="{{ route('user.buat-pelaporan') }}" style="background: #428bca;">Kembali ke halaman pelaporan</a>
						                <a class="btn btn-primary" href="{{ route('user.lihat-laporan') }}" style="background: #428bca;">Lihat daftar laporan</a> 
						            </div>

						        </div>
							</div>

						</div>

					</div><!-- Content Col end -->

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@stop
