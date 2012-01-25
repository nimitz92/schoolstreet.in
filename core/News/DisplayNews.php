<html>
	<head>
		<title>News Details</title>
	
	</head>
	<body>
<?php
	session_start();
	require_once "../../init.php";
	if(!isset($_GET['newsid'])){
		header("Location:$application_url");
	}
	$newsid = $_GET['newsid'];
	
	$news = $mysql->getResult("select * from news where newsid = $newsid;");
	if($news===false){
		echo "Error in database @ DisplayNews.php.".$mysql->getError();
		exit;
	}
	
	echo '
		<div class="heading"><h1>News</h1></div>
		<h3>'.$news[0]['heading'].'</h3>
		<h5>Author :: '.$news[0]['author'].'</h5>
		<p>Content :: <br />'.$news[0]['content'].'</p>		
	
	';

?>
	<body>
</html>
