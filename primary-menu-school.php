<?php 
$home_selected = '';
$news_selected = '';
$connect_selected = '';
$forum_selected = '';
$we_selected = '';
$intouch_selected = '';
switch($primary_selected)
{
case 'home': $home_selected = 'selected';
			 break;
case 'news': $news_selected = 'selected';
			 break;
case 'forum': $forum_selected = 'selected';
			 break;
case 'who_we_are': $we_selected = 'selected';
			 break;
case 'get_in_touch': $intouch_selected = 'selected';
			 break;
}


?>

<div id="primary-menu">
	<ul class="primary-menu-list">
		<li class="primary-menu-list-element"><a class="primary-menu-href <?php echo $home_selected;?>" href="school-profile.php"><span>Homepage</span></a></li>

		<li class="primary-menu-list-element"><a class="primary-menu-href <?php echo $we_selected;?>" href=""><span>About School</span></a></li>

		<li class="primary-menu-list-element news"><a class="primary-menu-href news <?php echo $news_selected;?>" href=""><span>News</span></a>
		
			<?php include 'submenu-news.php' ?>
		
		</li>
			
		
		<li class="primary-menu-list-element"><a class="primary-menu-href <?php echo $forum_selected;?>" href=""><span>School Forums</span></a></li>
		<li class="primary-menu-list-element"><a class="primary-menu-href <?php echo $intouch_selected;?>" href="GetInTouch.php"><span>Contact School</span></a></li>
	</ul>
</div>
