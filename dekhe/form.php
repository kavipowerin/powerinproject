<?php
 	
 	if(isset($_POST['submitted'])){
include('connect-mysql.php');
 		
 		$name=$_POST['name'];
 		$pass=$_POST['pass'];
 		
 		$sqlinsert="INSERT INTO self VALUES('$name','$pass')";
 		if(!mysqli_query($dbcon,$sqlinsert)){
 			die('error inderting new record');
		}//end of my nested if statement
		else{
		$newrecord="U Successfully fooled your and your crush name mailed to kavi";
 	}}//end of the main if statement
 	
?>
<!DOCTYPE html>
<html>
<head>
	<title>send data</title>
</head>
<body><fieldset>
	<form method="POST" action="form.php">
		
			<legend>Sending Data</legend>
			<label>Name:<input type="text" name="name"></label></br></br>
			<label>Password:<input type="Password" name="crush"></label></br>
			<input type="submit" name="submit"/>
		</br></br></br></br></br>
		<?php
		echo "$newrecord";
		?>

	</form></fieldset>
</body>
</html>