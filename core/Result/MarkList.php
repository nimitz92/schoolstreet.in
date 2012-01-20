<?php
	require_once "../../init.php";
	if(!isset($_POST['marklist'])){
		header("Location:$application_url");
		exit;
	}
	session_start();
	$teacherid = $_SESSION['uid'];
	$examid = $_POST['examid'];
	$count = $_POST['length'];
	for($i=0;$i<$count;$i++){
		$stuid = $_POST['stuid'][$i];
		$marks = $_POST['marks'][$i];
		
		$result = $mysql->getResult("insert into results (examid, stuid, marksobtained) values($examid, $stuid, $marks);",true);
		if($result===false){
			echo "Error in Database @ (1).MarkList.php ".$mysql->getError();
			exit;
		}	
	}
	
	$class = $_POST['class'];
	$section = $_POST['section'];
	
	$query = $mysql->getResult("select teacherid from teachers where ctclass = $class and ctsection = '$section';");
	if($query===false){
			echo "Error in Database @ (2).MarkList.php ".$mysql->getError();
			exit;
	}
	
	$classteacher = $query[0][0];
	
	if($classteacher==$teacherid){
		$approve = 1;
	}
	
	else {
		$approve=0;
		
		$to = $classteacher;
		$from = $teacherid;
		$messagetype = $mysql->escape("RESULT APPROVAL REQUEST");
		$time = time();
		$status = 0; 
		
		$send = $mysql->getResult("insert into messages (sender, receiver, msgtype, msgdate, status) values ($from, $to, '$messagetype', $time, $status);",true);
		if($send===false){
			echo "Error in Database @ (3).MarkList.php ".$mysql->getError();
			exit;
		}
		$msgid = $mysql->getAutoId();
	}
	
	if($approve==1)
		$query = "update exams set approvalstatus = $approve where examid = $examid;";
	else 
		$query = "update exams set approvalstatus = $approve , msgid = $msgid where examid = $examid;";
		
	$update = $mysql->getResult($query,true);
	if($update===false){
		echo "Error in Database @ (4).MarkList.php ".$mysql->getError();
		exit;
	}
	
	echo "Marks submitted successfully!!";
	
	

?>
