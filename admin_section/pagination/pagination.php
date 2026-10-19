
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		


	.pagination{
		display: flex;
		flex-wrap: wrap;
		font-size: 12px;
		max-widjth: 90%;
		margin-left: px;
		padding: px;
		max-widith: 90%; 
		

	}
	.pagination a{
		text-decoration: none;
		border: thin solid #8bad9a;
		background-color: #2b3e33;
		color: #fff;
		padding: 5px;
		margin: 2px;
		height: 15px;
		
	}
	
	
	
.pagination > a.active{
		background-color: #54a073;
	}
	</style>

<?php
	if(isset($_GET['page'])){
		$id = $_GET['page'];
	}else{
		$id = 1;
	}

?>

</head>
<body id="<?php echo $id ?>">

<?php

// display records here 




echo "<br><br>";

//determining if current page no is less than or equal to total pages no so that


echo "<div class='pagination'>";

if($page >= 1 && $page <= $total_pages){

//go to first page
	if($page > 1){
		?>
			<a href="?page=1">First</a>
			<a href="?page=<?php echo $page - 1?>">Previous</a>
		<?php
	}

//if current page no is less than 5 print first 4 page links then ellipsis then total no of pages  
	if ($page < 5) {
		for($i = 1; $i < 5; $i++){

					?><a href="?page=<?php echo $i ?>"> <?php echo $i; ?></a><?php
				
			}
			
	?>
		<a>...</a>
		<a href="?page=<?php echo $total_pages; ?>"><?php echo $total_pages ?></a>
	<?php

	//if current page no is greater than 4 and also less than total pages - 4 also
	}elseif ($page > 4 && $page < $total_pages - 4) {
		?>
			<a href="?page=1">1</a>
			<a>...</a>

		<?php
		for ($i= $page - 2; $i < $page + 3; $i++) { 
			?><a href="?page=<?php echo $i ?>"> <?php echo $i; ?></a><?php
	}

	?>
		<a>...</a>
		<a href="?page=<?php echo $total_pages; ?>"><?php echo $total_pages ?></a>
		

	<?php

	//else when current page number is more than total pages - 4 
	}else{

	?>
		<a href="?page=1">1</a>
		<a>...</a>

	<?php

	for ($i=$total_pages-6; $i <= $total_pages; $i++) { 
		?><a href="?page=<?php echo $i ?>">  <?php echo $i; ?></a><?php
	}

}


//if current page is less than total pages then we display 'next' button
if($page < $total_pages){
	?>
		
		<a href="?page=<?php echo $page + 1?>">Next</a>
	
	<?php
}

//then display total number of pages
if($page != $total_pages){
?>

	<a href="?page=<?php echo $total_pages  ?>">Last</a>

	<?php
	}

}else{

	echo "THIS PAGE IS NOT AVAILABLE!";
}
?>



</div>


<script type="text/javascript">
	
//collects all pagination links
let links = document.querySelectorAll(".pagination > a");
	
for(let i=0; i<links.length; i++){
	if(links[i].innerText==document.body.id){
	
	links[i].classList.add("active");
	}

}

</script>

</body>
</html>