<?php 


class DB {
	var $server="localhost";
	var $username="root";
	var $password="";
	var $dbname="egantep";
	var $connection;

	function __construct() {

		try {

			$this->connection = new PDO("mysql:host=".$this->server.";dbname=".$this->dbname.";charset=utf8",$this->username,$this->password);

		}catch(PDOException $error) {
			echo $error->getMessage();
			exit();
		}
	}


	public function uni($field,$value)
	{
		$stmt = $this->connection->prepare('SELECT '.$field.' FROM user WHERE seflink = :value');
		if ($stmt->execute(array(':value' => $value)))
		{
			return $stmt->rowCount();
		}
	    //query failed, throw errors or something
	}

		

	public function CallData($table,$where="",$wherearray="",$orderby="ORDER BY ID ASC",$limit="",$endlimit="") {

		$this->connection->query("SET CHARACTER SET utf8");
		$sql="SELECT * FROM ".$table;
		if(!empty($where) && !empty($wherearray)) {

			$sql.=" ".$where;
			if(!empty($orderby)) {$sql.=" ".$orderby;}
			if(!empty($limit)) {$sql.=" LIMIT ".$limit;}
			if(!empty($endlimit)) {$sql.=" LIMIT ".$limit .", " .$endlimit;}
			$run=$this->connection->prepare($sql);
			$end=$run->execute($wherearray);
			$data=$run->fetchAll(PDO::FETCH_ASSOC);
		} else {
			if(!empty($orderby)) {$sql.=" ".$orderby;}
			if(!empty($limit)) {$sql.=" LIMIT ".$limit;}
			if(!empty($limit) && !empty($endlimit)) {$sql.=" LIMIT ".$limit .", " .$endlimit;}
			$data=$this->connection->query($sql,PDO::FETCH_ASSOC);
		}

		if($data!=false && !empty($data)) {
			$datas=array();
			foreach($data as $infos) {
				$datas[]=$infos;
			}
			return $datas;
		} 
		else {
			return false;
		}
	}


	public function RunQuery($table,$areaname="",$dataarray="",$limit="") {
		$this->connection->query("SET CHARACTER SET utf8");
		if(!empty($areaname) && !empty($dataarray	)) {


			$sql=$table." ".$areaname;
			if(!empty($limit)) {$sql.=" LIMIT ".$limit;}
			$run=$this->connection->prepare($sql);
			$end=$run->execute($dataarray);
		}
		else {
			$sql=$table;
			if(!empty($limit)) {$sql.=" LIMIT ".$limit;}
			$end=$this->connection->exec($sql);
		}
		if($end!=false) {
			return true;
		}else {
			return false;
		}
		$this->connection->query("SET CHARACTER SET utf8");
	}

	public function uploadMulti($nesnename,$tablo='nan',$KID=1,$yuklenecekyer='images/',$tur='img',$w='',$h='',$resimyazisi='')
	{
		if($tur=="img")
		{
			if(!empty($_FILES[$nesnename]["name"][0]))
			{
				$dosyanizinadi=$_FILES[$nesnename]["name"][0];
				$tmp_name=$_FILES[$nesnename]["tmp_name"][0];
				$uzanti=$this->uzanti($dosyanizinadi);
				if($uzanti=="png" || $uzanti=="jpg" || $uzanti=="jpeg" || $uzanti=="gif")
				{
					$resimler = array();
					foreach ($_FILES[$nesnename] as $k => $l) {
					  foreach ($l as $i => $v) {
						if (!array_key_exists($i, $resimler))
						  $resimler[$i] = array();
						$resimler[$i][$k] = $v;
					  }
					}
					
					foreach ($resimler as $resim){
						$uzanti=$this->uzanti($resim["name"]);
						if($uzanti=="png" || $uzanti=="jpg" || $uzanti=="jpeg" || $uzanti=="gif")
						{
							$handle = new Upload($resim);
	if ($handle->uploaded) {
		
		/* Resmi Yeniden Adlandır */
		$rand=uniqid(true);
		$handle->file_new_name_body = $rand;
		
		/* Resmi Yeniden Boyutlandır */
						if(!empty($w))
						{
							if(!empty($h))
							{
								
									$handle->image_resize = true;
								$handle->image_x = $w;
								$handle->image_y = $h;
								
							}
							else
							{
								if($handle->image_src_x>$w)
								{
									$handle->image_resize = true;
									$handle->image_x = $w;
									$handle->image_ratio_y = true;
								}
							}
						}
						else if(!empty($h))
						{
							if($handle->image_src_h>$h)
							{
								$handle->image_resize = true;
								$handle->image_y = $h;
								$handle->image_ratio_x = true;
							}
						}
		
		//üzerine yazı yazdırma
		if(!empty($resimyazisi))
		{
							$handle->image_text   = $resimyazisi;
						$handle->image_text_color      = '#FFFFFF';
						$handle->image_text_opacity    = 80;
						//$handle->image_text_background = '#FFFFFF';
						$handle->image_text_background_opacity = 70;
						$handle->image_text_font       = 5;
						$handle->image_text_padding    = 1;
		}
			
			
		/* Resim Yükleme İzni */
		$handle->allowed = array('image/*');
		
		/* Resmi İşle */
		//$handle->Process(realpath("../")."/upload/resim/");
		$handle->Process($yuklenecekyer);
		if ($handle->processed) {
		      $yukleme=$rand.".".$handle->image_src_type;
			  if(!empty($yukleme))
				{
					//$yuklemekontrol=$fnk->DKontrol("../images/resimler/".$yukleme);
					$sira=$this->CallID("resimler");
					
					$sql=$this->RunQuery("INSERT INTO resimler","SET pano=?, KID=?, image=?, date=?",array($tablo,$KID,$yukleme,date("Y-m-d")));
					
					
				}
				else
				{
					 return false;
				}
				
		} else {
                   return false;
		}

		$handle-> Clean();

	} else {
		return false;
	}
					
					
						}
					}
					return true;
					
					
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}


	public function convertMonthToTurkishCharacter($date){
		$aylar = array(
			'January'    =>    'Ocak',
			'February'    =>    'Şubat',
			'March'        =>    'Mart',
			'April'        =>    'Nisan',
			'May'        =>    'Mayıs',
			'June'        =>    'Haziran',
			'July'        =>    'Temmuz',
			'August'    =>    'Ağustos',
			'September'    =>    'Eylül',
			'October'    =>    'Ekim',
			'November'    =>    'Kasım',
			'December'    =>    'Aralık',
			'Monday'    =>    'Pazartesi',
			'Tuesday'    =>    'Salı',
			'Wednesday'    =>    'Çarşamba',
			'Thursday'    =>    'Perşembe',
			'Friday'    =>    'Cuma',
			'Saturday'    =>    'Cumartesi',
			'Sunday'    =>    'Pazar',
			'Jan' => 'Oca',
			'Feb' => 'Şub',
			'Mar' => 'Mar',
			'Apr' => 'Nis',
			'May' => 'May',
			'Jun' => 'Haz',
			'Jul' => 'Tem',
			'Aug' => 'Ağu',
			'Sep' => 'Eyl',
			'Oct' => 'Eki',
			'Nov' => 'Kas',
			'Dec' => 'Ara'

		);
		return  strtr($date, $aylar);
	}


	public function seflink($val) {
		$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#','?','*','!','.','(',')');
		$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp','','','','','','');
		$string = strtolower(str_replace($find, $replace, $val));
		$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
		$string = trim(preg_replace('/\s+/', ' ', $string));
		$string = str_replace(' ', '-', $string);
		return $string;
	}

	public function AddModule() {
		if(!empty($_POST["title"])) {
			$title=$_POST['title'];
			if(!empty($_POST["state"])) {$state=1;} else {$state=2;}
			$table=str_replace("-","",$this->seflink($title));
			$check=$this->CallData("modules","WHERE tables=?",array($table),"ORDER BY ID ASC", 1);
			if($check!=false) {
				return false;
			}
			else {
				$createtable=$this->RunQuery('CREATE TABLE IF NOT EXISTS `'.$table.'` (
					`ID` int(11) NOT NULL AUTO_INCREMENT,
					`title` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`seflink` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`category` int(11) DEFAULT NULL,
					`text` text COLLATE utf8_general_ci,
					`image` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`phone` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`adress` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`email` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`let` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`lng` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`seo` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`description` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
					`state` int(5) DEFAULT NULL,
					`rownumber` int(11) DEFAULT NULL,
					`date` date DEFAULT NULL,
					PRIMARY KEY (`ID`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1 ;');
				$addmodule=$this->RunQuery("INSERT INTO modules","SET title=?, tables=?, state=?, date=?",array($title,$table,$state,date("Y-m-d")));
				$addcategory=$this->RunQuery("INSERT INTO categories","SET title=?, seflink=?, tables=?, state=?, date=?",array($title,$table,'module',1,date("Y-m-d")));
				if($addmodule!=false) {
					return true;
				}
				else {
					return false;
				}
			}
			

		} else {
			return false;
		}
	}



	public function filter($val,$tf=false)
	{
		if($tf==false){$val=strip_tags($val);}
		$val=addslashes(trim($val));
		return $val;
	}

	public function uzanti($dosyaadi) {
		$parca=explode(".",$dosyaadi);
		$uzanti=end($parca);
		$donustur=strtolower($uzanti);
		return $donustur;
	}

	public function upload($nesnename,$yuklenecekyer='images/',$tur='img',$w='',$h='',$resimyazisi='')
	{
		if($tur=="img")
		{
			if(!empty($_FILES[$nesnename]["name"]))
			{
				$dosyanizinadi=$_FILES[$nesnename]["name"];
				$tmp_name=$_FILES[$nesnename]["tmp_name"];
				$uzanti=$this->uzanti($dosyanizinadi);
				if($uzanti=="png" || $uzanti=="jpg" || $uzanti=="jpeg" || $uzanti=="gif")
				{
					$classIMG=new upload($_FILES[$nesnename]);
					if($classIMG->uploaded)
					{
						if(!empty($w))
						{
							if(!empty($h))
							{
								$classIMG->image_resize=true;
								$classIMG->image_x=$w;
								$classIMG->image_y=$h;
							}
							else
							{
								if($classIMG->image_src_x>$w)
								{
									$classIMG->image_resize=true;
									$classIMG->image_ratio_y=true;
									$classIMG->image_x=$w;
								}
							}
						}
						else if(!empty($h))
						{
							if($classIMG->image_src_h>$h)
							{
								$classIMG->image_resize=true;
								$classIMG->image_ratio_x=true;
								$classIMG->image_y=$h;
							}
						}
						
						if(!empty($resimyazisi))
						{
							$classIMG->image_text = $resimyazisi;

							$classIMG->image_text_direction = 'v';

							$classIMG->image_text_color = '#FFFFFF';

							$classIMG->image_text_position = 'BL';
						}
						$rand=uniqid(true);
						$classIMG->file_new_name_body=$rand;
						$classIMG->Process($yuklenecekyer);
						if($classIMG->processed)
						{
							$resimadi=$rand.".".$classIMG->image_src_type;
							return $resimadi;
						}
						else
						{
							return false;
						}
					}
					else
					{
						return false;
					}
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		else if($tur=="ds")
		{
			
			if(!empty($_FILES[$nesnename]["name"]))
			{
				
				$dosyanizinadi=$_FILES[$nesnename]["name"];
				$tmp_name=$_FILES[$nesnename]["tmp_name"];
				$uzanti=$this->uzanti($dosyanizinadi);
				if($uzanti=="doc" || $uzanti=="docx" || $uzanti=="pdf" || $uzanti=="xlsx" || $uzanti=="xls" || $uzanti=="ppt" || $uzanti=="xml" || $uzanti=="mp4" || $uzanti=="avi" || $uzanti=="mov")
				{
					
					$classIMG=new upload($_FILES[$nesnename]);
					if($classIMG->uploaded)
					{
						$rand=uniqid(true);
						$classIMG->file_new_name_body=$rand;
						$classIMG->Process($yuklenecekyer);
						if($classIMG->processed)
						{
							$dokuman=$rand.".".$uzanti;
							return $dokuman;
						}
						else
						{
							return false;
						}
					}
				}
			}
		}
		else
		{
			return false;
		}
	}



	public function callCategory($table,$selectID="",$length=-1) {
		$length++;
		$category=$this->CallData("categories","WHERE tables=?",array($table),"ORDER BY ID ASC");
		if($category!=false) {
			for($q=0;$q<count($category);$q++) {
				$categoryseflink=$category[$q]["seflink"];
				$categoryID=$category[$q]["ID"];
				if($selectID==$categoryID) {
					echo '<option value="'.$categoryID.'" selected="selected">'.str_repeat("&nbsp;&nbsp;&nbsp;",$length). stripslashes($category[$q]["title"]).'</option>';
				}
				else {
					echo '<option value="'.$categoryID.'">'.str_repeat("&nbsp;&nbsp;&nbsp;",$length). stripslashes($category[$q]["title"]).'</option>';
				}
				if($categoryseflink==$table) {break;}
				$this->callCategory($categoryseflink,$selectID,$length);
			}
		}
		else {
			return false;
		}
	}


	public function simpleCategory($table,$selectID="",$length=-1) {
		$length++;
		$category=$this->CallData("categories","WHERE seflink=? AND tables=?",array($table,"module"),"ORDER BY ID ASC");
		if($category!=false) {
			for($q=0;$q<count($category);$q++) {
				$categoryseflink=$category[$q]["seflink"];
				$categoryID=$category[$q]["ID"];
				if($selectID==$categoryID) {
					echo '<option value="'.$categoryID.'" selected="selected">'.str_repeat("&nbsp;&nbsp;&nbsp;",$length). stripslashes($category[$q]["title"]).'</option>';
				}
				else {
					echo '<option value="'.$categoryID.'">'.str_repeat("&nbsp;&nbsp;&nbsp;",$length). stripslashes($category[$q]["title"]).'</option>';
				}
			}
		}
		else {
			return false;
		}
	}


	public function CallID($tablo)
	{
		$sql=$this->connection->query("SHOW TABLE STATUS FROM `".$this->dbname."` LIKE '".$tablo."'");
		if($sql!=false)
		{
			foreach ($sql as $result)
			{
				$IDbilgisi=$result["Auto_increment"];
				return $IDbilgisi;
				break;
			}
		}
		else
		{
			return false;
		}
	} 




	public function MailGonder($mail,$konu="",$mesaj)
	{
		$posta = new PHPMailer();
		$posta->CharSet = "UTF-8";
				$posta->IsSMTP();                                   // send via SMTP
				$posta->Host     = 	"smtp.gmail.com"; // SMTP servers
				$posta->SMTPAuth = true;     // turn on SMTP authentication
				$posta->Username = "ibrahimoglkc@gmail.com";  // SMTP username
				$posta->Password = "36280426674i"; // SMTP password
				$posta->Port     = 587; 
				$posta->From     = "ibrahimoglkc@gmail.com"; // smtp kullanýcý adýnýz ile ayný olmalý
				$posta->Fromname = "ibrahimoglkc@gmail.com";
				$posta->AddAddress($mail, "ibrahimoglkc@gmail.com");
				$posta->Subject  =  $konu;
				$posta->Body     =  $mesaj;
				$posta->send();
				
				if(!$posta->send())
				{
					return false;
					echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}
				else
				{
					return true;
				}
			}

			function sendMail($email,$konu="",$mesaj) {
				$posta = new PHPMailer(true);
				$posta->CharSet = "UTF-8";
				try {
					$posta-> SMTPDebug = 0; 
					$posta->isSMTP();
					$posta->Host = 'smtp.gmail.com';
					$posta->SMTPAuth = true;
					$posta->Username = 'ibrahimoglkc@gmail.com';
					$posta->Password = '36280426674i';
					$posta->Port = 587;
					$posta->setFrom('ibrahimoglkc@gmail.com', 'ibrahimoglkc@gmail.com');
					$posta->addAddress($email,'ibrahimoglkc@gmail.com');
					$posta->isHTML(true);
					
					$posta->Subject = $konu;

					$posta->Body = $mesaj;
					$posta->send();


				}catch(Exception $e) {
					echo "Message could not be sent. Mailer Error: {$posta->ErrorInfo}";
				}
			}


		}


	?>