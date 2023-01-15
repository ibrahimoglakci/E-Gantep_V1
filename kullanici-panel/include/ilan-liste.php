<?php 
$userpuan=$DB->CallData("kullanicilar","WHERE ID=?",array($_SESSION['ID']),"ORDER BY ID ASC");

 ?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">İlan/Kampanya Listesi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Ana Sayfa</a></li>
            <li class="breadcrumb-item active">İlan-Kampanya Listesi</li>
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
          <a href="<?=SITE?>ilan-ekle" class="btn btn-success" style="float: right; margin-bottom: 10px;"><i class="fas fa-plus-circle"></i> İlan Ekle</a>
        </div>
      </div>
      
      <div class="card">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 50px;">İlan ID</th>

                <th>Resim</th>
                <th>Başlık</th>
                <th style="width: 50px;">Açıklama</th>
                <th style="width: 80px;">Durum</th>
                <th style="width: 150px;">Tarih</th>
                <th style="width:250px;">İşlem</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $values=$DB->CallData("pano","WHERE name=?",array($userpuan[0]["isimsoyisim"]),"ORDER BY date ASC");

              if($values!=false) {
                $row=0;
                for ($i=0; $i <count($values) ; $i++) { 
                  $row++;
                  

                  if($values[$i]["state"]==1) {
                    $activepassive=' checked="checked"';
                    $panodurum='Aktif';
                  }
                  else if($values[$i]["state"]==0) {
                    $activepassive='';
                    $panodurum='Onay bekliyor';
                  }
                  else if($values[$i]["state"]==2) {
                    $activepassive='';
                    $panodurum='Pasif';
                  }
                  ?>
                  <tr>
                    <td><?=$values[$i]["ID"]?></td>
                    <td>
                      <?php 
                      if($values[$i]["image"]!= NULL) {
                       ?>
                        <img src="../images/pano/<?=$values[$i]["image"]?>" style="height: 70px; width: auto; margin-right: 8px; float: left;">
                        <?php 
                        }
                        else {

                          echo "Resim Yüklenmedi!";
                          
                         ?>

                         <?php 
                         }
                          ?>
                        
                      
                     
                      
                    </td>
                    <td><?php 
                    echo stripslashes($values[$i]["title"]);
                    ?>
                  </td>
                  <td><?php 
                  echo mb_substr(strip_tags(stripslashes($values[$i]["text"])),0,20,"UTF-8")."...";
                  ?>
                </td>
                <td>

                  <?php 
                    if($panodurum=="Aktif")
                    {

                      ?>
                      <p style="color: green;"><strong><?=stripslashes($panodurum);?></strong></p>
                      <?php

                    }
                    else if($panodurum=="Onay bekliyor")
                    {

                      ?>
                      <p class="text-info bold"><strong><?=stripslashes($panodurum);?></strong></p>
                      <?php

                    }
                    else if($panodurum=="Pasif")
                    {

                      ?>
                      <p style="color: darkred;"><strong><?=stripslashes($panodurum);?></strong></p>

                      <?php

                    }


                   ?>
                  <!--<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" class="custom-control-input activecheck<?=$values[$i]["ID"]?>" id="customSwitch3<?=$values[$i]["ID"]?>"<?=$activepassive?> value="<?=$values[$i]["ID"]?>" onclick="activecheck(<?=$values[$i]["ID"]?>,'pano');">
                    <label class="custom-control-label" for="customSwitch3<?=$values[$i]["ID"]?>"></label>
                  </div>-->
                </td>
                <td><?=$values[$i]["date"]?></td>
                <td>
                  <?php 
                   if($panodurum=="Pasif")
                   {

                    ?>
                    <a href="<?=SITE?>ilan-duzenle/<?=$values[$i]["ID"]?>" style="margin-top: 2px; margin-bottom: 2px;" class="btn btn-success btn-sm"><i class="fas fa-check-circle"></i> Aktif Et</a>
                    <?php

                   }

                   ?>
                  <a href="<?=SITE?>ilan-duzenle/<?=$values[$i]["ID"]?>" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i> Düzenle</a>

                  <a href="<?=SITE?>ilan-sil/<?=$values[$i]["ID"]?>" class="btn btn-danger btn-sm silmeAlaniz"><i class="fas fa-times-circle"></i> Sil</a>

                  <a href="<?=SITE?>resimler/ilan/<?=$values[$i]["ID"]?>" class="btn btn-info btn-sm" style="margin-top: 2px; margin-bottom: 2px;"><i class="fas fa-cog"></i> Resim Yönetimi</a>
                  

                </td>
              </tr>
              <?php

            }
          }
          ?>

        </tbody>
        <tfoot>
          <tr>
           <th style="width: 50px;">İlan ID</th>
           <th>Resim</th>
           <th>Başlık</th>
           <th style="width: 50px;">Açıklama</th>
           <th style="width: 80px;">Durum</th>
           <th style="width: 150px;">Tarih</th>
           <th style="width:250px;">İşlem</th>
         </tr>
       </tfoot>
     </table>
   </div>
   <!-- /.card-body -->
 </div>


</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
