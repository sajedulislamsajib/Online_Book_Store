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





<h1><p style='max-width: 500px; margin :0 auto;'>Create Record</h1>
<form class="ui form" style ="max-width: 500px;
 margin : 0 auto;"action=create_result.php>
  <div class="field">
    <label>Category</label>
   <input type=text name="Category" placeholder="Book Category">
  </div>
  <div class="field">
    <label>Book_Title</label>
    <input type=text name="Book_Title" placeholder="Book Title">
  </div>
  <div class="field">
    <label>Page Count</label>
    <input type=text name="Page_Count" placeholder="No of Pages">
  </div>
 
  <button class="ui button" type="submit">ADD NEW PRODUCT</button>
</form>

</body>
</html>