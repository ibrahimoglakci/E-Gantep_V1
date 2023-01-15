
 <head>
	<title>Gaziantep İlanları ve Detaylı Rehber Sayfası | Gaziantep Rehberi</title>
</head>



	<!-- Home Design -->
	<section class="home-one home1-overlay bg-img2" style="background: url('<?=SITE?>images/background/antep.jpg');">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content home1">
						<div class="home-text text-center">
							<h2 class="fz50">Gaziantep Rehberi</h2>
							<p class="fz18 color-white">Gaziantep'te olan bütün her şeyi buradan bulabilirsiniz</p>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-10 col-xl-8">
								<div class="home_adv_srch_opt text-center">
									<div class="wrapper">
										<div class="home_adv_srch_form home2">
											<form class="bgc-white bgct-767 pl30 pt10 pl0-767">
												<div class="form-row align-items-center">
												    <div class="col-11 home_form_input mb20-xsd">
												      	<label class="sr-only">Username</label>
												      	<div class="input-group style1 mb-2 mb0-767">
												        	<div class="input-group-prepend">
												        		<div class="input-group-text pl0 pb0-767">Ne Arıyorsun?</div>
												        	</div>
															<div class="select-wrap style1-dropdown">
														    	<select name="lang" class="form-control js-searchBox">
																	<option value="">Örnek: avukat, restorant...</option>
																	<option value="TopPicks">Haberler</option>
																	<option value="CityOfLondon">Avukatlar</option>
																	<option value="OutdoorActivities">Popüler Mekanlar</option>
																	<option value="Restaurant">Restorantlar</option>
																	<option value="Hotels">Hastaneler</option>
														    	</select>
														    </div>
												      	</div>
												    </div>
												    
												    <div class="col-auto home_form_input2">
												    	<button type="submit" class="btn search-btn mb-2"><span class="flaticon-loupe"></span></button>
												    </div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<a class="weatherwidget-io" href="https://forecast7.com/tr/37d0737d38/gaziantep/" data-label_1="GAZIANTEP" data-label_2="HAVA DURUMU" data-theme="original" >GAZIANTEP HAVA DURUMU</a>
	<script>
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
	</script>

	<!-- Reklam Sayfası -->
	<?php include(PAGE."reklam.php"); ?>

	<!-- Pano Sayfası -->
	<?php include(PAGE."pano-home.php"); ?>

	<!-- Popüler Mekan Sayfası -->
	<?php include(PAGE."home-popular.php"); ?>

	<!-- Sektörler sayfası -->
	<?php include(PAGE."home-sektor.php"); ?>

	<!-- Borsa Sayfası 
	<?php //include(PAGE."home-borsa.php"); ?>-->
	

	<!-- Planlar Sayfası-->
	<?php include(PAGE."planlar.php"); ?>
	

	


	<!-- Our Footer -->
	
