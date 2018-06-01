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
	<script src="js/overlay.js"></script>

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
					
					<a href="https://janicebradford.webhostingforstudents.com/cas222/final/"><img class="screenshot" src="img/AceInTheHole_home.jpg" alt="AceInTheHole Home page"></a>
					
					<!-- <button onclick="on()">Turn on overlay effect</button> -->
					<!--
					<button type="button"><a href="https://janicebradford.webhostingforstudents.com/cas222/final/">Visit Ace in the Hole</a></button>
					-->
					
					<a href="https://janicebradford.webhostingforstudents.com/cas222/final/" class="button">Visit Ace in the Hole</a>
					
					<p>The Ace in the Hole Multisports Event website is for a one-time event.  Ace in the Hole specializes in events for people of all athletic abilities.  The website was designed to welcome those that don't normally participate in marathon, swimming, or bicycling competitions.  Participants can register on the site, or use the Contact form to ask for more information.</p>
					
					<p>It is a mobile-first responsive design that can be used easily on any device.  It uses HTML5, CSS3, JavaScript, and PHP.</p>
					
					<div id="overlay" onclick="off()">
						<div id="overlay-content">
							<img src="img/AceInTheHole_home.jpg">
							<img src="img/AceInTheHole_events.jpg">
							<img src="img/AceInTheHole_registration.jpg">
							<img src="img/AceInTheHole_contact.jpg">
						</div>
					</div>
					
				</article><!-- /.content-block -->

				<article class="content-block">
					<h1>Portland Historical Tours</h1>
					
					<a href="https://janicebradford.webhostingforstudents.com/cas206/index.html"><img class="screenshot" src="img/PortlandHistoricalTours_DowntownTour.jpg" alt="Portland Historical Tours page"></a>
					
					<a href="https://janicebradford.webhostingforstudents.com/cas206/index.html" class="button">Visit Portland Historical Tours</a>
					
					<p>Portland Historical Tours is a small business that leads tours throughout Portland's areas with a lot of history.  Their website describes the types of tours they offer, and allows people to register for specific tours on the site.  The website is designed to appeal to both residents of Portland and tourists.  If users have any questions they can use the Contact form.</p>
					
					<p>The design is responsive so it is easy to use on any size device.  It uses HTML5 and CSS3.</p>
				</article><!-- /.content-block -->
				
				<article class="content-block">
					<h1>Racing Up Front</h1>
					
					<a href="https://janicebradford.webhostingforstudents.com/racingupfront/"><img class="screenshot" src="img/RacingUpFront_about.jpg" alt="Racing Up Front page"></a>
					
					<a href="https://janicebradford.webhostingforstudents.com/racingupfront/" class="button">Visit Racing Up Front</a>
					
					<p>Racing Up Front is a blogging site built with WordPress.  The typical user is a new fan of NASCAR auto racing.  They find questions that fans new to the sport might have, and answers.  Fans can suggest questions they want to learn about, and they can register on the site and then post comments.</p>
					
					<p>The website has pages, posts, and archives.  Plugins are used for weather at the current race track, a slideshow and image gallery.  </p>
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