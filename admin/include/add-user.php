<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Home</a></li>
            <li class="breadcrumb-item active">Add User</li>
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
          <a href="<?=SITE?>list/add-user" class="btn btn-warning" style="float: right; margin-bottom: 10px; margin-left: 10px; color: white;"><i class="fas fa-bars"></i> LIST</a> 
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
          $adress=$DB->filter($_POST['adress']);
          $skills=$DB->filter($_POST['skills']);
          $notes=$DB->filter($_POST['notes']);
          $seflink=$DB->seflink($adsoyad);


          


          $mail = new PHPMailer(true);
          try {
            $mail -> SMTPDebug = 0;
            $mail -> isSMTP();
            $mail -> Host = 'smtp.gmail.com';
            $mail ->SMTPAuth = true;
            $mail ->Username = 'ibrahimoglkc@gmail.com';
            $mail ->Password = '36280426674i';
            $mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail ->Port = 587;
            $mail ->setFrom('ibrahimoglkc@gmail.com', 'E-Gaziantep.com');
            $mail ->addAddress($email, $adsoyad);
            $mail ->isHTML(true);
            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0,6);
            $mail ->Subject = 'Email verification';

            $mail ->Body = '<p>Your verification code is: <b style="font-size: 30px;">'.$verification_code.' </b></p>';
            $mail->send();

            $add=$DB->RunQuery("INSERT INTO kullanicilar","SET isimsoyisim=?, seflink=?, email=?, password=?, telefon=?, gorev=?, adress=?, skills=?, notes=?, followers=?, viewers=?, puan=?, verification_code=?, email_verified_at=?, state=?, date=?",array($adsoyad,$seflink,$email,$password,$telefon,$gorev,$adress,$skills,$notes,0,0,$puan,$verification_code,NULL,2,date("Y-m-d")));
            ?>

            <meta http-equiv="refresh" content="2;url=<?=SITE?>verification/<?=$email?>">

            <?php
          }catch(Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
          }


            if($add!=false) {
             ?>
             <div class="alert alert-success">
              User successfully added.
            </div>
            
            <?php
          }
          else {
           ?>
           <div class="alert alert-danger">
            A problem was encountered while adding!
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
                <label>Select Rank</label>
                <select class="form-control select2" style="width: 100%;" name="gorev">
                  <option value="0">Please Select Rank</option>
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
                <input type="text" class="form-control" placeholder="Title" name="adsoyad" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Telefon</label>
                <input type="text" class="form-control" placeholder="Telefon numarası" name="telefon" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Adres</label>
                <input type="text" class="form-control" placeholder="Adress" name="adress" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Meslek</label>
                <input type="text" class="form-control" placeholder="Meslek" name="skills" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Açıklama</label>
                <input type="text" class="form-control" placeholder="Açıklama" name="notes" autocomplete="off">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Puan</label>
                <input type="text" class="form-control" placeholder="Puan" name="puan" autocomplete="off">
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
