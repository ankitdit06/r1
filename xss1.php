<?php

include("header.php");

?>
<form action="" >

<label>Enter your email ID</label>
<input type="text" name="inp1"/>
<button >Enter</button>

</form>

<?php
if($_GET['inp1']){
	
	echo $_GET['inp1'];
}

?>

<?php

include("footer.php");

?>