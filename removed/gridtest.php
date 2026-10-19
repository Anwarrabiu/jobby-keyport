<!DOCTYPE html>
<html>
<head>
	<title>Grid</title>

	<style type="text/css">
		.item{
			background-color: tomato;
			border: solid;
			margin: 1px;
			border-radius: 10px;
			align-content: center;
			text-align: center; 

			}
			.item:hover{
				color: white;
			}
		#container{
			width: 95vw;
			height: 60vh;
			margin: 0 auto;

			background-color: whitesmoke;
			outline: 8px solid #4834D4;
			display: grid;
			grid-template-columns: repeat(3,6fr);
			grid-template-rows: repeat(14, 30px);
			grid-auto-columns: ;
			grid-auto-rows:70px;
			grid-auto-flow:row;
			grid-column-gap: 10px;
			grid-row-gap: 10px;
			grid-template-areas: ;
			
		}
	</style>
</head>
<body>
	<h1 class="title">Complete GRID Solutions</h1>

	<div id="container">
		<div class="item one">1</div>
		<div class="item two">2</div>
		<div class="item three">3</div>
		<div class="item four">4</div>
		<div class="item five">5</div>
		<div class="item six">6</div>
		<div class="item one">1</div>
		<div class="item two">2</div>
		<div class="item three">3</div>
		<div class="item four">4</div>
		<div class="item five">5</div>
		<div class="item six">6</div>
		<div class="item one">1</div>
		<div class="item two">2</div>
		<div class="item three">3</div>
		<div class="item four">4</div>
		<div class="item five">5</div>
		<div class="item six">6</div>
		<div class="item one">1</div>
		<div class="item two">2</div>
		<div class="item three">3</div>
		<div class="item four">4</div>
		<div class="item five">5</div>
		<div class="item six">6</div>
		<div class="item one">1</div>
		<div class="item two">2</div>
		<div class="item three">3</div>
		<div class="item four">4</div>
		<div class="item five">5</div>
		<div class="item six">6</div>
	</div>

</body>
</html>