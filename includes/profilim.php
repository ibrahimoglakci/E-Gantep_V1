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
			<title>Profilim | Gaziantep Rehberi</title>
		</head>

		
		<!-- Our Dashbord -->
		<section class="extra-dashboard-menu dn-992">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="ed_menu_list mt5">
							<ul>
								<li><a class="active"><span class="flaticon-avatar"></span> Profilim</a></li>
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
									<li class="active"><a><span class="flaticon-avatar"></span> Profilim</a></li>
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
									<li><a href="<?=SITE?>profilim/yorumlar"><span class="flaticon-note"></span> Yorumlar</a></li>
									<li><a href="<?=SITE?>cikis-yap"><span class="flaticon-logout"></span> Çıkış Yap</a></li>
								</ul>
							</div>
						</div>
					</div>
					<?php 
					if($profil[0]["status"]!="KULLANICI")
					{
						$ilanlar=$DB->CallData("pano","WHERE name=? AND state=?",array($profil[0]["isimsoyisim"],1),"ORDER BY ID DESC");
						if($ilanlar==false) {
							$ilanlar=array();
						}
						
						$gelenyorumlar=$DB->CallData("ilanyorumlar","WHERE toID=? AND state=?",array($profil[0]["ID"],1),"ORDER BY ID DESC");
						if($gelenyorumlar==false) {
							$gelenyorumlar=array();
						}
						$ownyorumlar=$DB->CallData("ilanyorumlar","WHERE userID=? AND state=?",array($profil[0]["ID"],1),"ORDER BY ID DESC");
						if($ownyorumlar==false) {
							$ownyorumlar=array();
						}
						$totalref=$DB->CallData("referanslar","WHERE uyeolunanID=?",array($profil[0]["ID"]),"ORDER BY ID DESC");
						if($totalref==false) {
							$totalref=array();
						}

					 ?>
					 
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
						<div class="ff_one style4">
							<div class="icon"><span class="flaticon-list"></span></div>
							<div class="detais">
								<div class="timer"><?=count($ilanlar)?></div>
								<p>Aktif İlanlar</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
						<div class="ff_one style2">
							<div class="icon"><span class="flaticon-note"></span></div>
							<div class="detais">
								<div class="timer"><?php echo count($ownyorumlar)+count($gelenyorumlar);?></div>
								<p>Toplam Yorumlar</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
						<div class="ff_one">
							<div class="icon"><span class="fas fa-users"></span></div>
							<div class="detais">
								<div class="timer"><?=count($totalref)?></div>
								<p>Referanslar</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
						<div class="ff_one style3">
							<div class="icon"><span class="fas fa-coins"></span></div>
							<div class="detais">
								<div class="timer"><?=$profil[0]["puan"]?></div>
								<p>GCoin</p>
							</div>
						</div>
					</div>


					<?php 
					}
					?>
				
					<div class="col-lg-12 col-xl-12">

						<div class="recent_job_activity">
							<h4 class="title">Aktivite Geçmişim</h4>
							<?php 
							$activity=$DB->CallData("aktivite","WHERE userID=?",array($profil[0]["ID"]),"ORDER BY ID DESC",6);
							if($activity!=false) {
								for($ac=0;$ac<count($activity);$ac++)
								{
								if($activity[$ac]["type"]=="onay"){$iconac="fas fa-check";}else if($activity[$ac]["type"]=="favori") {$iconac="fas fa-heart";} else if($activity[$ac]["type"]=="hata"){$iconac="fas fa-times";} else if($activity[$ac]["type"]=="unfavori"){$iconac="far fa-heart";} else if($activity[$ac]["type"]=="sifre"){$iconac="fas fa-key";} else if($activity[$ac]["type"]=="referans"){$iconac="fas fa-users";} else if($activity[$ac]["type"]=="coin"){$iconac="fas fa-coins";}

								?>
								<div class="grid <?=$activity[$ac]["type"]?>">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="<?=$iconac?>"></span></div></li>
										<li class="list-inline-item"><p><?=$activity[$ac]["activity"]?> (<?=$datet=$DB->convertMonthToTurkishCharacter(date("H:i:s d F Y",strtotime($activity[$ac]["date"])))?>)</p></li>
									</ul>
								</div>

								<?php

							}
							
							
							}
							else
							{
								?>
								<div class="alert alert-info"><i class="fa fa-info-circle"></i> Henüz bir aktiviteniz yok.</div>
								<?php
							}
							?>



						</div>
					</div>

					<div class="col-lg-12 mb10">
						<div class="breadcrumb_content style2" style="margin-top: 8px;">
							<h2 class="breadcrumb_title float-left">Profilim</h2>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="row">
							<div class="col-xl-8">
								<div class="my_dashboard_profile mb30-lg">
									<h4 class="mb30">Profil Detayları</h4>
									<?php 
									if($_POST)
									{
										if(!empty($_POST["saveprofile"]))
										{
											$name=$_POST['valname'];
											$phone=$_POST['valphone'];
											$valemail=$_POST['valemail'];
											$notes=$_POST['valnotes'];
											$website=$_POST['valwebsite'];
											$twitter=$_POST['valtwitter'];
											$facebook=$_POST['valfacebook'];
											$instagram=$_POST['valinstagram'];
											if($name!=$profil[0]["isimsoyisim"]) {
												$updatename=$DB->RunQuery("UPDATE kullanicilar","SET isimsoyisim=? WHERE ID=?",array($name,$profil[0]["ID"]));
												
											}
											if($phone!=$profil[0]["telefon"]) {
												$updatephone=$DB->RunQuery("UPDATE kullanicilar","SET telefon=? WHERE ID=?",array($phone,$profil[0]["ID"]));
												
											}
											if($valemail!=$profil[0]["showemail"]) {
												$updateemail=$DB->RunQuery("UPDATE kullanicilar","SET showemail=? WHERE ID=?",array($valemail,$profil[0]["ID"]));
												
											}
											if($notes!=$profil[0]["notes"]) {
												$updatenotes=$DB->RunQuery("UPDATE kullanicilar","SET notes=? WHERE ID=?",array($notes,$profil[0]["ID"]));
												
											}
											if($website!=$profil[0]["website"]) {
												$updatewebsite=$DB->RunQuery("UPDATE kullanicilar","SET website=? WHERE ID=?",array($website,$profil[0]["ID"]));
												
											}
											if($twitter!=$profil[0]["twitter"]) {
												$updatetwitter=$DB->RunQuery("UPDATE kullanicilar","SET twitter=? WHERE ID=?",array($twitter,$profil[0]["ID"]));
												
											}
											if($facebook!=$profil[0]["facebook"]) {
												$updatefacebook=$DB->RunQuery("UPDATE kullanicilar","SET facebook=? WHERE ID=?",array($facebook,$profil[0]["ID"]));
												
											}
											if($instagram!=$profil[0]["instagram"]) {
												$updateinstagram=$DB->RunQuery("UPDATE kullanicilar","SET instagram=? WHERE ID=?",array($instagram,$profil[0]["ID"]));


											}

											if(($name==$profil[0]["isimsoyisim"]) && ($phone==$profil[0]["telefon"]) && ($valemail==$profil[0]["showemail"]) && ($notes==$profil[0]["notes"]) && ($website==$profil[0]["website"]) && ($twitter==$profil[0]["twitter"]) && ($facebook==$profil[0]["facebook"]) && ($instagram==$profil[0]["instagram"]) ) {
												?>
												<div class="alert alert-info"><i class="fas fa-info-circle"></i> Profilinizde hiçbir değişiklik yapılmadı.</div>
												<?php
											}
											else
											{
												$addactivity=$DB->RunQuery("INSERT INTO aktivite","SET userID=?, activity=?, type=?, date=?",array($profil[0]["ID"],"<span>Profil bilgilerinizi</span> güncellediniz.","onay",date("Y-m-d H:i:s")));
												?>
												<div class="alert alert-success"><i class="fas fa-check-circle"></i> Değişiklikleriniz başarıyla kaydedildi.</div>
												<meta http-equiv="refresh" content="1;url=<?=SITE?>profilim">

												<?php
											}

										}
									}

									?>
									
									<form action="" method="POST">
										<div class="row">
											<div class="col-lg-12">
												<div class="wrap-custom-file mb50">
													<input type="file" name="image1 valproimage" id="image1" accept=".jpg, .png"/>
													<?php 
													$imageprofile=$profil[0]["image"];
													if(empty($imageprofile)) { $imagepro="varsayilanprofil.png";} else {$imagepro="$imageprofile";}
													?>
													<label for="image1" style="background-image: url(<?=SITE?>images/users/<?=$imagepro?>); background-repeat: no-repeat; background-position: center;">
														<span>Fotoğraf Yükle</span>
														<small class="file_title">Maksimum dosya boyutu: 10 MB.</small>
													</label>
													<a class="text-thm tdu photo_delete" href="#">Sil</a>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="my_profile_setting_input form-group mt100-500">
													<label for="formGroupExampleInput1">İsim Soyisim</label>
													<input type="text" name="valname" class="form-control" id="formGroupExampleInput1" value="<?=$profil[0]["isimsoyisim"]?>">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="my_profile_setting_input form-group">
													<label for="formGroupExampleInput8">Telefon</label>
													<input type="text" name="valphone" class="form-control" id="formGroupExampleInput8" value="<?=$profil[0]["telefon"]?>">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="my_profile_setting_input form-group">
													<label for="formGroupExampleEmail">İletişim E-posta</label>
													<input type="email" name="valemail" class="form-control" id="formGroupExampleEmail" value="<?=$profil[0]["showemail"]?>">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="my_profile_setting_textarea">
													<label for="exampleFormControlTextarea1">Açıklama</label>
													<textarea class="form-control" name="valnotes" id="exampleFormControlTextarea1" rows="6"><?=$profil[0]["notes"]?></textarea>
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
													<label for="formGroupExampleInput5">İnternet Sitesi</label>
													<input type="text" name="valwebsite" placeholder="İnternet Sitenizin URL(Link) Adresini Giriniz." class="form-control" id="formGroupExampleInput5" value="<?=$profil[0]["website"]?>">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
													<label for="formGroupExampleInput6">Twitter</label>
													<input type="text" name="valtwitter" placeholder="Twitter Profilinizin URL(Link) Adresini Giriniz." class="form-control" id="formGroupExampleInput6" value="<?=$profil[0]["twitter"]?>">
													
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
													<label for="formGroupExampleInput7">Facebook</label>
													<input type="text" name="valfacebook" class="form-control" id="formGroupExampleInput7" placeholder="Facebook Profilinizin URL(Link) Adresini Giriniz." value="<?=$profil[0]["facebook"]?>">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
													<label for="formGroupExampleInput9">Instagram</label>
													<input type="text" name="valinstagram" placeholder="İnstagram Profilinizin URL(Link) Adresini Giriniz." class="form-control" id="formGroupExampleInput9" value="<?=$profil[0]["instagram"]?>">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="my_profile_setting_input">
													<input type="submit" name="saveprofile" class="btn update_btn" value="Değişiklikleri Kaydet">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-xl-4">
								<div class="my_dashboard_profile">
									<h4 class="mb20">Şifreni değiştir</h4>
									<?php 

									if($_POST)
									{
										if(!empty($_POST['currentpass']) && !empty($_POST['newpass']) && !empty($_POST['repeatpass']) && !empty($_POST["changepass"]))
										{
											$currentpass=md5($_POST["currentpass"]);
											$newpass=$_POST['newpass'];
											$repeatpass=$_POST["repeatpass"];
											if($currentpass==$profil[0]["password"])
											{
												if($newpass==$repeatpass)
												{
													if(md5($newpass)!=$currentpass)
													{
														if(strlen($newpass)>7)
														{
															$createpass=md5($newpass);
															$updatepass=$DB->RunQuery("UPDATE kullanicilar","SET password=? WHERE ID=?",array($createpass,$profil[0]["ID"]));
															if($updatepass!=false)
															{

																@session_destroy();
																@ob_end_flush();
																$addactivity=$DB->RunQuery("INSERT INTO aktivite","SET userID=?, activity=?, type=?, date=?",array($profil[0]["ID"],"<span>Hesap</span> şifrenizi değiştirdiniz.","sifre",date("Y-m-d H:i:s")));

																?>
																<div class="alert alert-success"><i class="fas fa-check-circle"></i> Şifreniz başarıyla değiştirildi! Yönlendiriliyorsunuz...</div>
																<meta http-equiv="refresh" content="2;url=<?=SITE?>">

																<?php
															}

														}
														else
														{
															?>
															<div class="alert alert-warning"><i class="fas fa-info-circle"></i> Şifreniz en az 8 karakterden oluşmalıdır.</div>
															<?php
														}
													}
													else
													{
														?>
														<div class="alert alert-danger"><i class="fas fa-exclamation-circle"></i> Yeni şifreniz eski şifreniz ile aynı olmamalıdır.</div>
														<?php
													}
												}
												else
												{
													?>
													<div class="alert alert-danger"><i class="fas fa-exclamation-circle"></i> Yeni şifreler birbiriyle uyuşmamaktadır.</div>
													<?php
												}
											}
											else
											{
												?>
												<div class="alert alert-danger"><i class="fas fa-exclamation-circle"></i> Mevcut şifreniz doğru değildir. Lütfen şifrenizi doğru şekilde yazıp tekrar deneyiniz.</div>
												<?php
											}
										}
									}

									?>
									<form action="" method="post">
										<div class="row">
											<div class="col-md-12">
												<div class="my_profile_setting_input form-group">
													<label for="formGroupExampleOldPass">Mevcut Şifre</label>
													<input type="password" class="form-control" name="currentpass" id="formGroupExampleOldPass showpass1">
												</div>
											</div>
											<div class="col-md-12">
												<div class="my_profile_setting_input form-group">
													<label for="formGroupExampleNewPass">Yeni Şifre</label>
													<input type="password" class="form-control" name="newpass" id="formGroupExampleNewPass password-field">

												</div>
											</div>
											<div class="col-md-12">
												<div class="my_profile_setting_input form-group">
													<label for="formGroupExampleConfPass">Yeni Şifre Tekrar</label>
													<input type="password" class="form-control" name="repeatpass" id="formGroupExampleConfPass showpass3">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="alert alert-warning"><i class="fas fa-info-circle"></i> Şifreniz minimum 8 karakterden oluşmalıdır ve en az bir harf içermelidir!</div>
											</div>
											<div class="col-xl-12">
												<div class="my_profile_setting_input">
													<input name="changepass" type="submit" class="btn update_btn style2" value="Şifre Değiştir">
												</div>
											</div>
										</div>
									</form>
								</div>
								<?php 
								if($profil[0]["status"]!="KULLANICI")
								{


								 ?>
								<div class="my_dashboard_profile mt5">
									<h4 class="title mb15">Referanslarım </h4>
									<span class="text-success">Referans Kodu: <a id="refnumber" onclick="copyToClipboardNum('#refnumber');" data-toggle="tooltip" data-placement="top" title="Kopyalamak için tıkla" style="color: #111; font-size: 17px; font-weight: 500; cursor: pointer;"><?=$profil[0]["referans_kod"]?> </a><i id="reficon" data-toggle="tooltip" data-placement="bottom" title="Kopyalamak için tıkla" class="fas fa-paste kopyala" style="color: darkgray; font-size: 20px; cursor: pointer;" onclick="copyToClipboard('#refnumber');"></i></span><br>


									<span class="text-info">Referans Linki:<br> <a data-toggle="tooltip" data-placement="top" title="Kopyalamak için tıkla" style="cursor: pointer;" id="referansurl" class="text-primary" onclick="copyToClipboardUrl('#referansurl');"><?=SITE?>e-gantep.aspx&kayit-turu=standart&referans=<?=$profil[0]["referans_kod"]?> </a> <i id="reficon" data-toggle="tooltip" data-placement="bottom" title="Kopyalamak için tıkla" class="fas fa-paste kopyala" style="color: darkgray; font-size: 20px; cursor: pointer;" onclick="copyToClipboard('#referansurl');"></i></span>
									<br> 


									<ul class="list_details mb0">
										<li style="margin-top: 5px; margin-bottom: 5px;"><a class="text-muted" disabled >İsim Soyisim</a> <span class="float-right text-muted">Tarih</span></li>
										<?php 
										$refler=$DB->CallData("referanslar","WHERE uyeolunanID=?",array($profil[0]["ID"]),"ORDER BY ID DESC");

										for ($r=0; $r <count($refler); $r++) { 
											$refuyeler=$DB->CallData("kullanicilar","WHERE ID=?",array($refler[$r]["uyeID"]),"ORDER BY ID ASC",1);
											
											?>
											<li style="margin-top: 5px; margin-bottom: 5px;"><a class="text-danger" href="<?=SITE?>profil/<?=$refuyeler[0]["seflink"]?>" target="_blank"><?=$refuyeler[0]["isimsoyisim"]?></a> <span class="float-right text-info"><?=$datet=$DB->convertMonthToTurkishCharacter(date("H:i d F Y",strtotime($refler[$r]["date"])))?></span></li>

											<?php
										}

										?>
										
										
									</ul>
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

		<script>
			function copyToClipboard(element) {
			  var $temp = $("<input>");
			  $("body").append($temp);
			  $temp.val($(element).text()).select();
			  document.execCommand("copy");
			  $temp.remove();
  

  			  $('[data-toggle="tooltip"]').tooltip();
  			  let btn_tooltip = $('#reficon');
  			  
  			  btn_tooltip.attr('title', 'Kopyalandı').tooltip('dispose');
   			  btn_tooltip.tooltip('show');
   			
  

			}

			function copyToClipboardUrl(element) {
			  var $temp = $("<input>");
			  $("body").append($temp);
			  $temp.val($(element).text()).select();
			  document.execCommand("copy");
			  $temp.remove();
  

  			  $('[data-toggle="tooltip"]').tooltip();
  			  
  			  let refurl = $('#referansurl');
  			  
   			  refurl.attr('title', 'Kopyalandı').tooltip('dispose');
   			  refurl.tooltip('show');
  

			}

			function copyToClipboardNum(element) {
			  var $temp = $("<input>");
			  $("body").append($temp);
			  $temp.val($(element).text()).select();
			  document.execCommand("copy");
			  $temp.remove();
  

  			  $('[data-toggle="tooltip"]').tooltip();
  			  
  			  let refurl = $('#refnumber');
  			  
   			  refurl.attr('title', 'Kopyalandı').tooltip('dispose');
   			  refurl.tooltip('show');
  

			}

		</script>

		<style type="text/css">
			.kopyala:before {

			}
			.kopyala:hover {
				opacity: 0.7;
			}
		</style>






		<?php 
	}
}
else {
	?>
	<meta http-equiv="refresh" content="0;url=<?=SITE?>">
	<?php
}

?>




