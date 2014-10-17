
<!-- place this on the page and refrence the php -->
<script type="text/javascript">
$(function() {
    $.post('assets/screenres.php', { width: screen.width, height:screen.height }, function(json) {
        if(json.outcome == 'success') {
            // do something with the knowledge possibly?
        } else {
            alert('Unable to let PHP know what the screen resolution is!');
        }
    },'json');
});
</script>

<?php
	// Loads the screen resolutions from the users computer
	if(isset($_POST['width']) && isset($_POST['height'])) {
	    $_SESSION['screen_width'] = $_POST['width'];
	    $_SESSION['screen_height'] = $_POST['height'];
	    echo json_encode(array('outcome'=>'success'));
	} else {
	    echo json_encode(array('outcome'=>'error','error'=>"Couldn't save dimension info"));
	}
?>