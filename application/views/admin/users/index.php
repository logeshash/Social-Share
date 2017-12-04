<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-10">
        </div>
        <div class="col-md-2">
          <a href="<?php echo resource_path("users","new_form");?>" class="btn btn-primary pull-right">Create User</a>
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
              <h3 class="box-title">User List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DataTableList" class="table table-bordered table-striped">
                <thead>
                <tr class="table-header">
                  <th>Id</th>
                  <th>Name</th>
                  <th>UserName</th>
                  <th>Mobile</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  foreach($users as $user)
                  {
                    if($user->is_published == 1)
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
                  <td><?= $user->id ?></td>
                  <td><?= $user->name ?></td>
                  <td><?= $user->username ?></td>
                  <td><?= $user->mobile ?></td>
                  <td><?= format_date($user->created_at) ?></td>
                  <td><?= format_date($user->updated_at) ?></td>
                  <td>
                    <a href = '<?= site_url(ADMIN_PATH."/users/edit/{$user->id}")?>' class = "fa fa-edit" title = "Edit"></a>
                    <span class="padding-left-30"></span>
                    <a href = '<?= site_url(ADMIN_PATH."/users/publish/{$user->id}")?>' class = "fa fa-<?= $href_class ?>" title = "<?= $href_title ?>"></a>
                    <span class="padding-left-30"></span>
                    <a href = '<?= site_url(ADMIN_PATH."/users/delete/{$user->id}")?>' class = "fa fa-remove" title = "Delete"></a>
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