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

	$Book_Title = $_GET["Book_Title"];

	$Book_Category = $_GET["Book_Category"];
	
	$Author_Name = $_GET["Author_Name"];

	


   
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO Category VALUES (NULL,'$Book_Title', '$Book_Category', '$Author_Name' )" )
		or die(mysqli_error($connect));



	echo "<p style='max-width: 500px; margin :0 auto;'>Record inserted:<br> 
	<p style='max-width: 500px; margin :0 auto;'>Book_Title = $Book_Title <br>
	<p style='max-width: 500px; margin :0 auto;'> Book_Category = $Book_Category <br>
	<p style='max-width: 500px; margin :0 auto;'> Author_Name = $Author_Name ";



	echo "<p style='max-width: 500px; margin :0 auto;'><a href=read.php>READ all records</a>";

?>
</body>
</html>