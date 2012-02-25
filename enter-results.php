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
							<form action="enter-marks.php" method="post">
							<table>
								<tr>															
									<td>Exam Name</td>
									<td>
										<select class="dropdown" name="add-result-exam-name">
										<option value="">Unit Test</option>
										<option value="">Quarterly Exam</option>
										<option value="">Annual Exam</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Session</td>
									<td>

										<select class="dropdown" name="add-result-session">
										<option value="">Unit Test</option>
										<option value="">Quarterly Exam</option>
										<option value="">Annual Exam</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Date of Exam</td>
									<td>
									<input type="text" name="date" id="date" />
									</td>
								</tr>
								<tr>
									<td>Subject</td>
									<td>
										<select class="dropdown" name="add-result-subject">
										<option value="">Physics</option>
										<option value="">Chemistry</option>
										<option value="">Biology</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Class</td>
									<td>
										<select class="dropdown" name="add-result-class">
										<option value="">V</option>
										<option value="">VI</option>
										<option value="">VII</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Section</td>
									<td>
										<select class="dropdown" name="add-result-section">
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Max Marks</td>	
									<td>
										<input class="" type="textbox" name="add-result-max-marks" value="" />
									</td>
								</tr>
								<tr>
									<td>
									<input class="submit" type="submit" name="submit-result" value="Submit Result" />
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