<?php require("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!--[CSSE 4440] Term Project-->
		<meta http-equiv="content-type" content ="text/html; charset=utf-8"/>
		<LINK href="../PR2/stylesheet.css" rel="stylesheet" type="text/css">
		<title><?php setPageTitle($_GET['page']); ?></title>
		<meta name="description" content="" />
		<meta name="author" content="Glenn Bishop, David Enochs, Ian Walker" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	</head>

	<body>
		<div id="wrapper">
			<header>
				<h1>Don Durma's Ice Cream Parlor</h1>
			</header>
			<nav class="clearfix">
				<ul class="clearfix">
					<li><a href="../PR1/layout.php?page=welcome">Home</a></li>
					<li><a href="../PR1/layout.php?page=location">Location</a></li>
					<li><a href="../PR1/layout.php?page=specials">Specials</a></li>
					<li><a href="../PR1/layout.php?page=menu">Menu</a></li>
					<li><a href="../PR1/layout.php?page=reservations">Reservations</a></li>
					<li><a href="../PR1/layout.php?page=contact">Contact Us</a></li>
				</ul>
			</nav>

			<div class="<?php setElementClass($_GET['page']); ?>" id="content-area">
					<?php displayContent($_GET['page']); ?>
			</div>

			<footer>
					&copy; Copyright 2012 by Glenn Bishop, David Enochs, Ian Walker
			</footer>
		</div>
	</body>
</html>