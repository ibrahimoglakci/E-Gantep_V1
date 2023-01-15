
<head>
	<title>Gaziantep İlanları | Gaziantep Rehberi</title>
</head>

<section class="bgc-f4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="main-title text-center mb20">
					<h2>E-Gaziantep Panosu</h2>
					<p>Güncel ilanların bulunduğu panoda beğendiğin mekanı seç veya ara.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="popular_listing_sliders row">
					<!-- Nav tabs -->


					<!-- Tab panes -->
					<div class="tab-content col-lg-12" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<div class="popular_listing_slider1">



								<?php  
								$pano=$DB->CallData("pano","WHERE state=?",array(1),"ORDER BY date ASC");
								if($pano!=false) {
									for($i=0;$i<count($pano);$i++) {
										
										$username=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND state=?",array($pano[$i]["name"],1),"ORDER BY ID ASC");
										if(!empty($_SESSION['email'])) {
											$prof=$DB->CallData("kullanicilar","WHERE email=? AND state=?",array($_SESSION["email"],1),"ORDER BY ID ASC",1);
										}
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
														<?php 
														$imageprofile=$username[0]["image"];
														if(empty($imageprofile)) { $imagepro="varsayilanprofil.png";} else {$imagepro="$imageprofile";}
														?>
														<div class="badge_icon"><a href="<?=SITE?>profil/<?=$username[0]["seflink"]?>"><img src="<?=SITE?>images/users/<?=$imagepro?>"></a></div>
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
														<?php 
														if(!empty($_SESSION["email"])) {
															$favoriilanlar=$DB->CallData("favoriilanlar","WHERE userID=? AND ilanID=?",array($prof[0]["ID"],$pano[$i]["ID"]),"ORDER BY ID DESC");
															if($favoriilanlar!=false) {
																?>

																<ul class="fp_meta float-right mb0">


																	<li class="list-inline-item"><a class="icon" onclick="ilanFavoriEkle('<?=SITE?>','<?=$pano[$i]["ID"]?>','<?=md5(sha1($pano[$i]["ID"]))?>');"><span class="fas fa-heart" id="favilanhome<?=$pano[$i]["ID"]?>" style="margin-top: 8px; font-size: 17px; color: red;"></span></a></li>



																</ul>
																<?php 
															}
															else
															{
																?>

																<ul class="fp_meta float-right mb0">


																	<li class="list-inline-item"><a class="icon" onclick="ilanFavoriEkle('<?=SITE?>','<?=$pano[$i]["ID"]?>','<?=md5(sha1($pano[$i]["ID"]))?>');"><span class="far fa-heart" id="favilanhome<?=$pano[$i]["ID"]?>" style="margin-top: 8px; font-size: 17px; color: #111;"></span></a></li>



																</ul>
																<?php

															}

														}



														?>
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
			</div>
		</div>
	</div>
</section>



