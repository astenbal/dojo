<?php
$servername = "localhost";
$username = "codedojo-jay";
$password = "jay123";
$dbname = "codedojo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
