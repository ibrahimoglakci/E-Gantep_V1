<?php 

@session_start();
@ob_start();
define("DATA", "data/");
define("PAGE", "include/");
define("CLASSPAGE", "class/");
include_once(DATA."connection.php");
define("SITE", $weburl);

if($_POST) {
  if(!empty($_POST['tables']) && !empty($_POST['ID']) && !empty($_POST['state']) && !empty($_POST['userID'])) {
    $table=$DB->filter($_POST['tables']);
    $ID=$DB->filter($_POST['ID']);
    $state=$DB->filter($_POST['state']);
    $userID=$DB->filter($_POST['userID']);
    $update=$DB->RunQuery("UPDATE ".$table,"SET state=? WHERE ID=?",array($state,$ID),1);
    $addactivity=$DB->RunQuery("INSERT INTO aktivite","SET userID=?, activity=?, type=?, date=?",array($userID,"<span>İlanınız</span> ekiplerimiz tarafından onaylandı ve yayına alındı.","onay",date("Y-m-d H:i:s")));
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
