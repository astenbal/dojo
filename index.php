<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Dojo</title>
</head>

<body>
  <div id='top_bar'>
    <span id='logo'><h1>Dojo</h1></span>
  </div>
  <div id='main_area'>
    <div id='login'>
      <form method='post' action="">
        <input type='text' name method='post'='username' placeholder='username'>
        <input type='password' name='password' placeholder='password'>
        <input type='submit' name='submit' value='log-in'>
      </form>
      <?php
      include 'login.php';
      ?>
    </div>
  </div>
</body>
