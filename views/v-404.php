<?php //Background Randomisation By Luke Brown
	$bg = array(
		"These are not the droids you are looking for.",
		"My dog ate that page.",
		"Woah there!",
		"Uh-oh",
		"You done broke'ded it." 
		);

	$i = rand(0, count($bg)-1);  
	$errorMessage = "$bg[$i]";
?>

<div class="container">

		<ol class="breadcrumb">
			<li>Home</li>
			<li class="active">404</li>
		</ol>

		<div class="row">
				<div class="col-md-8 col-md-offset-2 outershadow color bg3">

					<h1 class="main center" style="margin-top:-20px;">That page was not found</h1>
					<h3 class="main logintext center"><?php echo $errorMessage ?></h3>
					<input type="button" class="red-button" value="return home" onClick="parent.location='http://merlin.luke.sx'">
				</div>
				<div class="col-md-6">
				</div> 
		</div>

	
</div>