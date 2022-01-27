<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Warehouse" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>W_ID</th> <th>Book_Name</th> <th>Address</th> <th>Phone</th> <th>Price</th> <th>ISBN</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $W_ID </td>";
		echo "<td> $Book_Name </td>";
		echo "<td> $Address </td>";
		echo "<td> $Phone</td>";
		echo "<td> $Price</td>";
		echo "<td> $Price</td>";
		echo "<td> <a href = 'delete.php?id=$W_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$W_ID&f0=$Book_Name&f1=$Address&f2=$Phone'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>Create New Product</a>";
?>









