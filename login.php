<?php
	session_start();
	$_SESSION["login"] = 1;
	header("location: index.php");
?>