<?php 

if(!empty($_GET['ID'])) {

  $ID=$DB->filter($_GET["ID"]);
  $pano=$DB->CallData("pano","WHERE ID=?",array($ID),"ORDER BY ID ASC");
  $userinfo=$DB->CallData("kullanicilar","WHERE isimsoyisim=?",array($pano[0]["name"]),"ORDER BY ID ASC");
  if($pano!= false) {
   


      ?>



      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?=$pano[0]["title"]?> View Page</h1>
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
            

        

        <form action="#" method="post" enctype="multipart/form-data">
          <div class="col-md-12">
            <div class="card-body card card-primary">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Advert Author</label>
                    <input type="text" class="form-control" placeholder="Name Surname" name="adsoyad" value="<?=stripslashes($userinfo[0]["isimsoyisim"])?>" disabled>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Advert Title</label>
                    <input type="text" class="form-control" placeholder="Password" name="password" value="<?=stripslashes($pano[0]["title"])?>" autocomplete="off" disabled>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Advert Description</label>
                    <input type="text" class="form-control" placeholder="Password" name="password" value="<?=stripslashes($pano[0]["text"])?>" autocomplete="off" disabled>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Advert Date</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?=stripslashes($pano[0]["date"])?>" autocomplete="off" disabled>
                  </div>
                </div>
                
                 <div class="col-md-12">
                  <div class="form-group">
                    <label>Advert State</label>
                    <?php 
                    if($pano[0]["state"]==2)
                    {
                     ?>
                     <input type="text" class="form-control" value="Passive" autocomplete="off" style="background-color: tomato; color: #fff;" disabled>
                     
                     <?php 
                     }
                     else if($pano[0]["state"]==1)
                     {
                      ?>
                       <input type="text" class="form-control" value="Active" autocomplete="off" style="background-color: green; color: #fff;" disabled>
                      <?php 
                      }
                      else if($pano[0]["state"]==0)
                      {
                        ?>
                        <input type="text" class="form-control" value="Waiting Activation" autocomplete="off" style="background-color: aquamarine; color: #fff;" disabled>
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
                    <label>Advert Image</label>
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