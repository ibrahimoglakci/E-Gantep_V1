<?php 


if(!empty($_GET['page']) && !empty($_GET['seflink'])) {
	$seflink=$DB->filter($_GET['seflink']);
	$page=$DB->filter($_GET['page']);
	$value=$DB->CallData("pano","WHERE seflink=? AND state=?",array($seflink,1),"ORDER BY ID ASC",1);
	$username=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND state=?",array($value[0]["name"],1),"ORDER BY ID ASC",1);
	if(!empty($_SESSION["email"])){
		$sessionusername=$DB->CallData("kullanicilar","WHERE email=? AND state=?",array($_SESSION['email'],1),"ORDER BY ID ASC",1);
	}

	if($value!=false) {

		?>

		<head>
			<title><?=$value[0]["title"]?> | Gaziantep Rehberi</title>
		</head>


	
	<!-- Listing Single v5 Home Area -->
	<div class="home10-mainslider">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-banner-wrapper home10">
					    <div class="banner-style-one owl-theme owl-carousel"> 
					        <div class="slide slide-one" style="background-image: url(<?=SITE?>images/home/2.jpg);height: 650px;"></div>
					        <div class="slide slide-one" style="background-image: url(<?=SITE?>images/home/1.jpg);height: 650px;"></div>
					        <div class="slide slide-one" style="background-image: url(<?=SITE?>images/home/2.jpg);height: 650px;"></div>
					    </div>
					    <div class="carousel-btn-block banner-carousel-btn">
					        <span class="carousel-btn left-btn"><i class="flaticon-arrow-pointing-to-left left"></i></span>
					        <span class="carousel-btn right-btn"><i class="flaticon-arrow-pointing-to-right right"></i></span>
					    </div><!-- /.carousel-btn-block banner-carousel-btn -->
					</div><!-- /.main-banner-wrapper -->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row listing_single_row style2">
				<div class="col-lg-8 col-xl-7">
					<div class="single_property_title listing_single_v1">
						<div class="media">
							<div class="media-body mt20">
						    	<h2 class="mt-0"><?=$value[0]["title"]?></h2>
						    	<ul class="mb40 agency_profile_contact listing_single_v1">
						    		<li class="list-inline-item"><a href="#"><span class="flaticon-phone"></span> <?=$username[0]["telefon"]?></a></li>
						    		<li class="list-inline-item"><a href="#"><span class="flaticon-pin"></span> <?=$username[0]["adress"]?></a></li>
						    	</ul>
						    	<div class="sspd_review listing_single_v1">
					    			<ul class="mb0">
										<?php 

															if($value[0]["yildiz"]==1) {
																$y1="orange";
																$y2="#fff";
																$y3="#fff";
																$y4="#fff";
																$y5="#fff";
															}
															if($value[0]["yildiz"]==2) { 
																$y2="orange";
																$y1="orange";
																$y3="#fff";
																$y4="#fff";
																$y5="#fff";
															}
															if($value[0]["yildiz"]==3) {
																$y3="orange";
																$y2="orange";
																$y1="orange";
																$y4="#fff";
																$y5="#fff";
															}
															if($value[0]["yildiz"]==4) {
																$y4="orange";
																$y3="orange";
																$y2="orange";
																$y1="orange";
																$y5="#fff";
															}
															if($value[0]["yildiz"]==5) {
																$y5="orange";
																$y4="orange";
																$y3="orange";
																$y2="orange";
																$y1="orange";
															}
															else if($value[0]["yildiz"]==0){
																$y5="#fff";
																$y4="#fff";
																$y3="#fff";
																$y2="#fff";
																$y1="#fff";
															}
															 ?>

															 <li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y1?>; font-size: 12px;"></span></a></li>
															 <li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y2?>; font-size: 12px;"></span></a></li>
															 <li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y3?>; font-size: 12px;"></span></a></li>
															 <li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y4?>; font-size: 12px;"></span></a></li>
															 <li class="list-inline-item"><a href="#" class="text-white"><span class="fa fa-star" style="color: <?=$y5?>; font-size: 12px;"></span> (<?=$value[0]["yildiz"]?>)</a></li>
							    		
									</ul>
						    	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-5">
					<div class="single_property_social_share listing_single_v1 mt80 mt0-lg">
						<div class="spss style2 listing_single_v1 mt30 float-left fn-lg">
							<ul class="mb0">
								<li class="list-inline-item icon"><a href="#"><span class="flaticon-upload"></span></a></li>
								
								
								<?php 
														if(!empty($_SESSION["isimsoyisim"]) && !empty($_SESSION["email"])) {
															$savings=$sessionusername[0]["savingpano"];
															$searchsaving=$value[0]["ID"];
															if(preg_match("/{$searchsaving}/i", $savings)) {



																?>
																<li class="list-inline-item icon"><a class="icon" href="#"><span class="fas fa-heart" style="color: red; margin-top: 13px; font-size: 19px;"></span></a></li>
											
																<?php 
															}
															else
															{
																?>

																<li class="list-inline-item icon"><a class="icon" href="#"><span class="flaticon-love" style="font-size: 17px;"></span></a></li>
											

																<?php

															}
														}
														else
														{

															?>
															<li class="list-inline-item icon"><a class="icon" href="#"><span class="flaticon-love" style="font-size: 17px;"></span></a></li>


															<?php

														}

														?>
							</ul>
						</div>
						<div class="price listing_single_v1 mt25 float-right fn-lg">
							<a href="#yorum-yap" class="btn btn-thm spr_btn">Yorum Yap</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Listing Single V1 -->
	<section class="our-agent-single pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="row">
						<div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
							<div class="listing_single_description mb60">
								<h4 class="mb30">Açıklama</h4>
						    	<p class="first-para mb25"><?=$value[0]["text"]?></p>
						    	
								
							</div>
						</div>
						
						<!--<div class="col-lg-12">
							<div class="additional_details mb30">
								<div class="row">
									<div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
										<h4 class="mb30">Özellikler ve hizmetler</h4>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-credit-card"></span></div>
											<div class="details">
												<div class="title">Accepts Credit Cards</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-bike"></span></div>
											<div class="details">
												<div class="title">Bike Parking</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-car"></span></div>
											<div class="details">
												<div class="title">Parking Street</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-wifi"></span></div>
											<div class="details">
												<div class="title">Wireless Internet</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-disabled"></span></div>
											<div class="details">
												<div class="title">Wheelchair Accessible</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-pawprint"></span></div>
											<div class="details">
												<div class="title">Pets Friendly</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>-->
						<div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
							<div class="listing_single_description mb60">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Photo gallery</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="gallery_item">
											<img class="img-fluid img-circle-rounded w100" src="<?=SITE?>images/listing/lgs1.jpg" alt="lgs1.jpg">
											<div class="gallery_overlay style2"><a class="icon popup-img" href="<?=SITE?>images/listing/lgs1.jpg"><span class="flaticon-zoom"></span></a></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="gallery_item">
											<img class="img-fluid img-circle-rounded w100" src="<?=SITE?>images/listing/lgs2.jpg" alt="lgs2.jpg">
											<div class="gallery_overlay style2"><a class="icon popup-img" href="<?=SITE?>images/listing/lgs2.jpg"><span class="flaticon-zoom"></span></a></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="gallery_item">
											<img class="img-fluid img-circle-rounded w100" src="<?=SITE?>images/listing/lgs3.jpg" alt="lgs3.jpg">
											<div class="gallery_overlay style2"><a class="icon popup-img" href="<?=SITE?>images/listing/lgs3.jpg"><span class="flaticon-zoom"></span></a></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="gallery_item">
											<img class="img-fluid img-circle-rounded w100" src="<?=SITE?>images/listing/lgs4.jpg" alt="g3.jpg">
											<div class="gallery_overlay style2 listing_single_v1"><a class="icon popup-img" href="<?=SITE?>images/listing/lgs4.jpg"><span class="fz14">+4</span></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-12 pl0 pl15-767">
							<div class="listing_single_video">
								<h4 class="mb30">video</h4>
								<div class="property_video">
									<div class="thumb">
										<img class="pro_img img-fluid w100" src="<?=SITE?>images/listing/lspv1.jpg" alt="ListingSingleVideo1.jpg">
										<div class="overlay_icon">
											<a class="video_popup_btn popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="fa fa-play body-color"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pl0 pl15-767">
							<div class="custom_reivews mt30 mb30 row">
								<div class="col-lg-12">
									<h4 class="mb25">4.67 (14 reviews)</h4>
								</div>
								<div class="col-lg-2">
									<div class="title">Overall Rating</div>
								</div>
								<div class="col-lg-4">
									<div class="review_content">
										<div class="review_line"></div>
										<div class="review_point">4.7</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="title">Services</div>
								</div>
								<div class="col-lg-4">
									<div class="review_content">
										<div class="review_line"></div>
										<div class="review_point">4.7</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="title">Hospitality</div>
								</div>
								<div class="col-lg-4">
									<div class="review_content">
										<div class="review_line style2"></div>
										<div class="review_point">4.9</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="title">Pricing</div>
								</div>
								<div class="col-lg-4">
									<div class="review_content">
										<div class="review_line style2"></div>
										<div class="review_point">4.9</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pl0 pl15-767">
							<div class="listing_single_reviews">
								<div class="product_single_content mb30">
									<div class="mbp_first media mb30">
										<img src="<?=SITE?>images/blog/reviewer1.png" class="mr-3" alt="reviewer1.png">
										<div class="media-body">
									    	<h4 class="sub_title mt-0">Jane Cooper</h4>
									    	<div class="sspd_postdate fz14 mb20">April 6, 2021 at 3:21 AM
												<div class="sspd_review pull-right">
													<ul class="mb0 pl15">
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item">(5 reviews)</li>
													</ul>
												</div>
									    	</div>
									    	<p class="fz14 mt10">Every single thing we tried with John was delicious! Found some awesome places we would definitely go back to on our trip. John was also super friendly and passionate about Beşiktaş and Istanbul. we had an awesome time!</p>
									    	<div class="thumb-list mt30">
									    		<ul>
									    			<li class="list-inline-item mb10-lg"><a href="#"><img src="<?=SITE?>images/blog/bsp1.jpg" alt="bsp1.jpg"></a></li>
									    			<li class="list-inline-item mb10-lg"><a href="#"><img src="<?=SITE?>images/blog/bsp2.jpg" alt="bsp2.jpg"></a></li>
									    			<li class="list-inline-item mb10-lg"><a href="#"><img src="<?=SITE?>images/blog/bsp3.jpg" alt="bsp3.jpg"></a></li>
									    			<li class="list-inline-item mb10-lg"><a href="#"><img src="<?=SITE?>images/blog/bsp4.jpg" alt="bsp4.jpg"></a></li>
									    		</ul>
									    	</div>
										</div>
									</div>
									<div class="mbp_first media">
										<img src="<?=SITE?>images/blog/reviewer2.png" class="mr-3" alt="reviewer2.png">
										<div class="media-body">
									    	<h4 class="sub_title mt-0">Bessie Cooper</h4>
									    	<div class="sspd_postdate fz14 mb20">April 6, 2021 at 3:21 AM
												<div class="sspd_review pull-right">
													<ul class="mb0 pl15">
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item">(5 reviews)</li>
													</ul>
												</div>
									    	</div>
									    	<p class="fz14 mt10">I enjoyed the tour. John is very friendly, observant, and funny. He cares for the guests and really works hard on providing a good experience by understanding each person's needs.…</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pl0 pl15-767">
							<div class="single_page_review_form p30-lg mb30-991">
								<div class="wrapper">
									<h4>Add a Review</h4>
									<div class="custom_reivews row mt40 mb30">
										<div class="col-lg-2 pr0">
											<div class="title">Overall Rating</div>
										</div>
										<div class="col-lg-4">
											<div class="review_star text-right">
												<ul>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-lg-2 pr0">
											<div class="title">Services</div>
										</div>
										<div class="col-lg-4">
											<div class="review_star text-right">
												<ul>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-lg-2 pr0">
											<div class="title">Hospitality</div>
										</div>
										<div class="col-lg-4">
											<div class="review_star text-right">
												<ul>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-lg-2 pr0">
											<div class="title">Pricing</div>
										</div>
										<div class="col-lg-4">
											<div class="review_star text-right">
												<ul>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<form class="review_form" id="yorum-yap">
										<div class="form-group">
									    	<input type="text" class="form-control" placeholder="Name">
										</div>
										<div class="form-group">
									    	<input type="email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group">
										    <textarea class="form-control" rows="7" placeholder="Your Review"></textarea>
										</div>
										<button type="submit" class="btn btn-thm">Submit Review</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-4">
					<div class="listing_single_sidebar">
						<div class="lss_contact_location ">
							<h4 class="mb25">Location</h4>
							<div class="sidebar_map mb30">
								<div class="lss_map h200" id="map-canvas"></div>
							</div>
							<ul class="contact_list list-unstyled mb15">
								<li class="df"><span class="flaticon-pin mr15"></span><a href="#">329 Queensberry Street, North Melbourne VIC 3051, Australia. <br> <span class="tdu text-thm">Get Direction</span></a></li>
								<li><span class="flaticon-phone mr15"></span><a href="#">+123 456 7890</a></li>
								<li><span class="flaticon-email mr15"></span><a href="#">support@skola.com</a></li>
								<li><span class="flaticon-link mr15"></span><a href="#">www.guido.com</a></li>
							</ul>
							<ul class="sidebar_social_icon mb0">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="sidebar_opening_hour_widget pb20">
							<h4 class="title mb15">Hours <small class="text-thm2 float-right">Now Open</small></h4>
							<ul class="list_details mb0">
								<li><a href="#">Monday <span class="float-right">6:30 am – 4:00 pm</span></a></li>
								<li><a href="#">Tuesday <span class="float-right">6:30 am – 4:00 pm</span></a></li>
								<li><a href="#">Wednesday <span class="float-right">6:30 am – 4:00 pm</span></a></li>
								<li><a href="#">Thursday <span class="float-right">6:30 am – 4:00 pm</span></a></li>
								<li><a href="#">Friday <span class="float-right">6:30 am – 4:00 pm</span></a></li>
								<li><a href="#">Saturday <span class="float-right">6:30 am – 4:00 pm</span></a></li>
								<li><a href="#">Sunday <span class="float-right">6:30 am – 4:00 pm</span></a></li>
							</ul>
						</div>
						<div class="sidebar_category_widget">
							<h4 class="title mb30">Categories</h4>
							<ul class="mb0">
								<li class="mb25"><a href="#"><img class="mr5" src="<?=SITE?>images/icons/icon3.svg" alt="icon3.svg"> Outdoor Activity</a></li>
								<li class="mb25"><a href="#"><img class="mr5" src="<?=SITE?>images/icons/icon4.svg" alt="icon4.svg"> Restourant</a></li>
								<li><a href="#"><img class="mr5" src="<?=SITE?>images/icons/icon5.svg" alt="icon5.svg"> Hotels</a></li>
							</ul>
						</div>
						<div class="sidebar_pricing_widget">
							<h4 class="title mb20">Price Range</h4>
							<ul class="mb0">
								<li><a href="#">Price: <span class="float-right heading-color">$ 50 - $ 150</span></a></li>
								<li><a href="#">Own or work here? <span class="float-right text-thm">Claim Now!</span></a></li>
							</ul>
						</div>
						<div class="sidebar_author_widget">
							<h4 class="title mb25">Author</h4>
							<div class="media">
								<img class="mr-3" src="<?=SITE?>images/team/author.png" alt="author.png">
								<div class="media-body">
							    	<h5 class="mt15 mb0">Robert Fox</h5>
							    	<p class="mb0">Designer at guido</p>
							  	</div>
							</div>
						</div>
						<div class="sidebar_contact_business_widget">
							<h4 class="title mb25">Contact Business</h4>
							<ul class="business_contact mb0">
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
								    </div>
								</li>
								<li class="search_area">
								    <div class="form-group">
								    	<input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
								    </div>
								</li>
								<li class="search_area">
								    <div class="form-group">
								    	<input type="number" class="form-control" id="exampleInputName2" placeholder="Phone">
								    </div>
								</li>
								<li class="search_area">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="Message"></textarea>
		                            </div>
								</li>
								<li>
									<div class="search_option_button">
									    <button type="submit" class="btn btn-block btn-thm h55">Send Message</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

		<?php 

	}
}


?>

