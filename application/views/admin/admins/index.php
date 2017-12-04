<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
          <a href="<?php echo resource_path("admins","new_form");?>" class="btn btn-primary pull-right">Create Admin</a>
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
              <h3 class="box-title">Admin List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DataTableList" class="table table-bordered table-striped">
                <thead>
                <tr class="table-header">
                  <th>Id</th>
                  <th>Name</th>
                  <th>UserName</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  foreach($admins as $admin)
                  {
                    if($admin->is_published == 1)
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
                  <td><?= $admin->id ?></td>
                  <td><?= $admin->name ?></td>
                  <td><?= $admin->username ?></td>
                  <td><?= format_date($admin->created_at) ?></td>
                  <td><?= format_date($admin->updated_at) ?></td>
                  <td>
                    <a href = '<?= site_url(ADMIN_PATH."/admins/edit/{$admin->id}")?>' class = "fa fa-edit" title = "Edit"></a>
                    <span class="padding-left-30"></span>
                    <a href = '<?= site_url(ADMIN_PATH."/admins/publish/{$admin->id}")?>' class = "fa fa-<?= $href_class ?>" title = "<?= $href_title ?>"></a>
                    <span class="padding-left-30"></span>
                    <a href = '<?= site_url(ADMIN_PATH."/admins/delete/{$admin->id}")?>' class = "fa fa-remove" title = "Delete"></a>
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