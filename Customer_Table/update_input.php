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

	$C_ID = $_GET["id"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];
	 
	$f3 = $_GET["f3"];

	$f4 = $_GET["f4"];

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=C_ID value='<?php echo $C_ID; ?>'> <br>



	Name: <input type=text name=f0 value='<?php echo $f0; ?>'>

	<p>

	Email: <input type=text name=f1 value='<?php echo $f1; ?>'>

	<p>
	
	Address: <input type=text name=f2 value='<?php echo $f2; ?>'>

	<p>
	
	phone: <input type=text name=f3 value='<?php echo $f3; ?>'>

	<p>
	ISBN: <input type=text name=f4 value='<?php echo $f4; ?>'>

	<p>

	<input type=submit value=Update>

</form>
</body>
</html>