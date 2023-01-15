<?php 

function reCaptcha($response)
{
	$fields = [
		'secret' => '6Le7iuYcAAAAABR6XauMBmdkeoO9rdt1_Ms3qA0L',
		'response' => $response
	];

	$ch=curl_init('https://www.google.com/recaptcha/api/siteverify');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt_array($ch, [
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => http_build_query($fields),
		CURLOPT_RETURNTRANSFER => true
	]);
	$resultt= curl_exec($ch);
	curl_close($ch);
	return json_decode($resultt, true);
}


//session_set_cookie_params(null,'/','localhost/e-gantep/',false,true);
@session_start();
@ob_start();





?>



<?php 

if(empty($_SESSION["isimsoyisim"]) && empty($_SESSION["email"])) {


	?>



	<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu" style="background: #ccc;">
		<div class="container-fluid p0" >
			<!-- Ace Responsive Menu -->
			<nav>
				<!-- Menu Toggle btn-->
				<div class="menu-toggle">
					<img class="nav_logo_img img-fluid" src="<?=SITE?>images/logo/tsd-light.png" alt="header-logo.svg" width="55px;" height="auto;">
					<button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<a href="<?=SITE?>" class="navbar_brand float-left dn-smd">
					<img class="logo1 img-fluid" src="<?=SITE?>images/logo/tsd-light.png" alt="TeamSoftDevs" width="55px;" height="auto">
					<span>E-Gaziantep</span>
				</a>
				<!-- Responsive Menu Structure-->
				<ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
					<li>
						<a href="<?=SITE?>"><span class="title">Ana Sayfa</span></a>
						<!-- Level Two-->

					</li>
					<li>
						<a href="<?=SITE?>rehber"><span class="title">Gaziantep Rehberi</span></a>
						<!-- Level Two-->
						<ul>
							<li><a href="<?=SITE?>populer-mekanlar">Popüler Mekanlar</a></li>
							<li><a href="<?=SITE?>ilanlar">İlanlar</a></li>
							<li><a href="<?=SITE?>kategoriler">Kategoriler</a></li>
						</ul>
					</li>
					<li>
						<a href="<?=SITE?>pano"><span class="title">Pano</span></a>

					</li>
					<li>
						<a href="<?=SITE?>planlar"><span class="title">Planlar</span></a>

					</li>
					<li>
						<a href="<?=SITE?>blog"><span class="title">Blog</span></a>

					</li>
					<li>
						<a href="<?=SITE?>hakkimizda"><span class="title">Hakkımızda</span></a>

					</li>
					<li>
						<a href="<?=SITE?>iletisim"><span class="title">İletişim</span></a>

					</li>
					<li>
						<a href="<?=SITE?>sikca-sorulan-sorular"><span class="title">S.S.S</span></a>

					</li>
					<li class="list-inline-item list_s"><a href="#" class="btn flaticon-avatar" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-1200">Giriş Yap/Kayıt Ol</span></a></li>

				</ul>
			</nav>
		</div>
	</header>
	


	<div class="preloader"></div>

	<!-- Main Header Nav -->

	<!-- Modal -->
	<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" >
		<div class="modal-dialog modal-md mt100" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body container pb20 pl0 pr0 pt0">
					<div class="row">
						<div class="col-lg-12">
							<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Giriş Yap</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kayıt Ol</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-content container" id="myTabContent">
						<div class="row mt40 tab-pane fade show active pl20 pr20" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="col-lg-12">
								<div class="login_form">
									<?php 
									if($_POST) {
										if(!empty($_POST["g-recaptcha-response"]) && isset($_POST["g-recaptcha-response"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
											$email=$DB->filter($_POST['email']);
											$password=$DB->filter($_POST['password']);
											$resultt=reCaptcha($_POST['g-recaptcha-response']);

											$check=$DB->CallData("kullanicilar", "WHERE email=? AND password=? AND state=?",array($email,md5($password),1),"ORDER BY ID ASC",1);
											if($check!=false) {
												if(!empty($_POST['remember_check'])) {
													$remember_check=$_POST['remember_check'];
													setcookie('email',$email,time()+3600*24);
													setcookie('password',$password,time()+3600*24);
													setcookie('checked',$remember_check,time()+3600*24);
												}
												else {

													setcookie('email',$email,30);
													setcookie('password',$password,30);

												}
												session_regenerate_id(true);
												$_SESSION['email']=$check[0]["email"];
												$_SESSION['isimsoyisim']=$check[0]["isimsoyisim"];
												$_SESSION['puan']=$check[0]["puan"];
												$_SESSION['gorev']=$check[0]["gorev"];
												$_SESSION['ID']=$check[0]["ID"];

												?>


												<div class="alert alert-success">Giriş Yapıldı! Yönlendiriliyorsunuz...</div>
												<meta http-equiv="refresh" content="2;url=<?=SITE?>">

												<?php
												exit();
											}
											else {
												echo '<div class="alert alert-danger"><i class=`fas fa-times-circle`></i> Email Adresi veya Şifre hatalı!</div>';
											}
										}
										else {
											echo '<div class="alert alert-warning"> <i class=`fas fa-info-circle`></i> Lütfen boş bırakılan yerleri doldurunuz veya doğrulamayı uygulayınız!</div>';
										}
									}

									?>
									
									<form action="" method="post">
										<div class="input-group mb-2 mr-sm-2">
											<input type="text" class="form-control" name="email" id="inlineFormInputGroupUsername2" placeholder="E-posta">
										</div>
										<div class="input-group form-group mb5">
											<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" name="remember_check" class="custom-control-input" id="exampleCheck1">
											<label class="custom-control-label" for="exampleCheck1">Beni hatırla</label>
											<a class="btn-fpswd float-right" href="#">Şifreni mi unuttun?</a>
										</div>
										<div class="g-recaptcha" data-sitekey="6Le7iuYcAAAAAIM0nTV8S-MYmTj2Hjon7Wdd-P1r"></div>

										<button type="submit" class="btn btn-log btn-block btn-thm" style="margin-top: 10px;">Giriş Yap</button>
										<p class="text-center mb30 mt20">Henüz hesabın yok mu? <a class="text-thm" href="#">Kayıt Ol</a></p>
										<hr>
										<div class="row mt30">

											<div class="col-lg-12">
												<button type="submit" class="btn btn-googl btn-block"><i class="fab fa-google-plus-g fa-2x float-left mt5"></i> Google+ ile giriş yap</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="row mt40 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="col-lg-12">
								<div class="sign_up_form">
									<ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
										<li class="nav-item" role="presentation">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Üye</a>
										</li>
										
									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
											


											<form action="<?=SITE?>register.php" method="post">
												<div class="form-group input-group">
													<input type="email" name="registeremail" class="form-control" id="exampleInputEmail2" placeholder="E-posta">
												</div>
												<div class="form-group input-group">
													<input type="text" name="username" class="form-control" id="exampleInputName" placeholder="İsim Soyisim">
												</div>
												<div class="form-group input-group mb20">
													<input type="password" name="sifre" class="form-control" id="exampleInputPassword2" placeholder="Şifre">
												</div>
												<div class="form-group input-group">
													<div class="alert alert-info"><i class="fas fa-info-circle"></i> Referans kodunuz varsa giriniz.</div>
													<input type="text" name="referans" class="form-control" placeholder="Referans Kodu" maxlength="6">

												</div>

												<input type="submit" name="kayit" class="btn btn-log btn-block btn-thm" value="Kayıt Ol">


											</form>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-left">
					<img class="nav_logo_img img-fluid mt15" src="<?=SITE?>images/logo/tsd-light.png" alt="TeamSoftDevs" width="55px;" height="auto;">
					<span class="mt15">E-Gaziantep</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#" data-toggle="modal" data-target="#staticBackdrop"></a></li>
					<li class="list-inline-item"><a class="muser_icon" href="page-register.html"><span class="flaticon-avatar"></span></a></li>
					<li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Ana Sayfa</span>

				</li>
				<li><span>Gaziantep Rehberi</span>
					<ul>
						<li><a href="<?=SITE?>populer-mekanlar">Popüler Mekanlar</a></li>
						<li><a href="<?=SITE?>ilanlar">İlanlar</a></li>
						<li><a href="<?=SITE?>kategoriler">Kategoriler</a></li>
					</ul>
				</li>
				<li><a href="<?=SITE?>pano">Pano</a></li>
				<li><a href="<?=SITE?>ilanlar">İlanlar</a></li>
				<li><a href="<?=SITE?>blog">Blog</a></li>
				<li><a href="<?=SITE?>hakkimizda">Hakkimizda</a></li>
				<li><a href="<?=SITE?>iletisim">İletişim</a></li>
				<li><a href="<?=SITE?>sikca-sorulan-sorular">S.S.S</a></li>
				<li><a href="<?=SITE?>giris-yap"><span class="flaticon-avatar"></span> Giriş Yap</a></li>
				<li><a href="<?=SITE?>kayit-ol"><span class="flaticon-edit"></span> Kayıt Ol</a></li>

			</ul>
		</nav>
	</div>


	<?php 

}
else
{
	$users=$DB->CallData("kullanicilar", "WHERE email=? AND state=?",array($_SESSION['email'],1),"ORDER BY ID ASC",1);
	?>



	<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu" style="background: #ccc;">
		<div class="container-fluid p0">
			<!-- Ace Responsive Menu -->
			<nav>
				<!-- Menu Toggle btn-->
				<div class="menu-toggle">
					<img class="nav_logo_img img-fluid" src="<?=SITE?>images/logo/tsd-light.png" alt="TeamSoftDevs" width="55px;" height="auto;">
					<button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<a href="<?=SITE?>" class="navbar_brand float-left dn-smd">
					<img class="logo1 img-fluid" src="<?=SITE?>images/logo/tsd-light.png" alt="TeamSoftDevs" width="55px;" height="auto;">
					<span>E-Gaziantep</span>
				</a>
				<!-- Responsive Menu Structure-->
				<ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
					<li>
						<a href="<?=SITE?>"><span class="title">Ana Sayfa</span></a>
						<!-- Level Two-->

					</li>
					<li>
						<a href="<?=SITE?>rehber"><span class="title">Gaziantep Rehberi</span></a>
						<!-- Level Two-->
						<ul>
							<li><a href="<?=SITE?>populer-mekanlar">Popüler Mekanlar</a></li>
							<li><a href="<?=SITE?>ilanlar">İlanlar</a></li>
							<li><a href="<?=SITE?>kategoriler">Kategoriler</a></li>
						</ul>
					</li>
					<li>
						<a href="<?=SITE?>pano"><span class="title">Pano</span></a>

					</li>
					<li>
						<a href="<?=SITE?>planlar"><span class="title">Planlar</span></a>

					</li>
					<li>
						<a href="<?=SITE?>blog"><span class="title">Blog</span></a>

					</li>
					<li>
						<a href="<?=SITE?>hakkimizda"><span class="title">Hakkımızda</span></a>

					</li>
					<li>
						<a href="<?=SITE?>iletisim"><span class="title">İletişim</span></a>

					</li>
					<li>
						<a href="<?=SITE?>sikca-sorulan-sorular"><span class="title">S.S.S</span></a>

					</li>
					<li class="user_setting">
						<div class="dropdown">
							<?php 

							$imageprofile=$users[0]["image"];
							if(empty($imageprofile)) { $images="varsayilanprofil.png";} else {$images="$imageprofile";}

							?>
							<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="<?=SITE?>images/users/<?=$images?>" alt="" style="width: 40px; height: 40px;"> <span class="dn-1366"> <?=$_SESSION['isimsoyisim']?> <span class="fa fa-angle-down"></span></span></a>
							<div class="dropdown-menu">
								<div class="user_set_header">
									<img class="float-left" src="<?=SITE?>images/users/<?=$images?>" alt="" style="width: 40px; height: 40px;">
									<p><?=$_SESSION['isimsoyisim']?> <br><span class="address"><?=$_SESSION['email']?><br>
										<?php 

										if($users[0]["status"]=="ALTIN") {
											?>
											<span class="badge badge-warning col-12" style="color: #eee; margin-top: 10px;"><?=$users[0]["status"]?></span></span></p>
											<?php
										}
										else if($users[0]["status"]=="ELMAS") {
											?>
											<span class="badge badge-info col-12" style="color: #eee; margin-top: 10px;"><?=$users[0]["status"]?></span></span></p>
											<?php

										}
										else if($users[0]["status"]=="ZÜMRÜT") {
											?>
											<span class="badge badge-success col-12" style="color: #eee; margin-top: 10px;"><?=$users[0]["status"]?></span></span></p>
											<?php

										}
										else if($users[0]["status"]=="KULLANICI") {
											?>
											<span class="badge badge-dark col-12" style="color: #eee; margin-top: 10px;"><?=$users[0]["status"]?></span></span></p>
											<?php

										}

										 ?>
										

								</div>
								<div class="user_setting_content" >
									
									<a class="dropdown-item" href="<?=SITE?>profilim" style="color: #111;"><i class="fas fa-user-edit" style="color: #7f8c8d;"></i> Profilim <span style="padding: 6px 7px 5px 7px;" class="right badge badge-info">1</span></a>
									<?php 

                                if($users[0]["status"] !="KULLANICI") {
                                    ?>
                                <a class="dropdown-item" href="<?=SITE?>kullanici-panel/" style="color: #111;"
                                    target="_blank"> <i class="fas fa-layer-group" style="color: #7f8c8d;"></i> Panele
                                    Git </a>
                                <?php } ?>
									<a class="dropdown-item" href="#" style="color: #111;"> <i class="fas fa-comments" style="color: #7f8c8d;"></i>Mesajlarım <span style="padding: 6px 7px 5px 7px;" class="right badge badge-warning">1</span></a>
									<a class="dropdown-item" href="#" style="color: #111;"> <i class="fas fa-file-invoice-dollar" style="color: #7f8c8d"></i>Satın Alma Geçmişim <span style="padding: 6px 7px 5px 7px;" class="right badge badge-primary">1</span></a>
									<a class="dropdown-item" href="#" style="color: #111;"> <i class="fas fa-question-circle" style="color: #7f8c8d"></i>Yardım <span style="padding: 6px 7px 5px 7px;" class="right badge badge-danger">1</span></a>
									<a class="dropdown-item" href="<?=SITE?>cikis-yap" style="color: #111;"><i class="fas fa-sign-out-alt" style="color: #7f8c8d;"></i> Çıkış yap</a>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</nav>
		</div>
	</header>


	<div class="preloader"></div>

	<!-- Main Header Nav -->

	<!-- Modal -->
	<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md mt100" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body container pb20 pl0 pr0 pt0">
					<div class="row">
						<div class="col-lg-12">
							<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Giriş Yap</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kayıt Ol</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-content container" id="myTabContent">
						<div class="row mt40 tab-pane fade show active pl20 pr20" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="col-lg-12">
								<div class="login_form">
									<form action="#">
										<div class="input-group mb-2 mr-sm-2">
											<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="E-posta">
										</div>
										<div class="input-group form-group mb5">
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="remember_check" id="exampleCheck1" <?php if(isset($_COOKIE['checked'])){echo "checked";} ?>>
											<label class="custom-control-label" for="exampleCheck1">Beni hatırla</label>
											<a class="btn-fpswd float-right" href="#">Şifreni mi unuttun?</a>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Giriş Yap</button>
										<p class="text-center mb30 mt20">Henüz hesabın yok mu? <a class="text-thm" href="#">Kayıt Ol</a></p>
										<hr>
										<div class="row mt30">

											<div class="col-lg-12">
												<button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Google+ ile giriş yap</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="row mt40 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="col-lg-12">
								<div class="sign_up_form">
									<ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
										<li class="nav-item" role="presentation">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Üye</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Şirket Sahibi</a>
										</li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
											<form action="#">
												<div class="form-group input-group">
													<input type="email" class="form-control" id="exampleInputEmail2" placeholder="E-posta">
												</div>
												<div class="form-group input-group">
													<input type="text" class="form-control" id="exampleInputName" placeholder="Kullanıcı Adı">
												</div>
												<div class="form-group input-group mb20">
													<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Şifre">
												</div>
												
												<button type="submit" class="btn btn-log btn-block btn-thm">Kayıt Ol</button>


											</form>
										</div>
										<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
											<form action="#">
												<div class="form-group input-group">
													<input type="email" class="form-control" id="exampleInputEmail3" placeholder="E-posta">
												</div>
												<div class="form-group input-group">
													<input type="text" class="form-control" id="exampleInputName2" placeholder="Kullanıcı Adı">
												</div>
												<div class="form-group input-group mb20">
													<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Şifre">
												</div>
												<button type="submit" class="btn btn-log btn-block btn-thm">Kayıt Ol</button>


											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-left">
					<img class="nav_logo_img img-fluid mt15" src="<?=SITE?>images/logo/tsd-light.png" alt="TeamSoftDevs" width="55px;" height="auto;">
					<span class="mt15">E-Gaziantep</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#" data-toggle="modal" data-target="#staticBackdrop"></a></li>
					<li class="list-inline-item"><a class="muser_icon" href="page-register.html"><span class="flaticon-avatar"></span></a></li>
					<li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Ana Sayfa</span>

				</li>
				<li><span>Gaziantep Rehberi</span>
					<ul>
						<li><a href="<?=SITE?>populer-mekanlar">Popüler Mekanlar</a></li>
						<li><a href="<?=SITE?>ilanlar">İlanlar</a></li>
						<li><a href="<?=SITE?>kategoriler">Kategoriler</a></li>
					</ul>
				</li>
				<li><a href="<?=SITE?>pano">Pano</a></li>
				<li><a href="<?=SITE?>ilanlar">İlanlar</a></li>
				<li><a href="<?=SITE?>blog">Blog</a></li>
				<li><a href="<?=SITE?>hakkimizda">Hakkimizda</a></li>
				<li><a href="<?=SITE?>iletisim">İletişim</a></li>
				<li><a href="<?=SITE?>sikca-sorulan-sorular">S.S.S</a></li>


			</ul>
		</nav>
	</div>




	<?php 

}
?>