<?php

	$Name = $_GET["Name"];

	$Review = $_GET["Review"];
	
	$Email = $_GET["Email"];

	


   
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO Review VALUES (NULL,'$Name', '$Review', '$Email' )" )
		or die("Can not execute query");



	echo "Record inserted:<br> Name = $Name <br> Review = $Review <br> Email = $Email ";



	echo "<p><a href=read.php>READ all records</a>";

?>
