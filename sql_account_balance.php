
<?php
include("header.php");
?>
<h4>In this example, your are suppose to hack the account table of database, you should be able to get all the accounts balance with the help of SQL Injection </h4>
<?php
if($_GET['acc_id']){
$username = "root";
$password = "";
$hostname = "localhost"; 

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