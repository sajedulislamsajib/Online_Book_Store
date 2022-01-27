<?php

	$Book_Name = $_GET["Book_Name"];

	$Address = $_GET["Address"];
	
	$Phone = $_GET["Phone"];

	


   
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO Warehouse VALUES (NULL,'$Book_Name', '$Address', '$Phone' )" )
		or die("Can not execute query");



	echo "Record inserted:<br>Book_Name =$Book_Name <br> Address = $Address <br> Phone = $Phone ";



	echo "<p><a href=read.php>READ all records</a>";

?>
