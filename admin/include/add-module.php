<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add Module</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=SITE?>">Home Page</a></li>
            <li class="breadcrumb-item active">Add Module</li>
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
        $run=$DB->AddModule();
        if($run!=false) {
          echo '<div class="alert alert-success" style="font-size: 18px;"><i class="fas fa-check-circle" style="font-size: 20px;"></i> Module has been successfully added.</div>';
          ?>
          <meta http-equiv="refresh" content="2;url=<?=SITE?>">
          <?php
        }
        else {
          echo '<div class="alert alert-danger"style="font-size: 18px;"><i class="fas fa-times-circle" style="font-size: 20px;"></i> Warning! An unexpected problem was encountered while creating a module.</div>';
        }
      }

      ?>


      <div class="col-md-6">


        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Register Module</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="#" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Module Name">
              </div>
              
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="state" value="1" checked="checked">
                <label class="form-check-label" for="exampleCheck1">Make Active?</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Add Module</button>
            </div>
          </form>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>