<?php

	$Book_Title = $_GET["Book_Title"];

	$Author_Name = $_GET["Author_Name"];
	
	$Price = $_GET["Price"];

	$Quantity = $_GET["Quantity"];
	


   
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO Shopping_Cart VALUES (NULL,'$Book_Title', '$Author_Name', '$Price','$Quantity' )" )
		or die("Can not execute query");



	echo "Record inserted:<br> Book_Title = $Book_Title <br> Author_Name = $Author_Name <br> Price = $Price <br> Quantity = $Quantity";



	echo "<p><a href=read.php>READ all records</a>";

?>
