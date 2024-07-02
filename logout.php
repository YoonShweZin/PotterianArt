	<?php 
	session_start();
	unset($_SESSION["name"]);
	unset($_SESSION["pw"]);
	header("Location:admin_signin.php");
	?>