
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Contact Settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=SITE?>">Home</a></li>
                <li class="breadcrumb-item active">Contact Settings</li>
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
            if(!empty($_POST["phonenumber"]) && !empty($_POST["emailadress"]) && !empty($_POST["location"]) && !empty($_POST["fax"])) {    
              $phone=$DB->filter($_POST['phonenumber']);
              $mail=$DB->filter($_POST['emailadress']);
              
              $adress=$DB->filter($_POST['location']);  
              $fax=$DB->filter($_POST['fax']);    
              
                $update=$DB->RunQuery("UPDATE settings","SET phone=?, mail=?, adress=?, fax=? WHERE ID=?",array($phone,$mail,$adress,$fax,1),1);
              
              if($update!=false) {
                 ?>
                  <div class="alert alert-success">
                    Object successfully updating.
                  </div>
                  <meta http-equiv="refresh" content="2;url=<?=SITE?>contact-settings" />
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
                      <label>Phone Number</label>
                      <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" value="<?=$phone?>">
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>E-mail</label>
                      <input type="text" class="form-control" placeholder="E-mail adress" name="emailadress" value="<?=$mail?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Location</label>
                      <input type="text" class="form-control" placeholder="Location Adress" name="location" value="<?=$adress?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Fax</label>
                      <input type="text" class="form-control" placeholder="Fax" name="fax" value="<?=$fax?>">
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
