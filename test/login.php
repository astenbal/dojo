<h1>Please login.</h1>
<form method='post'>
  <input type='text' name='user' placeholder="Username">
  <input type='password' name='pass' placeholder="Password">
  <input type='submit' name='submit'>
</form>

<?php
session_start();

if(!empty($_POST['submit']))
{
  require'connect.php';

  $user = $_POST["user"];
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
