<?php
session_start();
require'connect.php';
?>

<div id='profile' style='height:100px; width:100px; margin-left:25px; margin-top:25px; border:3px solid black;'>
</div>

<?php

$_SESSION['user'] = $user;
print_r($_SESSION['user']);
 ?>
