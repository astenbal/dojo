<h1>Sign-up</h1>
<form method="post" action=''>
  <input type='text' name='user' placeholder='Username'>
  <input type='password' name='pass' placeholder='Password'>
  <input type='password' name='pass_verify' placeholder='Confirm password'>
  <input type='submit' name='submit' value='sign-up'>
</form>

<?php
if(!empty($_POST['submit']))
{
  require'create.php';
}
else
{
  echo' ';
}

 ?>
