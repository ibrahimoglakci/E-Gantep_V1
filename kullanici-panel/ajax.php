<?php 

@session_start();
@ob_start();
define("DATA", "data/");
define("PAGE", "include/");
define("CLASSPAGE", "class/");
include_once(DATA."connection.php");
define("SITE", $weburl);


if(!empty($_POST["ilan"]) && !empty($_POST["ID"]) && $_FILES && !empty($_FILES["file"]["tmp_name"]))
  {

      $ilan=$DB->filter($_POST["ilan"]);
       $ID=$DB->filter($_POST["ID"]);
       $resim=$DB->uploadMulti("file",$ilan,$ID,".\../\images/ilanresim/".$ID."");
}


if($_POST) {


  if(!empty($_POST['tables']) && !empty($_POST['ID']) && !empty($_POST['state'])) {
    $table=$DB->filter($_POST['tables']);
    $ID=$DB->filter($_POST['ID']);
    $state=$DB->filter($_POST['state']);
    $update=$DB->RunQuery("UPDATE ".$table,"SET state=? WHERE ID=?",array($state,$ID),1);
    if($update!=false) {
      echo "OK";
    }
    else {
      echo "ERROR";
    }
  }
  else {
    echo "Clean";
  }
}

?>
