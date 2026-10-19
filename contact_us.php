<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Contact Us</title>
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
       <b>CONTACT US</b><br>

Welcome to our Contact Page. We are always ready to assist you with any questions, support requests, partnership opportunities, or feedback regarding our platform. 
Whether you are a job seeker, employer, recruiter, or visitor, we value your communication and aim to respond as quickly as possible.



<br><br><b>GET IN TOUCH</b><br>

If you need assistance with job applications, account issues, job postings, advertisements, partnerships, or general inquiries, feel free to contact us through any of the 
channels below.


<br><br><b><i>Email Support</i></b><br>

For general inquiries and customer support:

📧 [support@yourjobboard.com](mailto:support@yourjobboard.com)







<br><br><b><i>Office Address</i></b><br>

🏢 Your Job Board Name
123 Business Avenue,
Lagos, Nigeria

---



<br><br><b><i>Phone Number</i></b><br>


📞 +234 XXX XXX XXXX

Available: Monday – Friday
8:00 AM – 5:00 PM (WAT)


 
 <br><br><b><i>Our Commitment</i></b><br>

We are committed to providing a reliable, secure, and user-friendly platform that connects job seekers with employers and career opportunities. Your feedback and 
suggestions help us improve our services and better serve our community.

Thank you for contacting us. We look forward to hearing from you!

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
