<?php
	session_start();
	require_once '../../init.php';
	if(!isset($_SESSION['uid']) && !isset($_POST['approve'])){
		header("Location:$application_url");
		exit;
	}
	
	$msgid = $_POST['msgid'];
	
	$update = $mysql->getResult("update messages set status=1 where msgid=$msgid;",true);
	if($update===false){
		echo "Error in database @(1).Approve.php".$mysql->getError();
		exit;
	}
	
	$sender = $mysql->getResult("select sender from messages where msgid=$msgid;");
	if($sender===false){
		echo "Error in database @(2).Approve.php".$mysql->getError();
		exit;
	}
	
	$to = $sender[0][0];
	$from = $_SESSION['uid'];
	$messagetype = $mysql->escape("RESULT REJECTION NOTICE");
	$msg = $mysql->escape($_POST['msg']);
	$time = time();
	$status = 0;
	$send = $mysql->getResult("insert into messages (sender, receiver, msgtype, msgdate, content, status) values ($from, $to, '$messagetype', $time, '$msg', $status);",true);
	if($send===false){
		echo "Error in Database @ (3).MarkList.php ".$mysql->getError();
		exit;
	}
	$smsgid = $mysql->getAutoId();
	echo "message sent msgid::".$smsgid;
	
?>
