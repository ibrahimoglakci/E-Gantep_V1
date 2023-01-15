<?php 
	$hakkimizda=$DB->CallData("hakkimizda","WHERE state=?",array(1),"ORDER BY ID ASC");
 ?>

<head>
	<title>Hakkımızda | Gaziantep Rehberi</title>
</head>

	<div class="preloader"></div>


	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb" style="background-image: url(<?=SITE?>images/banner/about.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">Hakkımızda</h2>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?=SITE?>">Ana Sayfa</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="main-title text-center">
						<h2>Misyonumuz ve Hakkımızda</h2>
						<p>Discover some of the most popular listings in Toronto based on user reviews and ratings.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="about_content">
						
						<p><?=$hakkimizda[0]["text"]?></p>
					</div>
				</div>
			</div>
			<hr>
			<div class="row mt50">
				<div class="col-md-6 col-lg-3">
					<div class="funfact_one style2 text-center">
						<div class="details">
							<div class="timer">749</div>
							<h4 class="ff_title">Firma Sahibi</h4>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="funfact_one style2 text-center">
						<div class="details">
							<div class="timer">853</div>
							<h4 class="ff_title">İlan Sayfası</h4>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="funfact_one style2 text-center">
						<div class="details">
							<ul>
								<li class="list-inline-item"><div class="timer">28</div></li>
								<li class="list-inline-item"><span>BİN+</span></li>
							</ul>
							<h4 class="ff_title">Takipçi</h4>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="funfact_one style2 text-center">
						<div class="details">
							<ul>
								<li class="list-inline-item"><div class="timer">53</div></li>
								<li class="list-inline-item"><span>BİN+</span></li>
							</ul>
							<h4 class="ff_title">Kullanıcılar</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- How It Works -->
	<section id="why-chose" class="whychose_us bgc-f7 pb70">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Nasıl Çalışır?</h2>
						<p>Sitemiz firma sahiplerini ve kullanıcıları bir araya getirir.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-find-location"></span>
						</div>
						<div class="details">
							<h4>İşletme / Firma Bul</h4>
							<p>Yakın çevrenizdeki diş hekimleri, kuaförler ve daha fazlası gibi harika yerel işletmeleri keşfedin ve onlarla bağlantı kurun.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-comment"></span>
						</div>
						<div class="details">
							<h4>İlanları / Listeleri İncele</h4>
							<p>İhtiyacınıza uygun ilanları/listeleri inceleyin ve hemen iletişime geçin. Sitemiz sizler için hepsini bir araya getirir. Yorum yapmayı unutmayın!</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-date"></span>
						</div>
						<div class="details">
							<h4>Rezervasyon yapın / Firma sahipleri ile iletişime geçin</h4>
							<p>Aradığınız firmayı bulduğunuz zaman işletme sahibi ile iletişime geçip rezervasyon yaptırın. İhtiyacınız olanları söyleyin ve ihtiyacınızı karşılayın.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<!-- Our Divider -->
	<section class="divider home-style1 parallax" data-stellar-background-ratio="0.2" style="background-image: url(<?=SITE?>images/banner/ilan.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="business_exposer text-center">
						<h2 class="title text-white mb20">Üye olup ilanınızı yayınlayın.</h2>
						<p class="text-white mb35">İşletmeniz, üst düzey medya değeri olmadan üst düzey medya bilgilerini verimli bir şekilde açığa çıkarmayı hak ediyor. Hemen sitemize üye olup ilk ilanınızı yayınlayın!</p>
						<a class="btn exposer_btn" href="<?=SITE?>kayit-ol">Üye Ol</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Team -->
	<section class="our-team">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Takımımız</h2>
						<p>TeamSoft Devs Ekibimizin Üyeleri.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="team_slider">
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="<?=SITE?>images/team/ibrahim.jpg" alt="İbrahim Halil Oğlakcı">
									<div class="overylay">
										<ul class="social_icon">
											
											<li class="list-inline-item"><a href="https://twitter.com/oglakcibey" target="_blank"><i class="fab fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="https://instagram.com/ibrahim.oglakci" target="_blank"><i class="fab fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>İbrahim Halil Oğlakcı</h4>
									<p>Kurucu | Yazılım Mühendisi</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="<?=SITE?>images/team/ersen.jpg" alt="Mecit Ersen Yılmaz">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="https://twitter.com/the_patellan" target="_blank"><i class="fab fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="https://instagram.com/ersnn_shib" target="_blank"><i class="fab fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Mecit Ersen Yılmaz</h4>
									<p>Tasarım & Yazılım Mühendisi</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" style="height: 350px;" src="<?=SITE?>images/team/halil2.jpg" alt="Halil Haydar Ay">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Halil Haydar Ay</h4>
									<p>Logo/Tasarım & Yazılım Mühendisi</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" style="height: 350px;" src="<?=SITE?>images/team/baris.jpg" alt="Özgür Barış Çiçek">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Özgür Barış Çiçek</h4>
									<p>Tasarım & Yazılım Mühendisi</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
