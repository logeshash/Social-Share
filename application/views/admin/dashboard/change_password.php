<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="row">
  <div class="col-md-12">
  </div>
</div>
</section>
<div class="col-md-2"></div>
<?php
    if($this->session->flashdata('error'))
    {
    ?>
        <div class="alert alert-danger col-md-8">
        <?= $this->session->flashdata('error')?>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>&nbsp;
        </div>
    <?php
    }
    else if($this->session->flashdata('alert'))
    {
    ?>
        <div class="alert alert-success col-md-8">
        <?= $this->session->flashdata('alert')?>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>&nbsp;
        </div>
    <?php
    }
    ?>
    <!-- Main content -->
    <section class="content">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= site_url(ADMIN_PATH.'/dashboard/change_password')?>" class="form-horizontal validation" method="post" novalidate="novalidate">
              <div class="box-body">
                <div class="form-group required">
                  <label for="inputPassword" class="col-sm-2 control-label">Old Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control validate[required]" name="old_password" placeholder="Old Password">
                  </div>
                </div>
                <div class="form-group required">
                  <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control validate[required]" name="new_password" placeholder="New Password">
                  </div>
                </div>
                <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </div>
        </form>
    </div>
</div>
</section>
</div>