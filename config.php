<?php 
	session_start();

	// connect to database
	$conn = mysqli_connect("localhost", "id11240893_admin", "admin", "weekly");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
       // coming soon...

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/public_html/');
?>