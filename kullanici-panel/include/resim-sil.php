<?php
if(!empty($_GET["silinecekID"]))
{
  $ID=$DB->filter($_GET["silinecekID"]);
  
    $veri=$DB->CallData("resimler","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
    if($veri!=false)
    {
      $resim=$veri[0]["image"];
      if(file_exists("<?=SITE?>../images/ilanresim/".$resim))
      {
        unlink("<?=SITE?>../images/ilanresim/".$resim);
      }
      $sil=$DB->RunQuery("DELETE FROM resimler","WHERE ID=?",array($ID),1);
      ?>
        <meta http-equiv="refresh" content="0;url=<?=SITE?>resimler/<?=$_GET['ilan']?>/<?=$_GET['ID']?>">
        <?php
    }
    else
    {
      ?>
        <meta http-equiv="refresh" content="0;url=<?=SITE?>resimler/<?=$_GET['ilan']?>/<?=$_GET['ID']?>">
        <?php
    }
}
else
{
  ?>
        <meta http-equiv="refresh" content="0;url=<?=SITE?>">
        <?php
}
 ?>