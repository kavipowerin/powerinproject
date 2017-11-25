<!DOCTYPE html>
<html>
<head>
	<title>GETTING USERS DATA IN BOOTSTRAP PAGE</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<h1>USERS INFORMATIONS</h1>
</br><br>
<div class="container-fluid">
<div class="row">
	<div class="col-md-6">

<?php
include("connect-mysql.php");
$getdata="SELECT * FROM  user";
$getquery=mysqli_query($dbcon,$getdata) or die("Error getting Information of users!");
echo "<table class='table table-dark'>";
echo "<tr><th>USER NAME</th><th>CRUSH NAME</th></tr>";
while ($row = mysqli_fetch_array($getquery,MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['name'];
	echo "</td><td>";
	echo $row['crush'];
	echo "</td></tr>";
}

echo "</table>";

?>
</div>
</div>
</div>
</body>
</html>