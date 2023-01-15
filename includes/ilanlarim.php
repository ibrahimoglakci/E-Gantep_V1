<?php 

@session_start();
@ob_start();


date_default_timezone_set('Europe/Istanbul');

if(!empty($_SESSION['email']) && !empty($_SESSION['isimsoyisim'])) {
	$email=$DB->filter($_SESSION['email']);
	$isimsoyisim=$DB->filter($_SESSION['isimsoyisim']);
	$profil=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND email=? AND state=?",array($isimsoyisim,$email,1),"ORDER BY ID ASC",1);

	if($profil!=false) {
		if($profil[0]["status"]!="KULLANICI") {



			?>

			<head>
				<title>İlanlarım | Gaziantep Rehberi</title>
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
										<li><a class="active"><span class="flaticon-list"></span> İlanlarım</a></li>
										<?php
									}	

									?>

									<li><a href="<?=SITE?>profilim/kaydedilenler"><span class="flaticon-love"></span> Kaydedilenler</a></li>
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
			<section class="our-dashbord dashbord bgc-f4">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-992">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Profil Detayları</button>
									<ul id="myDropdown" class="dropdown-content">
										<li><a href="page-profile.html"><span class="flaticon-avatar"></span> Profilim</a></li>
										<?php 
										if($profil[0]["status"]!="KULLANICI")
										{
											?>
											<li class="active"><a><span class="flaticon-list"></span> İlanlarım</a></li>
											<?php
										}	

										?>
										<li><a href="<?=SITE?>profilim/kaydedilenler"><span class="flaticon-love"></span> Kaydedilenler</a></li>
										<li><a href="<?=SITE?>profilim/mesajlarim"><span class="flaticon-chat"></span> Mesajlar</a></li>
										<li><a href="<?=SITE?>profilim/yorumlar"><span class="flaticon-note"></span> Yorumlar</a></li>
										<li><a href="<?=SITE?>cikis-yap"><span class="flaticon-logout"></span> Çıkış Yap</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 mb15">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title float-left">İlanlarım</h2>
							</div>
						</div>
					</div>
					<div class="my_listings">
						<div class="row">
							<div class="col-lg-12">
								<div class="candidate_revew_select style2 mb30-991 float-left fn-smd">
									<ul class="mb0">
										<li class="list-inline-item">
											<div class="candidate_revew_search_box course fn-520">
												<form class="form-inline my-2" action="" method="post">
													<input class="form-control mr-sm-2" type="search" name="search" id="searchilan" placeholder="İlanlarım'da Ara" aria-label="Search" autocomplete="off" onkeyup="searchTable()">
													<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-loupe"></span></button>
												</form>
											</div>
										</li>
									</ul>
								</div>
								<div class="candidate_revew_select style2 text-right mb30-991 tal-smd">
									<ul class="mb0 mt10">
										<li class="list-inline-item mb30-767">
											<select class="selectpicker show-tick" onchange="searchoptionTable(value);">
												<option value="">Durum : Hepsi</option>
												<option value="Yayında">Yayında</option>
												<option value="Onay Bekliyor">Onay Bekliyor</option>
												<option value="Pasif">Pasif</option>
												<option value="Bitmek üzere">Bitmek üzere</option>
											</select>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-12 mt25">
								<div class="listing_table">
									<form action="#">
										<table class="table table-responsive" id="ilantablo">
											<thead>
												<tr class="carttable_row">
													<th class="cartm_title" width="18%;">Resim</th>
													<th class="cartm_title" width="30%;">Başlık</th>
													<th class="cartm_title" width="15%;">Bitiş Tarihi</th>
													<th class="cartm_title"width="11%;">Kategori</th>
													<th class="cartm_title">Durum</th>
													<th class="cartm_title"width="50%;">İşlem</th>
												</tr>
											</thead>

											<tbody class="table_body">

												<?php 

												if($_POST){
													if(!empty($_POST['search'])) {
														$words=$DB->filter($_POST['search']);
														$ilanlarim=$DB->CallData("pano","WHERE name=? AND (title LIKE ? OR text LIKE ? OR rank LIKE ?)",array($profil[0]["isimsoyisim"],'%'.$words.'%','%'.$words.'%','%'.$words.'%'),"ORDER BY ID DESC");
													}
													else {
														$ilanlarim=$DB->CallData("pano","WHERE name=?",array($profil[0]["isimsoyisim"]),"ORDER BY ID DESC");
													}
												}
												else
												{
													$ilanlarim=$DB->CallData("pano","WHERE name=?",array($profil[0]["isimsoyisim"]),"ORDER BY ID DESC");
												}


												if($ilanlarim!=false)
												{
													for ($ilan=0; $ilan <count($ilanlarim) ; $ilan++) { 
														if(!empty($ilanlarim[$ilan]["image"])) {$image=$ilanlarim[$ilan]["image"];} else {$image='varsayilan.jpg';} 
														?>

														
														<tr>
															
															<td><a href="<?=SITE?>ilan-detay/<?=$ilanlarim[$ilan]["seflink"]?>" target="_blank"><img src="<?=SITE?>images/pano/<?=$image?>" alt="s1.png" style="width: 100px; height: 90px;"></a></td>
															<td><a class="cart_title" href="<?=SITE?>ilan-detay/<?=$ilanlarim[$ilan]["seflink"]?>"><?=$ilanlarim[$ilan]["title"]?></a></td>
															
															<td><?=$datet=$DB->convertMonthToTurkishCharacter(date("d F Y",strtotime($ilanlarim[$ilan]["endtime"])))?></td>
															<td><?=$ilanlarim[$ilan]["rank"]?></td>
															<?php 
															if($ilanlarim[$ilan]["state"] == 1) 
															{
																$status="Yayında";
																$statuscolor="success";
															}
															else if($ilanlarim[$ilan]["state"] == 2) 
															{
																$status="Pasif";
																$statuscolor="danger";
															}
															else if($ilanlarim[$ilan]["state"] == 0) 
															{
																$status="Onay Bekliyor";
																$statuscolor="purple";
															}

															?>
															<td class="color-<?=$statuscolor?>"><?=$status?></td>
															<td class="editing_list">
																<ul>
																	<li class="list-inline-item">
																		<a href="<?=SITE?>kullanici-panel/ilan-duzenle/<?=$ilanlarim[$ilan]["ID"]?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Düzenle"><span class="flaticon-edit"></span></a>
																	</li>
																	<li class="list-inline-item">
																		<a href="<?=SITE?>ilan-detay/<?=$ilanlarim[$ilan]["seflink"]?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Gör"><span class="flaticon-view"></span></a>
																	</li>
																	<li class="list-inline-item">
																		<a href="<?=SITE?>kullanici-panel/ilan-liste" target="_blank" data-toggle="tooltip" data-placement="top" title="Sil"><span class="flaticon-delete"></span></a>
																	</li>
																</ul>
															</td>
														</tr>
														<?php

													}
												}
												else
												{
													?>
													
													<div class="alert alert-warning col-12 text-center"><i class="fas fa-info-circle"></i> İstenilen sonuçlarda herhangi bir ilan bulunamadı.</div>
													<meta http-equiv="refresh" content="2;url=<?=SITE?>profilim/ilanlarim">

													<?php
												}

												?>


											</tbody>
										</table>

									</form>
								</div>
							</div>

						</div>
					</div>
				</div>

				<script>
					function searchTable() {
					  // Declare variables
					  var input, filter, table, tr, td, i, txtValue;
					  input = document.getElementById("searchilan");
					  filter = input.value.toUpperCase();
					  table = document.getElementById("ilantablo");
					  tr = table.getElementsByTagName("tr");

					  // Loop through all table rows, and hide those who don't match the search query
					  for (i = 0; i < tr.length; i++) {
					  	td = tr[i].getElementsByTagName("td")[1];
					  	if (td) {
					  		txtValue = td.textContent || td.innerText;
					  		if (txtValue.toUpperCase().indexOf(filter) > -1) {
					  			tr[i].style.display = "";
					  		} else {
					  			tr[i].style.display = "none";

					  		}
					  	}
					  }
					}

					function searchoptionTable(searchword) {
					  // Declare variables
					  var filter, table, tr, td, i, txtValue;
					 
					  filter = searchword.toUpperCase();
					  table = document.getElementById("ilantablo");
					  tr = table.getElementsByTagName("tr");

					  // Loop through all table rows, and hide those who don't match the search query
					  for (i = 0; i < tr.length; i++) {
					  	td = tr[i].getElementsByTagName("td")[4];
					  	if (td) {
					  		txtValue = td.textContent || td.innerText;
					  		if (txtValue.toUpperCase().indexOf(filter) > -1) {
					  			tr[i].style.display = "";
					  		} else {
					  			tr[i].style.display = "none";
					  			
					  		}
					  	}
					  }
					}
</script>

</section>


<?php 
}
else
{
	?>
	<div class="alert alert-danger text-center"><i class="fas fa-times-circle"></i> Bu sayfa sadece Firma Sahiplerine özeldir.</div>
	<?php
}
}
}
else {
	?>
	<meta http-equiv="refresh" content="0;url=<?=SITE?>">
	<?php
}

?>
