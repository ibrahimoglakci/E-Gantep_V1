<?php 

if(!empty($_GET['ID'])) {

  $ID=$DB->filter($_GET["ID"]);
  $check=$DB->CallData("kullanicilar","WHERE state=?",array(1),"ORDER BY ID ASC");
  if($check!= false) {
    $value=$DB->CallData("kullanicilar","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
    if($value!=false) {


      ?>



      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?=$value[0]["isimsoyisim"]?> Edit Page</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=SITE?>">Home</a></li>
                  <li class="breadcrumb-item active"><?=$value[0]["isimsoyisim"]?></li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <a href="<?=SITE?>list-user" class="btn btn-warning" style="float: right; margin-bottom: 10px; margin-left: 10px; color: white;"><i class="fas fa-bars"></i> LIST</a> 
                <a href="<?=SITE?>add/<?=$check[0]["tables"]?>" class="btn btn-success" style="float: right; margin-bottom: 10px;"><i class="fas fa-plus-circle"></i> Add New</a>
              </div>
            </div>

            <?php 

            if($_POST) {
              if(!empty($_POST["adsoyad"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["telefon"]) && !empty($_POST["gorev"]) && !empty($_POST["puan"])) {
               $adsoyad=$DB->filter($_POST['adsoyad']);     
               $email=$DB->filter($_POST['email']);
               $password=md5($DB->filter($_POST['password']));
               $telefon=$DB->filter($_POST['telefon']);
               $gorev=$DB->filter($_POST['gorev']);
               $puan=$DB->filter($_POST['puan']);
               $seflink=$DB->seflink($adsoyad);

               $add=$DB->RunQuery("UPDATE kullanicilar","SET isimsoyisim=?, seflink=?, email=?, password=?, telefon=?, gorev=?, puan=?, state=?, date=? WHERE ID=?",array($adsoyad,$seflink,$email,$password,$telefon,$gorev,$puan,$value[0]["state"],date("Y-m-d"),$value[0]["ID"]));

               if($add!=false) {
                $value=$DB->CallData("kullanicilar","WHERE ID=?",array($value[0]["ID"]),"ORDER BY ID ASC",1);
                ?>

                <div class="alert alert-success">
                  User successfully updated.
                </div>
                <?php
              }
              else {
               ?>
               <div class="alert alert-danger">
                A problem was encountered while updating!
              </div>
              <?php
            }
          }
          else {
            ?>
            <div class="alert alert-danger">
              Please fill in the blanks!
            </div>
            <?php
          }
        }

        ?>

        <form action="#" method="post" enctype="multipart/form-data">
          <div class="col-md-8">
            <div class="card-body card card-primary">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Select Category</label>
                    <select class="form-control select2" style="width: 100%;" name="gorev">
                      <option value="<?=$value[0]["gorev"]?>"><?=$value[0]["gorev"]?></option>
                      <option value="ADMIN">ADMIN</option>
                      <?php 
                      $ranks=$DB->CallData("rehber","WHERE state=?",array(1),"ORDER BY ID ASC");
                      if($ranks!=false) {
                        for($i=0;$i<count($ranks);$i++) {

                          ?>
                          <option value="<?=$ranks[$i]["title"]?>"><?=$ranks[$i]["title"]?></option>

                          <?php 
                        }
                      }

                      ?>
                    </select>
                  </div>
                  <!-- /.col -->
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Name Surname</label>
                    <input type="text" class="form-control" placeholder="Name Surname" name="adsoyad" value="<?=stripslashes($value[0]["isimsoyisim"])?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" value="<?=stripslashes($value[0]["password"])?>" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?=stripslashes($value[0]["email"])?>" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Telefon</label>
                    <input type="text" class="form-control" placeholder="Telefon numarası" name="telefon" value="<?=stripslashes($value[0]["telefon"])?>" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Puan</label>
                    <input type="text" class="form-control" placeholder="Puan" name="puan" value="<?=stripslashes($value[0]["puan"])?>" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                   <button type="submit" class="btn btn-block btn-primary">Save</button>
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

}
else {
 ?>
 <meta http-equiv="refresh" content="0;url=<?=SITE?>">
 <?php
}
?>