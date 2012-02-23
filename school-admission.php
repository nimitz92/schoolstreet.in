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
			
			$secondary_selected = 'admission';
			include 'secondary-menu-school.php';
			
			?>
			
			
			<div id="content">
				<div class="content-main">
					<h2>Admission</h2>
					<div class="cover-story">
						<!--<h3>USIEF-IIE University Fair 2011</h3> -->
						<table>
							<tr>
								<td class="cover-story-image">
									<!--<img src="./images/cover-story-image-1.jpg" />-->
								</td>
								<td class="cover-story-content">
									<h3>Registration</h3>
									<p>
									<ul>
									<li>Registration forms can be downloaded from the website and submitted before March 30th of the academic year for which admission is sought. Special requests for admission will be considered as and when vacancies arise.
Dates of written test/interviews will be intimated by email at the time of registration.
Registration fee is non refundable</li>
									<li>Dates of written test/interviews will be intimated by email at the time of registration.
									</li>
									<li>Registration fee is non refundable
									</li>
									</ul>
									</p>
									<h3>Entrance test and interview</h3>
									<p>
									<ul>
									<li>There will be a written test for students seeking admission to class I and above. Only those candidates who clear the written test will be called for the interview. The syllabus for the test can be obtained by raising a request through schoolstreet's query form given on our website.
									</li>
									<li>The result of the selection procedure will be made available on school website
									</li>
									<li>Successful candidates will be required to deposit the school fees by a specified date, failing which the admission shall be cancelled. Fees can be deposited online using schoolstreet online fees portal
									</li>
									<li>The birth certificate must be produced in original as proof of date of birth. 
									</li>
									<li>The I-card and school-joining instructions shall be issued after completion of admission formalities.
									</li>
									</ul>
									</p>
									<br/>
									<a class="readmore" href="school-admission.html">Download Admission Form</a>
								</td>
							</tr>
						</table>
					</div>
					
						
				</div>
				<div class="sidebar-cover">
				<?php include 'search-block.php' ?>
				<?php include 'notices-block.php' ?>
				
				</div>
			</div>
			
			
		</div>
		
	</div>
		<?php include 'footer.php' ?>
  </body>