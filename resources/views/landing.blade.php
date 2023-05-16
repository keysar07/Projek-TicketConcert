<!-- 
THEME: Small Apps | Bootstrap App Landing Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/small-apps-free-app-landing-page-template/
DEMO: https://demo.themefisher.com/small-apps/
GITHUB: https://github.com/themefisher/Small-Apps-Bootstrap-App-Landing-Template

Get HUGO Version : https://themefisher.com/products/small-apps-hugo-app-landing-theme/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Pemesanan Tiket Konser Coldplay</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard1/images/tiket.png') }}" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{ asset('dashboard1/plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard1/plugins/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard1/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard1/plugins/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard1/plugins/fancybox/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard1/plugins/aos/aos.css') }}">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('dashboard1/css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{ asset('dashboard1/images/tiket.png') }}" alt="logo" style="width:10%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#" data-toggle="dropdown">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">Pemesanan Tiket Konser Coldplay</h1>
				<p class="text-white mb-5">Pesan tiket mudah, aman, dan terpercaya.</p>
				<a href="{{ route('login') }}" class="btn btn-main-md">Pesan Sekarang</a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="{{ asset('dashboard1/images/band.png') }}" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-paint-bucket text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Design yang simpel</h3>
					<p class="regular text-muted">Dengan memesan tiket di sini, Anda akan merasa sangat terbantu dengan design web yang memudahkan anda untuk memesan tiket.</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-shine text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Tiket yang aman</h3>
					<p class="regular text-muted">Kami sudah memiliki lisensi langsung dengan coldplay, sehingga anda tidak perlu khawatir akan kepalsuan dari tiketnya.</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<i class="ti-thought text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Pemesanan yang mudah</h3>
					<p class="regular text-muted">Kami membuat proses pemesanan tiket sesimple dan semudah yang diharapkan para customer.</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->

<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>World Tour Coldplay di Jakarta</h2>
					<!-- Feature Description -->
					<p>Sebentar lagi Coldplay akan konser di Indonesia untuk pertama kalinya! jangan lewatkan keseruan dari band yang tidak pernah tua ini.. Segera pesan tiketnya di sini sebelum kehabisan.</p>
				</div>
				<!-- Testimonial Quote -->
                
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="{{ asset('dashboard1/images/coldplay.jpeg') }}" alt="ipad">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Feature Grid  ====-->

<!--==============================
=            Services            =
===============================-->
<!--====  End of Services  ====-->


<!--=================================
=            Video Promo            =
==================================-->
<section class="video-promo section bg-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h2>Lihat Video Promo Coldplay</h2>
					<!-- Promotional Speech -->
					<p>Anda bisa lihat semeriah apa konser yang diadakan oleh Coldplay. Jadi, tunggu apalagi? ayo pesan tiketnya sekarang </p>
					<!-- Popup Video -->
					<a data-fancybox href="https://www.youtube.com/watch?v=Fpn1imb9qZg">
						<i class="ti-control-play video"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Video Promo  ====-->

<!--=================================
=            Testimonial            =
==================================-->
<!--====  End of Testimonial  ====-->

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href=#">Keysar Jordian</a></small class="text-secondary">
  </div>

	<div class="text-center bg-dark py-1">
   <small> <p>Distributed By <a href="#">Keysar Jordian</a></p></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="{{ asset('dashboard1/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('dashboard1/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('dashboard1/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('dashboard1/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('dashboard1/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
  <script src="{{ asset('dashboard1/plugins/aos/aos.js') }}"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="{{ asset('dashboard1/plugins/google-map/gmap.js') }}"></script>
  
  <script src="{{ asset('dashboard1/js/script.js') }}"></script>
</body>

</html>