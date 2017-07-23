<?php
include("header.php");
?>
This is highly vulenrable application, made only for educational purpose.
<?php
if(!isset($_SESSION['user'])){
	?>
Please use the username :arp<br/>
and Password : alpha<br/>
<?php
}
include("footer.php");
?>
