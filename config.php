<?php

$username = 'root';
$host = 'localhost';
$password = '';
$db ='jobby';



//connection to the db
$conn = mysqli_connect($host,$username,$password,$db);

/*
	//starting point
	$start = 0;
	$available_posts_start = 0;


	//rows per page
	$rows_per_page = 1;
	$available_posts_rows_per_page = 10;


	//total number of rows 
	if(!isset($_GET['cat'])){
		$records = mysqli_query($con,"SELECT * FROM posts WHERE category ='engineering'");
	}else{
		$records = mysqli_query($con,"SELECT * FROM posts WHERE category ='engineering'");
	}
	$records_no = mysqli_num_rows($records);


	//determing number of pages
	$pages = ceil($records_no / $rows_per_page);

	$available_posts_pages = ceil($records_no / $available_posts_rows_per_page);


	//if user clicks a button, a new starting point is defined
	if(isset($_GET['page-nbr'])){
		$page = $_GET['page-nbr'] - 1;
		$start = $page * $rows_per_page;
	}

	if(isset($_GET['page-nbr'])){
		$page = $_GET['page-nbr'] - 1;
		$available_posts_start = $page * $available_posts_rows_per_page;
	}

*/








?>

