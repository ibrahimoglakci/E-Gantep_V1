<?php 


define("DATA", "data/");
define("PAGE", "includes/");
define("CLASSPAGE", "admin/class/");
include_once(DATA."connection.php");
define("SITE", $weburl);
date_default_timezone_set('Europe/Istanbul');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'admin/PHPMailer/src/Exception.php';
require 'admin/PHPMailer/src/PHPMailer.php';
require 'admin/PHPMailer/src/SMTP.php';




if($_POST) {
	if(!empty($_POST['kayit']))
	{
		if (!empty($_POST['registeremail']) && !empty($_POST['username']) && !empty($_POST['sifre'])) {

			$usersall=$DB->CallData("kullanicilar","ORDER BY ID ASC");
			$email=$DB->filter($_POST['registeremail']);
			$password=$DB->filter(md5($_POST['sifre']));
			$kullaniciadi=$DB->filter($_POST['username']);
			$seflink=$DB->seflink($kullaniciadi);
			$checkemail=$DB->CallData("kullanicilar","WHERE email=?",array($email),"ORDER BY ID ASC",1);
			if($checkemail!=false) {
				?>
				<meta http-equiv="refresh" content="1;url=<?=SITE?>kayit-ol/hata/100">
				<?php
			}
			else
			{
				if(strlen($_POST['sifre'])>7) {


					$createreferans = substr(number_format(time() * rand(), 0, '', ''), 0,6);

					for ($i=0; $i <count($usersall) ; $i++) { 
						if($createreferans==$usersall[$i]["referans_kod"]) {
							$createreferans = substr(number_format(time() * rand(), 0, '', ''), 0,6);
						}
					}



					$mail = new PHPMailer(true);
					try {
						$mail -> SMTPDebug = 0;
						$mail -> isSMTP();
						$mail -> Host = 'smtp.gmail.com';
						$mail ->SMTPAuth = true;
						$mail ->Username = 'ibrahimoglkc@gmail.com';
						$mail ->Password = '36280426674i';
						$mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
						$mail ->Port = 587;
						$mail ->setFrom('ibrahimoglkc@gmail.com', 'E-Gaziantep.com');
						$mail ->addAddress($email, $kullaniciadi);
						$mail ->isHTML(true);
						$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0,6);
						$mail ->Subject = 'Email verification';

						$mail ->Body = '<p>Your verification code is: <b style="font-size: 30px;">'.$verification_code.' </b></p>';
						$mail->send();


						if(!empty($_POST['referans'])) {
							$referanskodu=$DB->filter($_POST['referans']);
							$kullanicilar=$DB->CallData("kullanicilar","WHERE referans_kod=?",array($referanskodu),"ORDER BY ID ASC",1);

							$puan=$kullanicilar[0]["puan"];
							if($puan==NULL) {
								$puanekle=1;
							}
							else {
								$puanekle=$puan+1;
							}

							if($referanskodu==$kullanicilar[0]["referans_kod"]) {
								$add=$DB->RunQuery("INSERT INTO kullanicilar","SET isimsoyisim=?, seflink=?, email=?, password=?, yildiz=?, referans_kod=?, puan=?, verification_code=?, email_verified_at=?, status=?, state=?, date=?",array($kullaniciadi,$seflink,$email,$password,0,$createreferans,1,$verification_code,NULL,"KULLANICI",2,date("Y-m-d")));
								$refsirala=$DB->CallData("kullanicilar","WHERE email=?",array($email),"ORDER BY ID ASC",1);
								$addref=$DB->RunQuery("INSERT INTO referanslar","SET uyeID=?, uyeolunanID=?",array($refsirala[0]["ID"],$kullanicilar[0]["ID"]));
								$update=$DB->RunQuery("UPDATE kullanicilar","SET puan=? WHERE email=?",array($puanekle,$kullanicilar[0]["email"]));
								$addactivity=$DB->RunQuery("INSERT INTO aktivite","SET userID=?, activity=?, type=?, date=?",array($kullanicilar[0]["ID"],"<span>".$refsirala[0]["isimsoyisim"]."</span> adlı kişi sizin referanslınız ile sitemize üye oldu. Teşekkür Ederiz.","referans",date("Y-m-d H:i:s")));
								$addaccoin=$DB->RunQuery("INSERT INTO aktivite","SET userID=?, activity=?, type=?, date=?",array($kullanicilar[0]["ID"],"Referans davetinizden dolayı <span>1 GCoin</span> kazandınız","coin",date("Y-m-d H:i:s")));
							}

						}
						else
						{
							$add=$DB->RunQuery("INSERT INTO kullanicilar","SET isimsoyisim=?, seflink=?, email=?, password=?, yildiz=?, referans_kod=?, verification_code=?, email_verified_at=?, status=?, state=?, date=?",array($kullaniciadi,$seflink,$email,$password,0,$createreferans,$verification_code,NULL,"KULLANICI",2,date("Y-m-d")));
						}

						?>

						<meta http-equiv="refresh" content="2;url=<?=SITE?>hesap-onay/<?=$email?>">

						<?php
					}catch(Exception $e) {
						echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
					}

					if($add!=false) {
						?>
						<div class="alert alert-success">
							Başarıyla kayıt oldunuz. Onay sayfasına yönlendiriliyorsunuz...
						</div>

						<?php
					}
					else {
						?>
						<div class="alert alert-danger">
							Kayıt olurken bir hata ile karşılaşıldı. Daha sonra tekrar deneyiniz!
						</div>
						<?php
					}
				}
				else
				{
					?>
					<meta http-equiv="refresh" content="1;url=<?=SITE?>kayit-ol/hata/35">
					<?php
				}

			}

		}
	}

}




?>

