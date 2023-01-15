<?php 

if(!empty($_GET['ID'])) {

  $ID=$DB->filter($_GET["ID"]);
  $userpuan=$DB->CallData("kullanicilar","WHERE ID=?",array($_SESSION['ID']),"ORDER BY ID ASC",1);
  $check=$DB->CallData("pano","WHERE state=?",array(1),"ORDER BY ID ASC");
  if($check!= false) {
    $value=$DB->CallData("pano","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
    if($value!=false) {


      ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?=$value[0]["title"]?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=SITE?>">Ana Sayfa</a></li>
                        <li class="breadcrumb-item active"><?=$value[0]["title"]?></li>
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
                    <a href="<?=SITE?>ilan-liste" class="btn btn-warning"
                        style="float: right; margin-bottom: 10px; margin-left: 10px; color: white;"><i
                            class="fas fa-bars"></i> LİSTE</a>
                    <a href="<?=SITE?>add/<?=$check[0]["tables"]?>" class="btn btn-success"
                        style="float: right; margin-bottom: 10px;"><i class="fas fa-plus-circle"></i> İlan Ekle</a>
                </div>
            </div>

            <?php 

            if($_POST) {
              if(!empty($_POST["title"]) && !empty($_POST["texteditor"]) && !empty($_POST["password"])) {
                $title=$DB->filter($_POST['title']);     
                $description=$DB->filter($_POST['texteditor']);
                $seflink=$DB->seflink($title);
                $password=md5($DB->filter($_POST['password']));

                if($password != $userpuan[0]["password"]) {
                  echo '<div class="alert alert-danger">
                  <i class="fas fa-exclamation-circle" style="color: #ffc107;"></i>
                  Girilen şifre hatalıdır. Lütfen şifrenizi doğru yazarak tekrar deneyiniz.
                  </div>';
                }
                else 
                {

                  if(!empty($_FILES["image"]["name"])) {
                    $uploadimage=$DB->upload("image","../images/pano/");
                    if($uploadimage!=false) {
                      $add=$DB->RunQuery("UPDATE pano","SET title=?, text=?, seflink=?, rank=?, name=?, image=?, state=? WHERE ID=?",array($title,$description,$seflink,$userpuan[0]["gorev"],$userpuan[0]["isimsoyisim"],$uploadimage,1,$ID),1);
                      

                    }
                    else {
                      ?>
            <div class="alert alert-info">
                Resim yüklenirken bir hata oluştu!
            </div>
            <?php
                    }
                  }
                  else {
                    $add=$DB->RunQuery("UPDATE pano","SET title=?, text=?, seflink=?, rank=? WHERE ID=?",array($title,$description,$seflink,$userpuan[0]["gorev"],$ID),1);

                  }


                  if($add!=false) {
                   ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                İlanınız başarıyla düzenlendi.
            </div>

            <?php
                }
                else {
                 ?>
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle" style="color: #ffc107;"></i>
                İlanınız eklenirken bir hata ile karşılaşıldı! Lütfen daha sonra tekrar deneyiniz.
            </div>
            <?php
              }
            }
          }
          else {
            ?>
            <div class="alert alert-warning">
                <i class="fas fa-exclamation-triangle" style="color: red;"></i>
                Lütfen boş bırakılan yerleri doldurunuz.
            </div>
            <?php
          }
        }

        ?>

            <form action="#" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="card-body card card-primary">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control select2" style="width: 100%;" name="gorev">
                                        <?php 
                      $ranks=$DB->CallData("kullanicilar","WHERE state=? AND ID=?",array(1,$userpuan[0]["ID"]),"ORDER BY ID ASC");

                      ?>
                                        <option value="<?=$ranks[0]["gorev"]?>"><?=$ranks[0]["gorev"]?></option>

                                    </select>
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>İlan Başlığı</label>
                                    <input type="text" class="form-control" placeholder="Title" name="title"
                                        maxlength="70" value="<?=stripslashes($value[0]["title"]);?>"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Açıklama</label>
                                    <textarea class="textarea" placeholder="Text" name="texteditor" maxlength="150"
                                        style="width: 100%; height: 450px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?=stripslashes($value[0]["text"]);?>
                    </textarea>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="customFile">Resim Ekle</label>
                                    <input type="file" class="form-control" id="customFile" name="image" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Şifreniz</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        value="" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-success">Kaydet</button>
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