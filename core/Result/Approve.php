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
	
	$result = $mysql->getResult("update exams set approvalstatus=1 where msgid=$msgid;",true);
	if($result===false){
		echo "Error in database @(2).Approve.php".$mysql->getError();
		exit;
	}
	
	if(isset($_POST['publish']) && $_POST['publish']=='on'){
		$publish = $mysql->getResult("update exams set publishstatus=1 where msgid=$msgid;",true);
		if($publish===false){
			echo "Error in database @(3).Approve.php".$mysql->getError();
			exit;
		}
		echo "result published<br />";
	}
	
	if(isset($_POST['sms']) && $_POST['sms']=='on'){
		echo "messages sent<br />";
	}
	echo "success";
	
?>
