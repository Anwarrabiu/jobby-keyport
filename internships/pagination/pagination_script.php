<?php

	$username = 'root';
	$host = 'localhost';
	$password = '';
	$db ='jobby';



	// Connection to the db
	$conn = mysqli_connect($host,$username,$password,$db);

	$limit = 10; // Number of records per page

	if(!isset($_GET['cat'])){
		$result=mysqli_query($conn, "SELECT * FROM posts WHERE career_development ='None' ");
	}else{
		$result = mysqli_query($conn, "SELECT * FROM posts WHERE category = '".$_GET['cat']."' && career_development = 'None'");	
	}
	$total_records = mysqli_num_rows($result);

	$total_pages = ceil($total_records / $limit);
	

	// Getting current page no
	$page = (isset($_GET['page']) && $_GET['page'] > 1)? $_GET['page'] : 1;

	//Determing starting point on each page call 
	$start = ($page - 1) * $limit;

	// Fetch records
	


?>