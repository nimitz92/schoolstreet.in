<?php
	session_start();
	if(!isset($_SESSION['uid'])){
		header("Location:$application_url");
	}
	require_once "../../init.php";
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
	echo "<head><title>Approve Result</title>";
	echo '<script type="text/javascript" src="../ui/js/jquery-1.6.1.min.js"></script>';
	echo '<script>
			jQuery(document).ready(function($) {
			$(".approve").hide();
			$(".reject").hide();
			})
		</script>';

	echo '<script type=text/javascript>
		function approve() {
			$(".reject").hide();
			$(".approve").slideToggle();
			return true;
			}
		</script>';
	echo '<script type=text/javascript>
		function reject() {
			$(".approve").hide();
			$(".reject").slideToggle();
			return true;
			}
		</script>';
	echo "</head><body><h4>Exam Name :: ".$result[0]['examname']."<br />";
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
	echo "<button type='submit' name='approve' onclick='return approve()'>Approve</button>";
	echo "<button type='submit' name='Reject' onclick='return reject()'>Reject</button>";
	echo "
		<div class='approve'>
		<form action='Approve.php' method='post'>
		<input type='hidden' name='msgid' value='".$msgid."' />
		<input type='checkbox' name='sms' />Send SMS to parents<br />
		<input type='checkbox' name='publish' />Publish on web<br />
		<input type='submit' value='Proceed!' name='approve' /><br />
		</form></div>";
	echo "
		<div class='reject'>
		<form action='Reject.php' method='post'>
		<input type='hidden' name='msgid' value='".$msgid."' />
		Message:<textarea name='msg' ></textarea><br />
		<input type='submit' value='Proceed!' name='reject' /><br />
		</form></div></body>";
	
	
	
	
?>
