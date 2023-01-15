<?php 


if(!empty($_GET['page']) && !empty($_GET['seflink'])) {
	$seflink=$DB->filter($_GET['seflink']);
	$profil=$DB->filter($_GET['page']);
	$value=$DB->CallData("kullanicilar","WHERE seflink=? AND state=?",array($seflink,1),"ORDER BY ID ASC",1);

	if(!empty($_SESSION["email"])){
		$sessionusername=$DB->CallData("kullanicilar","WHERE email=? AND state=?",array($_SESSION['email'],1),"ORDER BY ID ASC",1);
	}

	if($value!=false) {
		if($value[0]["status"]!="KULLANICI") 
		{



		?>

		<head>
			<title><?=$value[0]["isimsoyisim"]?> | Gaziantep Rehberi</title>
		</head>



		<!-- Listing Search Option -->
		<section class="bgc-f4">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="author_content">
							<div class="author_thumb float-left fn-xsd mr20">
								<?php 

								$imageprofiles=$value[0]["image"];
								if(empty($imageprofiles)) { $imagespro="varsayilanprofil.png";} else {$imagespro="$imageprofiles";}
								if($value[0]["status"]=="ALTIN") {
									$colors="warning";
								}
								else if($value[0]["status"]=="ZÜMRÜT") {
									$colors="success";
								}
								else if($value[0]["status"]=="ELMAS") {
									$colors="info";
								}

								?>
								<img src="<?=SITE?>images/users/<?=$imagespro?>" alt="">
							</div>
							<div class="author_details">
								<h2 class="author_title"><?=$value[0]["isimsoyisim"]?> <span class="badge badge-<?=$colors?>"><?=$value[0]["status"]?></span></h2>
								<div class="author_review">
									<?php 

									if($value[0]["yildiz"]==1) {
										$y1="orange";
										$y2="#111";
										$y3="#111";
										$y4="#111";
										$y5="#111";
									}
									if($value[0]["yildiz"]==2) { 
										$y2="orange";
										$y1="orange";
										$y3="#111";
										$y4="#111";
										$y5="#111";
									}
									if($value[0]["yildiz"]==3) {
										$y3="orange";
										$y2="orange";
										$y1="orange";
										$y4="#111";
										$y5="#111";
									}
									if($value[0]["yildiz"]==4) {
										$y4="orange";
										$y3="orange";
										$y2="orange";
										$y1="orange";
										$y5="#111";
									}
									if($value[0]["yildiz"]==5) {
										$y5="orange";
										$y4="orange";
										$y3="orange";
										$y2="orange";
										$y1="orange";
									}
									if($value[0]["yildiz"]==0){
										$y5="#111";
										$y4="#111";
										$y3="#111";
										$y2="#111";
										$y1="#111";
									}
									if($value[0]["yildiz"]==NULL){
										$y5="#111";
										$y4="#111";
										$y3="#111";
										$y2="#111";
										$y1="#111";
									}
									?>
									<ul style="margin-top: 13px;">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y1?>; font-size: 12px;"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y2?>; font-size: 12px;"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y3?>; font-size: 12px;"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y4?>; font-size: 12px;"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$y5?>; font-size: 12px;"></span></a></li>

									</ul>
								</div>
								<div class="description">
									<p><?=$value[0]["skills"]?></p>
									<p><?=$value[0]["notes"]?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="author_content text-center tal-smd">
							<a href="#" class="btn btn-lg btn-thm send_btn mt20">Takip Et</a>
							<a href="#" class="btn btn-lg btn-thm send_btn mt20">Mesaj Gönder</a>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- Listing Grid View -->
		<section class="our-listing pb30-991">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-12">
								<h4 class="mb15"><?=$value[0]["isimsoyisim"]?> adlı kullanıcının İlanları</h4>
							</div>

							<?php  
							$pano=$DB->CallData("pano","WHERE name=? AND state=?",array($value[0]["isimsoyisim"],1),"ORDER BY date ASC");
							if($pano!=false) {
								for($i=0;$i<count($pano);$i++) {

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

									<div class="col-lg-12">
										<div class="feat_property list">
											<div class="thumb">
												<img class="img-whp" src="<?=SITE?>images/pano/<?=$image?>" alt="<?=$pano[$i]["title"]?>" style="width: 358px; height: 228px;">
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
													<h4><?=$pano[$i]["title"]?></h4>
													<p> <?=mb_substr(strip_tags(stripslashes($pano[$i]["text"])), 0,33,"UTF-8")?>...</p>
													<ul class="prop_details mb0 mt15">
														<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> <?=$value[0]["telefon"]?></a></li>
														<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> <?=$value[0]["adress"]?></a></li>
													</ul>
												</div>
												<div class="fp_footer">
													<ul class="fp_meta float-left mb0">
														<li class="list-inline-item"><a href="#"><img src="<?=SITE?>images/icons/icon3.svg" alt="icon3.svg"></a></li>
														<li class="list-inline-item"><a href="#"><?=$pano[$i]["rank"]?></a></li>
													</ul>
													<ul class="fp_meta float-right mb0">
														<?php 
														if(!empty($_SESSION["isimsoyisim"]) && !empty($_SESSION["email"])) {
															$savings=$sessionusername[0]["savingpano"];
															$searchsaving=$pano[$i]["ID"];
															if(preg_match("/{$searchsaving}/i", $savings)) {



																?>
																<li class="list-inline-item"><a class="icon" href="#"><span class="fas fa-heart" style="color: red; margin-top: 8px; font-size: 17px;"></span></a></li>
																<?php 
															}
															else
															{
																?>

																<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love" style="font-size: 17px;"></span></a></li>

																<?php

															}
														}
														else
														{

															?>
															<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love" style="font-size: 17px;"></span></a></li>

															<?php

														}

														?>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<?php
								}
							}
							else
							{

								?>
								<div class="col-lg-12">
									<div class="alert alert-info" role="alert">Bu Kullanıcının henüz ilanı yok.</div>
								</div>
								

								<?php

							}


							?>

							
						</div>
					</div>
					<div class="col-lg-4">
						<div class="sidebar">
							<div class="sidebar_contact_widget mb30">
								<h4 class="title mb15">İletişim Bilgileri</h4>
								<ul class="list-unstyled">
									<li class="df"><span class="flaticon-pin mr15"></span><a href="https://www.google.com/maps/place/<?=$value[0]["let"]?>,<?=$value[0]["lng"]?>" target="_blank"><?=$value[0]["adress"]?> <br> <span class="tdu text-thm">Konumu Gör</span></a></li>
									<li><span class="flaticon-phone mr15"></span><a href="tel:<?=$value[0]["telefon"]?>"><?=$value[0]["telefon"]?></a></li>
									<li><span class="flaticon-email mr15"></span><a href="#"><?=$value[0]["showemail"]?></a></li>
									<?php 
									if($value[0]["website"]!=NULL) {

									 ?>
									 <li><span class="flaticon-link mr15"></span><a href="#"><?=$value[0]["website"]?></a></li>
									 <?php 

									}
									  ?>


									
									
								</ul>
							</div>
							<div class="sidebar_about_widget">
								<h4 class="title mb15">Hakkında</h4>
								<p><?=$value[0]["notes"]?></p>
							</div>
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

		<div class="alert alert-danger text-center"><i class="fas fa-times-circle"></i> Bu Sayfa Yalnızca Firma Sahiplerinin Profillerini Gösterir.</div>

		<?php
		}

	}
}


?>