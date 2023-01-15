<?php 
$value=$DB->CallData("kullanicilar","WHERE ID=?",array($_SESSION['ID']),"ORDER BY ID ASC",1);

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Hesap Ayarlari</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Ana Sayfa</a></li>
            <li class="breadcrumb-item active">Hesap Ayarlari</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">

      <?php 

      if($_POST) {
        if(!empty($_POST["isimsoyisim"]) && !empty($_POST["password"]) && !empty($_POST["telefon"])) {    
          $name=$DB->filter($_POST['isimsoyisim']);
          

          $password=md5($DB->filter($_POST['password']));
          $smsonay=substr(str_shuffle("1234567890"), 0, 6);  
          $telefon=$DB->filter($_POST['telefon']);    

          $update=$DB->RunQuery("UPDATE kullanicilar","SET isimsoyisim=?, password=?, telefon=?, smscode=?, smsstate=? WHERE ID=?",array($name,$password,$telefon,$smsonay,2,$_SESSION['ID']),1);
          if($update!=false) {
               ?>
               <div class="alert alert-success">
                Ayarların başarıyla güncellendi.
              </div>
              <meta http-equiv="refresh" content="2;url=<?=SITE?>hesap-ayarlari" />
              <?php
            }
            else {
             ?>
             <div class="alert alert-danger">
              Ayarların güncellenirken bir hata ile karşılaşıldı
            </div>
            <?php
          }

          /*if($value[0]["smscode"]==NULL OR $value[0]["smsstate"]==2 OR $value[0]["smsstate"]==NULL){
            if($telefon!=$value[0]["telefon"]) {
             $update=$DB->RunQuery("UPDATE kullanicilar","SET isimsoyisim=?, email=?, password=?, telefon=?, smscode=?, smsstate=? WHERE ID=?",array($name,$email,$password,$telefon,$smsonay,2,$_SESSION['ID']),1);
             if($update!=false) {
               ?>
               <div class="alert alert-success">
                Ayarların başarıyla güncellendi.
              </div>
              <meta http-equiv="refresh" content="2;url=<?=SITE?>sms-onay" />
              <?php
            }
            else {
             ?>
             <div class="alert alert-danger">
              Ayarların güncellenirken bir hata ile karşılaşıldı
            </div>
            <?php
          }
        }
        else {
          $update=$DB->RunQuery("UPDATE kullanicilar","SET isimsoyisim=?, email=?, password=?, telefon=?, smscode=?, smsstate=? WHERE ID=?",array($name,$email,$password,$telefon,$smsonay,2,$_SESSION['ID']),1);
             if($update!=false) {
               ?>
               
              <meta http-equiv="refresh" content="2;url=<?=SITE?>sms-onay" />
              <?php
            }
            else {
             ?>
             <div class="alert alert-danger">
              Ayarların güncellenirken bir hata ile karşılaşıldı
            </div>
            <?php
          }

        }
      } 
      else {
        if($telefon == $value[0]["telefon"]) {

          $update=$DB->RunQuery("UPDATE kullanicilar","SET isimsoyisim=?, email=?, password=?, telefon=?, smsstate=? WHERE ID=?",array($name,$email,$password,$telefon,1,$_SESSION['ID']),1);

          if($update!=false) {
           ?>
           <div class="alert alert-success">
            Ayarların başarıyla güncellendi.
          </div>
          <meta http-equiv="refresh" content="2;url=<?=SITE?>hesap-ayarlari" />
          <?php
        }
        else {
         ?>
         <div class="alert alert-danger">
          Ayarların güncellenirken bir hata ile karşılaşıldı
        </div>
        <?php
      }
    }
    else
    {
      $update=$DB->RunQuery("UPDATE kullanicilar","SET isimsoyisim=?, email=?, password=?, telefon=?, smscode=?, smsstate=? WHERE ID=?",array($name,$email,$password,$telefon,$smsonay,2,$_SESSION['ID']),1);
      if($update!=false) {
       ?>
       <div class="alert alert-success">
        Ayarların başarıyla güncellendi.
      </div>
      <meta http-equiv="refresh" content="2;url=<?=SITE?>hesap-ayarlari" />
      <?php
    }
    else {
     ?>
     <div class="alert alert-danger">
      Ayarların güncellenirken bir hata ile karşılaşıldı
    </div>
    <?php
  }
}
}*/





}
else {
  ?>
  <div class="alert alert-danger">
    Lütfen boş yer bırakmayınız!
  </div>
  <?php
}
}

?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="col-md-8">
    <div class="card-body card card-primary">
      <div class="row">
      
        <div class="col-md-12">
          <div class="form-group">
            <label>Ad Soyad</label>
            <input type="text" class="form-control" placeholder="Ad Soyad" name="isimsoyisim" value="<?=$value[0]["isimsoyisim"]?>">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Şifre</label>
            <input type="password" class="form-control" placeholder="Şifrenizi giriniz" name="password" required>
            <div class="alert alert-warning" style="margin-top: 10px;">
              <i class="fas fa-info-circle"></i>
              Uyarı: Şifreler güvenlik amacıyla şifrelenerek kaydedilir!
            </div>

          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Telefon</label>
            <input type="text" class="form-control" placeholder="Telefon" name="telefon" value="<?=$value[0]["telefon"]?>">
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
