<?php

	$S_ID = $_GET["id"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];

	$f3 = $_GET["f3"];


?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=S_ID value='<?php echo $S_ID; ?>'> <br>



	Book_Title: <input type=text name=f0 value='<?php echo $f0; ?>'>

	<p>

	Author_Name: <input type=text name=f1 value='<?php echo $f1; ?>'>

	<p>
	
	Price: <input type=text name=f2 value='<?php echo $f2; ?>'>

	<p>

	Quantity: <input type=text name=f3 value='<?php echo $f3; ?>'>

	<p>

	<input type=submit value=Update>

</form>
