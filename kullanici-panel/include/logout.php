<?php 

@session_destroy();
@ob_end_flush();

?>


    <div class="row" style="margin-left: 17%; margin-top: 0%;">
      <div class="col-md-12">
        <div class="alert alert-success">Oturum kapatıldı! Yönlendiriliyorsunuz...</div>
      </div>
    </div>






<meta http-equiv="refresh" content="2;url=<?=SITE?>login">

<?php 

exit();

?>