<?php 

function reCaptchas($response)
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




if(empty($_SESSION['ID']) && empty($_SESSION['isimsoyisim'])) {

?>

	<head>
		<title>Giriş Yap | Gaziantep Rehberi</title>
	</head>

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">Giriş Yap</h2>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Giriş Yap</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our SigIn -->
	<section class="our-log">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">

						<?php 
									if($_POST) {
										if(!empty($_POST["g-recaptcha-response"]) && isset($_POST["g-recaptcha-response"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
											$email=$DB->filter($_POST['email']);
											$password=$DB->filter($_POST['password']);
											$resultt=reCaptchas($_POST['g-recaptcha-response']);

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



						<form action="" method="POST">
							<div class="input-group mb-2 mr-sm-2">
							    <input type="text" class="form-control" name="email" id="inlineFormInputGroupUsername3" placeholder="E-posta adresi">
							</div>
							<div class="input-group form-group mb5">
						    	<input type="password" class="form-control" name="password" id="exampleInputPassword4" placeholder="Şifre">
							</div>
							<div class="form-group custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="remember_check" id="exampleCheck2" <?php if(isset($_COOKIE['checked'])){echo "checked";} ?>>
								<label class="custom-control-label" for="exampleCheck2">Beni Hatırla</label>
								<a class="btn-fpswd float-right" href="#">Şifreni mi unuttun?</a>
							</div>
							<div class="g-recaptcha mb30" data-sitekey="6Le7iuYcAAAAAIM0nTV8S-MYmTj2Hjon7Wdd-P1r"></div>
							<button type="submit" class="btn btn-log btn-block btn-thm">Giriş Yap</button>
							<p class="text-center mb30 mt20">Henüz hesabınız yok mu? <a class="text-thm" href="#">Kayıt Ol</a></p>
							<hr>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	

<?php 
	
	}
	else {

	?>

	<meta http-equiv="refresh" content="0;url=<?=SITE?>">

	<?php
	}
 ?>