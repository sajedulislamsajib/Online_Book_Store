
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Publisher" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>P_ID</th> <th>Name</th> <th>Address</th> <th>Email</th> <th>Phone</th><th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $P_ID </td>";
		echo "<td> $Name </td>";
		echo "<td> $Address </td>";
		echo "<td> $Email</td>";
		echo "<td> $Phone</td>";
		echo "<td> <a href = 'delete.php?id=$P_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$P_ID&f0=$Name&f1=$Address&f2=$Email&f3=$Phone'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>Create New Product</a>";
?>









