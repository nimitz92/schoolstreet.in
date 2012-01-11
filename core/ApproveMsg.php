<?php
	session_start();
	if(!isset($_SESSION['uid'])){
		header("Location:$application_url");
	}
	require_once "../init.php";
	$teacherid = $_SESSION['uid'];
	$msgid = $_GET['msgid'];
	$result = $mysql->getResult("select * from exams where msgid = $msgid");
	if($result===false){
		echo "Error in database @(1).ApproveMsg.php".$mysql->getError();
		exit;
	}
	$class = $result[0]['class'];
	$section = $result[0]['section'];
	$examid = $result[0]['examid'];
	
	$verify = $mysql->getResult("select teacherid from teachers where ctclass = $class and ctsection = '$section';");
	if($verify===false){
		echo "Error in database @(2).ApproveMsg.php".$mysql->getError();
		exit;
	}
	
	if($verify[0][0]!=$teacherid){
		echo "You dont have permission to view this page!";
		exit;
	}
	
	$name = $mysql->getResult("select name from teachers where teacherid = $teacherid;");
	if($name===false){
		echo "Error in database @(3).ApproveMsg.php".$mysql->getError();
		exit;
	}
	
	$marks = $mysql->getResult("select resultid, stuid, marksobtained from results where examid = $examid");
	if($marks===false){
		echo "Error in database @(4).ApproveMsg.php".$mysql->getError();
		exit;
	}
	echo "<head><title>Approve Result</title></head><body>";
	echo "<h4>Exam Name :: ".$result[0]['examname']."<br />";
	echo "Session :: ".$result[0]['session']."<br />";
	echo "Subject :: ".$result[0]['subject']."<br />";
	echo "Class :: ".$result[0]['class']."&nbsp;&nbsp;&nbsp;Section :: ".$result[0]['section']."<br />";
	echo "Teacher :: ".$name[0][0]."</h4><br />";
	
	echo '
		<table>
				<thead>
					<td>Roll No</td>
					<td>Max Marks</td>
					<td>Marks Obtained</td>
				</thead>
	';

	foreach($marks as $record){
		echo '
			<tr>
				<td>'.$record["stuid"].'</td>
				<td>'.$result[0]["maxmarks"].'</td>
				<td>'.$record["marksobtained"].'</td>
			</tr>
		';
	}
	echo "</table>";
	
	
	
	
?>
