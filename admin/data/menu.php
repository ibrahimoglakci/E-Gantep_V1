<aside class="main-sidebar sidebar-dark-warning elevation-4">
  <!-- Brand Logo -->
  <a href="<?=SITE?>" class="brand-link">
    <img src="<?=SITE?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">AdminPanel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?=SITE?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?=$_SESSION['name']?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2" >
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item" style="margin-top: 8px; font-size: 17px;">
            <a href="<?=SITE?>add-module" class="nav-link">
              <i class="fas fa-plus-square"></i>
              <p>
               Add Module

             </p>
           </a>
         </li>
         <li class="nav-item" style="margin-top: 8px; font-size: 17.5px;">
            <a href="<?=SITE?>add-user" class="nav-link">
              <i class="fas fa-plus-circle" style="color: lime;"></i>
              <p style="color: lime;">
               Add User

             </p>
           </a>
         </li>
         <li class="nav-item" style="margin-top: 8px; font-size: 18px;">
            <a href="<?=SITE?>list-user" class="nav-link">
              <i class="fas fa-list-alt" style="color: #007bff;"></i>
              <p style="color: #007bff;">
               List User

             </p>
           </a>
         </li>
         <li class="nav-item" style="margin-top: 8px; font-size: 18px;">
            <a href="<?=SITE?>comments" class="nav-link">
             <i class="fas fa-comment-dots" style="color: tomato;"></i>
              <p style="color: #007bff;">
               Comments
               <?php 
               $newcomments=$DB->CallData("ilanyorumlar","WHERE state=?",array(2));
               if($newcomments!=false){


                ?>

                <span class="right badge badge-info"><?=count($newcomments)?></span>
                <?php 

                }
                 ?>
             </p>
           </a>
         </li>

         <li class="nav-item" style="margin-top: 8px; font-size: 18px;">
            <a href="<?=SITE?>adverts" class="nav-link">
              <i class="fas fa-clipboard-check" style="color: orange;"></i>
              <p style="color: pink;">
               Adverts
               <?php 
               $newads=$DB->CallData("pano","WHERE state=?",array(0));
               if($newads!=false){


                ?>

                <span class="right badge badge-warning"><?=count($newads)?></span>
                <?php 

                }
                 ?>
             </p>
           </a>
         </li>


         <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <?php
            $modules=$DB->CallData("modules","WHERE state=?",array(1),"ORDER BY title ASC");
            if($modules!=false)
            {
             for($i=0;$i<count($modules);$i++)
             {
               ?>
               <li class="nav-item">
                <a href="<?=SITE?>list/<?=$modules[$i]["tables"]?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?=$modules[$i]["title"]?></p>
                </a>
              </li>
              <?php
            } 
          }
          ?>
        

      </ul>
    </li>
    <li class="nav-item">
      <a href="<?=SITE?>seo-settings" class="nav-link">
        <i class="fas fa-cog"></i>
        <p>
          Seo Settings
          
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?=SITE?>contact-settings" class="nav-link">
        <i class="fas fa-cog"></i>
        <p>
          Contact Settings
          
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?=SITE?>logout" class="nav-link">
        <i class="fas fa-power-off"></i>
        <p>
          Logout
          
        </p>
      </a>
    </li>
    
  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>