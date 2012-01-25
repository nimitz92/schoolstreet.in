<?php

	require_once "../../init.php";
	session_start();
	$publish = "";
	if($_SESSION['usertype']==4 || $_SESSION['usertype']==2){
		$publish = '<a href="core/Notices/Pub_Notices.php">Publish New Notice</a>';
	}
	$schoolid = $_SESSION['schoolid'];
	$school = "";
	
	if($_GET['s']===true){
		$school='where school = $schoolid';
	}
	
	$count = 5;
	$result = $mysql->getResult("select * from news $school order by newstime desc limit $count;");	
	if($result === false){
		echo "Error in Database @ News.php.<br />Please try again later".$mysql->getError();
		exit;
	}
	
	foreach($result as $news){
	echo '
		<li class="submenu-list-element">
		<div class="sub-story">
			<a class="submenu-href" href="core/News/DisplayNews.php?newsid='.$news['newsid'].'">'.$news['heading'].'</a>
			<div class="substory-content">
				'.$news['content'].'
			</div>	
		</div>
	</li>';
	}
	echo '&nbsp;&nbsp;<div id = "publish-notice">'.$publish.'</div>';
?>
