<?
	require_once "../../init.php";
	if(!isset($_POST['entermarks'])){
		header("Location:$application_url");
		exit;
	}
	session_start();
	$teacherid = $_SESSION['uid'];
	$school = $_SESSION['schoolid'];
	$examname = $mysql->escape($_POST['examname']);
	$session = $mysql->escape($_POST['session']);
	$class = $_POST['class'];
	$section = $mysql->escape($_POST['section']);
	$subject = $_POST['subject'];
	$maxmarks = $_POST['maxmarks'];
	$date = $_POST['doe'];
	
	$result = $mysql->getResult("insert into exams (examname, session, class, section, subject, maxmarks, examtime) values('$examname', '$session', $class, '$section', $subject, $maxmarks, '$date');",true);
	if($result===false){
		echo "Error in Database @ (1).EnterMarks.php ".$mysql->getError();
		exit;
	}
	
	$examid = $mysql->getAutoId();
	
	$list = $mysql->getResult("select stuid, rollno, name from students where class=$class and section = '$section' and school = $school;");
	if($list===false){
		echo "Error in Database @ (2).EnterMarks.php ".$mysql->getError();
		exit;
	}
	
	echo '
		<head>
			<title>Enter Marks</title>
		</head>
		<body>
		<form action="MarkList.php" method="POST">
			<table>
				<thead>
					<td>Roll No</td>
					<td>Name</td>
					<td>Max Marks</td>
					<td>Marks Obtained</td>
				</thead>
				
	';
	$i=0;
	//echo $list[0][0];
	foreach($list as $student){
		echo '
			<tr>
			<input type="hidden" name="stuid['.$i.']" value="'.$student[0].'" />
			<td><input type="text" name="rollno['.$i.']" value="'.$student[1].'" size="5" disabled="true" /></td>
			<td><input type="text" name="name['.$i.']" value="'.$student[2].'" size="15" disabled="true" /></td>
			<td><input type="text" name="maxmarks" value="'.$maxmarks.'" size="3" disabled="true" /></td>
			<td><input type="text" name="marks['.$i.']" size="3" /></td>	
			</tr>
		';
		$i++;
	}
	
	echo '
		<tr>
		<input type="hidden" value="'.$i.'" name="length" />
		<input type="hidden" value="'.$examid.'" name="examid" />
		<input type="hidden" value="'.$class.'" name="class" />
		<input type="hidden" value="'.$section.'" name="section" /></tr>
		<input type="submit" value="Submit" name="marklist" />
		</table>
		</form>
	';
	
	
	
?>
