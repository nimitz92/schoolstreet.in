<?php
	require_once "../../init.php";
	if($_SESSION['usertype']>4){
			header("Location:$application_url");
		}
		
?>
<html>
	<head>
		<title>New Tutorial</title>
		<script type="text/javascript" src="../../ui/js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="../../ui/js/jquery-ui-1.8.13.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../../ui/css/redmond/jquery-ui-1.8.13.custom.css" />
		<link rel="stylesheet" type="text/css" href="../../style.css" />
		<script>
			jQuery(document).ready(function($) {
			$('.date').datepicker({dateFormat : 'dd-mm-yy'});
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
<p class="center large">Add New Tutorial</p>
<form action="Add_Tutorial.php" enctype="multipart/form-data" method="POST">
<p>Topic<br />
<input type="text" name="topic" /></p>
<p>For Class<br />
<select name="class">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
</select></p>
<p>Subject<br />
<select name="subject">
	<option value="1">English</option>
	<option value="2">Hindi</option>
	<option value="3">Maths</option>
	<option value="4">Science</option>
	<option value="5">Social Science</option>
</select></p>
<p>Link<br />
<input type="text" name="link" value="http://"/></p>
<p>Expiry Date<br />
<input type="text" class="date" name="expiry" /></p>

<?php

	$action = $_GET['type'];
	echo '<input type= "hidden" name="type" value="'.$action.'" />';
	if($action=='upload'){
		echo '<p>Upload<br /><input type="file" name="doc" /></p>';		
		}
	
	else if($action=='publish'){
		echo '<p>Content<br /><textarea id="editor" name="content"></textarea></p>';
		
	require_once "../../ui/ckeditor/ckeditor.php";
	$CKEditor = new CKEditor();
	$CKEditor->basePath = '/ckeditor/';
	$config = array();
	$config['skin'] = 'office2003';
	$config['width'] = '900';
	$CKEditor->replace("editor",$config);
	}
?>
<input type="submit" value="Submit" name="tutorial" />
</form>
</body>