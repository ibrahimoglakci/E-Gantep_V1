<?php 

if(!empty($_GET['ID'])) {

  $ID=$DB->filter($_GET["ID"]);
  $check=$DB->CallData("kullanicilar","WHERE state=?",array(1),"ORDER BY ID ASC",1);
  if($check!= false) {

    $value=$DB->CallData("kullanicilar","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
    if($value!=false) {
      $remove=$DB->RunQuery("DELETE FROM kullanicilar","WHERE ID=?", array($ID),1);
       ?>
  <meta http-equiv="refresh" content="0;url=<?=SITE?>list-user">
  <?php
    }
    else {
      ?>
  <meta http-equiv="refresh" content="0;url=<?=SITE?>list-user">
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