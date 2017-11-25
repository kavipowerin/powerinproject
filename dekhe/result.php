<?php
 	
 	if(isset($_POST['submitted'])){
include('connect-mysql.php');
 		
 		$name=$_POST['name'];
 		$crush=$_POST['crush'];
 		
 		$sqlinsert="INSERT INTO user VALUES('$name','$crush')";
 		if(!mysqli_query($dbcon,$sqlinsert)){
 			die('error inderting new record');
		}//end of my nested if statement
		$newrecord="U Successfully fooled your and your crush name mailed to kavi";
 	}//end of the main if statement
 	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="result.css">
</head>
<body>
	<center>
		<img src="complete-loading.png" id="complete" />
		<h1 id="ready">Your Result Is ready</h1>
		<a href="#lol"><h1>Click Me To See Your Result</h1></a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="container">
		<img src="giphy (1).gif" id="lol">
		
		
	
	<h1 id="fooled-h">Congratulations You Have SuccessFully Fooled.</h1>
		
	<div class="message">
		<h1>Your And Your Crush/GF name SENT to Kavi<br>At Kav*****@gmail.com</h1><a href="giphy.com">
		<img src="giphy.gif" alt="laughing people" id="gif" />
	</a>
	<a href="www.facebook.com"><div id="facebook">FB</div></a>

	</div>
	
</center>	
	</div>
</body>
</html>
