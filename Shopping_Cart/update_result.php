<?php

	$A_ID = $_GET["S_ID"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];

	$f3 = $_GET["f3"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Shopping_Cart SET Book_Title='$f0', Author_Name='$f1',Price='$f2', Quantity='$f3' WHERE S_ID = $A_ID";

	//echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Book_Title = $f0 <br> Author_Name = $f1 <br> Price = $f2 <br> Quantity = $f3";



	echo "<p><a href=read.php>READ all records</a>";

?>
