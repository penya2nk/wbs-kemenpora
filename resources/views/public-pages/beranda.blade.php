@extends('public-pages.template')

@section('title')
	Beranda
@stop
 
@section('content')
	<section id="ts-content" class="ts-content no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding left" style="padding-top: 31px;">
					<h3 style="padding:20px 0;background: #d0d0d0;text-align: center;">Per Undang-Undangan</h3>
					<p class="main-text"></p>
					<p class="main-text">Aplikasi Whistleblower merupakan aplikasi layanan pengaduan tentang adanya penyalahgunaan wewenang, pelanggaran peraturan perundang-undangan, atau pelanggaran kode etik dan pedoman perilaku yang dilakukan oleh pegawai/pejabat di lingkungan Kementerian Pemuda dan Olahraga. Aplikasi whistleblower sebagai perwujudan pembangunan nilai integritas di lingkungan Kementerian Pemuda dan Olahraga. Dengan adanya mekanisme yang baik dalam penanganan whistleblower diharapkan akan meningkatkan integritas para pegawai/pejabat Kementerian Pemuda dan Olahraga.</p>

					<div class="row">
						<div class="col-md-12 service-box"><i class="fa fa-university">&nbsp;</i>
							<div class="service-box-content">
								<a href="{{-- {{ url('/') }}/docs/Perka_no_4tahun2016_gratifikasi.pdf --}}" target="_blank"><h3>Instruksi Presiden Nomor 3 Tahun 2003</h3></a>
								<p class="main-text">Tentang Kebijakan dan Strategi Nasional Pengembangan E-Government, bahwa untuk menyelenggarakan pemerintahan yang baik (good governance) , bersih (clean government) dan  meningkatkan  layanan  publik  yang  efektif dan efisien diperlukan adanya kebijakan dan strategi pengembangan e-government pada setiap instansi Pemerintahan;</p>
							</div>
						</div><!--/ Box 1 end -->
					</div><!-- 1st row end -->

					<div class="row">
						<div class="col-md-12 service-box"><i class="fa fa-university">&nbsp;</i>
							<div class="service-box-content">
								<a href="{{-- {{ url('/') }}/docs/Perka_no_4tahun2016_gratifikasi.pdf --}}" target="_blank"><h3>UU Nomor 25 Tahun 2009</h3></a>
								<p class="main-text">Tentang Pelayanan Publik;</p>
							</div>
						</div><!--/ Box 1 end -->
					</div><!-- 1st row end -->

					<div class="row">
						<div class="col-md-12 service-box"><i class="fa fa-university">&nbsp;</i>
							<div class="service-box-content">
								<a href="{{-- {{ url('/') }}/docs/Perka_no_4tahun2016_gratifikasi.pdf --}}" target="_blank"><h3>UU Nomor 14 Tahun 2008</h3></a>
								<p class="main-text">Tentang Keterbukaan Informasi Publik;</p>
							</div>
						</div><!--/ Box 1 end -->
					</div><!-- 1st row end -->
				</div>

					

				<div class="col-md-6 ts-padding" style="padding-top: 31px;">
					<h3 style="padding:20px 0;background: #d0d0d0;text-align: center;">Mau Indonesia Bersih dari Korupsi?</h3>
					<p class="main-text">Dalam rangka menindaklanjuti Instruksi Presiden Nomor 3 Tahun 2003 tentang Kebijakan dan Strategi Nasional Pengembangan E-Government, bahwa untuk menyelenggarakan pemerintahan yang baik (good governance) , bersih (clean government) dan  meningkatkan  layanan  publik  yang  efektif dan efisien diperlukan adanya kebijakan dan strategi pengembangan e-government pada setiap instansi Pemerintahan. Hal ini didorong oleh adanya stigma mengenai kurang baiknya kinerja pegawai pemerintah dari masyarakat.  Kementerian Pemuda dan Olahraga sebagai bagian dari Pemerintahan akan melakukan peningkatan dan pengembangan Aplikasi pendukung e-government untuk Reformasi Birokrasi dengan menerapkan aplikasi Whistleblower di lingkungan Kementerian Pemuda dan Olahraga.</p>
					<h4>Berikut Tipsnya!</h4>
					<div style="position:relative;max-width:960px;">
						<!-- Start EasyHtml5Video.com BODY section -->
						<style type="text/css">.easyhtml5video .eh5v_script{display:none}</style>
						<div class="easyhtml5video" style="position:relative;max-width:640px;"><video controls="controls"  autoplay="autoplay" poster="{{ url('/') }}/template-saifway/html5video/Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya.jpg" style="width:100%" title="Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya" loop="loop" onended="var v=this;setTimeout(function(){v.play()},300)">
						<source src="{{ url('/') }}/template-saifway/html5video/Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya.m4v" type="video/mp4" />
						<source src="{{ url('/') }}/template-saifway/html5video/Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya.webm" type="video/webm" />
						<object type="application/x-shockwave-flash" data="{{ url('/') }}/template-saifway/html5video/flashfox.swf" width="640" height="360" style="position:relative;">
						<param name="movie" value="{{ url('/') }}/template-saifway/html5video/flashfox.swf" />
						<param name="allowFullScreen" value="true" />
						<param name="flashVars" value="autoplay=true&controls=true&fullScreenEnabled=true&posterOnEnd=true&loop=true&poster={{ url('/') }}/template-saifway/html5video/Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya.jpg&src=Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya.m4v" />
						 <embed src="{{ url('/') }}/template-saifway/html5video/flashfox.swf" width="640" height="360" style="position:relative;"  flashVars="autoplay=true&controls=true&fullScreenEnabled=true&posterOnEnd=true&loop=true&poster={{ url('/') }}/template-saifway/html5video/Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya.jpg&src=Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya.m4v"	allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en" />
						<img alt="Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya" src="{{ url('/') }}/template-saifway/html5video/Mau_Indonesia_Bersih_dari_Korupsi__Berikut_Tipsnya.jpg" style="position:absolute;left:0;" width="100%" title="Video playback is not supported by your browser" />
						</object>
						</video><div class="eh5v_script"><a href="http://easyhtml5video.com">html5 video converter</a> by EasyHtml5Video.com v3.9.1</div></div>
						<!-- End EasyHtml5Video.com BODY section -->
					</div>
					{{-- <h3 style="padding:20px 0;background: #d0d0d0;text-align: center;">SIPP-PERPUSNAS</h3> --}}
				</div><!-- Content right -->


			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Content end -->

	<section class="call-action-all no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="action-text">
						<h2 style="color: #FFFFFF;">Anda, Menemukan Dugaan Pelanggaran ?</h2>
					</div>
					<p class="action-btn"><a class="btn btn-primary" href="{{ url('/buat-pelaporan') }}" style="background: #DD2E33;font-size: 17px;">Laporkan Segera !</a></p>
				</div>
			</div>
		</div><!--/ Container end -->
    </section><!-- Call to Action end -->
    
    <section id="ts-content" class="ts-content no-padding" style="background: #F1F1F1;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding left">
					<p class="main-text">
						{{-- <a href="{{ url('/buat-pelaporan') }}"><img class="pull-right img-responsive" src="{{ url('/') }}/template-saifway/images/lapor-disini.png" alt=""></a> --}}
						<b>KERAHASIAAN PELAPOR:</b>
						<br>
						Kementerian Pemuda dan Olahraga Republik Indonesia akan merahasiakan identitas pribadi Anda sebagai whistleblower karena Kementerian Pemuda dan Olahraga Republik Indonesia hanya fokus pada informasi yang Anda laporkan.
						Agar Kerahasiaan lebih terjaga, perhatikan hal-hal berikut ini:
						<ul class="list-round-arrow main-text">
							<li>
								Jika ingin identitas Anda tetap rahasia, jangan memberitahukan/mengisikan data-data pribadi, seperti nama Anda, atau hubungan Anda dengan pelaku-pelaku,
							</li>
							<li>
								Jangan memberitahukan/mengisikan data-data/informasi yang memungkinkan bagi orang lain untuk melakukan pelacakan siapa Anda,</li>
							<li>
								Hindari orang lain mengetahui nama samaran (username), kata sandi (password) serta nomor registrasi Anda.
							</li>
						</ul>

					</p>
				</div><!-- Content left -->

				<div class="col-md-6 ts-padding right">
	                <h2>Apa Yang Perlu Dilaporkan ?</h2>

					<div class="row">
						<div class="col-md-12 service-box box2" style="margin:15px;">
							<span class="ts-service-icon"><i class="fa fa-check btn-circle-small"></i></span>
							<div class="service-box-content">
								<h3>Dugaan Tindak Pidana Korupsi</h3>
							</div>
						</div><!--/ Box 1 end -->
						
						<div class="col-md-12 service-box box2" style="margin:15px;">
							<span class="ts-service-icon"><i class="fa fa-check btn-circle-small"></i></span>
							<div class="service-box-content">
								<h3>Pengaduan masyarakat</h3>
							</div>
						</div><!--/ Box 2 end -->

						<div class="col-md-12 service-box box2" style="margin:15px;">
							<span class="ts-service-icon"><i class="fa fa-check btn-circle-small"></i></span>
							<div class="service-box-content">
								<h3>Benturan Kepentingan</h3>
							</div>
						</div><!--/ Box 1 end -->
						
						<div class="col-md-12 service-box box2" style="margin:15px;">
							<span class="ts-service-icon"><i class="fa fa-check btn-circle-small"></i></span>
							<div class="service-box-content">
								<h3>Gratifikasi</h3>
							</div>
						</div><!--/ Box 2 end -->

						<p><a class="btn btn-dark box2" href="{{ url('/pelaporan') }}">Baca Selengkapnya..</a></p>
					</div><!-- 1st row end -->
				</div><!-- Content right -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Content end -->

	<!-- Partners start -->
	<section id="partners-area" class="partners-area">
		<div class="container">
			<div class="row text-center">
				<h3 class="title">
					{{-- People Trust Us --}}
					<span class="title-head">Ayo Bangun Kepercayaan Publik</span>
				</h3>
			</div> <!-- Title row end -->

			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-3" style="border: 1px solid #eeeeee;">
						<img class="img-responsive" src="{{ url('/') }}/template-saifway/images/stop-fraud.jpg" alt="client">
					</div>
					<div class="col-sm-3" style="border: 1px solid #eeeeee;">
						<img class="img-responsive" src="{{ url('/') }}/template-saifway/images/stop-corruption.png" alt="client">
					</div>
					<div class="col-sm-3" style="border: 1px solid #eeeeee;">
						<img class="img-responsive" src="{{ url('/') }}/template-saifway/images/take-action.jpg" alt="client">
					</div>
					<div class="col-sm-3" style="border: 1px solid #eeeeee;">
						<img class="img-responsive" src="{{ url('/') }}/template-saifway/images/berani-jujur.jpg" alt="client">
					</div>
				</div>
			</div>
		</div><!--/ Container end -->
	</section><!--/ Partners end -->

@stop
@section('javascript')
	<script src="{{ url('/') }}/template-saifway/html5video/html5ext.js" type="text/javascript"></script>
@stop