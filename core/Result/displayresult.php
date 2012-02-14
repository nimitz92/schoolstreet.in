<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
            <title>The School Street</title>
    <link rel="shortcut icon" href="../favicon.ico" />
    <link href="../../style.css" rel="stylesheet" type="text/css"/>
    <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="css/style_pages_ie.css" />
    <![endif]-->
	<link type="text/css" href="../../ui/js/jquery-ui-1.8.17/css/ui-lightness/jquery-ui-1.8.17.custom.css" rel="Stylesheet" />	
	<script type="text/javascript" src="../../ui/js/jquery-ui-1.8.17/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="../../ui/js/jquery-ui-1.8.17/js/jquery-ui-1.8.17.custom.min.js"></script>
	<script type="text/javascript" src="../../ui/js/jquery.tools.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
   
		
		
		
		
		$(".mmodalInput").click(function(){
		
			$(".modalInput").overlay({mask:{color:'#000000',loadSpeed:200,opacity:0.4},closeOnClick:true});
			
		
		}
		);
		$(".modalInput").overlay({

			// some mask tweaks suitable for modal dialogs
			mask: {
				color: '#000000',
				loadSpeed: 200,
				opacity: 0.4
			},

			closeOnClick: true
		});
	
	 
	 
			 
		$("#add-result-form form").submit(function(e) {

			// close the overlay
			triggers.eq(1).overlay().close();

			// get user input
			var input = $("input", this).val();

			// do something with the answer
			triggers.eq(1).html(input);

			// do not submit the form
			return e.preventDefault();
		});
	
		$('#date').datepicker();
	
	});
		
	</script>


  </head>
  <body>
	<div id="page">
		<div id="page-wrapper">
			<div id="head">
				<table>
				<tr>
					<td>
					<h1 class="not-on-front-page"><a href="index.html">the School Street</a><h1>
					</td>
					<td>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<h5><a href="school-profile.html">Delhi Public School</a></h5>
					</td>
				</tr>
				</table>
			</div>
			<div id="primary-menu">
				<ul class="primary-menu-list">
					<li class="primary-menu-list-element"><a class="primary-menu-href selected" href="" rel="#abc"><span>School Frontpage</span></a><div class="modal" id="abc">sdsds</div></li>
					<li class="primary-menu-list-element news"><a class="primary-menu-href news" href="">
					
						<span>News</span></a>
						<div id="submenu">
							<div class="submenu-wrapper">
								<h2>Recent News(Delhi Public School)</h2>
								<div class="submenu-content">
								<table class="submenu-columns-news">
									<tr class="top">
										<td class="left crop">
											<span></span><img class="news-thumbnail" src="ui/img/news-images/news-image-1.jpg" />
										</td>
										<td class="right">
											<ul class="submenu-list">
												<li class="submenu-list-element">
													<div class="sub-story">
													<a class="submenu-href" href="">USIEF-IIE University Fair 2011</a>
													<div class="substory-content">
														The much awaited USIEF fair kicked of the on right footing. More than expected aspirants ...
													</div>	
													</div>
												</li>
												<li class="submenu-list-element">
													<div class="sub-story">
													<a class="submenu-href" href="">Behaviour Management and Discipline Strategy</a>
													<div class="substory-content">
														The Behaviour Management and Discipline (BM&D) strategy is an initiative of the Government and the Department of Education and Training and has been established through strong collaboration with the Australian Education Union, Western Australian branch. 

													</div>	
													</div>
												</li>
												<li class="submenu-list-element">
													<div class="sub-story">
													<a class="submenu-href" href="">USIEF-IIE University Fair 2011</a>
													<div class="substory-content">
														The much awaited USIEF fair kicked of the on right footing. More than expected aspirants ...
													</div>	
													</div>
												</li>
												
											</ul>
										</td>
																				
									</tr>
									<tr class="bottom">
										<td>
										</td>
										<td class="thick-top-border">
											<a class="blue-dark" href=""> FIND MORE STORIES </a>
										</td>
									</tr>
								</table>
								
								</div>
							</div>	
						</div>
					
					</li>
						
					
					<li class="primary-menu-list-element"><a class="primary-menu-href" href=""><span>School Forums</span></a></li>
					<li class="primary-menu-list-element"><a class="primary-menu-href" href=""><span>About School</span></a></li>
					<li class="primary-menu-list-element"><a class="primary-menu-href" href=""><span>Contact School</span></a></li>
				</ul>
			</div>
			
			<div id="content">
				<div class="content-main">
					<h2>Result</h2>
					<div class="cover-story">
						<table>
							<tr>
								<td class="cover-story-image">
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
				</div>
				<div class="sidebar-cover">
				<div class="sidebar">
					<h2>Notices</h2>
					<div class="notices">
						<div class="notice">
							<h4>9th January 2012</h4>
							<div class="notice-teaser">
								First release of the admission form by St Mary SR Nagar
								<br /><a href="">Book your form now</a>
							</div>
						</div>	
						<div class="notice">
							<h4>12th January 2012</h4>
							<div class="notice-teaser">
								Performance by HANS Foundation at Chirec KinderGardens Kondapur
								<br /><a href="">Find More</a>
							</div>
						</div>	
						<div class="notice">
							<h4>15th January 2012</h4>
							<div class="notice-teaser">
								Interschool Chess Tournament at St Atulanand (3:30 PM - 5:00 PM)
								<br /><a href="">Get a seat</a>
							</div>
						</div>
						<div class="notice">
							<h4>25th January 2012</h4>
							<div class="notice-teaser">
								Interschool Chess Tournament at St Atulanand (3:30 PM - 5:00 PM)
								<br /><a href="">Get a seat</a>
							</div>
						</div>
						<div class="notice">
							<h4>28th January 2012</h4>
							<div class="notice-teaser">
								Students meet at RoadMast
								<br /><a href="">Find More</a>
							</div>
						</div>
						
					</div>
				</div>
				</div>
			</div>
			
			
		</div>
		
	</div>
	<div id="footer">
			<div id="footer-wrapper">
				<table class="footline">
					<tr>
						<td class="copyright-note">
							All rights Reserved to schoolstreet.in
						</td>
						<td>
						<div id="footer-menu">
							<ul>
								<li><a class="footer-menu-option" href=""><span>Terms & Conditions</span></a></li>
								<li><a class="footer-menu-option" href=""><span>Our team</span></a></li>
								<li><a class="footer-menu-option" href=""><span>What we offer</span></a></li>
							</ul>
						</div>
						</td>
					</tr>
				</table>
			</div>
	</div>
  </body>
 </html>
