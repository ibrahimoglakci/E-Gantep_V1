<?php 

if(!empty($_GET['table']) && !empty($_GET['ID'])) {

  $table=$DB->filter($_GET["table"]);
  $ID=$DB->filter($_GET["ID"]);
  $categories=$DB->CallData("categories","WHERE title=? AND state=?",array('Blog',1),"ORDER BY ID ASC",1);
  $check=$DB->CallData("modules","WHERE tables=? AND state=?",array($table,1),"ORDER BY ID ASC",1);
  if($check!= false) {

    $value=$DB->CallData($check[0]["tables"],"WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
    if($value!=false) {
      $remove=$DB->RunQuery("DELETE FROM ".$table,"WHERE ID=?", array($ID),1);
      if($check[0]["tables"]=="blog") {
          $blogsayisi = $categories[0]["description"]-1;
          $removeblog=$DB->RunQuery("UPDATE categories","SET description=? WHERE title=?",array($blogsayisi,'Blog'));
      }
       ?>
  <meta http-equiv="refresh" content="0;url=<?=SITE?>list/<?=$check[0]["tables"]?>">
  <?php
    }
    else {
      ?>
  <meta http-equiv="refresh" content="0;url=<?=SITE?>list/<?=$check[0]["tables"]?>">
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