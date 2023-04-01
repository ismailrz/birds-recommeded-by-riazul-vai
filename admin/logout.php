<?php 
    session_start();
	include 'db/db.php';
	include 'db/function.php';
	

	$_SESSION['id']    = NULL;
	$_SESSION['name']  = NULL;
	$_SESSION['email'] = NULL;
	session_destroy();
	redirect("login.php");






 ?>