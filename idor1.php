<?php
include("header.php");

?>
<h4>In this example, your are suppose to hack the account balance of the other users, you should be able to get other user's account balance with the help of insecure direct object reference </h4>
<?php
if($_GET['acc_id']){

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");


//select a database to work with
$selected = mysql_select_db("lab",$dbhandle) 
  or die("Could not select lab");

//execute the SQL query and return records
$result = mysql_query("SELECT name, balance FROM Account where id=".$_GET['acc_id']);

//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
   echo "Account Holder Name :".$row{'name'}."<br/> Balance :".$row{'balance'}."<hr/>";
}
//close the connection
mysql_close($dbhandle);
}
?>

<form action="" >

<label>Enter your Account Number</label>
<input type="text" name="acc_id"/>
<button >Enter</button>

</form>

<?php
include("footer.php");
?>