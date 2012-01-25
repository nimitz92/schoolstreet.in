<html>
<?php 
	session_start();
	$_SESSION['uid'] = 2;
	$_SESSION['schoolid'] = 1;
	$_SESSION['usertype'] = 2;
?>
	<head>
		<script type="text/javascript" src="ui/js/jquery.js"></script>
		<script type="text/javascript" src="ui/js/facebox.js"></script>
		<script>
			jQuery(document).ready(function($) {
			$('a[rel*=facebox]').facebox({
			loadingImage : 'ui/img/loading.gif',
			closeImage   : 'ui/img/closelabel.png'
      })
    })
		</script>
		<script>
			function news(){
			$('#news').html("Loading...");
			$.ajax({
				url:"core/News/News.php",
				type:"GET",
				data:{'s':'false'},
				success: function(data, status, request){
					$('#news').html(data);
				}
			});
			}
		</script>
		<link rel="stylesheet" type="text/css" href="ui/css/facebox.css" />	
		<title>Result Module</title>
	
	<head>
	<body>
		<a href="javascript:news()">News</a>
		<a href="ui/html/formGetResult.html" rel="facebox">Result</a>
		<a href="ui/html/formEnterMarks.html" rel="facebox">Enter Results</a>
		<a href="core/MyMsg.php" rel="facebox">Pending Messages</a>
		
		<div id="news"></div>
	</body>
</html>		

