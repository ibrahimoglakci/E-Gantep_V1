<?php 

if(!empty($_GET['table']) && !empty($_GET['ID'])) {

  $table=$DB->filter($_GET["table"]);
  $ID=$DB->filter($_GET["ID"]);
  $check=$DB->CallData("modules","WHERE tables=? AND state=?",array($table,1),"ORDER BY ID ASC",1);
  if($check!= false) {

    $value=$DB->CallData($check[0]["tables"],"WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
    if($value!=false) {



      ?>



      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?=$check[0]["title"]?> Edit Page</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=SITE?>">Home</a></li>
                  <li class="breadcrumb-item active"><?=$check[0]["title"]?></li>
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
                <a href="<?=SITE?>list/<?=$check[0]["tables"]?>" class="btn btn-warning" style="float: right; margin-bottom: 10px; margin-left: 10px; color: white;"><i class="fas fa-bars"></i> LIST</a> 
                <a href="<?=SITE?>add/<?=$check[0]["tables"]?>" class="btn btn-success" style="float: right; margin-bottom: 10px;"><i class="fas fa-plus-circle"></i> Add New</a>
              </div>
            </div>

            <?php 

            if($_POST) {
              if(!empty($_POST["category"]) && !empty($_POST["title"]) && !empty($_POST["seo"]) && !empty($_POST["description"]) && !empty($_POST["rownumber"])) {
                $category=$DB->filter($_POST['category']);
                $title=$DB->filter($_POST['title']);
                $seo=$DB->filter($_POST['seo']);
                $seflink=$DB->seflink($title);
                $description=$DB->filter($_POST['description']);
                $rownumber=$DB->filter($_POST['rownumber']);
                $phone=$DB->filter($_POST['phone']);
                $adress=$DB->filter($_POST['adress']);
                $email=$DB->filter($_POST['email']);
                $let=$DB->filter($_POST['let']);
                $lng=$DB->filter($_POST['lng']);
                $texteditor=$DB->filter($_POST['texteditor'],true);
                if(!empty($_FILES["image"]["name"])) {
                  $uploadimage=$DB->upload("image","../images/".$check[0]["tables"]."/");
                  if($uploadimage!=false) {
                    $add=$DB->RunQuery("UPDATE ".$check[0]["tables"],"SET title=?, seflink=?, category=?, text=?, image=?, phone=?, adress=?, email=?, let=?, lng=?, seo=?, description=?, state=?, rownumber=?, date=? WHERE ID=?",array($title,$seflink,$category,$texteditor,$uploadimage,$phone,$adress,$email,$let,$lng,$seo,$description,1,$rownumber,date("Y-m-d"),$value[0]["ID"]));
                    
                  }
                  else {
                    ?>
                    <div class="alert alert-info">
                      Image upload failed!
                    </div>
                    <?php
                  }
                }
                else {
                  $add=$DB->RunQuery("UPDATE ".$check[0]["tables"],"SET title=?, seflink=?, category=?, text=?, phone=?, adress=?, email=?, let=?, lng=?, seo=?, description=?, state=?, rownumber=?, date=? WHERE ID=?",array($title,$seflink,$category,$texteditor,$phone,$adress,$email,$let,$lng,$seo,$description,1,$rownumber,date("Y-m-d"),$value[0]["ID"]));
                }
                if($add!=false) {
                  $value=$DB->CallData($check[0]["tables"],"WHERE ID=?",array($value[0]["ID"]),"ORDER BY ID ASC",1);
                 ?>

                 <div class="alert alert-success">
                  Object successfully saved.
                </div>
                <?php
              }
              else {
               ?>
               <div class="alert alert-danger">
                A problem was encountered while saving!
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
                    <label>Select Category</label>
                    <select class="form-control select2" style="width: 100%;" name="category">
                      <?php 
                      $result=$DB->callCategory($check[0]["tables"],$value[0]["category"],-1);
                      if($result!=false) {
                        echo $result;
                      }
                      else {
                        $DB->simpleCategory($check[0]["tables"]);
                      }
                      ?>
                    </select>
                  </div>
                  <!-- /.col -->
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" value="<?=stripslashes($value[0]["title"])?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Text</label>
                    <textarea class="textarea" placeholder="Text" name="texteditor" 
                    style="width: 100%; height: 450px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?=stripslashes($value[0]["text"])?>
                  </textarea>

                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Seo Words</label>
                    <input type="text" class="form-control" placeholder="Seo Words" name="seo" value="<?=stripslashes($value[0]["seo"])?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Description" name="description" value="<?=stripslashes($value[0]["description"])?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" placeholder="Select Image" name="image">
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" class="form-control" placeholder="Phone Number" name="phone"value="<?=stripslashes($value[0]["phone"])?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Adress</label>
                      <input type="text" class="form-control" placeholder="Location" name="adress" value="<?=stripslashes($value[0]["adress"])?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" placeholder="Email" name="email" value="<?=stripslashes($value[0]["email"])?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Location Let</label>
                      <input type="text" class="form-control" placeholder="Location Let" name="let" value="<?=stripslashes($value[0]["let"])?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Location Lng</label>
                      <input type="text" class="form-control" placeholder="Location Lng" name="lng" value="<?=stripslashes($value[0]["lng"])?>">
                    </div>
                  </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Row Number</label>
                    <input type="number" class="form-control" placeholder=0 name="rownumber" style="width: 75px;" value="<?=stripslashes($value[0]["rownumber"])?>">
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

 <?php 
}
else {
  ?>
  <meta http-equiv="refresh" content="0;url=<?=SITE?>list/<?=$check[0]["tables"]?>">
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