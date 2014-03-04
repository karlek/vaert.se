<?php
	setcookie("TestCookie", "TestValue");
	foreach($_COOKIE as $cookie_name => $cookie) {
		echo $cookie_name .'='. $cookie."<br>\n";
	}
?>