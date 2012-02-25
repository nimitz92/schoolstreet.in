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
</script>
	</head>
	<body>
	<h2>New Notice</h2>
	<form action = "AddNotice.php" method = "POST">
	
	<p class="form-label">Subject<br /><input type = "text" id = "name" name = "subject" width= /></p>
	<p class="form-label">Expiry-date<br /><input type = "text" id = "date" name = "expiry" /></p>
	<p class="form-label">Details<br /><textarea id="editor" id = "content" name="content"></textarea>
<?php
	require_once "../../ui/ckeditor/ckeditor.php";

	
	$CKEditor = new CKEditor();
	$CKEditor->basePath = '/ckeditor/';
	$config = array();
	$config['skin'] = 'office2003';
	$config['width'] = '900';
	$CKEditor->replace("editor",$config);
	$sms="";
	require_once "../../init.php";
	
	if($_SESSION['usertype']<=TEACHER){
		echo '<p class="form-label"><input type= "checkbox" id = "sms" name="sms" />Send SMS/Email to parents</p>';
		echo '<input type="hidden" id = "author" name="author" value="'.$_SESSION['uid'].'"/>';	
	}
	if($_SESSION['usertype']<=SCHOOL_ADMIN){
		echo '<p class="form-label"><input type= "checkbox" id="publishschool" name="publishschool" />Publish notice on school webpage</p>';
		echo '<p class="form-label"><input type= "checkbox" id = "publishhome" name="publishhome" />Publish notice on schoolstreet.in</p>';
	}
?>
	<input type="submit" value="Submit" name="notice" />
	
	
