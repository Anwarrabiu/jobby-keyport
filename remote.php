<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<title>Home</title>

<style type="text/css">
	*{

	}
	body{
		background-color: #f1faf5;
	}
	#container{
		margin-top: 3%;

	}

	#items{
		display: grid;
		grid-template-columns: repeat(1, 6fr);
		
		grid-gap: 7px;
		width: auto;
		margin: 1px;
		padding: 1px;
		justify-content: center;
	}

	.item{
		background-color: whitesmoke;
		border-radius: 5px;
		align-content: center;
		padding-top: -10px;
		margin-bottom: 0px;
		height: 280px;
		heigght: 320px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		border-radius: 4px;
		overflow: hidden;

		
		
		

	}
	
	#description{
		text-align: justify;
		background-color: ;
		height: 40%;
		padding-left: 5%;
		padding-right: 5%;
		padding-bottom: 6rem;
		margin-bottom: px;
		overflow: hidden;

		
	   


	}
 #description_text{
		font-size: 14px;
	    line-height: 1.3;
	    overflow: hidden;
	    text-overflow: ellipsis;
	    white-space: wrap;
	    word-break: break-word;
	    display: -webkit-box;
	    -webkit-line-clamp:7;
	    -webkit-box-orient:vertical;

	   }
	  #description h4{
		text-align: center;
		

		



	}
	#dates{
		background-color: ;
		padding: 3px;
		padding-left: 5%;
		


	}
	#showmoreBtn{
		background-color: ;
		text-align: center;

	}
	.showmoreBtn{
		display: inline-block;
		padding: 4px 8px;
		font-size: 12px;
		color: white;
		background-color: #87a192ff;
		text-align: center;
		text-decoration: none;
		border-radius: 5px;
		border: 2px solid transparent;
		transition: 0.3s ease;
	}
	.showmoreBtn:hover{
		background-color: #487a5d;
	
		transform: translateY(-3px);

	}
	


	.item h5, h6 {
		margin-bottom: 5px;
		margin-top: 0px;
	}
	.item button{
		margin-top: 2%;
		margin-bottom: %;

	}

	#menu{
		position: sticky;
		top: 0;
		margin-top: 15px;

	}
	

	
	@media only screen and (min-width: 500px){
	#items{
		display: grid;
		grid-template-columns: repeat(2, 6fr);

		}
	#container{
		padding: 2%;
	}

	}
	@media only screen and (min-width: 785px){
	#items{
		display: grid;
		grid-template-columns: repeat(3, 5fr);
		}
	}
	@media only screen and (min-width: 900px){
	#items{
		display: grid;
		grid-template-columns: repeat(3, 4fr);
		}
	#container{
		display: grid;
		
	}
	}
	@media only screen and (min-width: 1107px){
	#items{
		display: grid;
		grid-template-columns: repeat(4, 4fr);
		}
	}




</style>

</head>
<link rel="stylesheet" type="text/css" href="../menu/styales.css">
<body >
	

	<div id="menu">
	<?php

			require './advmenu.php';	
	?>
</div>
<?php
		require './config.php';


	require './pagination/pagination_script.php';
	//fetch posts from db with $start as starting point and $rows_per_page as maximum per page


	

	if(isset($_GET['cat'])){

		$result = mysqli_query($conn, "SELECT * FROM posts WHERE category = '".$_GET['cat']."' && location = 'Remotes' ORDER BY posting_date DESC LIMIT $start, $limit");

	}else{
		$result = mysqli_query($conn, "SELECT * FROM posts WHERE location LIKE 'Remotes' ORDER BY posting_date DESC LIMIT $start, $limit");	
	}



  // $result = getResults($_GET['cat']);
	if(!$result){
		echo "Error Occurs";
	}else{
		
	
    echo "<div id='container'>";

	    echo '
	    <div id="navigations">
		
			
		</div>';

	echo "<div id='items'>";

	

	while($row = mysqli_fetch_assoc($result)){
		echo "
		<div class='item'>
			
			<div id='description'>
			<h4>".$row['post_title']."</h4>
				<p id='description_text'>".$row['description']."</p>
			</div>

			<div id='dates'>
				<h6>Posted on: ".$row['posting_date']." </h6>
				
			</div>
			<div id='showmoreBtn'>
				<a class='showmoreBtn' href='./details.php?ref=".$row['pid']."' >Show More</a></button>
			</div>	
			

		</div>
"
;		
}

echo "</div>";  
echo "</div>";   

} 
	


	?>



<script type="text/javascript" src="./menu/script.js"></script>

<!--Paginations-->


<?php  require './pagination/pagination.php'; ?>


<footer>
	<?php
		require './footer/footer.php';
	  ?>
</footer>
		


</body>
</html>