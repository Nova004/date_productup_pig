<?php
	session_start();
	session_destroy();
	header("location:../no_login/index.php");
?>