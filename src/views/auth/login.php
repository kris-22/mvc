<?php
loadController('Menu', 'index');


?>
<!-- login form -->
<div class="authForm">
  <h1>Logowanie</h1>
  <form class="qwe" action="" method="POST">
    <label for="login">Login</label>
    <br>
    <input type="text" name="login" id="login">
    <br>
    <label for="password">Password</label>
    <br>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="submit">
  </form>

  <h3>Nie masz konta? <a href="<?= APP_FOLDER ?>/register">Zarejestruj się</a></h3>
</div>

<?php
// loadController('Home', 'index');
// loadController('Auth', 'register')


?>


</body>

</html>