<?php

	$Name = $_GET["Name"];

	$Address = $_GET["Address"];

	$Email = $_GET["Email"];

	$Phone = $_GET["Phone"];

	


   
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO Publisher VALUES (NULL,'$Name', '$Address', '$Email','$Phone' )" )
		or die("Can not execute query");



	echo "Record inserted:<br> Name = $Name <br> Address = $Address <br> Email = $Email <br> Phone=$Phone";



	echo "<p><a href=read.php>READ all records</a>";

?>
