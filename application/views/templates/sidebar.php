<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title">
          <a href="#" class="site_title">
            <i class="fa fa-cube"></i>
            <span>&ensp;Forum Asisten</span>
          </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <img src="<?= base_url('assets/images/') . $user['image']; ?>" alt="<?= base_url('assets'); ?>." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Selamat Datang,</span>
            <h2><?= $user["name"]; ?></h2>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <!-- Query Menu sidebar user-->
          <?php
          $role_id = $this->session->userdata('role_id');
          $queryMenu = "SELECT m.id, m.menu 
                        FROM user_menu m 
                        JOIN user_access_menu am 
                        ON m.id = am.menu_id 
                        WHERE am.role_id = $role_id 
                        ORDER BY am.menu_id ASC";
          $menu = $this->db->query($queryMenu)->result_array();
          ?>

          <div class="menu_section">
            <!-- LOOPING MENU -->
            <?php foreach ($menu as $m) : ?>
              <h3><?= $m['menu']; ?></h3>

              <!-- SIAPKAN SUB-MENU SESUAI MENU -->
              <?php
              $menuId = $m['id'];
              $querySubMenu = "SELECT * FROM user_sub_menu sm 
                                JOIN user_menu m 
                                ON sm.menu_id = m.id 
                                WHERE sm.menu_id = $menuId AND sm.is_active = 1
                                ";
              $subMenu = $this->db->query($querySubMenu)->result_array();
              ?>

              <!-- foreach submenu -->
              <?php foreach ($subMenu as $sm) : ?>
                <ul class="nav side-menu">
                  <li>
                    <a href="<?= base_url($sm['url']); ?>">
                      <i class="<?= base_url($sm['icon']); ?>"></i>
                      <?= $sm['title']; ?>
                    </a>
                  </li>
                </ul>
              <?php endforeach; ?>

            <?php endforeach; ?>
            <ul class="nav side-menu">
              <li><a href="<?= base_url('auth/logout'); ?>" class="tombol-logout"><i class="fa fa-sign-out"></i> Logout </a></li>
            </ul>
          </div>

        </div>
        <!-- /sidebar menu -->
      </div>
    </div>