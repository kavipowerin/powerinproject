<!DOCTYPE html>
<html>
<head>
	<title>Display data into DB</title>
		<style type="text/css">
		
	table{
		border: 2px solid red;
		background: #FFC;
	}
	th{
		border-bottom: 5px solid #000;
	}
	td{
		border-bottom: 2px solid #666;
	}
</style>
</head>
<body>

	<h1>Display data from db</h1>
<?php


include('connect-mysql.php');
$sqlget = "SELECT * FROM user";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error getting data');
echo "<table>";
echo "<tr><th>Your Name</th><th>Crush Name</th></tr>";
while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
echo "<tr><td>";
echo $row['name'];
echo "</td><td>";
echo $row['crush'];
echo "</td></tr>";

}
echo "</table>";

?>
</body>
</html>