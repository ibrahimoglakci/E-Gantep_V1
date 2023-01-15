<?php 

@session_destroy();
@ob_end_flush();

 ?>

 <head>
   <title>Çıkış Yapılıyor... Lütfen Bekleyiniz</title>
 </head>

<div class="alert alert-success">Oturum kapatıldı! Yönlendiriliyorsunuz...</div>
<meta http-equiv="refresh" content="1;url=<?=ANASITE?>">

<?php 
  
  exit();

 ?>