



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Comments</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Home</a></li>
            <li class="breadcrumb-item active">Comments</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      
      <div class="card">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 50px;">ID</th>
                <th>Name Surname</th>
                <th style="width: 50px;">Comments</th>
                <th style="width: 50px;">Advert</th>
                <th style="width: 80px;">Process</th>
                <th style="width: 150px;">Date</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $values=$DB->CallData("ilanyorumlar","","","ORDER BY ID DESC");
              if($values!=false) {
                for ($i=0; $i <count($values) ; $i++) { 
                  $userinfo=$DB->CallData("kullanicilar","WHERE ID=?",array($values[$i]["userID"]),"ORDER BY ID ASC",1);

                  if($values[$i]["state"]==1) {
                    $activepassive=' checked="checked"';
                  }
                  else {
                    $activepassive='';
                  }
                  if($userinfo!=false) {
                    $usernamesurname=$userinfo[0]["isimsoyisim"];
                  }

                  ?>
                  <tr>
                    <td><?=$values[$i]["ID"]?></td>
                    <td><?php 
                    echo stripslashes($usernamesurname);
                    ?>
                  </td>
                  <td><?php 
                  echo mb_substr(stripslashes($values[$i]["yorum"]),0,200,"UTF-8")."...";
                  ?>
                </td>
                <td>
                  
                </td>
                <td>
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" class="custom-control-input activecheck<?=$values[$i]["ID"]?>" id="customSwitch3<?=$values[$i]["ID"]?>"<?=$activepassive?> value="<?=$values[$i]["ID"]?>" onclick="activecheck(<?=$values[$i]["ID"]?>,'ilanyorumlar');">
                    <label class="custom-control-label" for="customSwitch3<?=$values[$i]["ID"]?>"></label>
                  </div>
                </td>
                <td><?=$values[$i]["date"]?></td>
                <td>
                  <a href="<?=SITE?>comments-detail/<?=$values[$i]["ID"]?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Preview</a>
                  
                </td>
              </tr>
              <?php

            }
          }
          ?>

        </tbody>
        <tfoot>
          <tr>
           <th style="width: 50px;">ID</th>
           <th>Name Surname</th>
           <th style="width: 50px;">Gorev</th>
           <th style="width: 80px;">Process</th>
           <th style="width: 150px;">Date</th>
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
