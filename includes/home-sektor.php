<head>
	<title>Kategoriler | Gaziantep Rehberi</title>
</head>

<section id="why-chose" class="whychose_us pb70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="main-title text-center">
					<h2>Sektörler</h2>
					<p>Aradığın şeyi buradaki sektörlerden bulabilirsin.</p>
				</div>
			</div>
		</div>
		<div class="row">

			<?php  
			$rehber=$DB->CallData("rehber","WHERE state=?",array(1),"ORDER BY title ASC");
			if($rehber!=false) {
				for($i=0;$i<count($rehber);$i++) {

					if(!empty($rehber[$i]["image"])) {$image=$rehber[$i]["image"];} else {$image='varsayilan.png';} 

					$icons=$rehber[$i]["phone"];

					?>


					<div class="col-sm-6 col-lg-2">
						<a href="<?=SITE?>kategoriler/<?=$rehber[$i]["seflink"]?>">
							<div class="icon_hvr_img_box" style="background-image: url(<?=SITE?>images/rehber/<?=$image?>);">
								<div class="overlay">
									<div class="icon"><span class="<?=$icons?>"></span></div>
									<div class="details">
										<a href="<?=SITE?>kategoriler/<?=$rehber[$i]["seflink"]?>"><h5 class="title" style="margin-top: 25px;"><?=stripslashes($rehber[$i]["title"]);?></h5></a>
									</div>
								</div>
							</div>
						</a>
					</div>

					<?php
				}
			}


			?>



		</div>
	</div>
</section>