<?php
include ("dbcon.php");
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");


//select a database to work with
$selected = mysql_select_db("lab",$dbhandle) 
  or die("Could not select lab");

  $query="SELECT * FROM login where login_name='".$_POST['uname']."' AND password='".$_POST['pwd']."' ;";
  //execute the SQL query and return records
$result = mysql_query($query);




//fetch tha data from the database 
$row = mysql_fetch_array($result);
 $count = mysql_num_rows($result);
if($count){
echo "great";
session_start();
$_SESSION['user']=$_POST['uname'];
header("Location:index.php");
}else{
echo"wrong attempt";
}

//close the connection
mysql_close($dbhandle);
?>
