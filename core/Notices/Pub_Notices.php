<html>
	<head>
		<title>New Notice</title>
		<script type="text/javascript" src="../../ui/js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="../../ui/js/jquery-ui-1.8.13.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../../ui/css/redmond/jquery-ui-1.8.13.custom.css" />
		<script>
			jQuery(document).ready(function($) {
			$('#date').datepicker({dateFormat : 'dd-mm-yy'});
			})
		</script>
		<style type="text/css">
			div.ui-datepicker{
 				font-size:11px;
			}
		</style>
	</head>
	<body>
	<h2>New Notice</h2>
	<form action = "AddNotice.php" method = "POST">
	<p class="form-label">Subject<br /><input type = "text" name = "subject" width= /></p>
	<p class="form-label">Expiry-date<br /><input type = "text" id = "date" name = "expiry" /></p>
	<p class="form-label">Details<br /><textarea id="editor" name="content"></textarea>
<?php
	require_once "../../ui/ckeditor/ckeditor.php";

	
	$CKEditor = new CKEditor();
	$CKEditor->basePath = '/ckeditor/';
	$config = array();
	$config['skin'] = 'office2003';
	$config['width'] = '900';
	$CKEditor->replace("editor",$config);
	$sms="";
	session_start();
	if($_SESSION['usertype']==4 || $_SESSION['usertype']==2){
		echo '<p class="form-label"><input type= "checkbox" name="sms" />Send SMS/Email to parents</p>';
		
	}
	if($_SESSION['usertype']==2){
		echo '<p class="form-label"><input type= "checkbox" name="publishschool" />Publish notice on school webpage</p>';
		echo '<p class="form-label"><input type= "checkbox" name="publishsstreet" />Publish notice on schoolstreet.in</p>';
	}
?>
	<input type="submit" value="Submit" name="notice" />
	
	
