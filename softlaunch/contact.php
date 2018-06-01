<!--
File Name: contact.php
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
	<link href="css/form.css" rel="stylesheet" type="text/css">

	<!-- scripts -->
	<script src="js/menu.js"></script>
	<script src="js/contactForm.js"></script>
	
	<!-- includes -->	
	<?php include 'php/connection.php'; ?>
	<?php include 'php/sanitize_data.php'; ?>
	<?php include 'php/contact_form_processor.php'; ?>

</head>
	
<body>
<div class="container">
	
	<header>
		<?php include 'includes/header.php'; ?>
	</header>

  <nav class="topnav" id="myTopnav">
    <a target="_self" href="index.php">Home</a>
    <a target="_self" href="portfolio.php">Portfolio</a>
    <a target="_self" href="howwework.php">How We Work</a>
    <a target="_self" href="#contact" class="active">Contact</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction(); return false;">&#9776;</a>
  </nav>
	
	<main>
		<div class="content">
			
			<aside class="sidebar">
				<h3 class="address">jsb Animation Studios</h3>
				<p class="address">1234 Main St.<br />Portland, OR 97724</p>
				<p class="address"><a href="mailto:jsb@jsbanimationstudios.com"><i class="fas fa-envelope"></i></a></p>
				<p class="address"><a href="tel:+19999999999"><i class="fas fa-phone-square"></i></a></p>
			</aside>
			
			<section class="main-content">
				<article class="content-block">
					<h1>Thank you for visiting!</h1>
					<p>We would like to talk to you about how animations can add personality to your website or web application.</p>
				</article><!-- /.content-block -->

				<article class="content-block">
					<p class="note">Please fill in this form completely.  We will get back to you within 24 hours.</p>
    
					<!-- what page are we on? for debugging -->
					<?//php echo $_SERVER['PHP_SELF']; ?>
					 
					<form id="contactForm" name="contactForm" action="<?= $_SERVER['REQUEST_URI'] ?>" onsubmit="return validateContactForm()" method="POST" target="_self">

						<fieldset>
							<p class="lbl">First name:</p>
							<input type="text" name="firstName" id="firstName" tabindex="1"><br />

							<p class="lbl">Last name:</p>
							<input type="text" name="lastName" id="lastName" tabindex="2"><br />

							<p class="lbl">Email:</p>
							<input type="email" name="email" id="email" tabindex="3"><br />
							
							<p class="lbl">Subject:</p>
							<input type="text" name="subject" id="subject" tabindex="4"><br />

							<p class="lbl">Questions or Comments:</p>
							<textarea type="text" id="comment" name="comment" tabindex="5" maxlength="1500"></textarea><br />
						</fieldset>

						<input class="sendBtn" type="submit" name="send" value="Send" tabindex="6">
						<input class="cancelBtn" type="reset" value="Cancel" tabindex="7">

					</form>
				</article><!-- /.content-block -->
			</section><!-- /.main-content -->
			
		</div><!-- /.content -->
	</main>
	
	<footer>
		<?php include 'includes/footer.php'; ?>
		<?php include 'php/closeConnection.php'; ?>
	</footer>
	
</div><!-- /.container -->
</body>

</html>