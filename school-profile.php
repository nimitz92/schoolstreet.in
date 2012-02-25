<!DOCTYPE HTML>
<html>
  <?php  $title = 'The School Street'; include 'head.php'; ?>
  <body>
	<div id="page">
		<div id="page-wrapper">
			
			<?php include 'header-school.php' ?>

			
			<?php
			$primary_selected = 'home';
			include 'primary-menu-school.php';
			
			?>
			
			<?php
			
			$secondary_selected = '';
			include 'secondary-menu-school.php';
			
			?>
			
			<div id="slider">
				<div id="slider-wrapper">
					<div class="search">
						<h2>Search</h2>
						<form class="search-form">
							<table>
								<tr>
									<td>
										<select class="search-selectbox" name="search-for-options">
										<option value="search-school">Search for School</option>
										<option value="search-student">Search for Student</option>
										</select>
										<input type="text" name="date" id="date" />
									</td>
								</tr>
								<tr>
									<td>
										<input class="search-textbox city-input" type="textbox" name="city" value="City" />
									</td>
								</tr>
								<tr>								
									<td>
										<input class="search-textbox school-input" type="textbox" name="school" value="Name of the School" />
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<div id="content">
				<div class="content-main">
					<h2>About Us</h2>
					<div class="cover-story">
						<!--<h3>USIEF-IIE University Fair 2011</h3> -->
						<table>
							<tr>
								<td class="cover-story-image">
									<!--<img src="./images/cover-story-image-1.jpg" />-->
								</td>
								<td class="cover-story-content">
									<p>Welcome to Example Public School, a world of learning possibilities and opportunities. At EPS, we encourage a positive attitude towards learning and the development of a life long love for knowledge.
									</p>
									<p>Within the domain of each student&#39;s unique strengths and competencies, we aim to provide meaningful educational experiences, develop skills and nurture constructive attitudes thereby allowing for the full expression of academic, physical and creative talents.We look upon the school as an extension of the home in terms of the nurturing it provides to the young and a portal to the outside world in as much as it prepares our students to actively apply their learning to real life situations.
									<br /><br />
									<a class="readmore" href="school-admission.html">How to get Admission</a>
									</p>
								</td>
							</tr>
						</table>
					</div>
					
					<h2>Standout students (Jan 2012)</h2>
					<div class="standout-students">
						<table class="cover-students">
							<tr>
								<td><a href=""><img src="./images/profile-pics/profile-pic-1.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-2.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-3.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-4.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-5.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-6.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-7.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-8.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-1.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-2.jpg"></a><td>
							</tr>
							<tr>
								<td><a href=""><img src="./images/profile-pics/profile-pic-2.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-1.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-8.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-7.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-6.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-5.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-4.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-3.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-2.jpg"></a><td>
								<td><a href=""><img src="./images/profile-pics/profile-pic-1.jpg"></a><td>
							</tr>
						</table>
					</div>	
				</div>
				<div class="sidebar-cover">
				
				<?php include 'notices-block.php' ?>
				
				</div>
			</div>
			
			
		</div>
		
	</div>
		<?php include 'footer.php' ?>
  </body>