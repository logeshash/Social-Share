<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="row">
  <div class="col-md-12">
    <div class="col-md-10">
      <h3></h3>
    </div>
    <div class="col-md-2">
      <a href="<?php echo resource_path("admins","index");?>" class="btn btn-primary pull-right">List of admins</a>
    </div>
  </div>
</div>
</section>
    <!-- Main content -->
    <section class="content">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= site_url(ADMIN_PATH.'/admins/create')?>" class="form-horizontal validation" method="post" novalidate="novalidate">
              <div class="box-body">
                <div class="form-group required">
                  <label for="inputEmail3" class="col-sm-2 control-label">Admin/Group Type</label>
                    <div class="col-sm-10">
                      <select name="admin_group_type" class="form-control validate[required]">
                        <option value="">Select Admin/Group Type</option>
                        <?php
                          foreach($admin_group_types as $key => $admin_type)
                          {
                              echo "<option value='$key'>" . $admin_type . "</option>";
                          } 
                        ?>
                      </select>
                    </div>
                  </div>
                <div class="form-group required">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control validate[required]" id="inputEmail3" name="name" placeholder="Name">
                  </div>
                </div>
                <div class="form-group required">
                  <label for="inputEmail3" class="col-sm-2 control-label">UserName</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control validate[required, custom[email]]" id="inputEmail3" name="username" placeholder="UserName">
                  </div>
                </div>
                <div class="form-group required">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control validate[required]" id="inputPassword3" name="password" placeholder="Password">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href= "<?php echo resource_path("admins","index");?>" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </section>
</div>