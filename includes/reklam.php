<section class="divider bg-img5 parallax" data-stellar-background-ratio="0.2" style="background-image: url('<?=SITE?>images/background/lahmacun.jpeg');">
		<div class="container">
			<div class="row justify-content-center">
				<?php 

				$reklam=$DB->CallData("reklamlar","WHERE state=?",array(1),"ORDER BY ID ASC");

				 ?>
				<div class="col-lg-8">
					<div class="business_exposer text-center">
						<h2 class="title text-white mb20"><?=$reklam[0]["title"]?></h2>
						<p class="text-white mb35"><?=$reklam[0]["text"]?></p>
						<a class="btn stay_amplace_btn" href="<?=SITE?><?=$reklam[0]["seflink"]?>">Göster</a>
					</div>
				</div>
			</div>
		</div>
	</section>