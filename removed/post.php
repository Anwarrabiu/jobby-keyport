<!DOCTYPE html>
<html>
<head>
	<title>POST</title>



	<style type="text/css">
		*{
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		#content{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background-color: #f0f0f0;
		}
		
		#form-container{
			background-color: #fff;
			padding: 2rem;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
			max-width: 500px;
			width: 100%;
			margin: 1rem;

		}
		#post-form h2{
			text-align: center;
			margin-bottom: 1rem;
		}
		.input-group{
			margin-bottom: 1rem;
		}
		.input-group{
			display: block;
			margin-bottom: 0.5rem;
		}
		.input-group input, textarea, select{
			width:100%;
			padding: 0.5rem;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		button{
			width: 100%;
			padding: 0.75rem;
			border: none;
			border-radius: 4px;
			background-color: #007bff;
			color: #fff;
			cursor: pointer;
			transition: background-color 0.3s;

		}
		button:hover{
			background-color: #0056b3;
		}

		@media (max-width: 600px){
			#form-container{
				padding: 1rem;
			}
			.input-group input{
				padding: 0.5rem;
			}
			button{
				padding: 0.5rem;
			}

		}



	</style>

</head>
<body>

	<div id="logo" style="background-color: grey; padding-bottom: 50px;">
		<h1>Header</h1>
	</div>

	


	<?php
		require '.config.php';

		echo "<div id='container'>";

	    echo '
	    <div id="navigations">
			<ul>
				<li>Home</li>
				<li>About Us</li>
				<li>...</li>
			</ul>

			
		</div>';

		if(isset($_POST['submit'])){

		$query = "INSERT into posts (post_title,advertiser,description,requirements,location,category,original_advert_link,posting_date,deadline) 
		VALUES('".$_POST['title']."','".$_POST['advertiser']."','".$_POST['description']."','".$_POST['requirements']."','".$_POST['location']."',
		'".$_POST['category']."','".$_POST['adlink']."','".$_POST['postdate']."','".$_POST['deadline']."')";

		$result =  mysqli_query($con, $query) or die(mysqli_error($con));

		if(!$result){
			echo  mysqli_error($con);
		}

}
	
	?>
	<div id="content">
		
		<div id='form-container'>

			
			
			<form id="post-form" method="POST" action="post.php">
					<h2>POST</h2>
					<div class="input-group">
						<label>Title</label>
					
						<input type="text" name="title" required >
					</div>
					<div class="input-group">
						<label>Advertiser</label>
				
						<input type="text" name="advertiser" required>
					</div>
					<div class="input-group">
						<label>Description</label>
						<textarea name="description" cols="37" rows="7" required></textarea>
					
					</div>
					<div class="input-group">
						<label>Requirements</label>
				
						<input type="text" name="requirements" required>
					</div>
					<div class="input-group">
						<label>Location</label>
					
					
						<input type="text" name="location" required>
					</div>
					<div class="input-group">
						<label>Category</label>

						<select name="category" required>
							<option>-----------------------------------------Select-------------------------------------------</option>
							<option>option</option>
							<option>option</option>
							<option>option</option>
							<option>option</option>
							<option>option</option>
							<option>option</option>
							<option>option</option>
						</select>
					
						
					</div>
					<div class="input-group">
						<label>Application Link</label>
					
						<input type="text" name="adlink" required>
					</div>
					<div class="input-group">
						<label>Post Date</label>
				
						<input type="date" name="postdate" required>
					</div>
					<div class="input-group">
						<label>Deadline</label>
					
						<input type="date" name="deadline" required>
					</div>

						<button type="submit" name="submit">POST</button>

					
				
				
			</form>
			

			
		</div>
			

</div>
</body>
</html>