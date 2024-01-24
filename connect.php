<?php 

	$host = "localhost";
	$username = "id21777005_poknat";
	$password = "Pokemon@1234";
	$db_name = "id21777005_studentinfosystem";

	$con = mysqli_connect($host, $username, $password, $db_name,);

	if(!$con) {
		die("Cannot connect to the database");
	}

?>