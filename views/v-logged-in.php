<div class="container">

		<ol class="breadcrumb">
			<li>Home</li>
			<li>Account</li>
			<li class="active">Nostalgia</li>
		</ol>

		<div class="row">
				<div class="col-md-6 col-md-offset-3 outershadow color bg2">

					<h1 class="main center" style="margin-top:-20px;">Whoops</h1>

					<h3 class="main logintext center">Hi there <?php echo $_SESSION['user_name']; ?>, it looks like you're already logged in. So you don't need to be here. Sneaky!</h3>

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