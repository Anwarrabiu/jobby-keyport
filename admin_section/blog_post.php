<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Blog</title>
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

		$query = "INSERT into blog (title,post,post_date) 
		VALUES('".$_POST['title']."','".$_POST['post']."','".$_POST['postdate']."')";

		$result =  mysqli_query($conn, $query) or die(mysqli_error($conn));

		if(!$result){
			echo  mysqli_error($conn);
		}

}
	
	?>
	<div id='container'>
	<div id="content">
		
		<div id='form-container'>

			
			
			<form id="post-form" method="POST" action="blog_post.php">
					<h2>POST</h2>
					<div class="input-group">
						<label>Title</label>
					
						<input type="text" name="title"  >
					</div>
					
					<div class="input-group">
						<label>The Blog Post</label>
				
						<textarea name="post" cols="37" 
						rows="37" id="post"  ></textarea>

					</div>
					
					
					<div class="input-group">
						<label>Post Date</label>
				
						<input type="date" name="postdate" >
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
                .create( document.querySelector( '#post' ), {
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
                    window.post = post;
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
