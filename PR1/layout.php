<!DOCTYPE html>
<html lang="en">
	<head>
		<!--[CSSE 4440] Term Project-->
		<meta http-equiv="content-type" content ="text/html; charset=utf-8"/>
		<title>[CSSE 4440] Term Project</title>
		<meta name="description" content="" />
		<meta name="author" content="Glenn Bishop, David Enochs, Ian Walker" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	</head>

	<body>
		<div>
			<header>
				<h1>Don Durma's Ice Cream Parlor</h1>
			</header>
			<nav>
					<a href="/CSSE4440TermProject/PR1/layout.php?page=welcome">Home</a>
					<a href="/CSSE4440TermProject/PR1/layout.php?page=location">Location</a>
					<a href="/CSSE4440TermProject/PR1/layout.php?page=specials">Specials</a>
					<a href="/CSSE4440TermProject/PR1/layout.php?page=menu">Menu</a>
					<a href="/CSSE4440TermProject/PR1/layout.php?page=reservations">Reservations</a>
					<a href="/CSSE4440TermProject/PR1/layout.php?page=contact">Contact</a>
			</nav>

			<div>
					<?php
						$page = $_GET['page'];
						if(empty($page))
							$page = "welcome";
						include("$page.html"); 
					?>
			</div>

			<footer>
				<p>
					&copy; Copyright  by Glenn Bishop, David Enochs, Ian Walker
				</p>
			</footer>
		</div>
	</body>
</html>