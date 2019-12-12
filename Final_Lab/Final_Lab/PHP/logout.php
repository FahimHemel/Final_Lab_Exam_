<?php

	session_start();
	setcookie("username", $uname, time()-5, "/");
	header('location: ../views/Login.php');
?>