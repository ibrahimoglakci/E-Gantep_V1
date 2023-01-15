<?php 



?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">İlan/Kampanya Ekle</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Ana Sayfa</a></li>
            <li class="breadcrumb-item active">İlan-Kampanya Ekle</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <?php 
  $userpuan=$DB->CallData("kullanicilar","WHERE ID=?",array($_SESSION['ID']),"ORDER BY ID ASC",1);

  if($userpuan[0]["puan"]>0) {
   ?>
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="<?=SITE?>list/add-user" class="btn btn-warning" style="float: right; margin-bottom: 10px; margin-left: 10px; color: white;"><i class="fas fa-bars"></i> LİSTE</a> 
        </div>
      </div>

      <?php 



      if($_POST) {
        if(!empty($_POST["title"]) && !empty($_POST["texteditor"]) && !empty($_POST["password"]) && !empty($_POST["gunler"]) && !empty($_POST["acilis"]) && !empty($_POST["kapanis"])) {
          $title=$DB->filter($_POST['title']);     
          $description=$DB->filter($_POST['texteditor']);

          $password=md5($DB->filter($_POST['password']));
          $seflink=$DB->seflink($title);
          $currentpuan=$userpuan[0]["puan"]-1;
          $currentilan= $userpuan[0]["viewers"]+1;
          $calismagunleri=$_POST['gunler'];
          $acilis=$_POST['acilis'];
          $kapanis=$_POST['kapanis'];
          $calismasaatleri= $acilis." - ".$kapanis;


          if(!empty($_POST["kredi"])) {
            $kredi="true";
          }
          else if(empty($_POST["kredi"])) {
             $kredi="false";
          }


          if(!empty($_POST["park"])) {
             $park="true";
          }
          else if(empty($_POST["park"])) {
             $park="false";
          }


          if(!empty($_POST["internet"])) {
             $internet="true";
          }
          else if(empty($_POST["internet"])) {
             $internet="false";
          }


          if(!empty($_POST["engel"])) {
             $engel="true";
          }
          else if(empty($_POST["engel"])) {
             $engel="false";
          }


          if(!empty($_POST["evcil"])) {
             $evcil="true";
          }
          else if(empty($_POST["evcil"])) {
             $evcil="false";
          }


          if(!empty($_POST["alkollu"])) {
             $alkollu="true";
          }else if(empty($_POST["alkollu"])) {
             $alkollu="false";
          }
          
          
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
                $add=$DB->RunQuery("INSERT INTO pano","SET title=?, text=?, seflink=?, yildiz=?, rank=?, name=?, kredikart=?, wifi=?, parkyeri=?, engelliyeri=?, hayvandurum=?, alkol=?, openedtime=?, openeddays=?, image=?, state=?, date=?",array($title,$description,$seflink,0,$userpuan[0]["gorev"],$userpuan[0]["isimsoyisim"],$kredi,$internet,$park,$engel,$evcil,$alkollu,$calismasaatleri,$calismagunleri,$uploadimage,0,date("Y-m-d")));
                $puansil=$DB->RunQuery("UPDATE kullanicilar","SET puan=?, viewers=? WHERE ID=?",array($currentpuan,$currentilan,$userpuan[0]['ID']),1);

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
              $add=$DB->RunQuery("INSERT INTO pano","SET title=?, text=?, seflink=?, yildiz=?, rank=?, name=?, kredikart=?, wifi=?, parkyeri=?, engelliyeri=?, hayvandurum=?, alkol=?, openedtime=?, openeddays=?, image=?, state=?, date=?",array($title,$description,$seflink,0,$userpuan[0]["gorev"],$userpuan[0]["isimsoyisim"],$kredi,$internet,$park,$engel,$evcil,$alkollu,$calismasaatleri,$calismagunleri,NULL,0,date("Y-m-d")));
              $puansil=$DB->RunQuery("UPDATE kullanicilar","SET puan=?, viewers=? WHERE ID=?",array($currentpuan,$currentilan,$userpuan[0]['ID']),1);

            }

            
            if($add!=false) {
             ?>
             <div class="alert alert-success">
              <i class="fas fa-check-circle"></i>
              İlanınız sıraya alındı. Onay bekleniyor.
            </div>
            <meta http-equiv="refresh" content="2;url=<?=SITE?>ilan-liste">
            

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
              <input type="text" class="form-control" placeholder="Title" name="title" maxlength="70" value=" ">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Açıklama</label>
              <textarea class="textarea" placeholder="Text" name="texteditor" maxlength="150" 
              style="width: 100%; height: 450px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

            </div>
          </div>
          <div class="col-md-6">
           <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="kredi" id="kredikart">
                <label for="kredikart">
                  Kredi/Banka Kartı Geçerli?
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
           <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="park" id="otopark">
                <label for="otopark">
                  Otopark?
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
           <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="internet" id="wifi">
                <label for="wifi">
                  Kablosuz İnternet (Wifi)?
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
           <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="engel" id="engelli">
                <label for="engelli">
                  Engelli Sandalyesi/Yeri?
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
           <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="evcil" id="hayvan">
                <label for="hayvan">
                  Evcil Hayvan İzni?
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
           <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="alkollu" id="alkol">
                <label for="alkol">
                  Alkollü Mekan?
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Çalışma Günleri</label>
              <select class="form-control select2" name="gunler">
                
                <option value="Hafta içi">Pazartesi-Salı-Çarşamba-Perşembe-Cuma</option>
                <option value="Hafta içi ve Cumartesi günü">Pazartesi-Salı-Çarşamba-Perşembe-Cuma-Cumartesi</option>
                <option value="Hafta içi ve Hafta Sonu Her gün">Pazartesi-Salı-Çarşamba-Perşembe-Cuma-Cumartesi-Pazar</option>
                
                

              </select>
            </div>
            <!-- /.col -->
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Açılış Saati</label>
              <select class="form-control select2" name="acilis">
                

                <option value="01:00">01:00</option>
                <option value="01:30">01:30</option>
                <option value="02:00">02:00</option>
                <option value="02:30">02:30</option>
                <option value="03:00">03:00</option>
                <option value="03:30">03:30</option>
                <option value="04:00">04:00</option>
                <option value="04:30">04:30</option>
                <option value="05:00">05:00</option>
                <option value="05:30">05:30</option>
                <option value="06:00">06:00</option>
                <option value="06:30">06:30</option>
                <option value="07:00">07:00</option>
                <option value="07:30">07:30</option>
                <option value="08:00">08:00</option>
                <option value="08:30">08:30</option>
                <option value="09:00">09:00</option>
                <option value="09:30">09:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
                <option value="18:00">18:00</option>
                <option value="18:30">18:30</option>
                <option value="19:00">19:00</option>
                <option value="19:30">19:30</option>
                <option value="20:00">20:00</option>
                <option value="20:30">20:30</option>
                <option value="21:00">21:00</option>
                <option value="21:30">21:30</option>
                <option value="22:00">22:00</option>
                <option value="22:30">22:30</option>
                <option value="23:00">23:00</option>
                <option value="23:30">23:30</option>
                <option value="00:00">00:00</option>
                <option value="00:30">00:30</option>
               
                
                

              </select>
            </div>
            <!-- /.col -->
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Kapanış Saati</label>
              <select class="form-control select2" name="kapanis">
                
                <option value="01:00">01:00</option>
                <option value="01:30">01:30</option>
                <option value="02:00">02:00</option>
                <option value="02:30">02:30</option>
                <option value="03:00">03:00</option>
                <option value="03:30">03:30</option>
                <option value="04:00">04:00</option>
                <option value="04:30">04:30</option>
                <option value="05:00">05:00</option>
                <option value="05:30">05:30</option>
                <option value="06:00">06:00</option>
                <option value="06:30">06:30</option>
                <option value="07:00">07:00</option>
                <option value="07:30">07:30</option>
                <option value="08:00">08:00</option>
                <option value="08:30">08:30</option>
                <option value="09:00">09:00</option>
                <option value="09:30">09:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
                <option value="18:00">18:00</option>
                <option value="18:30">18:30</option>
                <option value="19:00">19:00</option>
                <option value="19:30">19:30</option>
                <option value="20:00">20:00</option>
                <option value="20:30">20:30</option>
                <option value="21:00">21:00</option>
                <option value="21:30">21:30</option>
                <option value="22:00">22:00</option>
                <option value="22:30">22:30</option>
                <option value="23:00">23:00</option>
                <option value="23:30">23:30</option>
                <option value="00:00">00:00</option>
                <option value="00:30">00:30</option>
               
                
                

              </select>
            </div>
            <!-- /.col -->
          </div>

          <div class="col-md-12"><br></div>
           
          

          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label" for="customFile">Resim Ekle</label>
              <input type="file" class="form-control" id="customFile" name="image" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Şifreniz</label>
              <input type="password" class="form-control" placeholder="Password" name="password" value="">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-success">Ekle</button>
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

<?php 
}
else 
{
  ?>

  <div class="alert alert-danger" style="margin-top: 10px;">
  İlan eklemek için yeterli bakiyeniz bulunmamaktadır! Bakiye almak için lütfen <a href="<?=SITE?>kredi-satin-al" target="_blank" style="color: yellow;">tıklayınız</a>.
  </div>

  <?php
  
}
?>
</div>
