<?php

	require_once "../../init.php";
	
	$publish = "";
	if($_SESSION['usertype']<=TEACHER){
		$publish = '<a class="blue-dark" href="ui/html/formPublishTutorial.html" rel="facebox">PUBLISH NEW TUTORIAL</a>';
	}
	$schoolid = $_SESSION['schoolid'];
	$school = "";
	$subject = isset($_GET['subject']) ? ($_GET['s']=='false' ? 'where subject='.$_GET['subject']: 'and subject='.$_GET['subject']) : '';
	$class = isset($_GET['class']) ? ($_GET['s']=='false' ? 'where class='.$_GET['class']: 'and class='.$_GET['class']) : '';
	$ctr = $_GET['ctr'];
	if($_GET['s']=='true'){
		$school='where schoolid = '.$schoolid;
	}
	
	$count = 5;
	$result = $mysql->getResult("select * from tutorials $school $subject $class order by tuttime desc limit $count;");	
	if($result === false){
		echo "Error in Database @ Tutorial.php.<br />Please try again later".$mysql->getError();
		exit;
	}
	
	if($ctr=='left'){
		echo '<ul class="submenu-list">';
		foreach($result as $tutorial){
			if($tutorial['webpublishing']==0 && $tutorial['documentsize']>0){
				$dlink = '&nbsp;<a class="blue-dark italic" href="core/Tutorial/Download.php?tutid='.$tutorial['tutid'].'">Download</a>';
				$size = round($tutorial['documentsize']/1024);
				$sizelink = ' ('.$size.'KB)';
				}
			if($tutorial['webpublishing']==1){
				$dlink = '';
				$sizelink='';
				}
			echo '
				<li class="submenu-list-element">
				<div class="sub-story">
					<a class="submenu-href" href="core/Tutorial/Display_Tutorial.php?tutid='.$tutorial["tutid"].'">'.$tutorial['heading'].$sizelink.'</a>'.$dlink.'	
				</div>
				</li>';
		}
	}
	if($ctr=='bottom'){
		echo '
			<td class="thick-top-border">
				<a class="blue-dark" href="core/Tutorial/Display_Tutorial.php?tutid=ALL"> FIND MORE TUTORIALS </a>
			</td>';
	
	}
	if($ctr=='right'){
		echo '<script type="text/javascript" src="ui/js/facebox.js"></script>
				<script>
					jQuery(document).ready(function($) {
						$("a[rel*=facebox]").facebox({
						loadingImage : "ui/img/loading.gif",
						closeImage   : "ui/img/closelabel.png"
      			})
    				})
				</script>
				<link rel="stylesheet" type="text/css" href="ui/css/facebox.css" />
				<p><span>
				<a class="blue-dark" href="">Enter Subject to view Tutorials</a>
				<form>
					<select name="subject" style="display:none" class="subject-form subject">
						<option value="1">English</option>
						<option value="2">Hindi</option>
						<option value="3">Maths</option>
						<option value="4">Science</option>
						<option value="5">Social Science</option>
					</select>
					<input type="button" class="subject-form" value="Go!" onclick="javascript:runs()" style="display:none" /> 
				</form>
				</span></p>
				<p>
				<a class="blue-dark" href="">Enter class to view Tutorials</a>
				<form>
				<select name="class" style="display:none" class="class-form class">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select>
				<input type="button" class="class-form" value="Go!" onclick="javascript:runc()" style="display:none" />
				</form>
				</p>
				<p>
				'.$publish.'
				</p>';
		}
?>
