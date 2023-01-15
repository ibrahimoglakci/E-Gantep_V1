<?php 
	
	if(!empty($_GET['kategori'])) {
		if(empty($_GET['sayfa'])) {
			$page=1;
		}else {
			$page=strip_tags($_GET['sayfa']);
		}

		



		$kategori=$_GET['kategori'];
		$kategoriinfo=$DB->CallData("rehber","WHERE seflink=? AND state=?",array($kategori,1),"ORDER BY ID ASC",1);
		if($kategoriinfo!=false) {
			$replacekategori = str_replace('-', '', $kategori);
			$recordcustomers=$DB->CallData($replacekategori,"WHERE state=?",array(1),"ORDER BY rownumber ASC");
			if($recordcustomers!=false) {
				$limit=3;
				$startlimit=($page*$limit)-$limit;
				$totalRecord=count($recordcustomers);
				$pageNumber=ceil($totalRecord/$limit);
				$customers=$DB->CallData($replacekategori,"WHERE state=?",array(1),"ORDER BY rownumber ASC","".$startlimit.",".$limit."");
			}
			
			

			
		
	
	
 ?>
<head>
	<title><?=$kategoriinfo[0]["title"]?> | Gaziantep Rehberi</title>
</head>

	<!-- Listing Grid View -->
	<section class="our-listing pb30-991">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb_content style2 mb0-991">
						<h2 class="breadcrumb_title"><?=$kategoriinfo[0]["title"]?></h2>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?=SITE?>">Ana Sayfa</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Avukatlar</li>
						</ol>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-xl-4">
					<div class="sidebar_listing_grid1 dn-lg bgc-f4">
						<div class="sidebar_listing_list">
							<div class="sidebar_advanced_search_widget">
								<form action="" method="post">
									<ul class="sasw_list mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName3" name="searchkategori" placeholder="Ne Arıyorsun?">
										    </div>
										</li>
										
											<li>
												<div class="search_option_two">
													<div class="sidebar_select_options">
														<select class="selectpicker w100 show-tick" name="location">
															<option value="Konum">Konum</option>
															<option value="Sahinbey">Şahinbey</option>
															<option value="Sehitkamil">Şehitkamil</option>
															<option value="Nizip">Nizip</option>
															<option value="Araban">Araban</option>
															<option value="Oguzeli">Oğuzeli</option>
															<option value="Yavuzeli">Yavuzeli</option>
														</select>
													</div>
												</div>
											</li>

											<li class="mb30 mt15">
											
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="online" name="acik">
														<label class="custom-control-label" for="online">Şu anda açık olan yerleri göster</label>
													</div>
									                	
											</li>

										
										<li>
											<div class="ui_kit_checkbox sidebar_tag">
												<h4 class="title">Özellikler</h4>
												<div class="wrapper">
									                <ul>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckCredit">
																<label class="custom-control-label" for="customCheckCredit">Kredi/Banka Kartı Desteği</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckSmoking">
																<label class="custom-control-label" for="customCheckSmoking">Sigara İçilebilir</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckBikeP">
																<label class="custom-control-label" for="customCheckBikeP">Bisiklet Parkı</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckStreet">
																<label class="custom-control-label" for="customCheckStreet">Otopark</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckWireless">
																<label class="custom-control-label" for="customCheckWireless">Kablosuz İnternet(Wifi) Desteği</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckAlco">
																<label class="custom-control-label" for="customCheckAlco">Alkollü Mekan</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckPet">
																<label class="custom-control-label" for="customCheckPet">Evcil Hayvan İzni</label>
															</div>
									                	</li>
									                	
									                </ul>
								                </div>
							                </div>
										</li>
										<li>
											<div class="search_option_button text-center mt25">
											    <button type="submit" class="btn btn-block btn-thm mb15">Ara</button>
											    <a class="tdu fz14" href="#">Filtreleri Sıfırla</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8">
						<div class="row">
							<div class="listing_filter_row dif db-767">
								<div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
									<div class="left_area tac-xsd mb30-767">
										<p class="mb0">Gösterilen <span class="heading-color">3 toplam <?=count($recordcustomers)?> sonuç</span></p>
									</div>
								</div>
								<div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
									<div class="listing_list_style tac-767">
										<ul class="mb0">
											<li class="list-inline-item dropdown text-left"><span class="stts">Sırala: </span>
												<select class="selectpicker">
													<option>Standart</option>
													<option>En Yeni</option>
													<option>En Popüler</option>
												</select>
											</li>
											
										</ul>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<?php 
						if($customers!=false) {


							for ($i=0; $i <count($customers) ; $i++) { 
								if(!empty($customers[$i]["image"])) {$image=$customers[$i]["image"];} else {$image='varsayilan.jpg';} 
						
						 ?>
						<div class="col-lg-12">
							<?php 
							 if($customers[$i]["rownumber"]==1 OR $customers[$i]["rownumber"]==2 OR $customers[$i]["rownumber"]==3) {
							 ?>
								<li class="list-group-item list-group-item-primary btn-sm populartext" style="color: tomato; font-weight:500; font-size: 16px; text-align: center;">* En Popüler</li>
							<?php 
							}
							 ?>

							<div class="feat_property list">

								<div class="thumb">

									<img class="img-whp" src="<?=SITE?>images/kategori-resim/<?=$image?>" alt="ll1.jpg">
									<div class="thmb_cntnt">
										
										
										<ul class="listing_reviews">
											<?php 

															if($customers[$i]["yildiz"]==1) {
																$y1="orange";
																$y2="#fff";
																$y3="#fff";
																$y4="#fff";
																$y5="#fff";
															}
															if($customers[$i]["yildiz"]==2) { 
																$y2="orange";
																$y1="orange";
																$y3="#fff";
																$y4="#fff";
																$y5="#fff";
															}
															if($customers[$i]["yildiz"]==3) {
																$y3="orange";
																$y2="orange";
																$y1="orange";
																$y4="#fff";
																$y5="#fff";
															}
															if($customers[$i]["yildiz"]==4) {
																$y4="orange";
																$y3="orange";
																$y2="orange";
																$y1="orange";
																$y5="#fff";
															}
															if($customers[$i]["yildiz"]==5) {
																$y5="orange";
																$y4="orange";
																$y3="orange";
																$y2="orange";
																$y1="orange";
															}
															else if($customers[$i]["yildiz"]==0){
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
															<li class="list-inline-item"><a href="#" class="text-white"><span class="fa fa-star" style="color: <?=$y5?>; font-size: 12px;"></span> (<?=$customers[$i]["yildiz"]?>)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<h4><?=$customers[$i]["title"]?></h4>
										<p><?=mb_substr(strip_tags(stripslashes($customers[$i]["description"])), 0,50,"UTF-8")?>...</p>
										<ul class="prop_details mb0 mt15">
											<li class="list-inline-item"><a href="tel:<?=$customers[$i]["phone"]?>" class="btn btn-sm mb5 btn-warning" ><span class="flaticon-phone pr5"></span><?=$customers[$i]["phone"]?></a></li>
											<li class="list-inline-item"><a href="https://www.google.com/maps/place/<?=$customers[$i]["let"]?>,<?=$customers[$i]["lng"]?>" target="_blank" class="mb5"><span class="flaticon-pin pr5"></span> <?=$customers[$i]["adress"]?></a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item" style="border-radius: 50%; font-size: 12px; height: 35px; line-height: 35px; margin-right: 15px; text-align: center; width: 35px; background-color: #ecf0f1;"><a href="<?=SITE?>detay/<?=$kategoriinfo[0]["seflink"]?>"><span style="color: #6CBF78; font-size: 20px; margin-top: 5px;" class="<?=$kategoriinfo[0]["phone"]?>"></span></a></li>

											<li class="list-inline-item"><a href="<?=SITE?>detay/<?=$kategoriinfo[0]["seflink"]?>"><?=$kategoriinfo[0]["title"]?></a></li>

										</ul>
										
									</div>
								</div>
							</div>
						</div>

						<?php 
							}
						}
						else {
							?>
							<div class="alert alert-danger col-lg-12">Bu kategoride kayıtlı olan hiçbir şey yok!</div>
							<meta http-equiv="refresh" content="2;url=<?=SITE?>kategoriler">
							<?php
						}
						

						 ?>
						



						<div class="col-lg-12">
							<div class="mbp_pagination mt10">
								<ul class="page_navigation">
									<?php 
									if($page > 1) {
										if($page==2) {
											?>
											<li class="page-item">
								    	<a class="page-link" href="<?=SITE?>kategoriler/<?=$kategori?>" tabindex="-1" aria-disabled="true"> <span class="fa fa-angle-left"></span></a>
								    </li>
											<?php
										}
										else {

										

										$newPage=$page-1;

										?>
										<li class="page-item">
								    	<a class="page-link" href="<?=SITE?>kategoriler/<?=$kategori?>&sayfa=<?=$newPage?>" tabindex="-1" aria-disabled="true"> <span class="fa fa-angle-left"></span></a>
								    </li>
										<?php
										}
									}

									


									 ?>

									 <?php 
									 $record=10;
									 for ($i=$page-$record; $i < $page+$record ; $i++) { 
									 	if($i > 0 && $i<=$pageNumber) {
									 		if($i == $page) {
									 			?>
									 			<li class="page-item active"><a class="page-link" href="<?=SITE?>kategoriler/<?=$kategori?>&sayfa=<?=$i?>"><?=$i?></a></li>
									 			<?php

									 		}
									 		else {

									 			if($i==1) {
									 				?>
									 				<li class="page-item"><a class="page-link" href="<?=SITE?>kategoriler/<?=$kategori?>"><?=$i?></a></li>
									 				<?php

									 			}
									 			else {

									 			

									 		?>
									 		<li class="page-item"><a class="page-link" href="<?=SITE?>kategoriler/<?=$kategori?>&sayfa=<?=$i?>"><?=$i?></a></li>
									 		<?php
									 		}
									 	}

									 	}
									 
									 }
									  ?>
								    
								    
								    

								    <?php 
								    if($page != $pageNumber) {
											$newPage=$page+1;
										?>
											<li class="page-item">
									    	<a class="page-link" href="<?=SITE?>kategoriler/<?=$kategori?>&sayfa=<?=$newPage?>" tabindex="-1" aria-disabled="true"> <span class="fa fa-angle-right"></span></a>
									    </li>
											<?php

										}
								     ?>
								    
								</ul>
							</div>
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