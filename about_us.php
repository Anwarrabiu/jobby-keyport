<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>About Us</title>
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
            flex-direction:column;
			justify-content: center;
            text-align:justify;
			align-items: center;
			min-height: 100vh;
			padding: 5%;
            padding-top:1%;
            line-height:1.8;
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
    #content{
        padding:20%;
        padding-top:1%;
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

	 
	
	
	<div id='container'>
	<div id="content">
		
    <p>
        Our Platform is built to bridge the gap between opportunity and talent. We connect ambitious professionals with forward-thinking employers 
        through a seamless, user-friendly platform designed for efficiency and impact. Whether you're a fresh graduate, an experienced specialist, or 
        a company seeking top-tier talent, our platform simplifies the hiring journey with smart search tools, real-time listings, and intuitive
        application processes. We believe that the right opportunity can transform lives and the right hire can transform organizations.
   </p>
   <p>
        Driven by innovation, transparency, and inclusivity, we are committed to creating a trusted ecosystem where skills meet opportunity. Our mission
        is to empower job seekers and dreamers with access to meaningful careers and opportunities while helping employers discover candidates who align with their 
        vision and values. By combining technology with human-centered design, we make recruitment faster, smarter, and more accessible for everyone.

    </p>
			

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
