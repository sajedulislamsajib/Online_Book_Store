
<html>
    <head>
    <title>An Online Book Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
   body {
    background-color: powderblue;
  
  }
  </style>
    </head>
    
    <body>

	<div class="ui inverted segment">
	<button class="ui inverted button"><a href="http://localhost/Online_Book_Store/index.html">HOME</a></button>
        <button class="ui inverted button"><a href="http://localhost/Online_Book_Store/AuthorTabeluserInput/read.php">Authors</a></button>
        <button class="ui inverted primary button"><a href="http://localhost/Online_Book_Store/Book_Table_User_Input/read.php">Books</a></button>
        <button class="ui inverted secondary button"><a href="http://localhost/Online_Book_Store/Category_Table_User_Input/read.php">Categorys</a></button>
        <button class="ui inverted red button"><a href="http://localhost/Online_Book_Store/Customer_Table/read.php">Customers</a></button>
        <button class="ui inverted orange button"><a href="http://localhost/Online_Book_Store/Publisher_Table/read.php">Publisher</a></button>
        <button class="ui inverted yellow button"><a href="http://localhost/Online_Book_Store/Review_Table/read.php">Review</a></button>
        <button class="ui inverted olive button"><a href="http://localhost/Online_Book_Store/Shopping_Cart/read.php">Cart</a></button>
        <button class="ui inverted green button"><a href="http://localhost/Online_Book_Store/Warehouse/read.php">warehouse</a></button>
       
      </div>

	  <button  class='ui black button' ><a href = "join.php">Join Book Title from Book table</a></button>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Customer" )
		or die("Can not execute query");

	echo "<table class='ui celled table'style='max-width: 500px; margin :0 auto;'> \n";
	echo "<tr><thead><th>C_ID</th> <th>Name</th> <th>Email</th> <th>Address</th>  <th>Phone</th>  <th>ISBN</th> <th>Delete</th> <th>Update</th> </tr>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $C_ID </td>";
		echo "<td> $Name </td>";
		echo "<td> $Email </td>";
		echo "<td> $Address</td>";
		echo "<td> $Phone </td>";
		echo "<td> $ISBN </td>";
		echo "<td> <a href = 'delete.php?id=$C_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$C_ID&f0=$Name&f1=$Email&f2=$Address&f3=$Phone&f4=$ISBN'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</thead></table> \n";

	echo "<br ><p style='max-width: 500px; margin :0 auto;'><a href=create_input.php><button  class='ui black button' >Create New Product</button></a>";
?>



</body>
</html>




