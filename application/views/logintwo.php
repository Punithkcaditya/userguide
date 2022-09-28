<div class="loginwrapper">
<?php if ($this->session->has_userdata('user_auth')) { ?>
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('user_auth'); ?>
      </div>
    <?php } ?>

    <?php if ($this->session->has_userdata('login_protected')) { ?>
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('login_protected'); ?>
      </div>
    <?php } ?>
    <?php if ($this->session->has_userdata('user_registered')) { ?>
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('user_registered'); ?>
      </div>
    <?php } ?>
	<span class="circle"></span>
	<div class="loginone">
	<?php echo form_open('home/loginAuth',array('autocomplete'=>'off','onsubmit'=>'validate(event)','id'=>'loginForm')); ?>
	<fieldset class="form-group">	
	<header>
        	
            <p>Please fill login details</p>
        </header>
  
        	<div class="form-group username">
			<label for="username">User-Name</label>
        		<input type="text" class="form-control" placeholder="Enter your username" id="username" name="username"  value="<?php echo set_value('username'); ?>" />
                <i class="glyphicon glyphicon-user"></i>
				<div class="invalid-feedback"></div>
            </div>
            <div class="form-group password">
			<label for="password">Password</label>
            	<input type="password" class="form-control" placeholder="Enter your password" name="password" id="password" />
                <i class="glyphicon glyphicon-lock"></i>
				<div class="invalid-feedback"></div>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
			</fieldset>
			<?php echo form_close(); ?>

    </div>
</div>
<script type="text/javascript">
  function validate(e){
	$(document).ready(function(){
				  $('.bluecheckradios').iCheck({
					checkboxClass: 'icheckbox_flat-blue',
					radioClass: 'iradio_flat-blue',
					increaseArea: '20%' // optional
				  });
				}); 
      var invalid   = false;
      var username  = jQuery('#username');
      var password  = jQuery('#password');
      if (username.val().trim() == '' || !username.val()) {
        username.addClass('is-invalid');
        username.next().text('Please enter your username.');
        username.focus();
        invalid = true;
      }else{
        username.removeClass('is-invalid');
        username.addClass('is-valid');
      }
      if (password.val().trim() == '' || !password.val()) {
        password.addClass('is-invalid');
        password.next().text('Please enter your password.');
        password.focus();
        invalid = true;
      }else{
        password.removeClass('is-invalid');
        password.addClass('is-valid');
      }
      if (invalid) {
        e.preventDefault();
        return false;
      }
  }
</script>
