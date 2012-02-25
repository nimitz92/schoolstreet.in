<?php
	require_once "../../init.php";
	if(!isset($_GET['tutid'])){
			header("Location:$application_url");
		}
		
		$tutid = $_GET['tutid'];
		$result = $mysql->getResult("select document, documentsize, documenttype, documentname from tutorials where tutid = $tutid ;");
		if($result === false){
		echo "Error in Database @ Download.php.<br />Please try again later".$mysql->getError();
		exit;
		}
		$size =$result[0]['documentsize'];
		$type = $result[0]['documenttype'];
		$name = $result[0]['documentname'];
			
		header("Content-length: $size ");
		header("Content-type: $type ");
		header("Content-Disposition: attachment; filename=$name");
		echo $result[0]['document'];
		exit;
?>