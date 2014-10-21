<div class="container">

	<ol class="breadcrumb">
		<li>Home</li>
		<li>Account</li>
		<li>Login</li>
		<li class="active">Register</li>
	</ol>

	<div class="row">
		<div class="col-md-6 outershadow color bg2" style="margin-bottom: 70px;">

			<h1 class="main center" style="margin-top:-20px;">REGISTER</h1>
			<form style="margin-bottom:50px;" method="post" action="register.php" name="registerform">


				<div class="row">

					<div class="col-md-12 form">
						<label>First Name</label>
						<input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required placeholder="First Name" />
					</div>

					<div class="col-md-12 form">
						<label>Last Name</label>
						<input class="login_input" placeholder="Last Name" name="user_last" type="text">
					</div>

					<div class="col-md-12 form">
						<label>Email Address</label>
						<input id="login_input_email" class="login_input" type="email" name="user_email" required placeholder="Email Address" />
					</div>

					<div class="col-md-6 form password1">
						<label class="et_pb_contact_form_label">Password</label>
						<input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="password"/>
					</div>

					<div class="col-md-6 form password2">
						<label class="et_pb_contact_form_label">Confirm</label>
						<input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="confirm password" />
					</div>

				</div>

				<div class="row" style="margin-top:20px;">

					<button type="submit" name="register" value="Register" class="red-button">Register</button>

				</div>

			</form>
		</div>
		<div class="col-md-6">
			<h1 class="main left">Glad you could make it!</h1>
			<h3 class="main logintext">Thanks for taking the time to register, once you've filled out this fantastic form make sure to check your email for a verification message.</h3>
			<h3 class="main logintext">For your password make sure you've got atleast one number and a minimum of six characters long.</h3>
			<?php
				// show potential errors / feedback (from registration object)
				if (isset($registration)) {
					if ($registration->errors) {
						foreach ($registration->errors as $error) {
							echo $error;
						}
					}
					if ($registration->messages) {
						foreach ($registration->messages as $message) {
							echo $message;
						}
					}
				}
			?>
		</div> 
	</div>
</div>