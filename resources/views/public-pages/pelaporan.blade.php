@extends('public-pages.template')

@section('title')
	Apa yang perlu dilaporakan
@stop

@section('content')
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<h3 class="page-title">Apa Yang Perlu Dilaporkan</h2>

					<h3 class="page-content-title">1. Dugaan Tindak Pidana Korupsi:</h3>
					<p class="main-text">
						Pejabat/Pegawai di lingkungan Kementerian Pemuda dan Olahraga terduga melakukan tindak pidana korupsi yakni satu perbuatan yang mempunyai tujuan menguntungkan diri sendiri atau orang lain atau suatu korporasi, menyalahgunakan kewenangan, kesempatan atau sarana yang ada padanya karena jabatan atau kedudukan yang dapat merugikan keuangan negara atau perkonomian negara sesuai dengan aturan yang ditetapkan dalam Peraturan Kepala (Perka) KEMENPORA nomor 9 tahun 2016 Tentang Tata cara Penanganan Pelaporan Pelanggaran Dugaan Tindak Pidana Korupsi di Lingkungan Kementerian Pemuda dan Olahraga <a href="{{-- {{ url('/') }}/docs/Perka_no_9tahun2016_WBS.pdf --}}" target="_blank">(dapat didownload disini)</a>
					</p>

					<div class="gap-20"></div>

					<h3 class="page-content-title">2. Pengaduan masyarakat:</h3>
					<p class="main-text">
						Segala bentuk pengawasan masyarakat yang disampaikan kepada Kementerian Pemuda dan Olahraga berupa sumbangan pemikiran, saran, gagasan, keluhan  dan atau pengaduan terkait dugaan penyimpangan dan/atau penyalahgunaan wewenang baik yang berhubungan dengan bidang pengawasan maupun  tidak, sesuai dengan aturan yang ditetapkan dalam Peraturan Kepala (Perka) KEMENPORA nomor 5 tahun 2016 Tentang Pedoman Penanganan Pengaduan Masyarakat di Lingkungan Pepustakaan Nasional <a href="{{-- {{ url('/') }}/docs/Perka_no_5tahun2016_Pengaduan_masyarakat.pdf --}}" target="_blank">(dapat didownload disini)</a>
					</p>

					<div class="gap-20"></div>

					<h3 class="page-content-title">3. Benturan Kepentingan:</h3>
					<p class="main-text">
						Pejabat/Pegawai di lingkungan Kementerian Pemuda dan Olahraga memiliki atau patut diduga memiliki kepentingan pribadi terhadap setiap penggunaan wewenang dalam kedudukan atau jabatannya, sehingga dapat mempengaruhi kualitas keputusan/ atau tindakannya. 
						Bentuk dan jenis benturan kepentingan dijelaskan lebih detil dalam Peraturan Kepala (Perka) KEMENPORA nomor 8 tahun 2016 Tentang Pedoman Penanganan Benturan Kepentingan  di Lingkungan Kementerian Pemuda dan Olahraga <a href="{{-- {{ url('/') }}/docs/Perka_no_8tahun2016_benturankepentingan.pdf --}}" target="_blank">(dapat didownload disini)</a>
					</p>

					<div class="gap-20"></div>

					<h3 class="page-content-title">4. Gratifikasi:</h3>
					<p class="main-text">
						Pegawai KEMENPORA yang menerima gratifikasi dan tidak lapor ke Tim Pengendalian Gratifikasi (TPG)/KPK yang sudah melewati batas waktu yang ditetapkan atau kondisi lain yang dikategorikan sebagai bentuk gratifikasi sesuai dengan Peraturan Kepala (Perka) KEMENPORA Nomor 4 tahun 2016 Tentang Pengendalian Gratifikasi  di Lingkungan Kementerian Pemuda dan Olahraga <a href="{{-- {{ url('/') }}/docs/Perka_no_4tahun2016_gratifikasi.pdf --}}" target="_blank">(dapat didownlad disini)</a>
					</p>

				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="widget box solid box-shadow">
							<h3 class="widget-title">Anda, Menemukan Dugaan Pelanggaran ?</h3>
							<p>Beritahu Kami jika anda menemukannya potensi dugaan pelanggaran sekecil apapun.</p>
							<p><a class="btn btn-primary" href="{{ url('/buat-pelaporan') }}" style="background: #DD2E33;font-size: 17px;">Laporkan Segera !</a></p>

						</div><!-- Widget end -->

					</div><!-- Sidebar end -->
				</div><!-- Sidebar Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@stop