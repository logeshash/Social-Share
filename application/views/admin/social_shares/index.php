<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-9">
        </div>
        <div class="col-md-3">
          <a href="<?php echo resource_path("social_share","new_form");?>" class="btn btn-primary pull-right">Create Social Share Content</a>
        </div>
      </div>
    </div>
    </section>
    <div class="col-md-2"></div>
    <?php
    if($this->session->flashdata('alert'))
    {
    ?>
      <div class="alert alert-info col-md-8">
      <?= $this->session->flashdata('alert')?>
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>&nbsp;
      </div>
    <?php
    }
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Social Share List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DataTableList" class="table table-bordered table-striped">
                <thead>
                <tr class="table-header">
                  <th>Id</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  foreach($social_shares as $social_share)
                  {
                    if($social_share->is_published == 1)
                    {
                      $href_class = "circle";
                      $href_title = "published";
                    }
                    else
                    {
                      $href_class = "circle-o";
                      $href_title = "unpublished";
                    }
                ?>
                <tr>
                  <td><?= $social_share->id ?></td>
                  <td><?= $social_share->share_title ?></td>
                  <td><?= word_limiter($social_share->share_content) ?></td>
                  <td><?= format_date($social_share->created_at) ?></td>
                  <td><?= format_date($social_share->updated_at) ?></td>
                  <td>
                    <a href = '<?= site_url(ADMIN_PATH."/social_share/edit/{$social_share->id}")?>' class = "fa fa-edit" title = "Edit"></a>
                    <a href = '<?= site_url(ADMIN_PATH."/social_share/publish/{$social_share->id}")?>' class = "fa fa-<?= $href_class ?>" title = "<?= $href_title ?>"></a>
                    <a href = '<?= site_url(ADMIN_PATH."/social_share/delete/{$social_share->id}")?>' class = "fa fa-remove" title = "Delete"></a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>