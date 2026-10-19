<?php session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Admin Home</title>
	<link rel="stylesheet" href="./ckeditor5/ckeditor5.css">
	<link rel="stylesheet" type="text/css" href="./menu/stylses.css">
       



<style type="text/css">
		*{
			box-sizing: border-box;
			
			font-family:times new roman, Arial, sans-serif;
		}
		body{
			background-color: #f1faf5;
		}
		
		#container{
			padding: 1%;
			background-color: ;
			min-height: 400px;
		}


	
	
	
		#menu{
			position: sticky;
			top: 0;
			margin-top: 15px;
			z-index: 10001;

		}
		#operationbtns{
			display: flex;
			flex-wrap: wrap;
		}
		#operationbtns  a{
			text-decoration: none;
		}
		#operationbtns h1{
			background-color: #2d3f35;
			width: 100%;
			border-radius: 5px;
			padding-left: 20px;
			color: #fff;
		}
		.oprbtns{
			min-width: 300px;
			max-width: 300px;
			height: 200px;
			padding: 30px;
			margin: 15px;
			background-color: #98d5b3;
			border-radius: 6px;
			color: black;
			transition: 0.5s ease;

		}
		
		.oprbtns:hover{
			transform: perspective(30px) translateZ(2px);
			
		}
		
	</style>

</head>

<body>


	
	

	<div id="menu">
	<?php
	ob_start();

		if(!isset($_SESSION['usermail'])){
			header('location: admnlogin.php');
			exit();
		}
			require './advmenu.php';	
			
	?>
</div>
<?php
		require '../config.php';

		
		//$postsNo = mysqli_query($con,"SELECT count(*) FROM posts");
		$query =mysqli_query($con, "SELECT * FROM posts");
		$postsNo = mysqli_num_rows($query);

		echo "<div id='container'>";
		?>

		<div id="operationbtns">
			<a href="available_posts"><div id="availablePosts" class="oprbtns">
				<h2>Available Posts</h2>
				<h1><?php echo $postsNo; ?></h1>
				
			</div></a>
			<a href="post"><div id="makePosts" class="oprbtns">
				<h2>Make Posts</h2>
				
			</div></a>
		</div>
		<?php
		echo '</div>';

		
	
	?>
	
<script type="text/javascript" src="./menu/script.js"></script>

<footer>
	<?php
		require './footer/footer.php';
	  ?>
</footer>
		

</body>
</html>
