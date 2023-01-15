<?php 
if(!empty($_GET['page']) && !empty($_GET['seflink'])) {
	$seflink=$DB->filter($_GET['seflink']);
	$page=$DB->filter($_GET['page']);
	$value=$DB->CallData("pano","WHERE seflink=? AND state=?",array($seflink,1),"ORDER BY ID ASC",1);
	$profil=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND state=?",array($value[0]["name"],1),"ORDER BY ID ASC",1);

	if($value!=false) {



		?>

		<head>
			<title><?=$value[0]["title"]?> | Gaziantep Rehberi</title>
		</head>



		<section class="listing-title-area pb50">
			<div class="container">

				<div class="row mb30">
					<div class="col-xl-7">
						<div class="single_property_title mt30-767">
							<div class="media">
								<?php 

								$imageprofiles=$profil[0]["image"];
								if(empty($imageprofiles)) { $imagespro="varsayilanprofil.png";} else {$imagespro="$imageprofiles";}

								?>
								<img class="mr-3" src="<?=SITE?>images/users/<?=$imagespro?>" alt="">
								<div class="media-body mt20">
									<h2 class="mt-0"><?=$value[0]["title"]?></h2>
									<ul class="mb0 agency_profile_contact">
										<li class="list-inline-item"><a href="tel:<?=$username[0]["telefon"]?>"><span class="flaticon-phone"></span> <?=$profil[0]["telefon"]?></a></li>
										<li class="list-inline-item"><a href="#"><span class="flaticon-pin"></span> <?=$profil[0]["adress"]?></a></li>
										<li class="list-inline-item sspd_review">
											<ul class="mb0">
												<?php 

												if($value[0]["yildiz"]==1) {
													$y1="orange";
													$y2="gray";
													$y3="gray";
													$y4="gray";
													$y5="gray";
												}
												if($value[0]["yildiz"]==2) { 
													$y2="orange";
													$y1="orange";
													$y3="gray";
													$y4="gray";
													$y5="gray";
												}
												if($value[0]["yildiz"]==3) {
													$y3="orange";
													$y2="orange";
													$y1="orange";
													$y4="gray";
													$y5="gray";
												}
												if($value[0]["yildiz"]==4) {
													$y4="orange";
													$y3="orange";
													$y2="orange";
													$y1="orange";
													$y5="gray";
												}
												if($value[0]["yildiz"]==5) {
													$y5="orange";
													$y4="orange";
													$y3="orange";
													$y2="orange";
													$y1="orange";
												}
												else if($value[0]["yildiz"]==0){
													$y5="gray";
													$y4="gray";
													$y3="gray";
													$y2="gray";
													$y1="gray";
												}
												?>

												<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y1?>; font-size: 12px;"></span></a></li>
												<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y2?>; font-size: 12px;"></span></a></li>
												<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y3?>; font-size: 12px;"></span></a></li>
												<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y4?>; font-size: 12px;"></span></a></li>
												<li class="list-inline-item"><a href="#" class="text-black"><span class="fa fa-star" style="color: <?=$y5?>; font-size: 12px;"></span></a></li>

											</ul>
										</li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5">
						<div class="single_property_social_share">
							<div class="spss style2 mt30 float-left fn-lg">
								<ul class="mb0">
									<li class="list-inline-item icon"><a data-toggle="tooltip" data-placement="top" title="Sayfa bağlantısını kopyalamak için tıkla" style="cursor: pointer;" onclick="copyToClipboardUrl('#ilanid','<?=SITE?>ilan-detay/<?=$seflink?>');" id="ilanid"><i class="fas fa-link fa-2x mt8" style="color: darkslategrey;"></i><input type="hidden" value="<?=SITE?>ilan-detay/<?=$seflink?>"></a></li>
									<li class="list-inline-item icon"><a data-toggle="tooltip" data-placement="top" title="Twitter ile paylaş" style="cursor: pointer;" target="_blank" href="https://twitter.com/share?url=<?=SITE?>ilan-detay/<?=$seflink?>&text=Gayet güzel bir ilan. Sizin de göz atmanızı isterim." target="_blank"><i class="fab fa-twitter fa-2x mt8" style="color: #1DA1F2;"></i></a></li>
									<li class="list-inline-item icon"><a data-toggle="tooltip" data-placement="top" title="Facebook ile paylaş" style="cursor: pointer;" href="https://www.facebook.com/sharer/sharer.php?u=<?=SITE?>ilan-detay/<?=$seflink?>" target="_blank"><i class="fab fa-facebook fa-2x mt8" style="color: #3B5998;"></i></a></li>
									<li class="list-inline-item icon"><a data-toggle="tooltip" data-placement="top" title="Telegram ile paylaş" style="cursor: pointer;" href="https://t.me/share/url?url=<?=SITE?>ilan-detay/<?=$seflink?>&text=Gayet güzel bir ilan. Sizin de göz atmanızı isterim." target="_blank"><i class="fab fa-telegram fa-2x mt8" style="color: #0088cc  ;"></i></a></li>
									
									<li class="list-inline-item icon"><a href="#" title="Favoriye ekle"><span class="flaticon-love"></span></a></li>
									
								</ul>
							</div>
							
						</div>
					</div>

				</div>
				<script type="text/javascript">
					function copyToClipboardUrl(element,url) {
					  var $temp = $("<input>");
					  $("body").append($temp);
					  $temp.val(url).select();
					  document.execCommand("copy");
					  $temp.remove();
		  

		  			  $('[data-toggle="tooltip"]').tooltip();
		  			  
		  			  let refurl = $('#ilanid');
		  			  
		   			  refurl.attr('title', 'Kopyalandı').tooltip('dispose');
		   			  refurl.tooltip('show');
		  

					}
				</script>
				<div class="row">

					<?php 
					$resimler=$DB->CallData("resimler","WHERE KID=?",array($value[0]["ID"]),"ORDER BY date ASC");


					if($resimler!=false) {
						?>

						<div class="col-md-7 col-lg-8">
							<div class="row">
								<div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
									<div class="spls_style_two mb30-767">
										<a class="popup-img" href="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[0]["image"]?>"><img class="img-fluid w100" src="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[0]["image"]?>" style="height: 471px;"></a>
									</div>
								</div>
							</div>
						</div>


						<div class="col-md-5 col-lg-4">
							<div class="row">

								<?php 

								if(count($resimler)>7)
								{


									?>




									<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
										<div class="spls_style_two mb10">
											<a class="popup-img" href="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[1]["image"]?>"><img class="img-fluid w100" src="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[1]["image"]?>" style="height: 150px;"></a>
										</div>
									</div>

									<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
										<div class="spls_style_two mb10">
											<a class="popup-img" href="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[2]["image"]?>"><img class="img-fluid w100" src="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[2]["image"]?>" style="height: 150px;"></a>
										</div>
									</div>

									<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
										<div class="spls_style_two mb10">
											<a class="popup-img" href="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[3]["image"]?>"><img class="img-fluid w100" src="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[3]["image"]?>" style="height: 150px;"></a>
										</div>
									</div>

									<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
										<div class="spls_style_two mb10">
											<a class="popup-img" href="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[4]["image"]?>"><img class="img-fluid w100" src="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[4]["image"]?>" style="height: 150px;"></a>
										</div>
									</div>

									<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
										<div class="spls_style_two mb10">
											<a class="popup-img" href="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[5]["image"]?>"><img class="img-fluid w100" src="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[5]["image"]?>" style="height: 150px;"></a>
										</div>
									</div>

									<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
										<div class="spls_style_two mb10">
											<a class="popup-img" href="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[6]["image"]?>"><img class="img-fluid w100" src="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$resimler[6]["image"]?>" style="height: 150px;"></a>
											<div class="overlay popup-img">
												<h3 class="title">+<?=(count($resimler)-7)?></h3>
											</div>
										</div>
									</div>

									<?php
									

								}
								else
								{
									for($i=1;$i<count($resimler);$i++)
									{
										if(!empty($resimler[$i]["image"])) {$images=$resimler[$i]["image"];} else {$image='varsayilan.jpg';} 
										?>

										<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
											<div class="spls_style_two mb10">
												<a class="popup-img" href="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$images?>"><img class="img-fluid w100" src="<?=SITE?>images/ilanresim/<?=$value[0]["ID"]?>/<?=$images?>" style="height: 150px;"></a>
											</div>
										</div>

										<?php
									}
								}


								?>

							</div>
						</div>


						<?php 
					}
					?>
					
				</div>
			</div>
		</section>

		<!-- Agent Single Grid View -->
		<section class="our-agent-single pt0 pb30-991">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<div class="row">
							<div class="col-lg-12 pl0 pr0 pl15-767">
								<div class="listing_single_description mb60">
									<h4 class="mb30">Açıklama</h4>
									<p class="first-para mb25"><?=$value[0]["text"]?></p>
									

								</div>
							</div>
							<div class="col-lg-12">
								<div class="additional_details mb30">
									<div class="row">
										<div class="col-lg-12 pl0 pr0 pl15-767">
											<h4 class="mb30">Özellikler</h4>
										</div>


										<?php 

										if($value[0]["kredikart"]=="true"){



											?>


											<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
												<div class="listing_feature_iconbox mb30">
													<div class="icon float-left mr10"><span class="flaticon-credit-card"></span></div>
													<div class="details">
														<div class="title">Kredi/Banka Kartı Geçerli</div>
													</div>
												</div>
											</div>

											<?php 

										}
										?>

										<?php 

										if($value[0]["parkyeri"]=="true"){



											?>

											<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
												<div class="listing_feature_iconbox mb30">
													<div class="icon float-left mr10"><span class="flaticon-car"></span></div>
													<div class="details">
														<div class="title">Otopark</div>
													</div>
												</div>
											</div>

											<?php 

										}
										?>

										<?php 

										if($value[0]["wifi"]=="true"){



											?>

											<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
												<div class="listing_feature_iconbox mb30">
													<div class="icon float-left mr10"><span class="flaticon-wifi"></span></div>
													<div class="details">
														<div class="title">Kablosuz İnternet (Wifi)</div>
													</div>
												</div>
											</div>

											<?php 

										}
										?>

										<?php 

										if($value[0]["alkol"]=="true"){



											?>

											<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
												<div class="listing_feature_iconbox mb30">
													<div class="icon float-left mr10"><span class="fas fa-wine-bottle" style="margin-top: 7px;"></span></div>
													<div class="details">
														<div class="title">Alkol Satışı/Tüketimi</div>
													</div>
												</div>
											</div>

											<?php 

										}
										?>

										<?php 

										if($value[0]["engelliyeri"]=="true"){



											?>

											<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
												<div class="listing_feature_iconbox mb30">
													<div class="icon float-left mr10"><span class="flaticon-disabled"></span></div>
													<div class="details">
														<div class="title">Engelli Sandalyesi</div>
													</div>
												</div>
											</div>

											<?php 

										}
										?>


										<?php 

										if($value[0]["hayvandurum"]=="true"){



											?>

											<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
												<div class="listing_feature_iconbox mb30">
													<div class="icon float-left mr10"><span class="flaticon-pawprint"></span></div>
													<div class="details">
														<div class="title">Evcil Hayvanlara İzin Verilebilir</div>
													</div>
												</div>
											</div>

											<?php 

										}
										?>

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

							<?php 
							$yorumyapma=false;
							if(!empty($_SESSION["isimsoyisim"]) && !empty($_SESSION["email"])) {

								$userscheck=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND email=? AND state=?",array($_SESSION['isimsoyisim'],$_SESSION['email'],1),"ORDER BY ID ASC",1);
								$yorumyapilanuye=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND state=?",array($value[0]["name"],1),"ORDER BY ID ASC",1);
								if($userscheck!=false) {

									if($_POST)
									{
										if(!empty($_POST['yorumtext']) && !empty($_POST['rating']) && ctype_digit($_POST['rating']))
										{
											$puan=$DB->filter($_POST['rating']);
											$yorum=$DB->filter($_POST['yorumtext']);

											$yorumekle=$DB->RunQuery("INSERT INTO ilanyorumlar","SET userID=?, ilanID=?, toID=?, puan=?, yorum=?, state=?, date=?",array($userscheck[0]["ID"],$value[0]["ID"],$yorumyapilanuye[0]["ID"],$puan,$yorum,2,date("Y-m-d")));
											$yorumyapma=true;
											?>

											<meta http-equiv="refresh" content="2;url=<?=SITE?>ilan-detay/<?=$value[0]["seflink"]?>">

											<?php
										}
									}

									if($yorumyapma!=false) {
										?>
										<div class="col-12 alert alert-success">Yorumunuz başarıyla iletildi. Yorumunuz için teşekkür ederiz.</div>
										<?php
									}
									else
									{



										?>

										<div class="col-lg-12 pl0 pl15-767">

											<div class="single_page_review_form p30-lg mb30-991">
												<form class="review_form" action="#" method="post">
													<div class="wrapper">
														<h4>Yorum yap ve Puan ver</h4>
														<div class="custom_reivews row mt40 mb30">
															<div class="col-lg-2 pr0">
																<div class="title">Puan ver</div>
															</div>
															<div class="col-lg-4">
																<div class="review_star text-right">
																	<fieldset class="rating">
																		<input type="radio" id="star5" name="rating" value="5" />
																		<label for="star5">5</label>
																		<input type="radio" id="star4" name="rating" value="4" />
																		<label for="star4">4</label>
																		<input type="radio" id="star3" name="rating" value="3" />
																		<label for="star3">3</label>
																		<input type="radio" id="star2" name="rating" value="2" />
																		<label for="star2">2</label>
																		<input type="radio" id="star1" name="rating" value="1" />
																		<label for="star1">1</label>
																	</fieldset>
																</div>
															</div>

														</div>

														<style>
															.rating {
																float:left;
																border:none;
															}
															.rating:not(:checked) > input {
																position:absolute;
																clip:rect(0, 0, 0, 0);
															}
															.rating:not(:checked) > label {
																float:right;
																width:1em;
																padding:0 .1em;
																overflow:hidden;
																white-space:nowrap;
																cursor:pointer;
																font-size:200%;
																line-height:1.2;
																color:#ddd;
															}
															.rating:not(:checked) > label:before {
																content:'★ ';
															}
															.rating > input:checked ~ label {
																color: #f70;
															}
															.rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
																color: gold;
															}
															.rating > input:checked + label:hover, .rating > input:checked + label:hover ~ label, .rating > input:checked ~ label:hover, .rating > input:checked ~ label:hover ~ label, .rating > label:hover ~ input:checked ~ label {
																color: gold;
															}
															.rating > label:active {
																position:relative;
															}
														</style>





														<div class="form-group">
															<textarea class="form-control" rows="7" placeholder="Yorumunuzu yazarak ilan hakkında düşüncelerinizi belirtebilirsiniz." name="yorumtext"></textarea>
														</div>
														<input type="submit" class="btn btn-thm" name="yorumyap" value="Yorum Yap">
													</form>



												</div>
											</div>
										</div>

										<?php 
									}
								}
							}
							else
							{
								?>
								<div class="col-lg-12 pl0 pl15-767">
									<h3 class="alert alert-primary">Yorum Yapabilmeniz için üye olunuz veya giriş yapınız.</h3>
								</div>
								<?php
							}
							?>


							<div class="col-lg-12 pl0 pl15-767" style="margin-top: 25px;">
								<div class="listing_single_reviews">
									<div class="product_single_content mb30">

										<?php 
										$yorumlar=$DB->CallData("ilanyorumlar","WHERE state=? AND ilanID=?",array(1,$value[0]["ID"]),"ORDER BY ID DESC");
										if($yorumlar!=false)
										{
											for ($i=0; $i <count($yorumlar); $i++) 
											{ 
												$yorumyapanuye=$DB->CallData("kullanicilar","WHERE ID=?",array($yorumlar[$i]["userID"]),"ORDER BY ID ASC",1);
												if($yorumyapanuye!=false){
													$isimsoyisim=$yorumyapanuye[0]["isimsoyisim"];
													if(!empty($yorumyapanuye[0]["image"])) {$imageyorum=$yorumyapanuye[0]["image"];} else {$imageyorum='varsayilanprofil.png';} 
												}
												?>

												<div class="mbp_first media" style="margin-top: 20px;">
													<img src="<?=SITE?>images/users/<?=$imageyorum?>" style="height: 70px; width: 70px;" class="mr-3" alt="reviewer2.png">
													<div class="media-body">
														<h4 class="sub_title mt-0"><?=$isimsoyisim?></h4>
														<div class="sspd_postdate fz14 mb20"><?=date("d.m.Y",strtotime($yorumlar[$i]["date"]))?>
															<div class="sspd_review pull-right">
																<ul class="mb0 pl15">

																	<?php 

																	if($yorumlar[$i]["puan"]==1) {
																		$yorumy1="orange";
																		$yorumy2="gray";
																		$yorumy3="gray";
																		$yorumy4="gray";
																		$yorumy5="gray";
																	}
																	if($yorumlar[$i]["puan"]==2) { 
																		$yorumy2="orange";
																		$yorumy1="orange";
																		$yorumy3="gray";
																		$yorumy4="gray";
																		$yorumy5="gray";
																	}
																	if($yorumlar[$i]["puan"]==3) {
																		$yorumy3="orange";
																		$yorumy2="orange";
																		$yorumy1="orange";
																		$yorumy4="gray";
																		$yorumy5="gray";
																	}
																	if($yorumlar[$i]["puan"]==4) {
																		$yorumy4="orange";
																		$yorumy3="orange";
																		$yorumy2="orange";
																		$yorumy1="orange";
																		$yorumy5="gray";
																	}
																	if($yorumlar[$i]["puan"]==5) {
																		$yorumy5="orange";
																		$yorumy4="orange";
																		$yorumy3="orange";
																		$yorumy2="orange";
																		$yorumy1="orange";
																	}
																	else if($yorumlar[$i]["puan"]==0){
																		$yorumy5="gray";
																		$yorumy4="gray";
																		$yorumy3="gray";
																		$yorumy2="gray";
																		$yorumy1="gray";
																	}
																	?>

																	<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorumy1?>;"></i></a></li>
																	<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorumy2?>;"></i></a></li>
																	<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorumy3?>;"></i></a></li>
																	<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorumy4?>;"></i></a></li>
																	<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorumy5?>;"></i></a></li>
																	<li class="list-inline-item">(<?=$yorumlar[$i]["puan"]?>/5)</li>
																</ul>
															</div>
														</div>
														<p class="fz14 mt10"><?=$yorumlar[$i]["yorum"]?></p>
													</div>
												</div>



												<?php
												
											}
										}
										else
										{
											?>

											<div class="col-12 alert alert-info">Bu ilana daha önce hiç yorum yapılmamış. İlk yorum yapan sen ol.</div>

											<?php
										}

										?>


										





									</div>
								</div>
							</div>






						</div>
					</div>
					<div class="col-lg-4 col-xl-4">
						<div class="listing_single_sidebar">
							<div class="lss_contact_location ">
								<h4 class="mb25">İletişim Bilgileri</h4>
								
								<ul class="contact_list list-unstyled mb15">
									<li class="df"><span class="flaticon-pin mr15"></span><a href="#"><?=$profil[0]["adress"]?> <br> <span class="tdu text-thm">Konuma Git</span></a></li>
									<li><span class="flaticon-phone mr15"></span><a href="tel:<?=$profil[0]["telefon"]?>"><?=$profil[0]["telefon"]?></a></li>


									<?php 
									if($profil[0]["showemail"]!=NULL){
									 ?>
									<li><span class="flaticon-email mr15"></span><?=$profil[0]["showemail"]?></li>
									 <?php 
									 }
									  ?>


									<?php 
									if($profil[0]["website"]!=NULL){
									 ?>
									 <li><span class="flaticon-link mr15"></span><a target="_blank" href="<?=$profil[0]["website"]?>"><?=$profil[0]["website"]?></a></li>
									 <?php 
									 }
									  ?>
									
									
								</ul>
								<ul class="sidebar_social_icon mb0">
									<?php 
									if($username[0]["facebook"]!=NULL){
									 ?>
									<li class="list-inline-item"><a href="<?=$username[0]["facebook"]?>" target="_blank"><i class="fab fa-facebook fa-2x" style="color: #3B5998;"></i></a></li>
									<?php 
									 }
									  ?>

									 <?php 
									if($username[0]["twitter"]!=NULL){
									 ?>
									<li class="list-inline-item"><a href="<?=$username[0]["twitter"]?>" target="_blank"><i class="fab fa-twitter fa-2x" style="color: #1DA1F2;"></i></a></li>
									<?php 
									 }
									  ?>

									<?php 
									if($username[0]["instagram"]!=NULL){
									 ?>
									<li class="list-inline-item"><a href="<?=$username[0]["instagram"]?>" target="_blank"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a></li>
									<?php 
									 }
									  ?>

									
								</ul>
							</div>
							<?php 
							if($value[0]["openedtime"]!=NULL && $value[0]["openeddays"]!=NULL) 
							{
								?>
								<div class="sidebar_opening_hour_widget pb20">
								<h4 class="title mb15">Çalışma Saatleri </h4>
								<ul class="list_details mb0">
									<?php 
									if($value[0]["openeddays"]== "Hafta içi ve Hafta Sonu Her gün")
									{
										?>
										<li>Pazartesi <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Salı <span class="float-right"><?=$value[0]["openedtime"]?></span></a></li>
										<li>Çarşamba <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Perşembe <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Cuma <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Cumartesi <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Pazar <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<?php
									}
									if($value[0]["openeddays"]== "Hafta içi ve Cumartesi günü")
									{
										?>
										<li>Pazartesi <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Salı <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Çarşamba <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Perşembe <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Cuma <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Cumartesi <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										
										<?php

									}
									if($value[0]["openeddays"]== "Hafta içi")
									{
										?>
										<li>Pazartesi <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Salı <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Çarşamba <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Perşembe <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										<li>Cuma <span class="float-right"><?=$value[0]["openedtime"]?></span></li>
										
										<?php

									}

									 ?>
									
								</ul>
							</div>
								<?php

							}

							 ?>
							<div class="sidebar_category_widget">
								<h4 class="title mb30">Kategoriler</h4>
								<ul class="mb0" style="display: block;">
									<?php 
									$kategoriseflinkler=$DB->CallData("rehber","WHERE title=?",array($value[0]["rank"]),"ORDER BY ID ASC",1);
									 ?>
									<li class="list-inline-item" style="border-radius: 50%; font-size: 12px; height: 35px; line-height: 35px; margin-right: 15px; text-align: center; width: 35px; background-color: #ecf0f1;"><a href="<?=SITE?>kategoriler/<?=$kategoriseflinkler[0]["seflink"]?>"><span style="color: #6CBF78; font-size: 20px; margin-top: 5px;" class="<?=$kategoriseflinkler[0]["phone"]?>"></span></a></li>
									<li class="list-inline-item" style="margin-left: -6px; font-size: 18px;"><a href="<?=SITE?>kategoriler/<?=$kategoriseflinkler[0]["seflink"]?>"><?=$kategoriseflinkler[0]["title"]?></a></li>
									
								</ul>
							</div>
							
							
							<div class="sidebar_author_widget">
								<h4 class="title mb25">İlan Sahibi</h4>
								<div class="media">
									<?php 
									$sahipimage=$profil[0]["image"];
									if(empty($sahipimage)) { $sahipimage="varsayilanprofil.png";} else {$sahipimage="$imageprofiles";}
									 ?>
									<img class="mr-3" src="<?=SITE?>images/users/<?=$sahipimage?>" alt="author.png">
									<div class="media-body">

										<h5 class="mt15 mb0"><?=$profil[0]["isimsoyisim"]?></h5>
										<p class="mb0"><?=$profil[0]["skills"]?></p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Feature Properties -->
		<section class="feature-property bgc-f4">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="main-title text-center">
							<h2>Son Eklenen İlanlar</h2>
							<p>E-Gaiantep'e yüklenen bütün ilanları inceleyebilir ve değerlendirebilirsiniz.</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="popular_listing_slider1">



								<?php  
								$pano=$DB->CallData("pano","WHERE state=?",array(1),"ORDER BY date ASC");
								if($pano!=false) {
									for($i=0;$i<count($pano);$i++) {
										
										$username=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND state=?",array($pano[$i]["name"],1),"ORDER BY ID ASC");
										if(!empty($pano[$i]["image"])) {$image=$pano[$i]["image"];} else {$image='varsayilan.jpg';} 
										if ($pano[$i]["onlinestate"]==1) {
											$panocolor="green";
											$panostatetitle="AÇIK";
										}
										else
										{
											$panocolor="darkred";
											$panostatetitle="KAPALI";
										}
										?>

										<div class="item">
											<div class="feat_property">
												<div class="thumb">
													<a href="<?=SITE?>ilan-detay/<?=$pano[$i]["seflink"]?>"><img class="img-whp" src="<?=SITE?>images/pano/<?=$image?>" alt="<?=$pano[$i]["title"]?>" style="width: 358px; height: 228px;"></a>
													<div class="thmb_cntnt">
														
														<ul class="tag2 mb0">

															
															<li class="list-inline-item"><a href="#" style="background-color: <?=$panocolor?>;"><?=$panostatetitle?></a></li>
														</ul>
														<ul class="listing_reviews">
															
															<?php 

															if($pano[$i]["yildiz"]==1) {
																$y1="orange";
																$y2="#fff";
																$y3="#fff";
																$y4="#fff";
																$y5="#fff";
															}
															if($pano[$i]["yildiz"]==2) { 
																$y2="orange";
																$y1="orange";
																$y3="#fff";
																$y4="#fff";
																$y5="#fff";
															}
															if($pano[$i]["yildiz"]==3) {
																$y3="orange";
																$y2="orange";
																$y1="orange";
																$y4="#fff";
																$y5="#fff";
															}
															if($pano[$i]["yildiz"]==4) {
																$y4="orange";
																$y3="orange";
																$y2="orange";
																$y1="orange";
																$y5="#fff";
															}
															if($pano[$i]["yildiz"]==5) {
																$y5="orange";
																$y4="orange";
																$y3="orange";
																$y2="orange";
																$y1="orange";
															}
															else if($pano[$i]["yildiz"]==0){
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
															 <li class="list-inline-item"><a href="#" class="text-white"><span class="fa fa-star" style="color: <?=$y5?>; font-size: 12px;"></span> (<?=$pano[$i]["yildiz"]?>)</a></li>
															

															
															
															
														</ul>
													</div>
												</div>
												<div class="details">
													<div class="tc_content">
														<div class="badge_icon"><a href="<?=SITE?>profil/<?=$username[0]["seflink"]?>"><img src="<?=SITE?>images/users/<?=$username[0]["image"]?>"></a></div>
														<a href="<?=SITE?>ilan-detay/<?=$pano[$i]["seflink"]?>"><h4><?=$pano[$i]["title"]?></h4></a>
														<p><?=mb_substr(strip_tags(stripslashes($pano[$i]["text"])), 0,33,"UTF-8")?>...</p>
														<ul class="prop_details mb0">
															<li class="list-inline-item btn-sm btn-warning"><a href="<?=SITE?>profil/<?=$username[0]["seflink"]?>" style="color: #010;"><span class="fas fa-user" style="color: black;"></span> <?=$username[0]["isimsoyisim"]?></a></li>
															<li class="list-inline-item btn-sm btn-info" style="margin-left: -2px; padding: 5px 15px; margin-top: 6px; margin-bottom: 4px;"><a href="tel:<?=$username[0]["telefon"]?>" style="color: #fff;"><span class="flaticon-phone pr5" style="color: #fff;"></span> <?=$username[0]["telefon"]?></a></li>
															<li class="list-inline-item btn-sm btn-info" style="margin-left: -2px; padding: 5px 15px; margin-top: 4px; margin-bottom: 4px;"><a href="#" style="color: #fff;"><span class="flaticon-pin pr5" style="color: #fff;"></span> <?=$username[0]["adress"]?></a></li>
														</ul>
													</div>
													<div class="fp_footer">
														<ul class="fp_meta float-left mb0">
															<li class="list-inline-item"><a href="#"><img src="<?=SITE?>images/icons/icon3.svg" alt="icon3.svg"></a></li>
															<li class="list-inline-item"><a href="#"><?=$pano[$i]["rank"]?></a></li>
														</ul>
														<ul class="fp_meta float-right mb0">
															
															
															<li class="list-inline-item"><a class="icon" onclick="ilanFavoriEkle('<?=SITE?>','<?=$pano[$i]["ID"]?>','<?=md5(sha1($pano[$i]["ID"]))?>');"><span class="fas fa-heart" id="favilav"></span></a></li>
															

															
														</ul>
													</div>
												</div>
											</div>
										</div>


										<?php
									}
								}


								?>

							</div>
					</div>
				</div>
			</div>
		</section>


		<?php 

	}
	else
	{
		?>
		<div class="alert alert-danger text-center"><i class="fas fa-times-circle"></i> Bu İlan Yayından Kaldırılmış veya Devre Dışı Bırakılmıştır.</div>
		<?php
	}
}
?>