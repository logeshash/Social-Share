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
      <a href="<?php echo resource_path("social_share","index");?>" class="btn btn-primary pull-right">List of admins</a>
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
            <form action="<?= site_url(ADMIN_PATH.'/social_share/create')?>" class="form-horizontal validation" method="post" novalidate="novalidate">
              <div class="box-body">
                <div class="form-group required">
                  <label for="inputEmail3" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control validate[required]" id="inputEmail3" name="share_title" placeholder="Title">
                  </div>
                </div>
                <div class="form-group required">
                  <label for="inputEmail3" class="col-sm-2 control-label">Conent</label>

                  <div class="col-sm-10">
                    <textarea name="share_content" rows="10" cols="100" class="form-control validate[required]">
                    </textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href= "<?php echo resource_path("social_share","index");?>" class="btn btn-default">Cancel</a>
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