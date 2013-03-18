<!DOCTYPE HTML>
<html>

<head>

	<meta charset="UTF-8">


	<title>Vaguely Scandinavian | Design & Build for the Internet</title>

	<link rel="stylesheet" href="css.css<?php echo '?' . filemtime('css.css'); ?>">
	<link rel="icon" href="assets/favicon.png" type="image/png">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

	<script type="text/javascript" src="scripts/script.js"></script>
	<script type="text/javascript">
		$script("https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js", 'jquery', function() {
			$script("scripts/vsInit.js<?php echo '?' . filemtime('scripts/vsInit.js'); ?>", 'vsInit');
		});

	</script>


	<!--[if lt IE 9]>
		<script type="text/javascript" src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-20512100-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

</head>

<body>

	<header id="header">

		<div class="width">

			<h1>Vaguely Scandinavian</h1>

			<nav id="nav">
				<ul>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		</div>

	</header>


	<div id="contentWrapper">

		<section class="section statement">
			<p class="header">We make</p>
			<h1>Clean, economical, &amp; easy-to-maintain websites for artists, designers, & start-ups.</h1>
		</section>

		<section class="section">

			<h1 class="header">We are</h1>

			<p><a href="http://travisekmark.com">Travis Ekmark</a> &amp; <a href="http://stevenosloan.com">Steven Sloan</a> — two guys who admire clean, functional, and contemporary design. We formed Vaguely Scandinavian in 2010 to serve as a platform for empowering independent artists, designers, and businesses to express their voices on the web. <a href="#contact">Drop us a line</a> if you'd like to learn more.</p>

		</section>

		<section class="section">

			<h1 class="header">We've designed &amp; built</h1>

			<ul>
				<li>
					<a href="http://peopleofresource.com" rel="external">People of Resource</a> <span class="collab">at <a href="http://peopleofresource.com" rel="external">People of Resource</a> w/ <a href="http://stephenjameskennedy.com">Stephen Kennedy</a> & <a href="http://www.peopleofresource.com/about/david-vanarsdale" rel="external">David VanArsdale</a></span>
				</li>
				<li>
					<a href="http://southerndesignconcern.com">The Southern Design Concern</a>
				</li>
				<li>
				  <a href="http://kristenvcahill.com">Kristen V. Cahill</a>
				</li>
				<li>
					<a href="http://yard-architect.net/">YAR+D Architecture</a>
				</li>
			</ul>

		</section>

		<section class="section">

			<h2 class="header">We've designed</h2>

			<ul>
				<li>
					<a href="http://greatnessflickers.com/">Flickering Productions</a>
				</li>
			  <li>
			    <a href="http://gables.com">Gables</a> <span class="collab">at <a href="http://digitalscientists.com">Digital Scientists</a></span>
			  </li>
			</ul>

		</section>

		<section class="section">

			<h2 class="header">We've built</h2>

			<ul>
			  <li>
			    <a href="http://nicholaskomor.com">Nicholas Komor</a>
			  </li>
			  <li>
			    <a href="http://cgaldia.com">Constru-Guía al día</a>
			  </li>
				<li>
					<a href="http://creaturellc.com">Creature, llc</a>
				</li>
				<li>
					<a href="http://stephenjameskennedy.com">Stephen James Kennedy</a>
				</li>
				<li>
					<a href="http://outlier.cc">Outlier</a> <span class="collab">w/ <a href="http://tomorrow-lab.com/">Ted Ullrich</a></span>
				</li>
			</ul>

		</section>


		<section class="section" id="contact">

			<form id="theContactForm" action="contactForm.php" method="post">

				<h2 class="header">We'd love to hear from you</h2>

				<label for="contactName">Name</label>
				<input type="text" name="contactName" id="contactName" />

				<label for="contactEmail">Email</label>
				<input type="email" name="contactEmail" id="contactEmail" autocomplete="off" autocapitalize="off"/>

				<label for="contactMessage">Message</label>
				<textarea name="contactMessage" id="contactMessage"></textarea>

				<input class="submit" type="submit" id="contactSend" name="contactSend" value="Send" />

			</form>

			<div id="contactMessages">
				<p class="contactWorking">Your message is being sent ...</p>
				<p class="contactOops">There was an error. Please try again or email us: info@vaguelyscandinavian.com</p>
				<p class="contactFill">Please fill out all the fields</p>
				<p class="contactEmail">Please enter a valid email address</p>
				<p class="contactSuccess">Success! Your message has been sent. We'll get back to you as soon as we can</p>
			</div>


		</section>

	</div>


	<footer id="footer">

		<div class="width">

			<p>&copy;2010-<?php echo date ( "Y" ); ?> Vaguely Scandinavian, llc.  All rights reserved.<br />
			Design / Build for the Internet.</p>

		</div>

	</footer>

</body>
</html>