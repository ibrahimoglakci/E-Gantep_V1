<?php 

@session_start();
@ob_start();

if(!empty($_SESSION['email']) && !empty($_SESSION['isimsoyisim'])) {
	$email=$DB->filter($_SESSION['email']);
	$isimsoyisim=$DB->filter($_SESSION['isimsoyisim']);
	$profil=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND email=? AND state=?",array($isimsoyisim,$email,1),"ORDER BY ID ASC",1);

	if($profil!=false) {

		?>

		<head>
			<title>Favorilerim | Gaziantep Rehberi</title>
		</head>

		<!-- Our Dashbord -->
		<section class="extra-dashboard-menu dn-992">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="ed_menu_list mt5">
							<ul>
								<li><a href="<?=SITE?>profilim"><span class="flaticon-avatar"></span> Profilim</a></li>
								<?php 
								if($profil[0]["status"]!="KULLANICI")
								{
									?>
									<li><a href="<?=SITE?>profilim/ilanlarim"><span class="flaticon-list"></span> İlanlarım</a></li>
									<?php
								}	

								?>
								
								<li><a class="active"><span class="flaticon-love"></span> Kaydedilenler</a></li>
								<li><a href="<?=SITE?>profilim/mesajlarim"><span class="flaticon-chat"></span> Mesajlarım</a></li>
								<li><a href="<?=SITE?>profilim/yorumlar"><span class="flaticon-note"></span> Yorumlar</a></li>
								<li><a href="<?=SITE?>cikis-yap"><span class="flaticon-logout"></span> Çıkış Yap</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Our Dashbord -->
		<section class="our-dashbord dashbord bgc-f4 pb70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="dashboard_navigationbar dn db-992">
							<div class="dropdown">
								<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Profil Detayları</button>
								<ul id="myDropdown" class="dropdown-content">
									<li><a href="<?=SITE?>profilim"><span class="flaticon-avatar"></span> Profilim</a></li>
									<?php 
									if($profil[0]["status"]!="KULLANICI")
									{
										?>
										<li><a href="<?=SITE?>profilim/ilanlarim"><span class="flaticon-list"></span> İlanlarım</a></li>
										<?php
									}	

									?>
									<li class="active"><a><span class="flaticon-love"></span> Kaydedilenler</a></li>
									<li><a href="<?=SITE?>profilim/mesajlarim"><span class="flaticon-chat"></span> Mesajlarım</a></li>
									<li><a href="<?=SITE?>profilim/yorumlar"><span class="flaticon-note"></span> Yorumlar</a></li>
									<li><a href="<?=SITE?>cikis-yap"><span class="flaticon-logout"></span> Çıkış Yap</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row">

						<?php 
						$favoriilanlar=$DB->CallData("favoriilanlar","WHERE userID=?",array($profil[0]["ID"]),"ORDER BY ID DESC");
						if($favoriilanlar!=false)
						{
							for ($favilan=0; $favilan <count($favoriilanlar); $favilan++) {

								$pano=$DB->CallData("pano","WHERE ID=? AND state=?",array($favoriilanlar[$favilan]["ilanID"], 1),"ORDER BY ID DESC");
								$username=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND state=?",array($pano[0]["name"],1),"ORDER BY ID ASC");
								if ($pano[0]["onlinestate"]==1) {
									$panocolor="green";
									$panostatetitle="AÇIK";
								}
								else
								{
									$panocolor="darkred";
									$panostatetitle="KAPALI";
								}
								if(!empty($pano[0]["image"])) {$image=$pano[0]["image"];} else {$image='varsayilan.jpg';} 

								if(count($favoriilanlar)==1)
								{
									$colilan="12";
									$ilanheight="430px";
								}
								else if(count($favoriilanlar)==2)
								{
									$colilan="6";
									$ilanheight="366px";
								}  
								else if(count($favoriilanlar)>2)
								{
									$colilan="4";
									$ilanheight="232px";
								} 

								?>
								<div class="col-md-6 col-lg-<?=$colilan?>">
									<div class="feat_property">
										<div class="thumb">
											<a href="<?=SITE?>ilan-detay/<?=$pano[0]["seflink"]?>"><img class="img-whp" src="<?=SITE?>images/pano/<?=$image?>" alt="<?=$pano[0]["title"]?>" style="width: 100%; height: <?=$ilanheight?>;"></a>
											<div class="thmb_cntnt">

												<ul class="tag2 mb0">


													<li class="list-inline-item"><a href="#" style="background-color: <?=$panocolor?>;"><?=$panostatetitle?></a></li>
												</ul>
												<ul class="listing_reviews">

													<?php 

													if($pano[0]["yildiz"]==1) {
														$y1="orange";
														$y2="#fff";
														$y3="#fff";
														$y4="#fff";
														$y5="#fff";
													}
													if($pano[0]["yildiz"]==2) { 
														$y2="orange";
														$y1="orange";
														$y3="#fff";
														$y4="#fff";
														$y5="#fff";
													}
													if($pano[0]["yildiz"]==3) {
														$y3="orange";
														$y2="orange";
														$y1="orange";
														$y4="#fff";
														$y5="#fff";
													}
													if($pano[0]["yildiz"]==4) {
														$y4="orange";
														$y3="orange";
														$y2="orange";
														$y1="orange";
														$y5="#fff";
													}
													if($pano[0]["yildiz"]==5) {
														$y5="orange";
														$y4="orange";
														$y3="orange";
														$y2="orange";
														$y1="orange";
													}
													else if($pano[0]["yildiz"]==0){
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
													<li class="list-inline-item"><a href="#" class="text-white"><span class="fa fa-star" style="color: <?=$y5?>; font-size: 12px;"></span> (<?=$pano[0]["yildiz"]?>)</a></li>





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
												<a href="<?=SITE?>ilan-detay/<?=$pano[0]["seflink"]?>"><h4><?=$pano[0]["title"]?></h4></a>
												<p><?=mb_substr(strip_tags(stripslashes($pano[0]["text"])), 0,33,"UTF-8")?>...</p>
												<ul class="prop_details mb0">
													<li class="list-inline-item btn-sm btn-warning"><a href="<?=SITE?>profil/<?=$username[0]["seflink"]?>" style="color: #010;"><span class="fas fa-user" style="color: black;"></span> <?=$username[0]["isimsoyisim"]?></a></li>
													<li class="list-inline-item btn-sm btn-info" style="margin-left: -2px; padding: 5px 15px; margin-top: 6px; margin-bottom: 4px;"><a href="tel:<?=$username[0]["telefon"]?>" style="color: #fff;"><span class="flaticon-phone pr5" style="color: #fff;"></span> <?=$username[0]["telefon"]?></a></li>
													<li class="list-inline-item btn-sm btn-info" style="margin-left: -2px; padding: 5px 15px; margin-top: 4px; margin-bottom: 4px;"><a href="#" style="color: #fff;"><span class="flaticon-pin pr5" style="color: #fff;"></span> <?=$username[0]["adress"]?></a></li>
												</ul>
											</div>
											<div class="fp_footer">
												<ul class="fp_meta float-left mb0">
													<li class="list-inline-item"><a href="#"><img src="<?=SITE?>images/icons/icon3.svg" alt="icon3.svg"></a></li>
													<li class="list-inline-item"><a href="#"><?=$pano[0]["rank"]?></a></li>
												</ul>
												<?php 
												if(!empty($_SESSION["email"])) {

													?>

													<ul class="fp_meta float-right mb0">


														<li class="list-inline-item"><a class="icon" onclick="ilanFavoriEkle('<?=SITE?>','<?=$pano[0]["ID"]?>','<?=md5(sha1($pano[0]["ID"]))?>');"><span class="fas fa-heart" id="favilan<?=$pano[0]["ID"]?>" style="margin-top: 8px; font-size: 17px; color: red;"></span></a></li>



													</ul>
													<?php 
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
			</section>






			<?php 
		}
	}
	else {
		?>
		<meta http-equiv="refresh" content="0;url=<?=SITE?>">
		<?php
	}

	?>
