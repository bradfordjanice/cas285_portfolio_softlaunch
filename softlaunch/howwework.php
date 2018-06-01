<!--
File Name: index.php
Date: 04/18/18
Programmer: Janice Bradford
Project: JSB Animation Studios Portfolio
-->

<!DOCTYPE html>

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="author" content="Janice Bradford">
	<base target="_blank"> <!-- open all links not marked "_self" in a new tab -->

	<title>JSB Animation Studios</title>

	<!-- fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/guv5zzq.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	
	<!-- styles -->
	<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link href="css/navbar.css" rel="stylesheet" type="text/css">

	<!-- scripts -->
	<script src="js/menu.js"></script>

</head>
	
<body>
<div class="container">
	
	<header>
		<?php include 'includes/header.php'; ?>
	</header>

  <nav class="topnav" id="myTopnav">
    <a target="_self" href="index.php">Home</a>
    <a target="_self" href="portfolio.php">Portfolio</a>
    <a target="_self" href=#howwework class="active">How We Work</a>
    <a target="_self" href="contact.php">Contact</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction(); return false;">&#9776;</a>
  </nav>
	
	<main>
		<div class="content">
			
			<aside class="sidebar">
				<h3>Animations Get Attention and Give Understanding</h3>
				<ul>
					<li>Movement focuses the users attention</li>
					<li>Transitions explain user interaction on the page</li>
					<li>Create a brand personality</li>
				</ul>
				
				<p>"Moving elements are a powerful tool to attract users’ attention."</p>
				<p class="reference"><a href="https://www.nngroup.com/articles/animation-usability/">Animation for Attention and Comprehension by Aurora Harley, NNg</a></p>
			</aside>
			
			<section class="main-content">
				<article class="content-block">
					
				<h1>Activities at jsb</h1>
        
        <p><span class="busName">jsb Animation Studios</span> works together with you to:</p>
        
        <ul class="listStyle">
            <li>Design and create 2D and 3D animations for web applications and websites.</li>
            <li>Test user perceptions of the animations in your web applications and websites.</li>
            <li>Do a heuristic evaluation of your existing web application and website designs.</li>
            <li>Develop animation style guides.</li>
        </ul>
        
        <p>Hire us by the hour, or ask for a quote.</p>
					
				</article><!-- /.content-block -->
			</section><!-- /.main-content -->
			
		</div><!-- /.content -->
	</main>
	
	<footer>
		<?php include 'includes/footer.php'; ?>
	</footer>
	
</div><!-- /.container -->
</body>

</html>