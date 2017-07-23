<?php
<<<<<<< HEAD
include ("dbcon.php");
=======
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab";

>>>>>>> 56eb3a170a5b97d272b933d41c9b5e84e52df36e
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO User (user_name)
VALUE ('".$_GET['inp1']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
