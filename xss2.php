<?php
include("header.php");
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("lab",$dbhandle) 
  or die("Could not select lab");

//execute the SQL query and return records
$result = mysql_query("SELECT id, user_name FROM User");

//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
   echo "ID:".$row{'id'}." Name:".$row{'user_name'}."<br>";
}
//close the connection
mysql_close($dbhandle);
?>

<form action="register.php" >

<label>Enter your email ID</label>
<input type="text" name="inp1"/>
<button >Enter</button>

</form>

<?php
include("footer.php");
?>