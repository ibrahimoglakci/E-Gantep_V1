<?php 
$user=$DB->CallData("kullanicilar","WHERE ID=?",array($_SESSION['ID']),"ORDER BY ID ASC",1);
?>

<aside class="main-sidebar sidebar-dark-warning elevation-4">
  <!-- Brand Logo -->
  <a href="<?=SITE?>" class="brand-link">
    <span class="brand-text font-weight-light" style="font-size: 20px; margin-left: 2px">E-Gaziantep Kullanıcı Paneli</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <?php 
      if($user[0]["image"] != NULL) {
        ?>
        <div class="image">

          <img src="<?=SITE?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <?php 
      }
      else
      {

        ?>
        <div class="text-center">
          <i class="fas fa-user-circle" style="font-size: 43px; color: white;"></i>
        </div>
        <?php 
      }
      ?>
      <div class="info">
        <a href="<?=SITE?>profil" class="d-block" style="color: aqua; font-size: 18px;"><?=$_SESSION['isimsoyisim']?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2" >
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           
           <li class="nav-item" style="margin-top: 8px; font-size: 17.5px;">
            <a href="<?=SITE?>ilan-ekle" class="nav-link">
              <i class="fas fa-plus-circle" style="color: lime;"></i>
              <p style="color: pink;">
               İlan/Kampanya Ekle

             </p>
           </a>
         </li>
         <li class="nav-item" style="margin-top: 8px; font-size: 18px;">
          <a href="<?=SITE?>ilan-liste" class="nav-link">
            <i class="fas fa-list-alt" style="color: #007bff;"></i>
            <p style="color: limegreen;">
              İlan/Kampanya Listesi

            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?=SITE?>kredi-satin-al" class="nav-link" style="margin-top: 8px; font-size: 18px;">
            <i class="fas fa-money-bill-wave" style="color: green;"></i>
            <p style="color: mediumaquamarine;">
              Kredi Satın al

            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?=SITE?>profil" class="nav-link">
            <i class="fas fa-user-alt" style="color: yellow;"></i>
            <p style="color: orangered;">
              Profilim

            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SITE?>hesap-ayarlari" class="nav-link" >
            <i class="fas fa-cog" style="color: orange;" ></i>
            <p style="color: aqua;">
              Hesap Ayarları

            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=SITE?>logout" class="nav-link">
            <i class="fas fa-power-off" style="color: red;"></i>
            <p style="color: tomato;">
              Çıkış

            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>