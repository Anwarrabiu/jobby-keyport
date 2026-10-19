<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Available Posts</title>
	<link rel="stylesheet" type="text/css" href="./menu/styales.css">
<style type="text/css">
		body{
			background-color: #f1faf5;
		}
		#items{
			margin-top:2% ;
			padding: 1%;
		}

		.item{
			background-color: ;
			display: grid;
			grid-template-columns: 8fr 12fr 4fr;
			grid-template-rows: 65px;
			margin-bottom: 3px;
			padding-bottom: 3px;
			font-size:14px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			line-height:1.4;
			

		}
		#line1{
			display: flex;
			margin-left: 1rem;

		}
		#line2{
			height: 70px;
			display: flex;
			margin-bottom: 0px;
			


		}
		#line1 h5{
			margin: 12px;


		}
		#line1 h5:nth-child(2){
			width: 7rem;
		}
		#line1 h5:nth-child(1){
			width: 10rem;
		}
		#line2 p{
			overflow: hidden;
			text-overflow: ellipsis;
			display: -webkit-box;
		    -webkit-line-clamp:2;
		    -webkit-box-orient:vertical;

		}
		#line3{
			margin-left: 1rem;
			align-content: center;
			display: flex;
			margin-top: 0px;
		}
		#line3 h5{
			width: 100px;
		}
		#btns button{
			background-color: ;
			border: none;
			margin: 6px;
			height: 28px;
			color: #fff;
			margin-top: 0px;
			margin-bottom: 6px;
			border-radius: 4px;
			transition: 0.3s ease;

			
		}
		#btns button:hover{
	
			transform: perspective(20px) translateZ(2px);
			
		}
		#btns button a{
			color: #dfe4e8;
			text-decoration: none;
			margin: 3px;
			margin-top: 3px;
			padding: 3px;
			max-width: 100%;
			transition: 0.3s ease;
		}
		
		#btns{
			display: flex;
			margin-right: 5px;
			justify-content: center;
			margin-top: 0px;
			height: 30px;
			align-self: center;
			
		}
		#viewbtn{
			background-color:#2b3e33 ;
		}
		#deletebtn{
			background-color: #e34414;
		}
		#editbtn{
			background-color:#c5db40 ;
		}

		#menu{
		position: sticky;
		top: 0;
		margin-top: 15px;

	}
	.pagination{
		display: flex;
		font-size: 12px;
		max-width: 90%;
		margin-left: 40px;
		padding: 20px;
		
		

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
	.pagination a:hover{
		background-color: #54a073;
	}
	.page-numbers{
		margin-top: 0;
		display: flex;
		grid-template-columns: repeat(20, 1fr);
		flex-wrap: wrap;
	}
	.page-numbers > a.active{
		background-color: #54a073;
	}



	@media only screen and (max-width: 1000px ){
	.page-numbers{
		margin-top: 0;
		display: flex;
		flex-wrap: wrap;
		grid-template-columns: repeat(10, 1fr);
	}
	}
	@media only screen and (max-width: 566px ){
	.page-numbers{
		margin-top: 0;
		display: flex;
		flex-wrap: wrap;
		grid-template-columns: repeat(5, 1fr);
	}
	}

	
	</style>
	
</head>
<body >


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


	
		require './pagination/pagination_script.php';
	//$result = mysqli_query($con,"SELECT * FROM posts LIMIT $available_posts_start, $available_posts_rows_per_page");
	$result = mysqli_query($conn, "SELECT * FROM posts ORDER BY posting_date DESC LIMIT $start, $limit");
	if(!$result){
		echo "Error Occurs";
	}else{
		
	
    echo "<div id='container'>";

	   
	echo "<div id='items'>";

	

	while($row = mysqli_fetch_assoc($result)){
		echo "

		<div class='item'>
			
			<div id='line1'>
			<h5>".$row['post_title']."</h5>
			<h5>".$row['employer']."</h5>
			
				
			</div>
	
			<div id='line2'>
				<p id='description_text'>".$row['description']."</p>	
			</div>
			<div id='line3'>
				<h5>Posted on:<br> ".$row['posting_date']." </h5>
			<h5>Deadline:<br> ".$row['deadline']." </h5>
			
			</div>
			<div></div>

			<div id='btns'>
				<a href='../details?ref=".$row['pid']."' ><button id='viewbtn'>VIEW</button></a>
				<a href='edit?ref=".$row['pid']."' ><button id='editbtn'>EDIT</button></a>
				<button class='delete' value=".$row['pid']." id='deletebtn'>DELETE</button>
			</div>


		</div>

	"
;		
}

echo "</div>";  
echo "</div>";   

} 
	?>

<script type="text/javascript" src="jquery-3.7.1.min.js"></script>

<script type="text/javascript" src="sweetalert.all.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('.delete').click(function(e){
				e.preventDefault();
				var id = $(this).val();

				swal({
					  title: "Confirm you want to delete?",
					  text: "Once deleted, you will not be able to recover this post!",
					  icon: "warning",
					  buttons: true,
					  dangerMode: true,
					})
					.then((willDelete) => {
					  if (willDelete) {

					  //	alert(willDelete);
					  window.location.replace("/jobby/admin_section/delete.php?ref="+id);

					  } 
					  else 
					  {
					    swal("Deleting Canceled!");
					  }
					});
			})

		})
	</script>
	
	<script type="text/javascript" src="./menu/script.js"></script>

<!--Paginations-->

<?php require './pagination/pagination.php';  ?>
	<footer>
	<?php
		require './footer/footer.php';
	  ?>
</footer>

</body>
</html>