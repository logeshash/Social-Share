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
      <a href="<?php echo resource_path("social_shares","index");?>" class="btn btn-primary pull-right">List of Social Shares</a>
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
              <h3 class="box-title"><?= $this->page_title ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= site_url(ADMIN_PATH."/admin_types/update/{$resource->id}")?>" class="form-horizontal validation" method="post" novalidate="novalidate">
              <div class="box-body">
                <div class="form-group required">
                  <label for="input" class="col-sm-2 control-label">Admin group/company name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control validate[required]" id="input" name="group_name" placeholder="Group/Comany Name" value="<?= $resource->group_name ?>">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href= "<?php echo resource_path("admin_types","index");?>" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </section>
</div>