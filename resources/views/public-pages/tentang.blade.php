@extends('public-pages.template')

@section('title')
	Tentang
@stop

@section('content')
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">

					<div class="row text-center">
						<h2 class="title">
							<span class="title-head">Tentang WBS-KEMENPORA </span>
						</h2>
					</div><!--/ Title row end -->

					<div class="row">
						<div class="col-xs-12">
							<center>
							<img src="{{ url('/') }}/template-saifway/images/wbs-kemenpora-banner.jpg" class="img-responsive" style="width: 100%;">
							</center>
						</div>
					</div>					
					<br>
					<div class="row">
						<div class="col-md-6">
							<h3 class="page-content-title first">Apa itu WBS-KEMENPORA?</h3>
							<p class="main-text">WBS-KEMENPORA dibangun sebagai wujud komitmen KEMENPORA untuk menyelenggarakan pemerintahan yang bersih dan bebas dari KKN serta dalam rangka memberikan kepada ASN KEMENPORA dan masyarakat untuk dapat menyampaikan laporan mengenai dugaan pelanggaran tersebut berdasarkan bukti-bukti yang dapat dipertanggungjawabkan serta dengan niat/itikad baik demi meningkatkan transparansi dalam penyelenggaraan pemerintah dan pelayanan kepada masyarakat yang terus lebih baik</p>
						</div><!-- Slideshow col end -->

						<div class="col-md-6">
							<h3 class="page-content-title first">WBS-KEMENPORA Bertujuan:</h3>
							<ul class="list-style-type-none main-text">
								<li><table><tr><td style="vertical-align:top;padding-right: 13px;"><i class="fa fa-check-circle"></i></td><td>Mendorong peran aktif masyarakat untuk menyampaikan pengungkapan penyimpangan atau penyalahgunaan kewenangan di KEMENPORA;</td></tr></table></li>
								<li class="padding-top-10"><table><tr><td style="vertical-align:top;padding-right: 13px;"><i class="fa fa-check-circle"></i></td><td>Mewujudkan Penanganan Pengaduan Masyarakat secara baik, cepat, tepat, dan dapat dipertanggungjawabkan;</td></tr></table></li>
								<li class="padding-top-10"><table><tr><td style="vertical-align:top;padding-right: 13px;"><i class="fa fa-check-circle"></i></td><td>Meningkatkan sistem pengawasan yang memberikan perlindungan kepada Pelapor <i>(Whistleblower)</i>;</td></tr></table></li>
								<li class="padding-top-10"><table><tr><td style="vertical-align:top;padding-right: 13px;"><i class="fa fa-check-circle"></i></td><td>Sebagai fasilitas bagi pimpinan untuk mendeteksi dini akan adanya pelanggaran dan menentukan tindak lanjut yang tepat secara lebih cepat;</td></tr></table></li>
								<li class="padding-top-10"><table><tr><td style="vertical-align:top;padding-right: 13px;"><i class="fa fa-check-circle"></i></td><td>Memberdayakan Pengaduan Masyarakat sebagai kontrol sosial terhadap penyelenggaraan tugas dan fungsi KEMENPORA.</td></tr></table></li>
							</ul>
						</div>
					</div>

					<div class="gap-30">&nbsp;</div>

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@stop