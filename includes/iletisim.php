

<head>
	<title>İletişim | Gaziantep Rehberi</title>
</head>

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb" style="background-image: url(<?=SITE?>images/banner/contact.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">Bize Ulaşın</h2>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?=SITE?>">Ana Sayfa</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Bize Ulaşın</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Contact -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="contact_info_widget mb30-smd">
						<h3 class="m_title">Ofisimiz</h3>
						<div class="ciw_box mb50">
							<h4 class="title">Antalya</h4>
							<ul class="list-unstyled">
								<li class="df"><span class="flaticon-pin mr15"></span><a href="#">3026 sk. No:4 Emek Manavgat Antayla</a></li>
								<li><span class="flaticon-phone mr15"></span><a href="tel:<?=$phone?>"><?=$phone?></a></li>
								<li><span class="flaticon-email mr15"></span><a href="#"><?=$mail?></a></li>
							</ul>
							<a class="tdu text-thm direction" href="#">Konuma Git</a>
						</div>
						<div class="ciw_box">
							<h4 class="title">Gaziantep</h4>
							<ul class="list-unstyled">
								<li class=" df"><span class="flaticon-pin mr15"></span><a href="#">77103 sk. YeşilEvler Şahinbey/Gaziantep</a></li>
								<li><span class="flaticon-phone mr15"></span><a href="tel:<?=$phone?>">123 456 7890</a></li>
								<li><span class="flaticon-email mr15"></span><a href="#"><?=$mail?></a></li>
							</ul>
							<a class="tdu text-thm direction" href="#">Get Direction</a>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="form_grid">
						<h3 class="title mb5">Bizimle iletişime geçin</h3>
			            <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
							<div class="row">
				                <div class="col-md-12">
				                    <div class="form-group">
										<input id="form_name" name="form_name" class="form-control" required="required" type="text" placeholder="İsim Soyisim">
									</div>
				                </div>
				                <div class="col-md-12">
				                    <div class="form-group">
				                    	<input id="form_email" name="form_email" class="form-control required email" required="required" type="email" placeholder="E-posta Adresi">
				                    </div>
				                </div>
				                
				                <div class="col-sm-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control required" rows="8" required="required" placeholder="Mesajınız"></textarea>
		                            </div>
				                    <div class="form-group mb0">
					                    <button type="button" class="btn btn-lg btn-thm">Send Message</button>
				                    </div>
				                </div>
			                </div>
			            </form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="our-map p0">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-lg-12">
					<div class="h600" id="map-canvas"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start Partners -->
	<section class="start-partners home1 bgc-thm pt60 pb60">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>Submit Your Property Today!</h2>
						<p>Explore some of the best tips from around the city from our partners and friends.</p>
					</div>
				</div>
				<div class="col-lg-4 pr10">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn" href="#">Submit Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
