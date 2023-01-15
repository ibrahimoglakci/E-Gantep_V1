<?php 
	if(!empty($_GET['seflink'])) {
		$seflink=$_GET['seflink'];

		$blog=$DB->CallData("blog","WHERE seflink=? AND state=?",array($seflink,1),"ORDER BY date ASC");
		setlocale(LC_ALL, 'tr_TR.UTF-8');
		$nowdate=strtotime($blog[0]["date"]);
    $today = date("j F, Y",$nowdate);
    $turkishdate=$DB->convertMonthToTurkishCharacter($today);
    if(!empty($blog[0]["image"])) {$image=$blog[0]["image"];} else {$image='varsayilan.jpg';} 
 ?>


<head>
	<title>Blog | Gaziantep Rehberi</title>
</head>


	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb style3" style="background-image: url(<?=SITE?>images/blog/<?=$image?>);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8">
					<div class="blog_single_post_heading text-center">
						<div class="contents" >
							<div class="bsph_tag bgc-white text-thm"><?=$blog[0]["kategori"]?></div>
							<h2 class="text-white mb15"><?=$blog[0]["title"]?></h2>		
							<ul class="mb15">
								<li class="list-inline-item text-white"><span class="flaticon-avatar mr10"></span> <?=$blog[0]["phone"]?></li>
								<li class="list-inline-item text-white"><span class="flaticon-date mr10"></span> <?=$turkishdate?></li>
							</ul>					
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Blog Single Post -->
	<section class="blog_post_container pb70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-9">
					<div class="main_blog_post_content">
						<div class="mbp_thumb_post">
							<p class="fz15 mb25"><?=$blog[0]["text"]?></p>
							
						
							
							
							
						</div>
						<hr class="mt60">
						
						<div class="product_single_content mb50">
							<div class="mbp_pagination_comments">
								<div class="total_review">
									<?php 
										$yorumlar=$DB->CallData("blogyorum","WHERE state=? AND blogID=?",array(1,$blog[0]["ID"]),"ORDER BY ID DESC");
									 ?>
									 <?php 
									 if($yorumlar!=false)
									 {

									  ?>
									<h4><?=count($yorumlar)?> Yorum</h4>
									<?php 
									}
									else
									{
									?>
									<div class="alert alert-info">Daha önce hiç yorum yapılmamış. İlk Yorum yapan sen ol.</div>
									<?php

									}

									 ?>
								</div>
								<?php 
							
								if($yorumlar!=false)
								{
									for ($y=0; $y <count($yorumlar); $y++) 
									{ 
										$yorumyapanuye=$DB->CallData("kullanicilar","WHERE ID=?",array($yorumlar[$y]["userID"]),"ORDER BY ID ASC",1);
										if($yorumyapanuye!=false){
											$isimsoyisim=$yorumyapanuye[0]["isimsoyisim"];
											$dates=strtotime($yorumlar[$y]["date"]);
									    $todays = date("j F, Y",$dates);
									    $turkishdates=$DB->convertMonthToTurkishCharacter($todays);
											if(!empty($yorumyapanuye[0]["image"])) {$imageyorum=$yorumyapanuye[0]["image"];} else {$imageyorum='varsayilan.jpg';} 
										}
										?>
								<div class="mbp_first media">
									<img src="<?=SITE?>images/users/<?=$imageyorum?>" class="mr-3" alt="reviewer1.png">
									<div class="media-body">
								    	<h4 class="sub_title mt-0"><?=$isimsoyisim?></h4>
								    	<div class="sspd_postdate fz14 mb20"><?=$turkishdates?>
											
								    	</div>
								    	<p class="fz14 mt10"><?=$yorumlar[$y]["yorum"]?></p>
								    	
									</div>
								</div>
								<?php 
								}
							}
								 ?>

							</div>
						</div>
						<?php 
						if(!empty($_SESSION['ID']) && !empty($_SESSION['isimsoyisim'])) {

						 ?>
						
						<div class="bsp_reveiw_wrt">
							<h4>Yorum Yap</h4>
							<form class="comments_form">
								<div class="form-group">
								    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Yorumun..."></textarea>
								</div>
								<button type="submit" class="btn btn-thm">Yorumu Gönder</button>
							</form>
						</div>
						<?php 
						}
						else
						{
							?>
							<div class="col-lg-12 alert alert-warning"><i class="fas fa-alert-circle"></i> Yorum yapabilmen için öncelikle giriş yapman gerekiyor. Giriş yapmak için <a href="<?=SITE?>giris-yap" style="color: red;">tıkla.</a></div>
							<?php
						}

						 ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php 
	
	}

 ?>