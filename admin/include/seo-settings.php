
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Seo Settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=SITE?>">Home</a></li>
                <li class="breadcrumb-item active">Seo Settings</li>
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
            if(!empty($_POST["title"]) && !empty($_POST["seo"]) && !empty($_POST["description"])) {    
              $title=$DB->filter($_POST['title']);
              $seo=$DB->filter($_POST['seo']);
              
              $description=$DB->filter($_POST['description']);    
              
                $update=$DB->RunQuery("UPDATE settings","SET title=?, seo=?, description=? WHERE ID=?",array($title,$seo,$description,1),1);
              
              if($update!=false) {
                 ?>
                  <div class="alert alert-success">
                    Object successfully updating.
                  </div>
                  <meta http-equiv="refresh" content="2;url=<?=SITE?>seo-settings" />
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
                      <label>WebSite Title</label>
                      <input type="text" class="form-control" placeholder="Title" name="title" value="<?=$webtitle?>">
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Seo Words</label>
                      <input type="text" class="form-control" placeholder="Seo Words" name="seo" value="<?=$webseo?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" class="form-control" placeholder="Description" name="description" value="<?=$webdescription?>">
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
