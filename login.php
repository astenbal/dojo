<?php
/*require 'connect.php';

if(!empty($_POST['submit']))
{
  $user = $_POST["username"];
  $pass = $_POST["password"];
  $pass_hash = md5($pass);

  $sqlcheck = "SELECT `id` FROM `users` WHERE `username` = '$user' AND `password` = '$pass_hash'";
  $resultcheck = mysqli_query($conn, $sqlcheck);
  if(mysqli_num_rows($resultcheck) > 0)
  {
    echo 'Welcome!'.$user.die();
  }
  else
  {
    echo 'Login failed!';
  }
}*/

if(!empty($_POST['submit']))
{
  require'connect.php';

  $user = $_POST["username"];
  $pass = $_POST["pass"];
  $pass_hash = md5($pass);
  $_SESSION['user'] = $user;

  $sqlcheck = "SELECT `id` FROM `users` WHERE `username` = '$user' AND `password` = '$pass_hash'";
  $resultcheck = mysqli_query($conn, $sqlcheck);
  if(mysqli_num_rows($resultcheck) > 0){
    echo 'Welcome '.$user.'<br> <a href="/dojo/test/account.php">Go to your account</a>';
    die();
  }
  else {
    echo'Login failed!';
  }
}
 ?>
