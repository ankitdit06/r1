<?php

include("header.php");

?>
<form action="doLogin.php" method="POST" >

<label>Enter your User ID</label>
<input type="text" name="uname"/>
<br/>
<label>Enter your password</label>
<input type="password" name="pwd"/>
<br/>
<button >Enter</button>

</form>



<?php

include("footer.php");

?>