<?php
loadController('Menu', 'index');


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
    <label for="password">Confirm Password</label>
    <br>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="submit">

    <h3>Masz już konto? <a href="<?= APP_FOLDER ?>/login">Zaloguj się</a></h3>

</div>



</body>

</html>