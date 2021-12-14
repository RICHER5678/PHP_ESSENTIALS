
<!DOCTYPE html>
<html>
<head>
	<title>ImageUpload</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<label>Username</label>
		<input type="text" name="username">
		<br>
		<label>UploadImage</label>
		<input type="file" name='myfile'>
		<br/>
		<input type="submit" value="upload">
	</form>
</body>
</html>
  
 <!--the php required-->
  <?php
	$user=$_POST['username'];
	$image=$_FILES['myfile'];
	echo "Hello $user <br/>";
	echo "File Name<b>::</b> ".$image['name'];

	move_uploaded_file($image['tmp_name'],"photos/".$image['name']);
	//here the "photos" folder is in same folder as the upload.php, 
	//otherwise complete url has to be mentioned
	?>