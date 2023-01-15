<?php 

@session_start();
@ob_start();


date_default_timezone_set('Europe/Istanbul');

if(!empty($_SESSION['email']) && !empty($_SESSION['isimsoyisim'])) {
	$email=$DB->filter($_SESSION['email']);
	$isimsoyisim=$DB->filter($_SESSION['isimsoyisim']);
	$profil=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND email=? AND state=?",array($isimsoyisim,$email,1),"ORDER BY ID ASC",1);

	if($profil!=false) {
		



		?>

		<head>
			<title>Yorumlar | Gaziantep Rehberi</title>
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
								
								<li><a href="<?=SITE?>profilim/kaydedilenler"><span class="flaticon-love"></span> Kaydedilenler</a></li>
								<span class="contact-status away"></span>
								<li><a href="<?=SITE?>profilim/mesajlarim"><span class="flaticon-chat"></span> Mesajlarım</a></li>
								<li><a class="active"><span class="flaticon-note"></span> Yorumlar</a></li>
								<li><a href="<?=SITE?>cikis-yap"><span class="flaticon-logout"></span> Çıkış Yap</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Our Dashbord -->
		<section class="our-dashbord dashbord bgc-f4">
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
									<li><a href="<?=SITE?>profilim/kaydedilenler"><span class="flaticon-love"></span> Kaydedilenler</a></li>
									<li><a href="<?=SITE?>profilim/mesajlarim"><span class="flaticon-chat"></span> Mesajlar</a></li>
									<li class="active"><a><span class="flaticon-note"></span> Yorumlar</a></li>
									<li><a href="<?=SITE?>cikis-yap"><span class="flaticon-logout"></span> Çıkış Yap</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-12 mb15">
						<div class="breadcrumb_content style2">
							<h2 class="breadcrumb_title float-left">Yorumlar</h2>
						</div>
					</div>
				</div>
				<div class="row">

					<?php 
					if($profil[0]["status"]!="KULLANICI")
					{

						$yorumcol="6";


						?>

						<div class="col-lg-<?=$yorumcol?>">
							<div id="myreview" class="my_dashboard_review mb30-smd">
								<div class="mbp_pagination_comments">
									<div class="total_review pt0 float-left fn-smd">
										<h4>Sana Gelen Yorumlar</h4>
									</div>
									<div class="candidate_revew_select style2 review_page text-right mb30-991 tal-smd tac-xsd">
										<ul class="mb0 mt10">
											<li class="list-inline-item mb30-767">
												.
											</li>
										</ul>
									</div>

									<?php 
									$ilanyorumlar=$DB->CallData("ilanyorumlar","WHERE toID=? AND state=?",array($profil[0]["ID"],1),"ORDER BY ID DESC");
									for ($i=0; $i <count($ilanyorumlar) ; $i++) { 
										$ilan=$DB->CallData("pano","WHERE ID=? AND state=?",array($ilanyorumlar[$i]["ilanID"],1),"ORDER BY ID DESC",1);

										$yorumyapanuye=$DB->CallData("kullanicilar","WHERE ID=?",array($ilanyorumlar[$i]["userID"]),"ORDER BY ID ASC");
										if(!empty($yorumyapanuye[0]["image"])) {$imageyorum=$yorumyapanuye[0]["image"];} else {$imageyorum='varsayilanprofil.png';} 
										?>

										<div class="mbp_first media">
											<img src="<?=SITE?>images/users/<?=$imageyorum?>" class="mr-3">
											<div class="media-body">
												<h4 class="sub_title mt-0"><?=$yorumyapanuye[0]["isimsoyisim"]?></h4>
												<div class="sspd_postdate fz14 mb20"><?=$datet=$DB->convertMonthToTurkishCharacter(date("d F Y",strtotime($ilanyorumlar[$i]["date"])))?>
												<div class="sspd_review pull-right">
													<ul class="mb0 pl15">
														<?php 

														if($ilanyorumlar[$i]["puan"]==1) {
															$yorumy1="orange";
															$yorumy2="gray";
															$yorumy3="gray";
															$yorumy4="gray";
															$yorumy5="gray";
														}
														if($ilanyorumlar[$i]["puan"]==2) { 
															$yorumy2="orange";
															$yorumy1="orange";
															$yorumy3="gray";
															$yorumy4="gray";
															$yorumy5="gray";
														}
														if($ilanyorumlar[$i]["puan"]==3) {
															$yorumy3="orange";
															$yorumy2="orange";
															$yorumy1="orange";
															$yorumy4="gray";
															$yorumy5="gray";
														}
														if($ilanyorumlar[$i]["puan"]==4) {
															$yorumy4="orange";
															$yorumy3="orange";
															$yorumy2="orange";
															$yorumy1="orange";
															$yorumy5="gray";
														}
														if($ilanyorumlar[$i]["puan"]==5) {
															$yorumy5="orange";
															$yorumy4="orange";
															$yorumy3="orange";
															$yorumy2="orange";
															$yorumy1="orange";
														}
														else if($ilanyorumlar[$i]["puan"]==0){
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
														<li class="list-inline-item">(<?=$ilanyorumlar[$i]["puan"]?>/5)</li>
													</ul>
												</div>
											</div>
											<p class="fz14 mt10"><?=$ilanyorumlar[$i]["yorum"]?></p>
											<a class="btn btn-primary" href="<?=SITE?>ilan-detay/<?=$ilan[0]["seflink"]?>">Yoruma cevap ver</a>
										</div>
									</div>


									<?php





								}

								?>






							</div>
						</div>
					</div>

					<?php 
				}
				else{
					$yorumcol="12";
				}

				?>

				<div class="col-lg-<?=$yorumcol?>">
					<div class="my_dashboard_review">
						<div class="mbp_pagination_comments">
							<div class="total_review pt0">
								<h4>Senin Yorumların</h4>
							</div>

							<?php 
							$seflyorumlar=$DB->CallData("ilanyorumlar","WHERE userID=? AND state=?",array($profil[0]["ID"],1),"ORDER BY ID DESC");
							for ($i=0; $i <count($seflyorumlar) ; $i++) { 
								$ilan=$DB->CallData("pano","WHERE ID=? AND state=?",array($seflyorumlar[$i]["ilanID"],1),"ORDER BY ID DESC",1);

								$yorumyapanuye=$DB->CallData("kullanicilar","WHERE ID=?",array($seflyorumlar[$i]["userID"]),"ORDER BY ID ASC");
								if(!empty($yorumyapanuye[0]["image"])) {$imageprof=$yorumyapanuye[0]["image"];} else {$imageprof='varsayilanprofil.png';} 
								?>


								<div class="mbp_first media">
									<img src="<?=SITE?>images/users/<?=$imageprof?>" class="mr-3" style="width: 70px; height: 70px;">
									<div class="media-body">
										<h4 class="sub_title mt-0"><?=$yorumyapanuye[0]["isimsoyisim"]?></h4>
										<div class="sspd_postdate fz14 mb20"><?=$datet=$DB->convertMonthToTurkishCharacter(date("d F Y",strtotime($seflyorumlar[$i]["date"])))?>
										<div class="sspd_review pull-right">
											<ul class="mb0 pl15">
												<?php 

												if($seflyorumlar[$i]["puan"]==1) {
													$yorum1="orange";
													$yorum2="gray";
													$yorum3="gray";
													$yorum4="gray";
													$yorum5="gray";
												}
												if($seflyorumlar[$i]["puan"]==2) { 
													$yorum2="orange";
													$yorum1="orange";
													$yorum3="gray";
													$yorum4="gray";
													$yorum5="gray";
												}
												if($seflyorumlar[$i]["puan"]==3) {
													$yorum3="orange";
													$yorum2="orange";
													$yorum1="orange";
													$yorum4="gray";
													$yorum5="gray";
												}
												if($seflyorumlar[$i]["puan"]==4) {
													$yorum4="orange";
													$yorum3="orange";
													$yorum2="orange";
													$yorum1="orange";
													$yorum5="gray";
												}
												if($seflyorumlar[$i]["puan"]==5) {
													$yorum5="orange";
													$yorum4="orange";
													$yorum3="orange";
													$yorum2="orange";
													$yorum1="orange";
												}
												else if($seflyorumlar[$i]["puan"]==0){
													$yorum5="gray";
													$yorum4="gray";
													$yorum3="gray";
													$yorum2="gray";
													$yorum1="gray";
												}
												?>


												<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorum1?>;"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorum2?>;"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorum3?>;"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorum4?>;"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star" style="color: <?=$yorum5?>;"></i></a></li>
												<li class="list-inline-item">(<?=$seflyorumlar[$i]["puan"]?>/5)</li>
											</ul>
										</div>
									</div>
									<p class="fz14 mt10"><?=$seflyorumlar[$i]["yorum"]?></p>
									<a class="btn btn-primary" href="<?=SITE?>ilan-detay/<?=$ilan[0]["seflink"]?>">Yorumu Gör</a>
								</div>
							</div>

							<?php 
						}
						?>



					</div>
				</div>
			</div>
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

