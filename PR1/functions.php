<?php
	
	function displayContent($page = "welcome")
	{
		include("$page.html"); 
	}
	
	function setElementClass($class = "welcome")
	{
		echo $class;
	}
	
	function setPageTitle($page = "welcome")
	{
		$title = "Don Durma's Ice Cream Parlour";
	
		if($page == "contact")
			$title .= " - Contact Us";
		else if($page == "location")
			$title .= " - Location";
		else if($page == "menu")
			$title .= " - Menu";
		else if($page == "reservations")
			$title .= " - Make a Reservation";
		else if($page == "specials")
			$title .= " - Special Offers";
		else if($page == "welcome")
			$title .= " - Welcome!";
			
		echo $title;
	}
?>