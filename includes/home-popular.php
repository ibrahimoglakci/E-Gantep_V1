<?php 
if(!empty($_SESSION["isimsoyisim"]) && !empty($_SESSION["email"])) {

	$username=$DB->CallData("kullanicilar","WHERE email=? AND state=?",array($_SESSION["email"],1),"ORDER BY ID ASC");
}
?>


<section class="bgc-f4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="main-title text-center mb20">
					<h2>Popüler Mekanlar</h2>
					<p>Gaziantep'teki popüler mekanları buradan inceleyip, bakabilirsin.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="popular_listing_sliders row">
					<!-- Nav tabs -->
					<div class="nav nav-tabs mb50 col-lg-12 justify-content-center" role="tablist">
						<a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-sahinbey" role="tab" aria-controls="nav-home" aria-selected="true">Şahinbey</a>
						<a class="nav-link" id="nav-shopping-tab" data-toggle="tab" href="#nav-sehitkamil" role="tab" aria-controls="nav-shopping" aria-selected="false">Şehitkamil</a>
						<a class="nav-link" id="nav-hotels-tab" data-toggle="tab" href="#nav-universiteler" role="tab" aria-controls="nav-hotels" aria-selected="false">Üniversiteler</a>
						<a class="nav-link" id="nav-destination-tab" data-toggle="tab" href="#nav-hastaneler" role="tab" aria-controls="nav-destination" aria-selected="false">Hastaneler</a>
					</div>

					<!-- Tab panes -->
					<div class="tab-content col-lg-12" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-sahinbey" role="tabpanel" aria-labelledby="nav-home-tab">
							<div class="popular_listing_slider1">

								<?php 
								$sahinbey=$DB->CallData("populermekanlar","WHERE description=? AND state=?",array("Şahinbey",1),"ORDER BY ID ASC");
								if($sahinbey!=false) {
									for($sa=0;$sa<count($sahinbey);$sa++) {
										if(!empty($sahinbey[$sa]["image"])) {$image=$sahinbey[$sa]["image"];} else {$image='varsayilan.jpg';} 
										?>

										<div class="item">
											<div class="feat_property">
												<div class="thumb">
													<img class="img-whp" src="<?=SITE?>images/mekanlar/<?=$image?>" alt="<?=$sahinbey[$sa]["title"]?>" style="width: 358px; height: 228px;">
													<div class="thmb_cntnt">

														<ul class="tag2 mb0">
															<?php 

															if ($sahinbey[$sa]["onlinestate"]==1) {
																$sahinbeyolor="green";
																$sahinbeystatetitle="AÇIK";
															}
															else
															{
																$sahinbeycolor="darkred";
																$sahinbeystatetitle="KAPALI";
															}
															?>

															<li class="list-inline-item"><a href="#" style="background-color: <?=$sahinbeyolor?>;"><?=$sahinbeystatetitle?></a></li>
														</ul>
														<ul class="listing_reviews">

															<?php 

															if($sahinbey[$sa]["yildiz"]==1) {
																$y1="orange";
																$y2="#fff";
																$y3="#fff";
																$y4="#fff";
																$y5="#fff";
															}
															if($sahinbey[$sa]["yildiz"]==2) { 
																$y2="orange";
																$y1="orange";
																$y3="#fff";
																$y4="#fff";
																$y5="#fff";
															}
															if($sahinbey[$sa]["yildiz"]==3) {
																$y3="orange";
																$y2="orange";
																$y1="orange";
																$y4="#fff";
																$y5="#fff";
															}
															if($sahinbey[$sa]["yildiz"]==4) {
																$y4="orange";
																$y3="orange";
																$y2="orange";
																$y1="orange";
																$y5="#fff";
															}
															if($sahinbey[$sa]["yildiz"]==5) {
																$y5="orange";
																$y4="orange";
																$y3="orange";
																$y2="orange";
																$y1="orange";
															}
															else if($sahinbey[$sa]["yildiz"]==0){
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
															<li class="list-inline-item"><a href="#" class="text-white"><span class="fa fa-star" style="color: <?=$y5?>; font-size: 12px;"></span> (<?=$sahinbey[$sa]["yildiz"]?>)</a></li>
														</ul>
													</div>
												</div>
												<div class="details">
													<div class="tc_content">
														<div class="badge_icon"><a href="#"><img src="<?=SITE?>images/icons/agent1.svg" alt="agent1.svg"></a></div>
														<h4> <?=$sahinbey[$sa]["title"]?></h4>
														<ul class="prop_details mb0">
															<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> <?=$sahinbey[$sa]["phone"]?></a></li>
															<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> <?=$sahinbey[$sa]["adress"]?></a></li>
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
					<div class="tab-pane fade" id="nav-sehitkamil" role="tabpanel" aria-labelledby="nav-shopping-tab">
						<div class="popular_listing_slider1">
							<?php 
							$sehitkamil=$DB->CallData("populermekanlar","WHERE description=? AND state=?",array("Şehitkamil",1),"ORDER BY ID ASC");
							if($sehitkamil!=false) {
								for($se=0;$se<count($sehitkamil);$se++) {
									if(!empty($sehitkamil[$se]["image"])) {$imagese=$sehitkamil[$se]["image"];} else {$imagese='varsayilan.jpg';} 
									?>

									<div class="item">
										<div class="feat_property">
											<div class="thumb">
												<img class="img-whp" src="<?=SITE?>images/mekanlar/<?=$imagese?>" alt="<?=$sehitkamil[$se]["title"]?>" style="width: 358px; height: 228px;">
												<div class="thmb_cntnt">

													<ul class="tag2 mb0">
														<?php 

														if ($sehitkamil[$se]["onlinestate"]==1) {
															$sehitkamilcolor="green";
															$sehitkamilstatetitle="AÇIK";
														}
														else
														{
															$sehitkamilcolor="darkred";
															$sehitkamilstatetitle="KAPALI";
														}
														?>

														<li class="list-inline-item"><a href="#" style="background-color: <?=$sehitkamilcolor?>;"><?=$sehitkamilstatetitle?></a></li>
													</ul>
													<ul class="listing_reviews">

														<?php 

														if($sehitkamil[$se]["yildiz"]==1) {
															$sey1="orange";
															$sey2="#fff";
															$sey3="#fff";
															$sey4="#fff";
															$sey5="#fff";
														}
														if($sehitkamil[$se]["yildiz"]==2) { 
															$sey2="orange";
															$sey1="orange";
															$sey3="#fff";
															$sey4="#fff";
															$sey5="#fff";
														}
														if($sehitkamil[$se]["yildiz"]==3) {
															$sey3="orange";
															$sey2="orange";
															$sey1="orange";
															$sey4="#fff";
															$sey5="#fff";
														}
														if($sehitkamil[$se]["yildiz"]==4) {
															$sey4="orange";
															$sey3="orange";
															$sey2="orange";
															$sey1="orange";
															$sey5="#fff";
														}
														if($sehitkamil[$se]["yildiz"]==5) {
															$sey5="orange";
															$sey4="orange";
															$sey3="orange";
															$sey2="orange";
															$sey1="orange";
														}
														else if($sehitkamil[$se]["yildiz"]==0){
															$sey5="#fff";
															$sey4="#fff";
															$sey3="#fff";
															$sey2="#fff";
															$sey1="#fff";
														}
														?>

														<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$sey1?>; font-size: 12px;"></span></a></li>
														<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$sey2?>; font-size: 12px;"></span></a></li>
														<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$sey3?>; font-size: 12px;"></span></a></li>
														<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$sey4?>; font-size: 12px;"></span></a></li>
														<li class="list-inline-item"><a href="#" class="text-white"><span class="fa fa-star" style="color: <?=$sey5?>; font-size: 12px;"></span> (<?=$sehitkamil[$se]["yildiz"]?>)</a></li>
													</ul>
												</div>
											</div>
											<div class="details">
												<div class="tc_content">
													<div class="badge_icon"><a href="#"><img src="<?=SITE?>images/icons/agent1.svg" alt="agent1.svg"></a></div>
													<h4> <?=$sehitkamil[$se]["title"]?></h4>
													<ul class="prop_details mb0">
														<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> <?=$sehitkamil[$se]["phone"]?></a></li>
														<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> <?=$sehitkamil[$se]["adress"]?></a></li>
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
						<div class="tab-pane fade" id="nav-universiteler" role="tabpanel" aria-labelledby="nav-hotels-tab">
							<div class="popular_listing_slider1">
								<?php 
								$universiteler=$DB->CallData("populermekanlar","WHERE description=? AND state=?",array("Üniversiteler",1),"ORDER BY ID ASC");
								if($universiteler!=false) {
									for($uni=0;$uni<count($universiteler);$uni++) {
										if(!empty($universiteler[$uni]["image"])) {$imageu=$universiteler[$uni]["image"];} else {$imageu='varsayilan.jpg';} 
										?>

										<div class="item">
											<div class="feat_property">
												<div class="thumb">
													<img class="img-whp" src="<?=SITE?>images/mekanlar/<?=$imageu?>" alt="<?=$universiteler[$uni]["title"]?>" style="width: 358px; height: 228px;">
													<div class="thmb_cntnt">

														<ul class="tag2 mb0">
															<?php 

															if ($universiteler[$uni]["onlinestate"]==1) {
																$unicolor="green";
																$unistatetitle="AÇIK";
															}
															else
															{
																$unicolor="darkred";
																$unistatetitle="KAPALI";
															}
															?>

															<li class="list-inline-item"><a href="#" style="background-color: <?=$unicolor?>;"><?=$unistatetitle?></a></li>
														</ul>
														<ul class="listing_reviews">

															<?php 

															if($universiteler[$uni]["yildiz"]==1) {
																$uniy1="orange";
																$uniy2="#fff";
																$uniy3="#fff";
																$uniy4="#fff";
																$uniy5="#fff";
															}
															if($universiteler[$uni]["yildiz"]==2) { 
																$uniy2="orange";
																$uniy1="orange";
																$uniy3="#fff";
																$uniy4="#fff";
																$uniy5="#fff";
															}
															if($universiteler[$uni]["yildiz"]==3) {
																$uniy3="orange";
																$uniy2="orange";
																$uniy1="orange";
																$uniy4="#fff";
																$uniy5="#fff";
															}
															if($universiteler[$uni]["yildiz"]==4) {
																$uniy4="orange";
																$uniy3="orange";
																$uniy2="orange";
																$uniy1="orange";
																$uniy5="#fff";
															}
															if($universiteler[$uni]["yildiz"]==5) {
																$uniy5="orange";
																$uniy4="orange";
																$uniy3="orange";
																$uniy2="orange";
																$uniy1="orange";
															}
															else if($universiteler[$uni]["yildiz"]==0){
																$uniy5="#fff";
																$uniy4="#fff";
																$uniy3="#fff";
																$uniy2="#fff";
																$uniy1="#fff";
															}
															?>

															<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$uniy1?>; font-size: 12px;"></span></a></li>
															<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$uniy2?>; font-size: 12px;"></span></a></li>
															<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$uniy3?>; font-size: 12px;"></span></a></li>
															<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$uniy4?>; font-size: 12px;"></span></a></li>
															<li class="list-inline-item"><a href="#" class="text-white"><span class="fa fa-star" style="color: <?=$uniy5?>; font-size: 12px;"></span> (<?=$universiteler[$uni]["yildiz"]?>)</a></li>
														</ul>
													</div>
												</div>
												<div class="details">
													<div class="tc_content">
														<div class="badge_icon"><a href="#"><img src="<?=SITE?>images/icons/agent1.svg" alt="agent1.svg"></a></div>
														<h4> <?=$universiteler[$uni]["title"]?></h4>
														<ul class="prop_details mb0">
															<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> <?=$universiteler[$uni]["phone"]?></a></li>
															<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> <?=$universiteler[$uni]["adress"]?></a></li>
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
						<div class="tab-pane fade" id="nav-hastaneler" role="tabpanel" aria-labelledby="nav-destination-tab">
							<div class="popular_listing_slider1">
								<?php 
								$hastaneler=$DB->CallData("populermekanlar","WHERE description=? AND state=?",array("Hastaneler",1),"ORDER BY ID ASC");
								if($hastaneler!=false) {
									for($ha=0;$ha<count($hastaneler);$ha++) {
										if(!empty($hastaneler[$ha]["image"])) {$imageh=$hastaneler[$ha]["image"];} else {$imageh='varsayilan.jpg';} 
										?>

										<div class="item">
											<div class="feat_property">
												<div class="thumb">
													<img class="img-whp" src="<?=SITE?>images/mekanlar/<?=$imageh?>" alt="<?=$hastaneler[$ha]["title"]?>" style="width: 358px; height: 228px;">
													<div class="thmb_cntnt">

														<ul class="tag2 mb0">
															<?php 

															if ($hastaneler[$ha]["onlinestate"]==1) {
																$hastanecolor="green";
																$hastanestatetitle="AÇIK";
															}
															else
															{
																$hastanecolor="darkred";
																$hastanestatetitle="KAPALI";
															}
															?>

															<li class="list-inline-item"><a href="#" style="background-color: <?=$hastanecolor?>;"><?=$hastanestatetitle?></a></li>
														</ul>
														<ul class="listing_reviews">

															<?php 

															if($hastaneler[$ha]["yildiz"]==1) {
																$hay1="orange";
																$hay2="#fff";
																$hay3="#fff";
																$hay4="#fff";
																$hay5="#fff";
															}
															if($hastaneler[$ha]["yildiz"]==2) { 
																$hay2="orange";
																$hay1="orange";
																$hay3="#fff";
																$hay4="#fff";
																$hay5="#fff";
															}
															if($hastaneler[$ha]["yildiz"]==3) {
																$hay3="orange";
																$hay2="orange";
																$hay1="orange";
																$hay4="#fff";
																$hay5="#fff";
															}
															if($hastaneler[$ha]["yildiz"]==4) {
																$hay4="orange";
																$hay3="orange";
																$hay2="orange";
																$hay1="orange";
																$hay5="#fff";
															}
															if($hastaneler[$ha]["yildiz"]==5) {
																$hay5="orange";
																$hay4="orange";
																$hay3="orange";
																$hay2="orange";
																$hay1="orange";
															}
															else if($hastaneler[$ha]["yildiz"]==0){
																$hay5="#fff";
																$hay4="#fff";
																$hay3="#fff";
																$hay2="#fff";
																$hay1="#fff";
															}
															?>

															<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$hay1?>; font-size: 12px;"></span></a></li>
															<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$hay2?>; font-size: 12px;"></span></a></li>
															<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$hay3?>; font-size: 12px;"></span></a></li>
															<li class="list-inline-item"><a href="#"><span class="fa fa-star" style="color: <?=$hay4?>; font-size: 12px;"></span></a></li>
															<li class="list-inline-item"><a href="#" class="text-white"><span class="fa fa-star" style="color: <?=$hay5?>; font-size: 12px;"></span> (<?=$hastaneler[$ha]["yildiz"]?>)</a></li>
														</ul>
													</div>
												</div>
												<div class="details">
													<div class="tc_content">
														<div class="badge_icon"><a href="#"><img src="<?=SITE?>images/icons/agent1.svg" alt="agent1.svg"></a></div>
														<h4> <?=$hastaneler[$ha]["title"]?></h4>
														<ul class="prop_details mb0">
															<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> <?=$hastaneler[$ha]["phone"]?></a></li>
															<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> <?=$hastaneler[$ha]["adress"]?></a></li>
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
			</div>
		</div>
	</div>
</section>