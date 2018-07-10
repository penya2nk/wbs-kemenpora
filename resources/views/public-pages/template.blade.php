<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
   	<title>@yield('title') | {!! config('app.name') !!}</title>


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/style.css">
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/datepicker/datepicker3.css">
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/datetimepicker/jquery.datetimepicker.css">
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/custom.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/owl.theme.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/colorbox.css">
	<!-- Datatables -->
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/jquery.dataTables.min.css">
	{{-- Upload --}}
	<link rel="stylesheet" href="{{ url('/') }}/template-saifway/css/jquery.fileuploader.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>

	<div class="body-inner">
	
	<!-- Header start -->
	<header id="header" class="header">
			<div class="row">
	            <a href="{{ url('/') }}">
	               	<img src="{{ url('/') }}/template-saifway/images/header.jpg" alt="Logo" width="100%">
	            </a>
	        </div>
	</header><!--/ Header end -->

	<nav class="site-navigation navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="site-nav-inner pull-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
		    			</button>

		    			<div class="collapse navbar-collapse navbar-responsive-collapse">
		    				<ul class="nav navbar-nav">
								<li class="{{ (Request::segment(1)=='')?'active':'' }}">
			                  		<a href="{{ url('/') }}">Beranda</a>
			               		</li>

			               		<li class="{{ (Request::segment(1)=='tentang')?'active':'' }}">
			                  		<a href="{{ url('/tentang') }}">Tentang</a>
			               		</li>

			               		<li class="{{ (Request::segment(1)=='pelaporan')?'active':'' }}">
			                  		<a href="{{ url('/pelaporan') }}">Apa Yang Dilaporkan</a>
			               		</li>

			               		<li class="{{ (Request::segment(1)=='faq')?'active':'' }}">
			                  		<a href="{{ url('/faq') }}">FAQ</a>
			               		</li>
			               		<li class="{{ (Request::segment(1)=='cara-lapor')?'active':'' }}">
			                  		<a href="{{ url('/cara-lapor') }}">Cara Lapor</a>
			               		</li>

			               		@if(Auth::user())
			               		<li class="{{ (Request::segment(1)=='lihat-laporan')?'active':'' }}">
			                  		<a href="{{ url('/lihat-laporan') }}">Daftar Laporan</a>
			               		</li>
			               		@else
			               		<li class="{{ (Request::segment(1)=='lapor')?'active':'' }}">
			                  		<a href="{{ url('/lapor/login-page') }}">Lapor/Login</a>
			               		</li>
			               		@endif
			        	    </ul><!--/ Nav ul end -->
		    			</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->

				</div><!--/ Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</nav><!--/ Navigation end -->

	@yield('content')

	<section class="footer-top no-padding">
		<div class="container">
			<div class="footer-top-bg row">
				<div class="col-md-4 footer-box one">
					<i class="fa fa-map-marker">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Inspektorat Kementerian Pemuda dan Olahraga Republik Indonesia</h3>
						<p>Jl. Gerbang Pemuda No. 3 Senayan Kel. Gelora Kec : Tanah Abang </p>
					</div>
				</div><!--/ Box 1 end -->

				<div class="col-md-4 footer-box two">
					<i class="fa fa-phone">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Call Center</h3>
						<p>Phone 1: (021) 5738155</p>
						<p>Phone 2: (021) 5738318</p>
						<p>Phone 3: (021) 5738312</p>
						<br><br>
					</div>
				</div><!--/ Box 2 end -->
				
				<div class="col-md-4 footer-box three">
					<i class="fa fa-envelope-o">&nbsp;</i>
					<div class="footer-box-content">
						<h3>e-mail</h3>
						<p>pengaduan@kemenpora.go.id</p>
						<br><br><br><br>
					</div>
				</div><!--/ Box 3 end -->
				
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Footer top end -->

	<!-- Footer start -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 footer-widget footer-about">
					{{-- <div class="footer-logo">
						<img src="{{ url('/') }}/template-saifway/images/logo-default.png" alt="">
					</div> --}}

					<h3 class="widget-title">Privacy Policy</h3>

					<p>Kami menjamin pengaduan anda akan aman, rahasia dan tidak disalahgunakan.</p>
				</div><!-- About us end -->

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Important Links</h3>

					<ul class="list-arrow">
						<li style="width: 100%;"><a href="{{ url('/') }}/lapor/login-page">Login</a></li>
						<li style="width: 100%;"><a href="{{ url('/') }}/lapor/daftar">Pendaftaran</a></li>
						<li style="width: 100%;"><a href="http://www.kemenpora.go.id/" target="_blank">Website KEMENPORA</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Stay Connected</h3>
					<div class="footer-social">
						<ul>
							<li><a href="https://www.facebook.com/ayokeperpusnas/" target="_blank"><i class="fa fa-facebook"></i></a></li>

							<li><a href="https://twitter.com/perpusnas1" target="_blank"><i class="fa fa-twitter"></i></a></li>

							<li><a href="https://www.youtube.com/user/Katinksg/videos" target="_blank"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div><!-- Footer social end -->
				</div>
			</div><!--/ Content row end -->

			<div class="row copyright">
				<div class="col-xs-12 col-sm-5">
					<div class="copyright-info">
						<span>Copyright © {{ date('Y') }} KEMENPORA. All Rights Reserved.</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-push-1">
					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="http://klakklik.id" target="_blank">© Developer</a></li>
						</ul>
					</div>
				</div>
			</div><!-- Copyright end -->

			<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top">
					<i class="fa fa-angle-double-up"></i>
				</button>
			</div>

		</div><!--/ Container end -->
	</footer><!-- Footer end -->

	

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/jquery.colorbox.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/isotope.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/ini.isotope.js"></script>
	<!-- Google Map API Key Source -->
	{{-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> --}}
	<!-- For Google Map -->
	<!-- Doc http://www.mkyong.com/google-maps/google-maps-api-hello-world-example/ -->
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/gmap3.min.js"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/datepicker/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/template-saifway/js/datetimepicker/jquery.datetimepicker.full.js"></script>
	{{-- PLUGINS --}}
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script src="{{ url('/') }}/template-saifway/js/jquery.fileuploader.min.js"></script>
	<script src="{{ url('/') }}/template-saifway/js/jquery.dataTables.min.js"></script>
	
	@yield('javascript')

	<script type="text/javascript">
		$(function(){
			window.sr = ScrollReveal({ duration: 2000 });
			sr.reveal('.box0', 0);
			sr.reveal('.box1', 100);
			sr.reveal('.box2', 200);
			sr.reveal('.box-left', {origin: 'left',distance: '200px',delay: 1000});
			sr.reveal('.box-right', {origin: 'right',distance: '200px',delay: 1000});

		})
	</script>
	<!--Start of Tawk.to Script-->
	{{-- <script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5941526950fd5105d0c81039/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script> --}}
	<!--End of Tawk.to Script-->
	</div><!-- Body inner end -->
</body>
</html>