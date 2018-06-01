<!--
File Name: portfolio.php
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
    <a target="_self" href="#portfolio" class="active">Portfolio</a>
    <a target="_self" href="howwework.php">How We Work</a>
    <a target="_self" href="contact.php">Contact</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction(); return false;">&#9776;</a>
  </nav>
	
	<main>
		<div class="content-portfolio">
			
			<section class="main-content-portfolio">
				<article class="content-block">
					<h1>Ace in The Hole</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					
					<img class="screenshot" src="img/AceInTheHole_home.jpg" alt="AceInTheHole Home page">
				</article><!-- /.content-block -->

				<article class="content-block">
					<h1>Portland Historical Tours</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					
					<img class="screenshot" src="img/PortlandHistoricalTours_DowntownTour.jpg" alt="Portland Historical Tours page">
				</article><!-- /.content-block -->
				
				<article class="content-block">
					<h1>Racing Up Front</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					
					<img class="screenshot" src="img/RacingUpFront_about.jpg" alt="Racing Up Front page">
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