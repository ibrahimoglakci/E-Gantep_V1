<?php 

if(!empty($_GET['ID'])) {

  $ID=$DB->filter($_GET["ID"]);
  $check=$DB->CallData("pano","WHERE state=?",array(1),"ORDER BY ID ASC",1);
  if($check!= false) {
    $userilan=$DB->CallData("kullanicilar","WHERE ID=?",array($_SESSION['ID']),"ORDER BY ID ASC",1);
    $currentilan= $userilan[0]["viewers"]-1;
    $value=$DB->CallData("pano","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
    if($value!=false) {
      $remove=$DB->RunQuery("DELETE FROM pano","WHERE ID=?", array($ID),1);
      $ilansil=$DB->RunQuery("UPDATE kullanicilar","SET viewers=? WHERE ID=?",array($currentilan,$userilan[0]['ID']),1);
       ?>
  <meta http-equiv="refresh" content="0;url=<?=SITE?>ilan-liste">
  <?php
    }
    else {
      ?>
  <meta http-equiv="refresh" content="0;url=<?=SITE?>ilan-liste">
  <?php

    }

  }
  else {
    ?>
    <meta http-equiv="refresh" content="0;url=<?=SITE?>">
    <?php

  }

}
else {
 ?>
 <meta http-equiv="refresh" content="0;url=<?=SITE?>">
 <?php
}
?>