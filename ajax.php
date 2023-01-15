<?php 

@session_start();
@ob_start();
define("DATA", "data/");
define("PAGE", "includes/");
define("CLASSPAGE", "admin/class/");
include_once(DATA."connection.php");
define("SITE", $weburl);
date_default_timezone_set('Europe/Istanbul');


if($_POST) {
	if(!empty($_POST['islemtipi'])) {
		$islemtipi=$DB->filter($_POST['islemtipi']);

		switch ($islemtipi) {
			case 'ilanfavoriekle':
				
				if(!empty($_SESSION["email"])) {
					$uyemail=$DB->filter($_SESSION['email']);
					$uyeler=$DB->CallData("kullanicilar","WHERE email=? AND state=?",array($uyemail,1),"ORDER BY ID ASC");
					if($uyeler!=false) {

						if(!empty($_POST['ilanID']) && !empty($_POST['ilanKey'])) {
							$ilanID=$DB->filter($_POST["ilanID"]);
							$karsilastirmakey=md5(sha1($ilanID));
							$ilanKey=$DB->filter($_POST["ilanKey"]);
							if($karsilastirmakey==$ilanKey) {
								$ilanInfo=$DB->CallData("pano","WHERE ID=? AND state=?",array($ilanID,1),"ORDER BY ID ASC",1);
								if($ilanInfo!=false) {
									
									$favoricheck=$DB->CallData("favoriilanlar","WHERE userID=? AND ilanID=?",array($uyeler[0]["ID"],$ilanInfo[0]["ID"]));
									if($favoricheck!=false){
										$sil=$DB->RunQuery("DELETE FROM favoriilanlar","WHERE userID=? AND ilanID=?",array($uyeler[0]["ID"],$ilanInfo[0]["ID"]),1);
										$removeactivity=$DB->RunQuery("INSERT INTO aktivite","SET userID=?, activity=?, type=?, date=?",array($uyeler[0]["ID"],"<span>".$ilanInfo[0]["title"]."</span> adlı ilanı favoriden kaldırdınız.","unfavori",date("Y-m-d H:i:s")));
										$return_arr = array("#111","far fa-heart","fas fa-heart");
					                    echo json_encode($return_arr);
									}
									else
									{
										$ekle=$DB->RunQuery("INSERT INTO favoriilanlar","SET userID=?, ilanID=?, date=?",array($uyeler[0]["ID"],$ilanInfo[0]["ID"],date("Y-m-d")));
										$addactivity=$DB->RunQuery("INSERT INTO aktivite","SET userID=?, activity=?, type=?, date=?",array($uyeler[0]["ID"],"<span>".$ilanInfo[0]["title"]."</span> adlı ilanı favoriye eklediniz.","favori",date("Y-m-d H:i:s")));
										$return_arr = array("red","fas fa-heart","far fa-heart");
					                    echo json_encode($return_arr);
									}
								}
								else
								{
									echo "ERROR";
								}
							}
							else
							{
								echo "GUVENLIK IHLALI";
							}
						}
						else
						{
							echo "ERROR";
						}


					}
					else
					{
						echo "ERROR";
					}

				}
				else
				{

				}


				break;
			
			default:
				echo "ERROR";
				break;
		}
	}
}

 ?>

