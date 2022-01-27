<?php

	$A_ID = $_GET["id"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=A_ID value='<?php echo $A_ID; ?>'> <br>



	name: <input type=text name=f0 value='<?php echo $f0; ?>'>

	<p>

	email: <input type=text name=f1 value='<?php echo $f1; ?>'>

	<p>
	
	phone: <input type=text name=f2 value='<?php echo $f2; ?>'>

	<p>

	<input type=submit value=Update>

</form>
