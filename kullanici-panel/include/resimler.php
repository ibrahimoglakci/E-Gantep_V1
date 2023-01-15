<?php 
  if(!empty($_GET["ilan"]) && !empty($_GET["ID"]))
  {

    $ilan=$DB->filter($_GET["ilan"]);
    $ID=$DB->filter($_GET["ID"]);


 ?>
<div class="content-wrapper">
    <!-- Content Header (ilan header) -->
    <div class="content-header">
      <div class="container-fluid">
      
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">İlan Resim Yönetimi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
              <li class="breadcrumb-item active">İlan Resim Yönetimi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">

       <form action="<?=SITE?>ajax.php" method="post" class="dropzone" enctype="multipart/form-data">
        <input type="hidden" name="ilan" value="<?=$ilan?>">
         <input type="hidden" name="ID" value="<?=$ID?>">
       </form>
       
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-md-12">
       <a href="<?=SITE?>resimler/<?=$_GET["ilan"]?>/<?=$_GET["ID"]?>" class="btn btn-success onaylaResim" style="width: 100%; height: 60%; margin-bottom:30px; margin-top: 10px; font-weight: 600; font-size: 20px;">Onayla</a>
       </div>
       </div>
  
    <section class="content">
      <div class="container-fluid">
       <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:50px;">Sıra</th>
                  <th>Resim</th>
                  <th style="width:80px;">Tarih</th>
                  <th style="width:120px;">Kaldır</th>
                </tr>
                </thead>
                <tbody>
                <?php
        $veriler=$DB->CallData("resimler","WHERE pano=? AND KID=?",array($ilan,$ID),"ORDER BY ID ASC");
        if($veriler!=false)
        {
          $sira=0;
          for($i=0;$i<count($veriler);$i++)
          {
            $sira++;  
            ?>
                        <tr>
                          <td><?=$sira?></td>
                          <td>
                            <img src="<?=SITE?>../images/ilanresim/<?=$ID?>/<?=$veriler[$i]["image"]?>" style="height: 60px; width: auto; margin-right: 8px; float: left;">
                          </td>
                          
                          <td><?=$veriler[$i]["date"]?></td>
                          <td>
                          <a href="<?=SITE?>resim-sil/<?=$ilan?>/<?=$ID?>/<?=$veriler[$i]["ID"]?>" class="btn btn-danger btn-sm silmeAlani"><i class="fas fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <?php
          }
        }
        ?>               
                </tbody>
                <tfoot>
                <tr>
                  <th>Sıra</th>
                  <th>Resim</th>
                  <th>Tarih</th>
                  <th>Kaldır</th>
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
 
 <?php 

}
  ?>