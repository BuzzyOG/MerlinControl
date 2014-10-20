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
					<form style="margin-bottom:50px;" method="post" action="verifyemail.php" name="confirmemail">
						<div class="row">
							<div class="col-md-12">
								<p class="form">
									<label>Email Address</label>
									<input required type="text" placeholder="Email Address" id="email_email" class="login_input" name="email_email">
								</p>
							</div>
							
							<div class="col-md-12" style="margin-top:20px;">			
								<p class="form">
									<label>Verification Code</label>
									<input class="verify" placeholder="Your 12 digit code, if you will" id="email_code" class="login_input" name="email_code">
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
					<h1 class="main center">POST REQUEST</h1>
					<p class="main left">
					<?php 
						$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

						// if post data is not empty hen load sql
						if ( !empty($_POST) ) {

							echo "We found post data... loading SQL <br>";
							// Check connection
							if (mysqli_connect_errno()) {
								// display connection errors
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}

							// email variable and code variable
							$email_email = $_POST['email_email'];
							$email_code = $_POST['email_code'];
							// load from sql users containing that email
							$result = mysqli_query($con,"SELECT * FROM `users` WHERE `user_email`='$email_email'");

							// while we have a result fetch array
							while($row = mysqli_fetch_array($result)) {

								// created a hash of when the user joined split it into two parts
								$hashedtime = md5($row['user_date_joined']);
								$cuthashtime = substr($hashedtime, 0, 4);
								$endhashtime = substr($hashedtime, -4);

								// created a has of users firt anme, cut down to just the start
								$hashedname = md5($row['user_name']);
								$middlehashname = substr($hashedname, 0, 4);

								// generates the final code
								$finalcode = $cuthashtime . "-" . $middlehashname . "-" . $endhashtime;

								// displays debug code
									echo "<b>Posted:</b> " . $_POST['email_email'];
									echo "<br>";
									echo "<b>User loaded:</b> " . $row['user_name'] . " " . $row['user_last']. " - " . $row['user_email'];
									echo "<br><br>";

									echo "<b>Date user joined:</b> " . $row['user_date_joined'];
									echo "<br>";
									echo "<b>Hashed dated:</b> " . $hashedtime;
									echo "<br>";
									echo "<b>First part:</b> " . $cuthashtime;
									echo "<br>";
									echo "<b>Last part:</b> " . $endhashtime;

									echo "<br><br>";
									echo "<b>Hashed name:</b> " . $hashedname;
									echo "<br>";
									echo "<b>Middle part:</b> " . $middlehashname;

									echo "<br><br>";
									echo "<b>The final code:</b> " . $cuthashtime . "-" . $middlehashname . "-" . $endhashtime;
									echo "<br>";
									echo "<b>Entered code: </b> " . $email_code;
									echo "<br><br>";

									echo "<b>The account type currently is:</b> " . $row['user_account_type'];
									echo "<br>If it is 0 then the code can continue below</b><br><br>";
								// end debug code
								
							} // end of while loop

							// close the sql connection
							mysqli_close($con);

							// if the entered code matches the generated code and the user type is 0 (unregistered) then continue
							if ($email_code == $finalcode && $row['user_account_type'] == 0) {
								echo "<b>WE HAVE A MATCH! Changing user account to registered...</b>";
								echo "<br><br>";

								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

								$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
								mysqli_query($con,"UPDATE `users` SET `user_account_type`=1 WHERE `user_email`='$email_email'");

								mysqli_close($con);
								
							}
						}
					?>
					<?php
						// show potential errors / feedback (from login object)
						if (isset($login)) {
							if ($login->errors) {
								foreach ($login->errors as $error) {
									echo "<hr>";
									echo $error;
								}
							}
							if ($login->messages) {
								foreach ($login->messages as $message) {
									echo "<hr>";
									echo $message;
								}
							}
						}
					?>
					</p>
				</div> 

				<div class="col-md-6">
					<h1 class="main center">GET REQUEST</h1>
					<p class="main left">
						<?php
						// if post data is not empty hen load sql
						if ( !empty($_GET) ) {
							// email variable and code variable
							$get_id = intval($_GET['id']);
							$get_code = mysql_escape_string($_GET['code']);

							echo "We found get data... loading SQL <br>";
							echo $get_id;
							echo "<br>"; 
							echo $get_code;
							echo "<br>";

							

							// load from sql users containing that email
							$result = mysqli_query($con,"SELECT * FROM `users` WHERE `user_id`='$get_id'");
							// while we have a result fetch array
							while($row = mysqli_fetch_array($result)) {

								echo "<b>ID:</b> " . $row['user_id'] . " - " . $row['user_name'] . "<br>";
								echo "<b>Name:</b> " . $row['user_name'] . "<br>";
								echo "<b>Joined:</b> " . $row['user_date_joined'] . "<br>";
								$username = $row['user_id'];
								echo $row['user_name'] . $row['user_date_joined'];
								$code1 = md5($row['user_name']);
								$code2 = md5($row['user_date_joined']);
								echo "<br>";
								echo $code1 . "<br>";
								echo $code2 . "<br>";
								echo $code3 . "<br>";
								echo "<br>";



								if ($_GET[$code1] == $code2) {
									echo "Match";
								};

								echo "<br>" . "<h5>http://localhost/MerlinControl/verifyemail.php?id=" . $row['user_id'] . "&" . $code1 . "=" . $code2 . "</h5>";

							}
						}
						?>
					</p>
				</div>
		</div>

	
</div>