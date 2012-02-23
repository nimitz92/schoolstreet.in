<?php
	require_once "../../init.php";
	session_start();
	if(!isset($_SESSION['uid']) && !isset($_POST['notice'])){
		if($_SESSION['usertype'] > TEACHER)
			header("Location: $application_url ");	
	}
	$author = $_POST['author'];
	$subject = $mysql->escape($_POST['subject']);
	$content = $_POST['content'];
	$expiry = $mysql->escape($_POST['expiry']);
	$sms = isset($_POST['sms'])? ($_POST['sms'] == 'on'? 1 : 0) : 0;
	$publishschool = isset($_POST['publishschool'])? ($_POST['publishschool'] == 'on'? 1 : 0) : 0;
	$publishhome =isset($_POST['publishhome'])? ($_POST['publishhome'] == 'on'? 1 : 0) : 0;
	$time = time();
	
	$result = $mysql->getResult("insert into notices (noticetime, noticeexpiry, subject, author, htmlcontent, smsid, publishschool, publishhome) values($time, '$expiry', '$subject', $author, '$content', $sms, $publishschool, $publishhome);",true);
	if($result === false){
		echo "Error in Database @ AddNotice.php.<br />Please try again later".$mysql->getError();
		exit;
	}
	$noticeid = $mysql->getAutoId();
	echo 'Notice Added Successfully!!';
?>