<?php
 	
 	if(isset($_POST['submitted'])){
include('connect-mysql.php');
 		
 		$name=$_POST['name'];
 		$pass=$_POST['pass'];
 		
 		$sqlinsert="INSERT INTO user VALUES('$name','$pass')";
 		if(!mysqli_query($dbcon,$sqlinsert)){
 			die('error inderting new record');
		}//end of my nested if statement
		$newrecord="U Successfully fooled your and your crush name mailed to kavi";
 	}//end of the main if statement
 	
?>