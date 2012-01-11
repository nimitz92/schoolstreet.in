<?php
	session_start();
	if(!isset($_SESSION['uid'])){
		header("Location:$application_url");
	}
	
	require_once "../init.php";
	$uid = $_SESSION['uid'];
	$result = $mysql->getResult("select msgid, sender, msgdate,msgtype from messages where status = 0 and receiver = $uid;");
	if($result===false){
		echo "Error in database @(1).MyMsg.php".$mysql->getError();
		exit;
	}
	if($result==null){
		echo "No Pending Messages!!!";
		exit;
	}
	
	echo '
		<table>
			<thead>
				<td>From</td>
				<td>Title</td>
				<td>Date</td>
			</thead>
	';
	
	foreach($result as $message){
		$type = $mysql->escape("RESULT APPROVAL REQUEST");
		if($message[3]== $type){
			$href = "core/ApproveMsg.php?msgid=".$message[0];
		}
		else{
			$href = "core/DisplayMsg.php?msgid=".$message[0];
		}
		$message['msgdate'] = date("F j, Y, g:i a");
		echo '
			<tr>
				<td>'.$message['sender'].'</td>
				<td><a href="'.$href.'">'.$message['msgtype'].'</a></td>
				<td>'.$message['msgdate'].'</td>
			</tr>
		';
	}
	echo '</table>';
?>
