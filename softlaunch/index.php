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
    <a target="_self" href="#home" class="active">Home</a>
    <a target="_self" href="portfolio.php">Portfolio</a>
    <a target="_self" href="howwework.php">How We Work</a>
    <a target="_self" href="contact.php">Contact</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction(); return false;">&#9776;</a>
  </nav>
	
	<main>
		<div class="content">
			
			<aside class="sidebar">
				<h2>Why Animate?</h2>
        
				<p>"CSS animation is quickly becoming a cornerstone of user-friendly interfaces on mobile and desktop..."</p>
				<p class="reference"><a href="https://www.smashingmagazine.com/2014/11/the-state-of-animation-2014/">The State of Animation 2014 by Rachel Nabors</a></p>
				
				<p>"Animation is no longer a novelty for web designers... it's become the basis of effective interaction design."  
				<p class="reference"><a href="https://www.webdesignerdepot.com/2015/05/the-ultimate-guide-to-web-animation/">The Ultimate Guide to Web Animation</a> by Ezequiel Bruni.</p>
        
        <p>"There's never been a better time to focus on animation in relation to web-based interfaces and apps."</p>
        <p class="reference"><a href="https://www.webdesignerdepot.com/2015/05/the-ultimate-guide-to-web-animation/">The Ultimate Guide to Web Animation</a> by Ezequiel Bruni.</p>
			</aside>
			
			<section class="main-content">
				
				<article class="content-block">
					<h1>UX Animation</h1>
					
					<p>There are three pieces to a user interface experience: conceptual, perceptual, and functional.  There is no life without motion, and adding motion to your design makes perception natural and concepts more intuitive.  The type of motion, rapid, slow, hiding, revealing, bright, subdued designs the personality.</p>

					<p><span class="busName">jsb Animation Studios' </span>specialty is designing a brand personality that matches the purpose of your website or web application.  Your website is your representative.  Designing a personality for it, determines how your user perceives your website, and you.</p>
				</article><!-- /.content-block -->
				
				<article class="content-block placeholder">
					<img src="img/animation_placeholder.jpg" alt="placeholder for animation sample">
					<img src="img/animation_placeholder.jpg" alt="placeholder for animation sample">
				</article>
				
			</section><!-- /.main-content -->
			
		</div><!-- /.content -->
	</main>
	
	<footer>
		<?php include 'includes/footer.php'; ?>
	</footer>
	
</div><!-- /.container -->
</body>

</html>