<?php 

if(!empty($_GET['ID'])) {

  $ID=$DB->filter($_GET["ID"]);
  $yorumlar=$DB->CallData("ilanyorumlar","WHERE ID=?",array($ID),"ORDER BY ID ASC");
  $pano=$DB->CallData("pano","WHERE ID=?",array($yorumlar[0]["ilanID"]),"ORDER BY ID ASC");
  $userinfo=$DB->CallData("kullanicilar","WHERE ID=?",array($yorumlar[0]["userID"]),"ORDER BY ID ASC");
  if($yorumlar!= false) {
   


      ?>



      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?=$pano[0]["title"]?> Edit Page</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=SITE?>">Home</a></li>
                  <li class="breadcrumb-item active"><?=$pano[0]["title"]?></li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
          <div class="container-fluid">
            

          <?php 

          if($_POST)
          {

          }

           ?>
            

        <form action="#" method="post" enctype="multipart/form-data">
          <div class="col-md-12">
            <div class="card-body card card-primary">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Comments Author</label>
                    <input type="text" class="form-control" placeholder="Name Surname" name="adsoyad" value="<?=stripslashes($userinfo[0]["isimsoyisim"])?>" disabled>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Comments Text</label>
                    <input type="text" class="form-control" placeholder="Password" name="password" value="<?=stripslashes($yorumlar[0]["yorum"])?>" autocomplete="off" disabled>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Comments Date</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?=stripslashes($yorumlar[0]["date"])?>" autocomplete="off" disabled>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Comments Advert</label>
                    <input type="text" class="form-control" placeholder="Telefon numarası" name="telefon" value="<?=stripslashes($pano[0]["title"])?>" autocomplete="off" disabled>
                  </div>
                </div>
                 <div class="col-md-12">
                  <div class="form-group">
                    <label>Comments State</label>
                    <?php 
                    if($yorumlar[0]["state"]==2)
                    {
                     ?>
                     <input type="text" class="form-control" value="Passive" autocomplete="off" style="background-color: tomato; color: #fff;" disabled>
                     
                     <?php 
                     }
                     else if($yorumlar[0]["state"]==1)
                     {
                      ?>
                       <input type="text" class="form-control" value="Active" autocomplete="off" style="background-color: green; color: #fff;" disabled>
                      <?php 
                      }
                       ?>
                    
                    
                  </div>
                </div>
                <?php 
                if(!empty($pano[0]["image"])) {$image=$pano[0]["image"];} else {$image='varsayilan.jpg';} 
                 ?>
                 <div class="col-md-12">
                  <div class="form-group">
                    <label>Comments Advert İmage</label>
                    <img src="<?=SITE?>../images/pano/<?=$image?>" style="width: 150px; height: 100px; margin-left: 90px;">
                  </div>
                </div>
                



               <!-- /.row -->
             </div>
             <!-- /.card-body -->
           </div>
         </div>
       </form>
     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>

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



?>