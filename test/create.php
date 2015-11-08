<?php

$servername = "localhost";
$username = "codedojo-jay";
$password = "jay123";
$dbname = "codedojo";
$user = $_POST["user"];
$pass = $_POST["pass"];
$pass_verify = $_POST["pass_verify"];
$pass_length = strlen ($pass);
$user_length = strlen ($user);
$pass_hash = md5($pass);

if($user_length < 3){
  echo'Your username must contain atleast 3 characters.';die();
}

if($user_length > 10){
  echo'Your username must contain less than 10 characters.';die();
}

if ($pass_length < 5){
  echo'Your password must contain atleast 5 characters.'; die();
}

if ($pass_length > 15){
  echo'Your password must contain less than 15 characters.'; die();
}

if ($pass != $pass_verify){
  echo'Your passwords do not match!'; die();
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqlcheck = "SELECT `id` FROM `users` WHERE `username` = '$user'";
$resultcheck = mysqli_query($conn, $sqlcheck);
if(mysqli_num_rows($resultcheck) > 0) { echo 'This username is already in use, please pick another one'; die(); }

$sql = "INSERT INTO users(Username, Password)
VALUES ('$user', '$pass_hash')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully! <br><a href='login.php'>Click here to login</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>
