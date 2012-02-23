<!DOCTYPE HTML>
<html>
  <?php  $title = 'The School Street'; include 'head.php'; ?>
  <body>
	<div id="page">
		<div id="page-wrapper">
			
			<?php include 'header-school.php' ?>
			
			<?php
			$primary_selected = '';
			include 'primary-menu-school.php';
			
			?>
			
			<?php
			
			$secondary_selected = 'result';
			include 'secondary-menu-school.php';
			
			?>
			
			
			
			<div id="content">
				<div class="content-main">
					<h2>Enter Results</h2>
					<div class="cover-story">
						<!--<h3>USIEF-IIE University Fair 2011</h3> -->
						<table>
							<tr>
								<td class="cover-story-image">
									<!--<img src="./images/cover-story-image-1.jpg" />-->
								</td>
								<td class="cover-story-content">
							
									
								</td>
							</tr>
						</table>
					</div>
					
					
						
				</div>
				
				<div class="sidebar-cover">
				<?php include 'search-block.php'; ?>
				<?php include 'notices-block.php' ?>
				</div>
			</div>
			
			
		</div>
		
	</div>
	<?php include 'footer.php' ?>
  </body>
 </html>