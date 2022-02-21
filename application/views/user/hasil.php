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
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav"
							aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="tmMainNav">
							<ul class="navbar-nav mx-auto tm-navbar-nav">
								<li class="nav-item">
									<a class="nav-link external" href="<?= base_url('dash_usr') ?>">Home </a>
								</li>
								<li class="nav-item active">
									<a class="nav-link external" href="<?php echo base_url('diagnose') ?>">Diagnosa
										Penyakit <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link external" href="<?php echo base_url('dlogout') ?>" title="Logout"
										style="text-transform:capitalize">
										<?= $this->session->userdata('name'); ?> <i class="fa fa-power-off "></i> </a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Video Banner -->
	<div class="container tm-features-section" id="features">
		<div class="row tm-features-row">
			<section class=" col-lg-12 col-md-12 col-sm-12 ">
				<?php
				foreach ($penyakit as $pe) {
					foreach ($detail as $de) {
				?>
				<section class="container tm-company-section" id="company">
					<div class="row">
						<div class="col-md-12 ">
							<div class="tm-company-about">
								<!-- <div class="tm-company-img-container">
											<img src="<?php echo base_url() ?>assets/img/img-05.jpg" alt="Image" />
										</div> -->
								<div class="tm-company-about-text">
									<header>
										<h2 class="tm-company-about-header">Anda terkena penyakit
											<?= $pe['penyakit_utama'] ?> nilainya
											<?php
													$d = $pe['penyakit_lain'];
													$f = json_decode($d, true);
													// $data['nilai']  = max($f);
													// $data['index']  = array_search($data['nilai'], $f);
													// $nilai = $f[$data['index']];
													// $bobot2 = json_decode($pe['penyakit_lain'], true);
													// $bobot1 = floatval(current($bobot2));
													// $sml = json_decode($pe['similatiry'], true);
													// $bobot2 = floatval(current($bobot2)) * floatval(current($sml));
													// $persen = round($bobot1 / sqrt($bobot2),2); 
													$persen = reset($f) * 100;
													// print_r($persen);
													echo " dengan persentase ". $persen ."%";
													?></h2>
									</header>
									<p>
										<div class="tm-company-right-inner">
											<ul class="nav nav-tabs" id="tmCompanyTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link tm-nav-link-border-right active" id="vision-tab"
														data-toggle="tab" href="#vision" role="tab"
														aria-controls="vision" aria-selected="true">Penjelasan</a>
												</li>
												<li class="nav-item">
													<a class="nav-link tm-no-border-right" id="mission-tab"
														data-toggle="tab" href="#mission" role="tab"
														aria-controls="mission" aria-selected="false">Pencegahan</a>
												</li>
											</ul>
											<div class="tab-content" id="tmTabContent">
												<div class="tab-pane fade show active" id="vision" role="tabpanel"
													aria-labelledby="vision-tab">
													<p>
														<?= $de['penjelasan'] ?>
													</p>
													<a class="btn btn-block btn-primary"
														href="<?php echo base_url('diagnose') ?>">Diagnosa Kembali</a>
												</div>
												<div class="tab-pane fade" id="mission" role="tabpanel"
													aria-labelledby="mission-tab">
													<p>
														<?= $de['pencegahan'] ?>
													</p>
													<a class="btn btn-block btn-primary"
														href="<?php echo base_url('diagnose') ?>">Diagnosa Kembali</a>
												</div>
											</div>
										</div>
									</p>
									<p>
										<div class="tm-company-right-inner col-12">
											<ul class="nav nav-tabs">
												<li class="nav-item">
													<a class="nav-link tm-nav-link-border-right active" id="vision-tab"
														data-toggle="tab" href="#vision" role="tab"
														aria-controls="vision" aria-selected="true">
														<h4>Penjabaran</h4>
													</a>
												</li>
											</ul>
											<div class="tab-content" id="tmTabContent">
												<div class="tab-pane fade show active" id="vision" role="tabpanel"
													aria-labelledby="vision-tab">
													<h5>
														<?php $argj = explode(",", $gejala); $plain = json_decode($penyakit_lain, true);?>
														<?php $max = array(); $max = ["1.8", "1.4", "1.8", "1.4", "2", "1", "1.2"];?>
														Gejala yang di inputkan adalah <?= $gejala ?> dengan total
														<?= count($argj)?> Gejala
													</h5>
												</div>
												<div id="vision" role="tabpanel" aria-labelledby="vision-tab">
													<p>

														<?php for($bp=1;$bp<8;$bp++):?>
														<div class="card card-light">
															<div class="card-header">
																<?php $gjl = show_gejala($bp);?>
																Tahap <?=$bp." - "?><b><?=nama_penyakit($bp)?></b>
															</div>

															<div class="card-body">
																<table class="table table-striped">
																	<tr>
																		<th>No</th>
																		<th>Gejala</th>
																		<th>Kasus</th>
																		<th>Similiarity</th>
																		<th>Bobot</th>
																	</tr>
																	<?php
																		$all=array_unique( array_merge($argj, $gjl));
																		usort($all, function ($argj, $gjl) {
																			return $argj <=> $gjl;
																		});
																		$longest=count($all); 
																		// print_r($all);
																		$no=1; for($i=0; $i<$longest; $i++):
																	?>
																	<tr>
																		<td><?=$no?></td>
																		<td><?=(in_array($all[$i], $gjl )? $all[$i] : "")?></td>
																		<td> <?= (in_array($all[$i], $argj )? $all[$i] : "")?></td>
																		<td> <?= (in_array($all[$i], $gjl)?(in_array($all[$i], $argj )? 1 : 0):0)?></td>
																		<td> <?= (in_array($all[$i], $argj )? show_bobot($bp, $all[$i]) : 0)?></td>
																		</td>
																	</tr>
																	<?php $no++; endfor;?>
																	<tr>
																		<th colspan="4" class="text-center">Persentase</th>
																		<th><?= $plain["BP".$bp]*100;?>%
																		</th>
																	</tr>
																</table>
															</div>
														</div>
														<br>

														<?php endfor; ?>

													</p>
												</div>
											</div>
										</div>
									</p>
									<!-- <p class="mb-4">
												Suspendisse aliquam pulvinar odio sed rhoncus. Cras pretium diam
												ut metus tristique, a ultricies sapien euismod. Duis dui diam,
												maximus ac ligula a, accumsan cursus ante.
											</p>
											<a href="#" class="btn tm-btn tm-float-right">Read More</a> -->
								</div>
							</div>
						</div>
						<!-- <div class="col-xl-9 col-lg-4 col-md-12 tm-company-right  ml-lg-auto mr-lg-0">
									<div class="tm-company-right-inner">
										<ul class="nav nav-tabs" id="tmCompanyTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link tm-nav-link-border-right active" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="true">Pencegahan</a>
											</li>
											<li class="nav-item">
												<a class="nav-link tm-no-border-right" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">Isi</a>
											</li>
										</ul>
										<div class="tab-content" id="tmTabContent">
											<div class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
												<p>
													<?= $de['pencegahan'] ?>
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
								</div> -->
					</div>
				</section>
				<?php }
				} ?>
		</div>
	</div>
	<hr>
	<!-- Contact -->
	<!-- <section class="container tm-contact-section" id="contact">
		<div class="row">
			<div class="col-xl-5 col-lg-6 col-md-12 tm-contact-left">
				<div class="tm-contact-form-container ml-auto mr-0">
					<header>
						<h2 class="tm-contact-header">Hubungi Kami</h2>
					</header>
					<form action="index.html" class="tm-contact-form" method="POST">
						<div class="form-group">
							<input type="text" id="contact_name" name="contact_name" class="form-control"
								placeholder="Name" required />
						</div>
						<div class="form-group">
							<input type="email" id="contact_email" name="contact_email" class="form-control"
								placeholder="Email" required />
						</div>
						<div class="form-group">
							<textarea rows="5" id="contact_message" name="contact_message" class="form-control"
								placeholder="Message" required></textarea>
						</div>
						<div class="tm-text-right">
							<button type="submit" class="btn tm-btn tm-btn-big">
								Send It
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 col-md-12 tm-contact-right">
				<div class="tm-contact-figure-block">
					<figure class="d-inline-block">
						<img src="<?php echo base_url() ?>assets/img/img-06.jpg" alt="Image" class="img-fluid" />
						<figcaption class="tm-contact-figcaption">
							Nulla arcu tortor, mattis in diam eget, hendrerit vulputate
							ligula. Nam non purus consequat, dictum lectus lobortis, laoreet
							nibh. Cras vitae facilisis felis. Phasellus tristique.
						</figcaption>
					</figure>
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
		var background_image_parallax = function ($object, multiplier) {
			multiplier = typeof multiplier !== "undefined" ? multiplier : 0.5;
			multiplier = 1 - multiplier;
			var $doc = $(document);
			$object.css({
				"background-attatchment": "fixed"
			});
			$(window).scroll(function () {
				var from_top = $doc.scrollTop(),
					bg_css = "center " + multiplier * from_top + "px";
				$object.css({
					"background-position": bg_css
				});
			});
		};
		$(window).scroll(function () {
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
		$(function () {
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
				beforeStart: function () {
					mainNav.removeClass("show");
				}
			});
			videoSec = $("#tmVideoSection");
			// Adjust height of video when window is resized
			$(window).resize(function () {
				setVideoHeight();
			});
			setVideoHeight();
			$(window).on("load scroll resize", function () {
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
			$(".scroll").click(function () {
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