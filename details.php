<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<title>Post Details</title>


	 <link rel="stylesheet" type="text/css" href="./menu/styales.css">
	<style type="text/css">
	body{
		background-color: #f1faf5;
	}

	#container{
		
		margin-top: 3%;
		

	}	
	#item{
		background-color: whitesmoke;
		border-radius: 5px;
		
		text-align: justify;
		padding: 6%;
		padding-right: 40%;
		line-height:1.8;
		word-break: break-word;

		}
	 td{
		border:solid 1px black;
	}
	#item h5, h3 {
			margin-bottom: 5px;
			margin-top: 0px;
			text-align: left;
		}
	#item button{
			margin-top: 2%;
			margin-bottom: 2%;

		}

	@media only screen and (max-width: 450px){
		#item{
			padding-left: 9px;
			padding-right: 9px;
		}
	}
	
	@media only screen and (min-width: 900px){
	#items{
		display: grid;
		grid-template-columns: repeat(3, 4fr);
		}
	
	}

	#menu{
		position: sticky;
		top: 0;
		margin-top: 15px;

	}

	.applyclick{
		display: inline-block;
		padding: 6px 12px;
		font-size: 13px;
		color: white;
		background-color: #87a192ff;
		text-align: center;
		text-decoration: none;
		border-radius: 5px;
		border: 2px solid transparent;
		transition: 0.3s ease;
	}
	.applyclick:hover{
		background-color: #487a5d;
		transform: translateY(-3px);

	}
	#link{
		display: none;
	}
	
	</style>
</head>
<body>

	
	<div id="menu">
	<?php

			require './advmenu.php';	
	?>
</div>
<?php
require './config.php';

echo "<div id='container'>";

// Validate and sanitize input
$pid = isset($_GET['ref']) ? (int) $_GET['ref'] : 0;

// Use prepared statement (SECURE)
$stmt = $con->prepare("SELECT * FROM posts WHERE pid = ?");
$stmt->bind_param("i", $pid);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $row = $result->fetch_assoc()) {
?>

    <div id='item'>
        <h3><?php echo htmlspecialchars($row['post_title']); ?></h3>
        <h4><?php echo htmlspecialchars($row['employer']); ?></h4>

        <h4>About it</h4>
        <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>

        <h4>Requirements</h4>
        <p><?php echo $row['requirements']; ?></p>

        <h5>Date Posted: <?php echo htmlspecialchars($row['posting_date']); ?></h5>
        <h5>Application Deadline: <?php echo htmlspecialchars($row['deadline']); ?></h5>
        <br>

        <?php if (!empty($row['original_advert_link'])): ?>
            <div>
                <h5 class='toApply'>Click the link below to apply</h5>
                <div id='applyclick'>
                    <a class='applyclick' href="<?php echo htmlspecialchars($row['original_advert_link']); ?>" target="_blank">
                        Click To Apply
                    </a>
                </div>	
            </div>
        <?php else: ?>
            <p><em>Application link not available</em></p>
        <?php endif; ?>

    </div>

<?php
} else {
    echo "<p>Job not found.</p>";
}

echo "</div>";
?>

	<script type="text/javascript">

		if(document.getElementById('linkValue').value){
		
				document.getElementById('applyclick').style.display='block';
				var collections = document.getElementsByClassName('toApply');

				for(i=0;i < collections.length; i++ ){
					collections[i].style.display='block';
				}
			}else{
				document.getElementById('applyclick').style.display='none';
				var collections = document.getElementsByClassName('toApply');

				for(i=0;i < collections.length; i++ ){
					collections[i].style.display='none';
				}
			
			}
		

	</script>


<script type="text/javascript" src="./menu/script.js"></script>

<footer>
	<?php
		require './footer/footer.php';
	  ?>
</footer>
		

</body>
</html>