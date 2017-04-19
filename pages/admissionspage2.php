<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Asgardian Nursery School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/admissions.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<?php
			require_once('../layout/menu.php');
		?>
	<div class="divider"></div>

<div id = "midhead">
	<h1> Online Admissions Page <h1>

	<h4> Previous Schools Attended </h4>
	</div>

	<div id = "mid">
		<form method = "post" action = "admissionspage3.html" name = "form">
		<h4> Has the child been to any other schools? </h4>
		<span style= 'color:red'>* Required</span>
		<input type="checkbox" id="schyes" name="selector"><label for="schyes">Yes</label>
		<input type="checkbox" id="schno" name="selector"><label for="schno">No</label>

		<br><br>
		<span style = 'color: red' > If yes, please fill the form below: </span><br>
		   Previous school(s) attended:<br><br>

		  School Name <input type = "text" id = "schname1" class="input"><br><br>
		  Name of Head <input type = "text" id = "headname1" class="input"><br><br>
		  Telephone number <input type = "tel" id = "tel1" class="input"><br><br>
		  <br><br>

		  School Name <input type = "text" id = "schname2" class="input"><br><br>
		  Name of Head <input type = "text" id = "headname2" class="input"><br><br>
		  Telephone number <input type = "tel" id = "tel2" class="input"><br><br>
		  <br><br>
			 <input type = "button" value = "Next Page" id = "submit" onclick="validatePage2()">
		</form>

		<form action = "admissionspage1.html">
		  <input type = "submit" value = "Previous Page">
		</form>

<h3> <span style= 'color: teal'> * Next Page: Sibling Information </span> <h3>

	<!--	<form action = "admissionspage3.html">
		  <input type = "button" value = "Next Page" id = "submit" onclick="validatePage2(), checkRadio2(document.getElementsByTagName("selector"))">
		</form> -->
	</div>

	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">CT 3433<br>Cantonments, Accra</a></li>
						<li class="mail"><a href="https://asgardnursery.wordpress.com/">sentinels@gmail.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li>
					</ul>
				</article>
				<article class="col-3">
					<h3>Social media</h3>
					<p>You can follow us on social media.</p>
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</article>
			</section>
			<p class="copy">Copyright 2017 Asgardian Nursery School. Created by <a href="https://asgardnursery.wordpress.com/" title="Designed by The Sentinels" target="_blank">The Sentinels</a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>

	<script type = "text/javascript" src = "../js/admissionspage2.js">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='../js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>
