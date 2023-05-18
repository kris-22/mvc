<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="<?php echo APP_FOLDER ?>/style/style.css">
</head>

<body>
  <?php
  view('components/menu');

  ?>
  <!-- login form -->
  <div class="authForm">
    <h1>Rejestracja</h1>
    <form class="qwe" action="" method="POST">
      <label for="login">Login</label>
      <br>
      <input type="text" name="login" id="login">
      <br>
      <label for="email">Email</label>
      <br>
      <input type="email" name="email" id="email">
      <br>
      <label for="password">Password</label>
      <br>
      <input type="password" name="password" id="password">
      <br>
      <label for="password">Password</label>
      <br>
      <input type="password" name="password" id="password">
      <br>
      <input type="submit" value="submit">

      <h3>Masz już konto? <a href="<?php echo APP_FOLDER ?>/login">Zaloguj się</a></h3>

  </div>



</body>

</html>