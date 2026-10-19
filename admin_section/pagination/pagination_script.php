<?php

	$username = 'root';
	$host = 'localhost';
	$password = '';
	$db ='jobby';


	//connection to the db
	$conn = mysqli_connect($host,$username,$password,$db);


	$limit = 10; // Number of records per page
	$total_records = mysqli_query($conn, "SELECT COUNT(*) FROM posts");
	$total_pages = ceil(mysqli_fetch_array($total_records)[0] / $limit);

	//getting current page no
	$page = (isset($_GET['page']) && $_GET['page'] > 1)? $_GET['page'] : 1;
	// determing starting point on each page call 
	$start = ($page - 1) * $limit;

	// Fetch records
	$result = mysqli_query($conn, "SELECT * FROM posts LIMIT $start, $limit");


?>