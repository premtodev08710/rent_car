<?php
	ob_start();
	session_start();
	session_destroy();

	header("location:show.php");
?>

<?php /* This code download from www.ThaiCreate.Com */ ?>