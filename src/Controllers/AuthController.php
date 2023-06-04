<?php

namespace Controllers;


require_once MODEL_PATH . '/User.php';

use PDO;
use Models\User;

class AuthController
{

  /**
   * login
   *
   * @return void
   */
  public function login()
  {
    @session_start();

    if (isset($_POST['login']) && isset($_POST['password'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];
      $login = User::login($login, $password);
      if ($login) {
        $_SESSION['user'] = $login;
        print_r($login);
        header("Location:" . APP_FOLDER . "/");
      } else {
        echo "Niepoprawne dane logowania";
      }
    }
    require_once VIEW_PATH . '/auth/login.php';
  }

  /**
   * register
   *
   * @return void
   */
  public function register()
  {
    //usuwanie sesji
    @session_start();
    @session_destroy();

    require_once VIEW_PATH . '/auth/register.php';
  }
}
