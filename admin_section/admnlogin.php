<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>ADM LOGIN</title>
	<link rel="stylesheet" href="./ckeditor5/ckeditor5.css">
    <link rel="stylesheet" type="text/css" href="./menu/styales.css">


<!-- STYLINGS -->
<style type="text/css">
		*{
			box-sizing: border-box;
			
			font-family: Times New Roman sans-serif;
		}
		body{
		background-color: #f1faf5;
		display: flex;
		flex-direction: column;
	}
		#content{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			bacakground-color: #f0f0f0;
			padding: 1%;
		}
		
		#form-container{
			background-color: #fff;
			padding: 2rem;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
			max-width: 600px;
			width: 100%;
			margin: 1rem;
			box-sizing: border-box;

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
		
		.ck-editor__editable[role="textbox"]{
			min-height: 200px;
		}
		.ck-powered-by{
			display: none;
		}
		button{
			width: 100%;
			padding: 0.75rem;
			border: none;
			border-radius: 4px;
			background-color: #2b3e33;
			color: #fff;
			cursor: pointer;
			transition: background-color 0.3s;

		}
		button:hover{
			background-color: #487a5d;
		}
		#menu{
		position: sticky;
		top: 0;
		margin-top: 15px;

	}
	#link{
		display: none;
	}
	#logout{
		display:none;
	}
	
 ckground-color: green;
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

	@media only screen and (min-width: 500px){
	
	#container{
		padding: 2%;
	}

	}

	
	@media only screen and (min-width: 900px){
	
	#container{
		display: grid;
		
	}
	}
	

  #menu{
		position: sticky;
		top: 0;
		margin-top: 15px;
		z-index: 10001;

	}
	</style>

</head>
<body>
	<div id="menu">
	<section>
	
	<?php
   
    ob_start();
    
			require './advmenu.php';	
	?>
 
</section>
  </div>
<section>

	  <?php
	    require '../config.php';

		if(isset($_POST['submit'])){

		$query = "SELECT * FROM `users` WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."' ";

		$result =  mysqli_query($con, $query) or die(mysqli_error($con));

		if(!$result){
			echo  mysqli_error($con);
		}else{

            $user = mysqli_fetch_assoc($result);
            $_SESSION['usermail'] = $user['email'];
               
            header("location: index.php");
         
        }

    }
	
	?>
	<div id='container'>
	<div id="content">
		
		<div id='form-container'>

			
			
			<form id="post-form" method="POST" action="admnlogin.php">
					<h2>ADMIN LOGIN</h2>
					
					<div class="input-group">
						<label>Email</label>
				
						<input type="text" name="email" >
					</div>
					
					<div class="input-group">
						<label>Password</label>
					
					
						<input type="password" name="password" >
					</div>
					
				
						<button type="submit" name="submit"> LOGIN </button>

					
				
				
			</form>
			

			
		</div>
			

</div>
		
<script type="text/javascript" src="./menu/script.js"></script>

</div>
</section>
<footer>
	<?php
		require './footer/footer.php';
	  ?>
</footer>
</body>
</html>
