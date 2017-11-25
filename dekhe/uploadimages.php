<?php

$connect= mysqli_connect("localhost","root","","test");
if(isset($_POST['insert'])){
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$query = "INSERT INTO tbl_images(name) VALUES ('$file')";
	if(mysqli_query($connect,$query)){
		echo "<script>alert('IMage inserted INto Database')</script>";
	}
}




?>


<!DOCTYPE html>
<html>
<head>
	<title>images upload</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<br /><br />
<div class="container" style="width:500px">

<h2 align="center">Insert and display images from my sql database in php</h2>
	<br />
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="image" id="image"/>
		<br />
		<input type="submit" name="insert" id="insert" value="insert" class="btn btn-outline-dark">
</form>
<table class="table table-bordered">
<tr>
	<th>Image</th>
</tr>
<?php
$query = "SELECT * FROM tbl_images ORDER BY id DESC";
$result=mysqli_query($connect,$query);
while($row = mysqli_fetch_array($result))
{
	echo '
	<tr>
	<td>
	<img src="data:image/jpeg;base64,'.base64_encode($row['name']).'" />
	</td>
	</tr>

	';
}



?>
</table>	</div>


<script>
	$(document).ready(function(){
		$("$insert").click(function(){
			var image_name = $('#image').val();

if (image_name=='') {
	alert("please SElect Image");
	return false;
}
else{
	 var extension = $("#image").val().split('.').pop().toLowerCase();
	 if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1){
	 	alert("invalid image file");
	 	$("#image").val('');
	 	return false;
	 }
}
		});

	});

</script>
</body>
</html>