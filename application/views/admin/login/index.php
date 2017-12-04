<div class="login-box">
  <div class="login-logo">
  	<b>Admin</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body padding-bottom">
    <p class="login-box-msg">Login</p>

    <form class= "admin-login" action="<?= site_url('/api/ajax_function/admin_login_form') ?>" method="post" novalidate="novalidate">
      <div id="errorMessage" class="col-xs-12 tiny-font"></div>
      <div class="form-group">
        <input type="text" name= "username" class="form-control validate[required, custom[email]]" id="username" placeholder="UserName" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group">
        <input type="password" name= "password" class="form-control validate[required]" id="password" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row-margin">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
   </div>
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
  $('.admin-login').submit(function(e) {
        e.preventDefault();
        var thisForm = $(this);
        if(!thisForm.validationEngine('validate'))
            return;
        $.ajax({
            type: "POST",
            url: thisForm.attr('action'),
            data: thisForm.serialize(),
            dataType: "json",
            success: function(data){
                var errorMessage = $('#errorMessage');
                errorMessage.removeClass("alert-danger alert-success").addClass('alert').html(data.message);
                if(data.status == true) {
                    thisForm[0].reset();
                    window.location.href = data.redirect;
                } else {
                    errorMessage.addClass("alert-danger");
                }
            }
        });
    });
});
</script>