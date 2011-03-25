<!DOCTYPE html>
<html>
<!--
	davidhuerta.me
	pitch me
	webmaster david{at}hayst.ac
	http://www.davidhuerta.me
	copyright (c) 2011 David Huerta. Distributed under the CDL license: http://supertunaman.com/cdl/
-->
<head>
	<title>davidhuerta.me</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="StyleSheet" href="default.css" type="text/css" />
	<link rel="StyleSheet" href="overflow-touch.css" type="text/css" />
	<script type="text/javascript" src="overflow-touch.js"></script>
</head>
<body>
	<?php include("header.php"); ?>
	<section class="contentContainer">
		<?php include("navigation.php"); ?>
		<aside id="verbageContainer" class="descriptionContainer">
			<h2>contact david</h2>
			<p>Looking for a speaker to discuss search privacy/hacker spaces/tumblr memes at your next conference, camp, or wedding?  Are you working on something really cool and want my involvement somehow?  Contact me with the form below:</p>
			<form id="frmContactDavid" method="post" action="dhmailer.php">
				<label for="contactName">Name</label>
				<br />
				<input name="txtContactName" type="text" placeholder="Your Name" class="fancyTextBox" />
				<br />
				<label for="contactEmail">Email Address</label>
				<br />
				<input name="txtContactEmail" type="email" placeholder="Your Email Address" class="fancyTextBox" />
				<br />
				<label for="contactMessage">Your Message</label>
				<br />
				<textarea name="txtContactMessage" type="textarea" placeholder="i liek turtles" rows="4" cols="32" class="fancyTextBox"></textarea>
				<br />
				<label for="contactRobotCheck"><a href="http://www.youtube.com/watch?v=aZFH4wCLVXY">Are you classified as a human</a>? (Type: "I am a meat popsicle")</label>
				<br />
				<input name="txtContactMeatPopsicle" type="text" placeholder="No really, type &quot;I am a meat popsicle&quot;" class="fancyTextBox" />
				<br />
				<input id="btnContactSubmit" type="submit" value="Send" class="fancyButton" />
				<br />
			</form>
		</aside>
		<script type="text/javascript">
			setIosOverlay('verbageContainer');
		</script>
		<?php include("props.php"); ?>
	</section>
	<?php include("footer.php"); ?>
	<?php include("woopra.php"); ?>
</body>
</html>