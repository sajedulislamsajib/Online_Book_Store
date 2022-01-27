<?php

	$A_ID = $_GET["A_ID"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Review SET Name='$f0', Review='$f1',Email='$f2' WHERE R_ID = $A_ID";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> name = $f0 <br> email = $f1 <br> phone = $f2";



	echo "<p><a href=read.php>READ all records</a>";

?>
