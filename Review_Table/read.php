<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Review" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>R_ID</th> <th>Name</th> <th>Review</th> <th>Email</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $R_ID </td>";
		echo "<td> $Name </td>";
		echo "<td> $Review </td>";
		echo "<td> $Email</td>";
		echo "<td> <a href = 'delete.php?id=$R_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$R_ID&f0=$Name&f1=$Review&f2=$Email'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>Create New Product</a>";
?>









