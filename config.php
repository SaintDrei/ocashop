<?php
	$server = "127.0.0.1";
	$database = "ocadb";
	$username = "andreim1";
	$password = "3xclamatioN!";

	$con = mysqli_connect($server, $username, $password, $database);

	# checks connection to database
	# echo mysqli_ping($con) ? 'Connection successful.' : 'Connection failed';
?>