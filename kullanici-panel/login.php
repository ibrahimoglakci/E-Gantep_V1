<?php 
//session_set_cookie_params(null,'/','localhost/e-gantep/admin/',false,true);
@session_start();
@ob_start();
define("DATA", "data/");
define("PAGE", "include/");
define("CLASSPAGE", "class/");
include_once(DATA."connection.php");
define("SITE", $weburl."kullanici-panel/");

if(!empty($_SESSION["ID"]) && !empty($_SESSION["isimsoyisim"]) && !empty($_SESSION["email"]) && !empty($_SESSION["gorev"])) {
   ?>
  <meta http-equiv="refresh" content="0;url=<?=SITE?>">
  <?php
  exit();
}

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$webtitle?></title>
  <meta http-equiv="keywords" content="<?=$webseo?>">
  <meta http-equiv="description" content="<?=$webdescription?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=SITE?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=SITE?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=SITE?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?=SITE?>"><b>Kullanıcı</b> Giriş</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Kullanıcı paneline gitmek için lütfen giriş yapınız.</p>

        <?php 
        if($_POST) {
          if(!empty($_POST["email"]) && !empty($_POST["password"])) {
            $email=$DB->filter($_POST['email']);
            $password=md5($DB->filter($_POST['password']));
            $check=$DB->CallData("kullanicilar", "WHERE email=? AND password=?",array($email,$password),"ORDER BY ID ASC",1);
            if($check!=false) {
              
              $_SESSION['email']=$check[0]["email"];
              $_SESSION['isimsoyisim']=$check[0]["isimsoyisim"];
              $_SESSION['gorev']=$check[0]["gorev"];
              $_SESSION['ID']=$check[0]["ID"];
              ?>
              <div class="alert alert-success">Giriş Yapıldı! Yönlendiriliyorsunuz...</div>
              <meta http-equiv="refresh" content="2;url=<?=SITE?>">

              <?php
              exit();
            }
            else {
             echo '<div class="alert alert-danger">E-posta veya şifre hatalıdır!</div>';
           }
         }
       }
       
      ?>
      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="E-mail adresinizi giriniz">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Şifrenizi giriniz">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=SITE?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=SITE?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=SITE?>dist/js/adminlte.min.js"></script>

</body>
</html>
