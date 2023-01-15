



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">User List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Home</a></li>
            <li class="breadcrumb-item active">User List</li>
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
          <a href="<?=SITE?>add-user" class="btn btn-success" style="float: right; margin-bottom: 10px;"><i class="fas fa-plus-circle"></i> Add User</a>
        </div>
      </div>
      
      <div class="card">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 50px;">ID</th>
                <th>Name Surname</th>
                <th style="width: 50px;">Gorev</th>
                <th style="width: 80px;">Process</th>
                <th style="width: 150px;">Date</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $values=$DB->CallData("kullanicilar","","","ORDER BY ID ASC");
              if($values!=false) {
                $row=0;
                for ($i=0; $i <count($values) ; $i++) { 
                  $row++;
                  if($values[$i]["state"]==1) {
                    $activepassive=' checked="checked"';
                  }
                  else {
                    $activepassive='';
                  }
                  ?>
                  <tr>
                    <td><?=$values[$i]["ID"]?></td>
                    <td><?php 
                    echo stripslashes($values[$i]["isimsoyisim"]);
                    ?>
                  </td>
                  <td><?php 
                  echo stripslashes($values[$i]["gorev"]);
                  ?>
                </td>
                <td>
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" class="custom-control-input activecheck<?=$values[$i]["ID"]?>" id="customSwitch3<?=$values[$i]["ID"]?>"<?=$activepassive?> value="<?=$values[$i]["ID"]?>" onclick="activecheck(<?=$values[$i]["ID"]?>,'kullanicilar');">
                    <label class="custom-control-label" for="customSwitch3<?=$values[$i]["ID"]?>"></label>
                  </div>
                </td>
                <td><?=$values[$i]["date"]?></td>
                <td>
                  <a href="<?=SITE?>edit-user/<?=$values[$i]["ID"]?>" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i> Edit</a>
                  <a href="<?=SITE?>remove-user/<?=$values[$i]["ID"]?>" class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i> Remove</a>
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
