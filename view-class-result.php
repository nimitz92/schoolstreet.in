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
					<h2>View Result</h2>
					<div class="cover-story">
						<!--<h3>USIEF-IIE University Fair 2011</h3> -->
						<table>
							<tr>
								<td class="cover-story-image">
									<!--<img src="./images/cover-story-image-1.jpg" />-->
								</td>
								<td class="cover-story-content">
								<form action="././core/Result/class_displayresult.php" method="POST">
								<table>
									<tr>															
										<td>Exam Name</td>
										<td>
											<select class="dropdown" name="view-result-exam-name">
											<option value="">Unit Test</option>
											<option value="">Quarterly Exam</option>
											<option value="">Annual Exam</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Session</td>
										<td>
											<select class="dropdown" name="view-result-session">
											<option value="">2011-2012</option>
											<option value="">2010-2011</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Subject</td>
										<td>
											<select class="dropdown" name="view-result-subject">
											<option value="">All</option>
											<option value="">Physics</option>
											<option value="">Chemistry</option>
											<option value="">Biology</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Class</td>
										<td>
											<select class="dropdown" name="view-result-class">
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
										</td>
									</tr>
									<tr>
										<td>Section</td>
										<td>
											<select class="dropdown" name="view-result-section">
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
											<option value="E">E</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<input class="submit" type="submit" name="view-result" value="View Result" />
										</td>
									</tr>
								</table>
								</form>
									
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
