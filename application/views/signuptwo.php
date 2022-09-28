<div class="loginwrapper">
<?php if (validation_errors()) { ?>
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo validation_errors(); ?>
      </div>
    <?php } ?>
	<!-- <span class="circle"></span> -->
	<div class="logintwo">
	<?php echo form_open('home/signupAuth',array('autocomplete'=>'off','onsubmit'=>'validate(event)','id'=>'signUpForm')); ?>
	<fieldset class="form-group">	
	<header>
        	
            <p>Please fill below details</p>
        </header>
  
        	<div class="form-group username">
			<label for="name">Full Name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" value="<?php echo set_value('name'); ?>">
                <i class="glyphicon glyphicon-pencil"></i>
				<div class="invalid-feedback"></div>
            </div>
			<div class="form-group username">
			<label for="name">Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="<?php echo set_value('username'); ?>">
                <i class="glyphicon glyphicon-user"></i>
				<div class="invalid-feedback"></div>
            </div>
            <div class="form-group password">
			<label for="password">Email address</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo set_value('email'); ?>">
                <i class="glyphicon glyphicon-envelope"></i>
				<div class="invalid-feedback"></div>
            </div>

			<div class="form-group password">
			<label for="password">Password</label>
            	<input type="password" class="form-control" placeholder="Enter your password" name="password" id="password" />
                <i class="glyphicon glyphicon-lock"></i>
				<div class="invalid-feedback"></div>
            </div>

			<div class="form-group password">
			<label for="password">Confirm Password</label>
			<input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password">
                <i class="glyphicon glyphicon-lock"></i>
				<div class="invalid-feedback"></div>
            </div>

            <button type="submit" class="btn btn-primary">Create Account</button>
			</fieldset>
			<?php echo form_close(); ?>

    </div>
</div>
<script type="text/javascript">
  function validate(e){
      var email = jQuery('#email');
      var name = jQuery('#name');
      var invalid = false;
      var username = jQuery('#username');

      if (name.val().trim() == '' || !name.val()) {
        name.addClass('is-invalid');
        name.next().text('Please enter your full name.');
        name.focus();
        invalid = true;
      }else{
        name.removeClass('is-invalid');
        name.addClass('is-valid');
      }
      if (username.val().trim() == '' || !username.val()) {
        username.addClass('is-invalid');
        username.next().text('Please enter your username.');
        username.focus();
        invalid = true;
      }else{
        username.removeClass('is-invalid');
        username.addClass('is-valid');
      }
      emailArray = email.val().split('');
      if (email.val().trim() == '' || !email.val() || (jQuery.inArray('.',emailArray) ==-1) || (jQuery.inArray('@',emailArray) ==-1)) {
        email.addClass('is-invalid');
        email.next().text('Please enter a valid email address.');
        email.focus();
        invalid = true;
      }else{
        email.removeClass('is-invalid');
        email.addClass('is-valid');
      }
      var password  = jQuery('#password');
      var password2 = jQuery('#password2');
      if (password.val() != password2.val() || password2.val().trim() == '' || password.val().trim() == '') {
        password.addClass('is-invalid');
        password2.addClass('is-invalid');
        password2.next().text('Password and Confirm Password doesn\'t match');
        password.next().text('Password and Confirm Password doesn\'t match');
        invalid = true;
      }else{
        password.removeClass('is-invalid');
        password2.removeClass('is-invalid');
        password.addClass('is-valid');
        password2.addClass('is-valid');
      }
      if (invalid) {
        e.preventDefault();
        return false;
      }
  }
</script>
