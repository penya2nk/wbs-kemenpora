@extends('public-pages.template')

@section('title')
	Cara Lapor
@stop

@section('content')
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<h3 class="page-content-title">A. DATANG LANGSUNG</h3>
					<p class="main-text">Untuk melaporkan anda dipersilahkan untuk datang langsung ke:</p>
					<p class="main-text padding-left-15">
						<b>INSPEKTORAT KEMENTERIAN PEMUDA DAN OLAH RAGA</b>
							<address class="main-text" style="padding-left: 15px;">
							Kantor KEMENPORA, Jl. Gerbang Pemuda No. 3 Senayan <br>
							Kel. Gelora Kec : Tanah Abang, Jakarta Pusat,<br>
							Daerah Khusus Ibukota Jakarta 10270
							</address>
					</p>

					<div class="gap-20"></div>

					<h3 class="page-content-title">B. TIDAK LANGSUNG</h3>
					<p class="main-text padding-left-15">
						<b>1. JALUR ELEKTRONIS</b>
						<table style="margin-left: 35px;font-size: 16px;line-height: 30px;letter-spacing: 1px;">
							<tr><td><b><u>Online</u></b></td></tr>
							<tr>
								<td>Anda dapat langsung melaporkan dengan klik form LAPOR pada halaman website WBS-KEMENPORA di alamat : wbs.kemenpora.go.id <br> Atau bisa langsung klik <a href="wbs.kemenpora.go.id">disini</a> </td>
							</tr>
						</table>

						<div class="gap-20"></div>

						<table style="margin-left: 35px;font-size: 16px;line-height: 30px;letter-spacing: 1px;">
							<tr><td><b><u>Telepon</u></b></td></tr>
							<tr><td>(021) 5738155
							<br>Anda akan terhubung dengan operator WBS-KEMENPORA yang akan menanyakan anda beberapa pertanyaan mengenai tindakan dugaan pelanggaran.
							<br>Anda dapat memilih untuk menyebutkan identitas anda atau anonym.
							<br>Diluar jam kerja anda bisa meninggalkan pesan dalam Bahasa Indonesia dalam mailbox nomer diatas.</td></tr>
						</table>

						<div class="gap-20"></div>

						<table style="margin-left: 35px;font-size: 16px;line-height: 30px;letter-spacing: 1px;">
							<tr><td><b><u>Faksimili</u></b></td></tr>
							<tr><td>Anda dapat mengirimkan faksimili (mohon menggunakan formulir yang disediakan) ke:
							<br>(021) 5738155
							<br>Anda diminta untuk memberikan informasi sebanyak mungkin mengenai tindakan dugaan pelanggaran pada formulir yang tersedia.</td></tr>
						</table>

						<div class="gap-20"></div>

						<table style="margin-left: 35px;font-size: 16px;line-height: 30px;letter-spacing: 1px;">
							<tr><td><b><u>e-mail</u></b></td></tr>
							<tr><td>Anda dapat mengirimkan e-mail ke:
							<br><a href="">pengaduan@kemenpora.go.id</a>
							<br>Anda diminta untuk memberikan informasi sebanyak mungkin sehubungan dengan tindakan yang dilaporkan dalam e-mail anda. Alamat e-mail anda tidak akan diberikan ke Tim Sistem Pelaporan Dugaan Pelanggaran KEMENPORA tanpa seijin anda.</td></tr>
						</table>
					</p>

					<div class="gap-20"></div>

					<p class="main-text padding-left-15">
						<b>2. JALUR NON ELEKTRONIS</b>
						<table style="margin-left: 35px;font-size: 16px;line-height: 30px;letter-spacing: 1px;">
							<tr><td><b><u>Surat</u></b></td></tr>
							<tr><td>Anda dapat mengirimkan surat (mohon menggunakan formulir yang disediakan) ke alamat :
							<br>INSPEKTORAT KEMENTERIAN PEMUDA DAN OLAH RAGA
							<br>Kantor KEMENPORA, Jl. Gerbang Pemuda No. 3 Senayan
							<br>Kel. Gelora Kec : Tanah Abang, Jakarta Pusat,
							<br>Daerah Khusus Ibukota Jakarta 10270</td></tr>
						</table>

						<div class="gap-20"></div>

						<table style="margin-left: 35px;font-size: 16px;line-height: 30px;letter-spacing: 1px;">
							<tr><td><b><u>Kotak pengaduan</u></b></td></tr>
							<tr><td>Kotak pengaduan tersedia di GEDUNG KEMENTERIAN PEMUDA DAN OLAH RAGA <br>
							Jl. Gerbang Pemuda No. 3 Senayan, Jakarta Pusat, 10270</td></tr>
						</table>
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