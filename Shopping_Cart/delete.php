<?php

	$S_ID = $_GET["id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM Shopping_Cart WHERE S_ID=$S_ID" )

		or die("Can not execute query");




	echo "Record deleted<br>";



	echo "<p><a href=read.php>READ all records</a>";

?>
