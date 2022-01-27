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
        <button class="ui inverted button"><a href="http://localhost/Online_Book_Store/AuthorTabeluserInput/read.php">Authors</a></button>
        <button class="ui inverted primary button"><a href="http://localhost/Online_Book_Store/Book_Table_User_Input/read.php">Books</a></button>
        <button class="ui inverted secondary button"><a href="http://localhost/Online_Book_Store/Category_Table_User_Input/read.php">Categorys</a></button>
        <button class="ui inverted red button"><a href="http://localhost/Online_Book_Store/Customer_Table/read.php">Customers</a></button>
        <button class="ui inverted orange button"><a href="http://localhost/Online_Book_Store/Publisher_Table/read.php">Publisher</a></button>
        <button class="ui inverted yellow button"><a href="http://localhost/Online_Book_Store/Review_Table/read.php">Review</a></button>
        <button class="ui inverted olive button"><a href="http://localhost/Online_Book_Store/Shopping_Cart/read.php">Cart</a></button>
        <button class="ui inverted green button"><a href="http://localhost/Online_Book_Store/Warehouse/read.php">warehouse</a></button>
       
      </div>
<?php

	$C_ID = $_GET["C_ID"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];

    $f3 = $_GET["f3"];
	$f4 = $_GET["f4"];
	
	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Customer SET Name='$f0',Email='$f1',Address='$f2',Phone='$f3',ISBN='$f4' WHERE C_ID = $C_ID";

	//echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Name = $f0 <br> Email = $f1 <br> Address = $f2 <br> Phone=$f3 <br> ISBN=$f4";



	echo "<p><a href=read.php>READ all records</a>";

?>
</body>
</html>