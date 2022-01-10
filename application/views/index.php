<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>DPT Buah Naga</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
	<!-- https://fonts.google.com/specimen/Open+Sans -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/all.min.css" />
	<!-- https://fontawesome.com/ -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
	<!-- https://getbootstrap.com/ -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/tooplate-style.css" />
	<!--
Tooplate 2111 Pro Line
http://www.tooplate.com/view/2111-pro-line
-->
</head>

<body>
	<!-- page header -->
	<div class="container" id="home">
		<div class="col-12 text-center">
			<div class="tm-page-header">
				<i class="fas fa-4x fa-chart-bar mr-4"></i>
				<h1 class="d-inline-block text-uppercase">DPT Buah Naga</h1>
			</div>
		</div>
	</div>
	<!-- navbar -->
	<div class="tm-nav-section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="tmMainNav">
							<ul class="navbar-nav mx-auto tm-navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link external" href="<?php echo base_url('diagnose') ?>">Diagnosa
										Penyakit</a>
								</li>
								<!-- <li class="nav-item">
                                    <a class="nav-link" href="#activities">Activities</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#company">Company</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li> -->
								<li class="nav-item">
									<a class="nav-link external" href="<?php echo base_url('login') ?>">Masuk</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- Video Banner -->
	<!-- <section class="tm-banner-section" id="tmVideoSection">
		<div class="container tm-banner-text-container">
			<div class="row">
				<div class="col-12">
					<header>
						<h2 class="tm-banner-title">Selamat Datang</h2>
						<p class="mx-auto tm-banner-subtitle" style="text-transform:capitalize;">
							di aplikasi diagnosa penyakit lambung yang dikembangkan oleh ade bagus
						</p>
					</header>
				</div>
			</div>
		</div>

		
		<video id="hero-vid" autoplay="" loop="" muted>
			<source src="<?php echo base_url() ?>assets/videos/city-night-blur-01.mp4" type="video/mp4" />
			Your browser does not support the video tag.
		</video>
	</section> -->
	<!-- Features -->
	<!-- <div class="container tm-features-section" id="features">
        <div class="row tm-features-row">
            <section class="col-md-6 col-sm-12 tm-feature-block">
                <header class="tm-feature-header">
                    <i class="fas fa-5x fa-anchor tm-feature-icon"></i>
                    <h3 class="tm-feature-h">Cras pretium diam ut metus</h3>
                </header>
                <p>
                    Pro Line HTML5 Template is brought to you by
                    <a rel="nofollow noopener" href="https://www.tooplate.com">Tooplate</a>. This layout used Bootstrap v4.1.3 UI kit. You can easily modify
                    this template in any HTML editor for your site.
                </p>
                <p>
                    Sed interdum, purus vulputate congue luctus, lorem massa dignissim
                    nisi, sed condimentum nibh lorem quis lorem. Nulla sed erat
                    dignissim, tincidunt ante ac, egestas turpis.
                </p>
            </section>
            <section class="col-md-6 col-sm-12 tm-feature-block">
                <header class="tm-feature-header">
                    <i class="fas fa-5x fa-atom tm-feature-icon"></i>
                    <h3 class="tm-feature-h">Cras pretium diam ut metus</h3>
                </header>
                <p>
                    Phasellus tristique, sapien quis mattis pellentesque, felis turpis
                    placerat turpis, nec viverra quam nisl at velit. Pellentesque
                    iaculis convallis egestas.
                </p>
                <p>
                    Nunc ut elit eget velit mollis sodales. Ut non mauris ut ligula
                    mattis consectetur. Aenean augue arcu, rhoncus at nibh nec, lacinia
                    blandit nulla.
                </p>
            </section>
        </div>
    </div> -->

	<!-- Activities -->
	<div class="container" id="activities">
		<div class="row">
			<div class="col-12">
				<div class="tm-parallax">
					<header class="tm-parallax-header">
						<h2 class="">Tentang Penyakit</h2>
					</header>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="tm-activity-block">
					<div class="tm-activity-img-container">
						<img src="<?php echo base_url() ?>assets/img/img-1.jpg" width="180px" height="180px" alt="Image" class="tm-activity-img" />
					</div>
					<div class="tm-activity-block-text">
						<h3 class="tm-text-blue">Asal Buah Naga</h3>
						<p>
							Tanaman kaktus pemanjat penghasil buah naga, diketemukan pertama kali ditempat tumbuhnya yang asli, di lingkungan hutan belantara. Tempat asalnya adalah Meksiko, Amerika Tengah, dan Amerika Selatan.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="tm-activity-block mr-lg-0 ml-lg-auto">
					<div class="tm-activity-img-container">
						<img src="<?php echo base_url() ?>assets/img/img-2.jpg" width="180px" height="180px" alt="Image" class="tm-activity-img" />
					</div>
					<div class="tm-activity-block-text">
						<h3 class="tm-text-blue">Kandungan Buah Naga</h3>
						<p>
							Secara umum, kandungan nutrisi dari buah naga adalah: Air 90,20% ,Karbohidrat 11,50%, Protein 0,53% ,Lemak 0,40%, Serat 0,71%, Calcium 6-10 mg/100g, Fosfor 8,70%, Vitamin C: 9,40%.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="tm-activity-block">
					<div class="tm-activity-img-container">
						<img src="<?php echo base_url() ?>assets/img/img-3.jpg" width="180px" height="180px" alt="Image" class="tm-activity-img" />
					</div>
					<div class="tm-activity-block-text">
						<h3 class="tm-text-blue">Jenis Buah naga</h3>
						<p>
							Buah Naga memiliki 4 jenis yang berbeda antara lain yaitu Buah Naga Merah, Buah Naga Kuning, Buah Naga Hitam, dan Buah Naga Putih. Tiap jenis buah naga memiliki khasiat berbeda
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="tm-activity-block mr-lg-0 ml-lg-auto">
					<div class="tm-activity-img-container">
						<img src="<?php echo base_url() ?>assets/img/img-4.jpg" alt="Image" width="180px" height="180px" class="tm-activity-img" />
					</div>
					<div class="tm-activity-block-text">
						<h3 class="tm-text-blue">Naura Farm</h3>
						<p>
							Naura Farm Agrowisata menjadi sentra agrobisnis buah naga sebagai komoditi alternatif yang memiliki nilai ekonomis tinggi keuntungannya bisa melampaui komoditi pertanian lainnya.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- 
	<section class="container tm-company-section" id="company">
		<div class="row">
			<div class="col-xl-9 col-lg-8 col-md-12 tm-company-left">
				<div class="tm-company-about">
					<div class="tm-company-img-container">
						<img src="<?php echo base_url() ?>assets/img/img-5.jpeg" width="400" height="400" alt="Image" />
					</div>
					<div class="tm-company-about-text">
						<header>
							<h2 class="tm-company-about-header">Penggagas App</h2>
						</header>
						<p>
							Phasellus fringilla convallis libero non aliquam. Morbi justo
							lorem, varius ultricies pulvinar ac, aliquet quis ipsum.
						</p>
						<p class="mb-4">
							Suspendisse aliquam pulvinar odio sed rhoncus. Cras pretium diam
							ut metus tristique, a ultricies sapien euismod. Duis dui diam,
							maximus ac ligula a, accumsan cursus ante.
						</p>
						<a href="#" class="btn tm-btn tm-float-right">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-4 col-md-12 tm-company-right  ml-lg-auto mr-lg-0">
				<div class="tm-company-right-inner">
					<ul class="nav nav-tabs" id="tmCompanyTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link tm-nav-link-border-right active" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="true">Vision</a>
						</li>
						<li class="nav-item">
							<a class="nav-link tm-no-border-right" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">Mission</a>
						</li>
					</ul>
					<div class="tab-content" id="tmTabContent">
						<div class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
							<p>
								Phasellus suscipit sapien magna, vel dictum lorem fringilla.
							</p>
							<p>
								Class aptent taciti sociosqu ad litora torquent per conubia
								nostra.
							</p>
							<p>
								Nulla ornare ligula nibh, sit amet tristique magna efficitur
								eu.
							</p>
						</div>
						<div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
							<p>
								Class aptent taciti sociosqu ad litora torquent per conubia
								nostra.
							</p>
							<p>
								Nulla ornare ligula nibh, sit amet tristique magna efficitur
								eu.
							</p>
							<p>
								Phasellus suscipit sapien magna, vel dictum lorem fringilla.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	
	<footer class="container tm-footer">
		<div class="row tm-footer-row">
			<p class="col-md-10 col-sm-12 mb-0">
				Copyright &copy; 2018 Company Name - Design:
				<a rel="nofollow" href="https://www.facebook.com/tooplate" class="tm-footer-link">Tooplate</a>
			</p>
			<div class="col-md-2 col-sm-12 scrolltop">
				<div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div>
			</div>
		</div>
	</footer>

	<script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
	<!-- Single Page Nav plugin works with this version of jQuery -->
	<script src="<?php echo base_url() ?>assets/js/jquery.singlePageNav.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script>
		/**
		 * detect IE
		 * returns version of IE or false, if browser is not Internet Explorer
		 */
		function detectIE() {
			var ua = window.navigator.userAgent;

			var msie = ua.indexOf("MSIE ");
			if (msie > 0) {
				// IE 10 or older => return version number
				return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
			}

			var trident = ua.indexOf("Trident/");
			if (trident > 0) {
				// IE 11 => return version number
				var rv = ua.indexOf("rv:");
				return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
			}

			// var edge = ua.indexOf('Edge/');
			// if (edge > 0) {
			//     // Edge (IE 12+) => return version number
			//     return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
			// }

			// other browser
			return false;
		}

		function setVideoHeight() {
			const videoRatio = 1920 / 1080;
			const minVideoWidth = 400 * videoRatio;
			let secWidth = 0,
				secHeight = 0;

			secWidth = videoSec.width();
			secHeight = videoSec.height();

			secHeight = secWidth / 2.13;

			if (secHeight > 600) {
				secHeight = 600;
			} else if (secHeight < 400) {
				secHeight = 400;
			}

			if (secWidth > minVideoWidth) {
				$("video").width(secWidth);
			} else {
				$("video").width(minVideoWidth);
			}

			videoSec.height(secHeight);
		}

		// Parallax function
		// https://codepen.io/roborich/pen/wpAsm
		var background_image_parallax = function($object, multiplier) {
			multiplier = typeof multiplier !== "undefined" ? multiplier : 0.5;
			multiplier = 1 - multiplier;
			var $doc = $(document);
			$object.css({
				"background-attatchment": "fixed"
			});
			$(window).scroll(function() {
				var from_top = $doc.scrollTop(),
					bg_css = "center " + multiplier * from_top + "px";
				$object.css({
					"background-position": bg_css
				});
			});
		};

		$(window).scroll(function() {
			if ($(this).scrollTop() > 50) {
				$(".scrolltop:hidden")
					.stop(true, true)
					.fadeIn();
			} else {
				$(".scrolltop")
					.stop(true, true)
					.fadeOut();
			}

			// Make sticky header
			if ($(this).scrollTop() > 158) {
				$(".tm-nav-section").addClass("sticky");
			} else {
				$(".tm-nav-section").removeClass("sticky");
			}
		});

		let videoSec;

		$(function() {
			if (detectIE()) {
				alert(
					"Please use the latest version of Edge, Chrome, or Firefox for best browsing experience."
				);
			}

			const mainNav = $("#tmMainNav");
			mainNav.singlePageNav({
				filter: ":not(.external)",
				offset: $(".tm-nav-section").outerHeight(),
				updateHash: true,
				beforeStart: function() {
					mainNav.removeClass("show");
				}
			});

			videoSec = $("#tmVideoSection");

			// Adjust height of video when window is resized
			$(window).resize(function() {
				setVideoHeight();
			});

			setVideoHeight();

			$(window).on("load scroll resize", function() {
				var scrolled = $(this).scrollTop();
				var vidHeight = $("#hero-vid").height();
				var offset = vidHeight * 0.6;
				var scrollSpeed = 0.25;
				var windowWidth = window.innerWidth;

				if (windowWidth < 768) {
					scrollSpeed = 0.1;
					offset = vidHeight * 0.5;
				}

				$("#hero-vid").css(
					"transform",
					"translate3d(-50%, " + -(offset + scrolled * scrollSpeed) + "px, 0)"
				); // parallax (25% scroll rate)
			});

			// Parallax image background
			background_image_parallax($(".tm-parallax"), 0.4);

			// Back to top
			$(".scroll").click(function() {
				$("html,body").animate({
						scrollTop: $("#home").offset().top
					},
					"1000"
				);
				return false;
			});
		});
	</script>
</body>

</html>