<?php 
if(!empty($_GET['email'])) {

  $email=$DB->filter($_GET["email"]);
  $check=$DB->CallData("kullanicilar","WHERE state=? AND email=?",array(2,$email),"ORDER BY ID ASC",1);
  if($check!= false) {
   $value=$DB->CallData("kullanicilar","WHERE email=?",array($email),"ORDER BY ID ASC",1);
   if($value!=false) {


     ?>

     <div class="bg">
       <div class="row" style="padding-bottom: 11%;">
        <div class="col-lg-12">
          <div class="main-verification-input-wrap">
            <ul>
              <li>Kayıt olduktan sonra e-posta adresinize bir doğrulama kodu gelecek. Lütfen bu kodu aşağıya girin.</li>
              
            </ul>
            <div class="main-verification-input fl-wrap">
              <?php 
              if($_POST) {
                if(!empty($_POST["verifycode"])) {
                  $verifycode=$DB->filter($_POST['verifycode']);   
                  $add=$DB->RunQuery("UPDATE kullanicilar","SET email_verified_at=?, state=? WHERE email=? AND verification_code=?",array(date("Y-m-d"),1,$email,$verifycode));

                  if($add!=false) {
                    ?>

                    <meta http-equiv="refresh" content="0;url=<?=SITE?>">
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


            <form action="" method="post">
              <div class="main-verification-input-item">
                <input type="text" name="verifycode" placeholder="Doğrulama kodunu giriniz" autocomplete="off"> 
              </div>
              <button class="main-verification-button">Doğrula</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>






  <?php 
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

}
else {
 ?>
 <meta http-equiv="refresh" content="0;url=<?=SITE?>">
 <?php
}
?>

<style type="text/css">

.bg {
  background: lightgray;
  height: 86vh;
}

.main-verification-input {
 background: #fff;
 padding: 0 120px 0 0;
 border-radius: 1px;
 margin-top: 6px
}

.fl-wrap {
 float: left;
 width: 100%;
 position: relative;
 border-radius: 4px
}

.main-verification-input:before {
 content: '';
 position: absolute;
 bottom: -40px;
 width: 50px;
 height: 1px;
 background: rgba(255, 255, 255, 0.41);
 left: 50%;
 margin-left: -25px
}

.main-verification-input-item {
 float: left;
 width: 100%;
 box-sizing: border-box;
 border-right: 1px solid #eee;
 height: 50px;
 position: relative
}

.main-verification-input-item input:first-child {
 border-radius: 100%
}

.main-verification-input-item input {
 float: left;
 border: none;
 width: 100%;
 height: 50px;
 padding-left: 20px
}

.main-verification-button {
 background: #4DB7FE
}

.main-verification-button {
 position: absolute;
 right: 0px;
 height: 50px;
 width: 120px;
 color: #fff;
 top: 0;
 border: none;
 border-top-right-radius: 4px;
 border-bottom-right-radius: 4px;
 cursor: pointer
}

.main-verification-button:hover {
  opacity: 0.8;
}

.main-verification-input-wrap {
 max-width: 500px;
 margin: 20px auto;
 position: relative;
 margin-top: 129px
}

.main-verification-input-wrap ul {
 background-color: #fff;
 padding: 27px;
 color: #757575;
 border-radius: 4px
}

a {
 text-decoration: none !important;
 color: #9C27B0
}

:focus {
 outline: 0
}

@media only screen and (max-width: 768px) {
 .main-verification-input {
   background: rgba(255, 255, 255, 0.2);
   padding: 14px 20px 10px;
   border-radius: 10px;
   box-shadow: 0px 0px 0px 10px rgba(255, 255, 255, 0.0)
 }

 .main-verification-input-item {
   width: 100%;
   border: 1px solid #eee;
   height: 50px;
   border: none;
   margin-bottom: 10px
 }

 .main-verification-input-item input {
   border-radius: 6px !important;
   background: #fff
 }

 .main-verification-button {
   position: relative;
   float: left;
   width: 100%;
   border-radius: 6px
 }
}
</style>