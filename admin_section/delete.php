<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<?php

	ob_start();

		if(!isset($_SESSION['usermail'])){
			header('location: admnlogin.php');
			exit();
		}

	require '../config.php';

	$result = mysqli_query($con,"DELETE FROM posts WHERE pid=".$_GET['ref']."");
	if($result){
	header('location:available_posts.php');

}

	?>

</body>
</html>