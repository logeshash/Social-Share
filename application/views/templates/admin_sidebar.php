  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar <?= !empty($hide_sidebar) ? $hide_sidebar : '' ?> ">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active">
          <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url(ADMIN_PATH.'/users') ?>">
            <i class="fa fa-user"></i> <span>Users</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i>
            <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url(ADMIN_PATH.'/admins') ?>"><i class="fa fa-circle-o"></i> Admin Users</a></li>
            <li><a href="<?= site_url(ADMIN_PATH.'/admin_type') ?>"><i class="fa fa-circle-o"></i> Admin User Type</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Admin User Mapping</a></li>
          </ul>
        </li>
        <li>
          <a href="<?= site_url(ADMIN_PATH.'/social_shares') ?>">
            <i class="fa fa-share-alt"></i> <span>Social Share</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>