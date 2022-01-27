<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Shopping_Cart" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>S_ID</th> <th>Book_Title</th> <th>Author_Name</th><th>Price</th> <th>Quantity</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $S_ID </td>";
		echo "<td> $Book_Title </td>";
		echo "<td> $Author_Name </td>";
		echo "<td> $Price</td>";
		echo "<td> $Quantity</td>";
		echo "<td> <a href = 'delete.php?id=$S_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$S_ID&f0=$Book_Title&f1=$Author_Name&f2=$Price&f3=$Quantity'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>Create New Product</a>";
?>









