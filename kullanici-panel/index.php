<?php 

@session_start();
@ob_start();
define("DATA", "data/");
define("PAGE", "include/");
define("CLASSPAGE", "class/");
include_once(DATA."connection.php");
define("SITE", $weburl."kullanici-panel/");

if(!empty($_SESSION["ID"]) && !empty($_SESSION["isimsoyisim"]) && !empty($_SESSION["email"]) && !empty($_SESSION["gorev"])) {

}
else {
  ?>
  <meta http-equiv="refresh" content="0;url=<?=SITE?>login">
  <?php
  exit();
}


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$_SESSION['isimsoyisim']?>|Panel</title>
  <!--<meta http-equiv="keywords" content="//$webseo?>">-->
  <!--<meta http-equiv="description" content="//$webdescription?>"> -->
  <link rel="shortcut icon" type="image/x-icon" href="images/admin.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="<?=SITE?>dropzone/dropzone.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=SITE?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=SITE?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=SITE?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=SITE?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=SITE?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=SITE?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=SITE?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=SITE?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=SITE?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=SITE?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=SITE?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=SITE?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=SITE?>plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?=SITE?>plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">



    <?php 

    include_once(DATA."header.php");
    include_once(DATA."menu.php");

    if($_GET && !empty($_GET['page'])) {
      $page=$_GET['page'].".php";
      if(file_exists(PAGE.$page)) {

        include_once(PAGE.$page);
      }

      else {
        include_once(PAGE."home.php");
        
      }

    }
    else {
      include_once(PAGE."home.php");
      
    }




    include_once(DATA."footer.php");
    ?>










    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?=SITE?>plugins/jquery/jquery.min.js"></script>
  <script src="<?=SITE?>dropzone/dropzone.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?=SITE?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?=SITE?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?=SITE?>plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?=SITE?>plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?=SITE?>plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?=SITE?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?=SITE?>plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?=SITE?>plugins/moment/moment.min.js"></script>
  <script src="<?=SITE?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?=SITE?>plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?=SITE?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=SITE?>dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?=SITE?>dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?=SITE?>dist/js/demo.js"></script>
  <!-- DataTables -->
  <script src="<?=SITE?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=SITE?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=SITE?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?=SITE?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?=SITE?>plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Select2 -->
  <script src="<?=SITE?>plugins/select2/js/select2.full.min.js"></script>
  <script src="<?=SITE?>plugins/toastr/toastr.min.js"></script>
  <!-- Summernote -->
  <script src="<?=SITE?>plugins/summernote/summernote-bs4.min.js"></script>

  <script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script>

  const isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
  if (isMobile) {
    alert("localhost");
  }


  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })

  function activecheck(ID,table) {
    var state = 0;
    if($(".activecheck"+ID).is(':checked')) {
      state=1;
    }
    else {
      state=2;
    }
    $.ajax({
      method:"POST",
      url:"<?=SITE?>ajax.php",
      data:{"tables":table,"ID":ID,"state":state},
      success: function(result) {
        if(result="OK") {
          
        }
        else {
          alert("Error currently");
        }
      }
    });
  }
</script>

</body>
</html>
