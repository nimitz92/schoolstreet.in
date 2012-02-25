<?php

	require_once "../../init.php";
	
	
	$publish = "";
	$ctr = $_GET['ctr'];
	if($_SESSION['usertype']<=TEACHER){
		$publish = '<a class="blue-dark" href="core/Notices/Pub_Notices.php">PUBLISH NEW NOTICE</a>';
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
	if($ctr=='right'){
		echo '<ul class="submenu-list">';
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
	}
	if($ctr=='bottom'){
		echo '
			<td></td>
			<td class="thick-top-border">'.$publish.'
			</td>
			<td class="thick-top-border">
				<a class="blue-dark" href="core/News/DisplayNews.php?newsid=ALL"> FIND MORE STORIES </a>
			</td>
		</tr>';
	
	}
?>
