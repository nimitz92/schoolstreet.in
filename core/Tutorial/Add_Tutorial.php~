<?php
	require_once "../../init.php";
	if($_SESSION['usertype']>4){
			header("Location:$application_url");
		}
		
	if(!isset($_POST['tutorial'])){
		header("Location:$application_url");
		}
	$schoolid = $_SESSION['schoolid'];
	$author = $_SESSION['uid'];	
	$topic = $mysql->escape($_POST['topic']);
	$link = $mysql->escape($_POST['link']);
	$class = $_POST['class'];
	$subject = $_POST['subject'];
	$expiry = $mysql->escape($_POST['expiry']);
	$time = time();
	$action = $_POST['type'];
	if($action=='publish'){
		$webpublishing = 1;
		$content = $_POST['content'];
		
		$result = $mysql->getResult("insert into tutorials (heading, tuttime, tutexpiry, link, author, class, schoolid, subject, webpublishing, content) values('$topic', $time, '$expiry', '$link', $author, $class, $schoolid, $subject, $webpublishing, '$content');",true);
		if($result === false){
		echo "Error in Database @ Add_Tutorial.php.<br />Please try again later".$mysql->getError();
		exit;
	}
	$tutorialid = $mysql->getAutoId();
	echo 'Tutorial Added Successfully!!.<br /><a href="'.$application_url.'>Home</a>"';		
		}
	if($action=='upload' && $_FILES['doc']['size'] > 0){
		$webpublishing = 0;
		$filename = $_FILES['doc']['name'];
		$tmpName  = $_FILES['doc']['tmp_name'];
		$filesize = $_FILES['doc']['size'];
		$filetype = $_FILES['doc']['type'];

		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);	
		
		$result = $mysql->getResult("insert into tutorials (heading, tuttime, tutexpiry, link, author, class, subject, webpublishing, document, documentsize, documenttype, documentname) values('$topic', $time, '$expiry', '$link', $author, $class, $subject, $webpublishing, '$content', $filesize, '$filetype', '$filename' );",true);
		if($result === false){
		echo "Error in Database @ Add_Tutorial.php(2).<br />Please try again later".$mysql->getError();
		exit;
		}
		
		$tutorialid = $mysql->getAutoId();
		echo 'Tutorial Added Successfully!!.<br /><a href="'.$application_url.'>Home</a>"';
	}	
?>