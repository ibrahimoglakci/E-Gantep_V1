<?php 
$user=$DB->CallData("kullanicilar","WHERE ID=?",array($_SESSION['ID']),"ORDER BY ID ASC",1);
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?=$user[0]["isimsoyisim"]?> Profil Sayfası</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Ana Sayfa</a></li>
            <li class="breadcrumb-item active">Profil</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <?php 
              if($user[0]["image"] != NULL) {
               ?>
               <div class="text-center">   
                  <img class="profile-user-img img-fluid img-circle"
                  src="<?=SITE?>../../images/rehber/varsayilan.png"
                  alt="User profile picture">
 
              </div>

              <?php 
            }
            else
            {

              ?>
              <div class="text-center">
                

                  <span class="fas fa-user-circle presmi" style="font-size: 60px;"></span>
           

                
               
                
              </div>
              <?php 
            }
            ?>

            <script>
              var loadFile = function (event) {
                var image = document.getElementById("output");
                image.src = URL.createObjectURL(event.target.files[0]);
              };

            </script>

            

            <style type="text/css">
            .hover:hover {
              opacity: 0.5;
              cursor: pointer;
            }
            .change-image input{
              display: none;
            }
            .change-image span {
              display: inline-flex;

            }

          </style>




          <h3 class="profile-username text-center"><?=$user[0]["isimsoyisim"]?></h3>

          <p class="text-success text-center"><?=$user[0]["gorev"]?></p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>Takipçi</b> <a class="float-right"><?=$user[0]["followers"]?></a>
            </li>
            <li class="list-group-item">
              <b>İlan Sayısı</b> <a class="float-right"><?=$user[0]["viewers"]?></a>
            </li>
            <li class="list-group-item">
              <b>Kredi</b> <a class="float-right"><?=$user[0]["puan"]?></a>
            </li>

          </ul>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- About Me Box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Hakkımda</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

          <strong><i class="fas fa-pencil-alt mr-1"></i> Meslek</strong>

          <p class="text-muted"><?=$user[0]["skills"]?></p>

          <hr>

          <strong><i class="far fa-file-alt mr-1"></i> Açıklama</strong>

          <p class="text-muted"><?=$user[0]["notes"]?></p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="card">
        <div class="card-header p-2">
          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Ayarlar</a></li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">


            <div class="active tab-pane" id="settings">
              <?php 

              if($_POST) {
                if(!empty($_POST["meslek"]) && !empty($_POST["description"]) && !empty($_POST["password"])) {

                  $skills=$DB->filter($_POST['meslek']);
                  $notes=$DB->filter($_POST['description']);

                  $password=md5($DB->filter($_POST['password']));

                  if($password != $user[0]["password"]) {
                    echo '<div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle" style="color: #ffc107;"></i>
                    Girilen şifre hatalıdır. Lütfen şifrenizi doğru yazarak tekrar deneyiniz.
                    </div>';
                  }
                  else 
                  {

                    $add=$DB->RunQuery("UPDATE kullanicilar","SET skills=?, notes=? WHERE ID=?",array($skills,$notes,$user[0]["ID"]),1);

                    if($add!=false) {
                     ?>
                     <div class="alert alert-success">
                      <i class="fas fa-check-circle"></i>
                      Bilgiler başarıyla güncellendi
                    </div>
                    <meta http-equiv="refresh" content="0;url=<?=SITE?>profil">

                    <?php
                  }
                  else {
                   ?>
                   <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle" style="color: #ffc107;"></i>
                    Bilgiler güncellenirken bir hata ile karşılaşıldı! Lütfen daha sonra tekrar deneyiniz.
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
          <form class="form-horizontal" method="post" action="">



            <!--<div class="form-group row">
            
            <div class="col-sm-10 change-image">
             <label class="hover" for="file">
                  <img class="profile-user-img img-fluid img-circle"
                  src="<?=SITE?>../e-gantep/images/rehber/varsayilan.png"
                  alt="User profile picture" id="output">
                </label>
                <input id="file" name="image" type="file" onchange="loadFile(event)"/>
            </div>
          </div>-->




          <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Meslek</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="inputExperience" name="meslek" placeholder="Meslek"><?=stripslashes($user[0]["skills"])?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputSkills" class="col-sm-2 col-form-label">Açıklama</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="inputExperience" name="description" placeholder="Açıklama"><?=stripslashes($user[0]["notes"])?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputName2" class="col-sm-2 col-form-label">Şifreniz</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="Şifreniz" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <button type="submit" class="btn btn-danger">Kaydet</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>

    <!-- /.tab-content -->

  </div><!-- /.card-body -->

</div>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?=$user[0]["puan"]?></h3>

            <p>Kredi</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?=$user[0]["viewers"]?></sup></h3>

            <p>İlan Sayısı</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?=$user[0]["followers"]?></h3>

            <p>Takipçi</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->

</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>


<!-- /.content -->
</div>
