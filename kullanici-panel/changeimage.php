<?php 

@session_start();
@ob_start();
define("DATA", "data/");
define("PAGE", "include/");
define("CLASSPAGE", "class/");
include_once(DATA."connection.php");
define("SITE", $weburl);

if($_POST) {
  if(!empty($_POST['tables']) && !empty($_POST['ID']) && !empty($_POST['image'])) {
    $table=$DB->filter($_POST['tables']);
    $ID=$DB->filter($_POST['ID']);
    $state=$DB->filter($_POST['image']);
    $update=$DB->RunQuery("UPDATE ".$table,"SET image=? WHERE ID=?",array($image,$ID),1);
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
