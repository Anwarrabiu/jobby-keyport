<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Post</title>
	<link rel="stylesheet" href="./ckeditor5/ckeditor5.css">
    <link rel="stylesheet" type="text/css" href="./menu/styales.css">



<style type="text/css">
		*{
			box-sizing: border-box;
			
			font-family: ;
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

			require './advmenu.php';	
	?>
 


</section>
  </div>
<section>

	  <?php
	 	 require '../config.php';

		if(isset($_POST['submit'])){

		$query = "INSERT into posts (post_title,employer,description,requirements,location,category,career_development,original_advert_link,posting_date,deadline) 
		VALUES('".$_POST['title']."','".$_POST['employer']."','".$_POST['description']."','".$_POST['requirements']."','".$_POST['location']."',
		'".$_POST['category']."','".$_POST['careerdev']."','".$_POST['adlink']."','".$_POST['postdate']."','".$_POST['deadline']."')";

		$result =  mysqli_query($con, $query) or die(mysqli_error($con));

		if(!$result){
			echo  mysqli_error($con);
		}

}
	
	?>
	<div id='container'>
	<div id="content">
		
		<div id='form-container'>

			
			
			<form id="post-form" method="POST" action="post.php">
					<h2>POST</h2>
					<div class="input-group">
						<label>Title</label>
					
						<input type="text" name="title"  >
					</div>
					<div class="input-group">
						<label>Employer</label>
				
						<input type="text" name="employer" >
					</div>
					<div class="input-group">
						<label>Description</label>
						<textarea name="description" cols="37" rows="7" ></textarea>
					
					</div>
					<div class="input-group">
						<label>Requirements</label>
				
						<textarea name="requirements" cols="37" 
						rows="37" id="requirements"  ></textarea>

					</div>
					
					<div class="input-group">
						<label>Location</label>
					
					
						<input type="text" name="location" >
					</div>
					<div class="input-group">
						<label>Category</label>

						<select name="category" >
							<option>-----------------------------------------Select-------------------------------------------</option>
							<option>Administrative </option>
							<option>Customer Service</option>
							<option>Engineering</option>
							<option>Education</option>
							<option>IT</option>
							<option>Health</option>
							<option>Marketing</option>
							<option>Finance</option>
							<option>Agriculture</option>
							<option>Operations</option>
							<option>Legal</option>
							<option>Manufacturing </option>
							<option>Science</option>
							<option>Human Resources</option>

							

						</select>
					
						
					</div>
					<div class="input-group">
						<label>Career Development(Optional) </label>
						<table>

							<tr><td><input type="radio" name="careerdev" value="None" checked="true"></td><td><label><i> None</i></label></td></tr>
							<tr><td><input type="radio" name="careerdev" value="Internship"></td><td><label><i> Internship</i></label></td></tr>
							<tr><td><input type="radio" name="careerdev" value="Scholarship"></td><td><label><i> Scholarship</i></label></td></tr>
						</table>
					</div>

					<div class="input-group">
						<label>Application Link</label>
					
						<input type="text" name="adlink" >
					</div>
					<div class="input-group">
						<label>Post Date</label>
				
						<input type="date" name="postdate" >
					</div>
					<div class="input-group">
						<label>Deadline</label>
					
						<input type="date" name="deadline" >
					</div>

						<button type="submit" name="submit">POST</button>

					
				
				
			</form>
			

			
		</div>
			

</div>
		
	<script type="importmap">
			{
				"imports": {
					"ckeditor5": "./ckeditor5/ckeditor5.js",
					"ckeditor5/": "./ckeditor5/"
				}
			}
		</script>
        <script type="module">
            import {
               ClassicEditor,
    AccessibilityHelp,
    Alignment,
    AutoLink,
    Autosave,
    BalloonToolbar,
    BlockQuote,
    BlockToolbar,
    Bold,
    CodeBlock,
    Essentials,
    GeneralHtmlSupport,
    Heading,
    HorizontalLine,
    Indent,
    IndentBlock,
    Italic,
    Link,
    Paragraph,
    SelectAll,
    Font,
    Table,
    TableCaption,
    TableCellProperties,
    TableColumnResize,
    TableProperties,
    TableToolbar,
    List,
   
 
    Undo
            } from 'ckeditor5';

            ClassicEditor
                .create( document.querySelector( '#requirements' ), {
                    plugins: [ AccessibilityHelp,
        Alignment,
        AutoLink,
        Autosave,
        BalloonToolbar,
        BlockQuote,
        BlockToolbar,
        Bold,
        CodeBlock,
        Essentials,
        GeneralHtmlSupport,
        Heading,
        HorizontalLine,
        Indent,
        IndentBlock,
        Italic,
        Link,
        Paragraph,
        SelectAll,
        Font,
        Table,
        TableCaption,
        TableCellProperties,
        TableColumnResize,
        TableProperties,
        TableToolbar,
        List,
       
        
        
        Undo],
                    toolbar: {
                    	items:[
						'undo', 
						'redo', 
						'|', 
						'bold', 
						'italic', 
						'|',
						
						
						'fontFamily', 
						'fontColor', 
						'heading',
						'fontSize', 
						'fontBackgroundColor',
						'selectAll',
						
						
						
						
						'|',
			            'horizontalLine',
			            'link',
			            'insertTable',
			            'blockQuote',
			            'codeBlock',
			            '|',
			            'alignment',
			            '|',
			            'indent',
			            'outdent',
			            '|',
			            'accessibilityHelp',
			            'bulletedList',
			            'numberedList'
						
					], shouldNotGroupWhenFull: true}
                } )
                .then( editor => {
                    window.requirements = requirements;
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
       
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
