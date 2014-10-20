<div class="container">

		<ol class="breadcrumb">
			<li>Home</li>
			<li>Account</li>
			<li class="active">Email Verification</li>
		</ol>

		<div class="row">
				<div class="col-md-6 col-md-offset-3 outershadow color bg2">

					<h1 class="main center" style="margin-top:-20px;">Hey Stranger</h1>

					<h3 class="main logintext center">Thanks for registering, if you have you're confirmation code feel free to enter it below:</h3>
					<form style="margin-bottom:50px;" method="post" action="index.php" name="confirmemail">
						<div class="row">
							<div class="col-md-12">
								<p class="form">
									<label>Email Address</label>
									<input required type="text" placeholder="Email Address" id="login_input_username" class="login_input" name="user_name">
								</p>
							</div>
							
							<div class="col-md-12" style="margin-top:20px;">			
								<p class="form">
									<label>Verification Code</label>
									<input class="verify" placeholder="Your 12 digit code, if you will" id="login_input_password" class="login_input" name="user_password">
								</p>
							</div>

						</div>
						<div class="row" style="margin-top:20px;">
							<div class="col-md-12">
								<button style="display: inline" type="submit" value="Login" name="login" class="red-button center">confirm</button>
							</div>
						</div>
					</form>
				</div>

				<div class="col-md-6">
				</div> 
		</div>

	
</div>


<?php
	// show potential errors / feedback (from login object)
	if (isset($login)) {
	    if ($login->errors) {
	        foreach ($login->errors as $error) {
	            echo $error;
	        }
	    }
	    if ($login->messages) {
	        foreach ($login->messages as $message) {
	            echo $message;
	        }
	    }
	}
?>