<html>
	<head>
		<title> NEWSPORTAL</title>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
				<link rel= "stylesheet" type ="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
		<meta charset="utf-8">
		
	</head>
	<body>
	
	<nav class="one">
		<ul class="topmenu">
		<li><a href="#">Kategoorid<i class="fa fa-angle-down"></i></a>
		<ul class="submenu">
		<?php
			Controller::AllCategory();
		?>
		</ul>
		</li>
		<li><a href="testError">Info</a></li>
		<li><a href="./">Stardileht</a></li>
		
		
		</ul>
	</nav>
	
	<section>
		<div class = 'divBox'>
		<?php
		if(isset($content)) {
			echo $content;
		}
		else{
			echo '<h1>Content is gone!</h1>';
		}
		?>
		</div>
	</section>
	
	<hr>
	<p style="display:block; text-align:center;">SPTV18 2020 a. &copy</p>
	</body>
	
	</html>
	
		