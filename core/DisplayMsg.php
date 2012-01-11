<?php
	session_start();
	if(!isset($_SESSION['uid']) && !isset($_GET['msgid'])){
		header("Location:$application_url");
	}
	
	require_once "../init.php";
	$uid = $_SESSION['uid'];
	$msgid = $_GET['msgid'];
	
	
?>
