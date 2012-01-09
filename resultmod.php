<html>
<?php 
	session_start();
	$_SESSION['uid'] = 0;
	$_SESSION['schoolid'] = 0;
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
		<link rel="stylesheet" type="text/css" href="ui/css/facebox.css" />	
		<title>Result Module</title>
	
	<head>
	<body>
		<a href="ui/html/formGetResult.html" rel="facebox">Result</a>
		<a href="ui/html/formEnterMarks.html" rel="facebox">Enter Results</a>
		<a href="MyMsg.php" rel="facebox">Pending Messages</a>
	</body>
</html>		

