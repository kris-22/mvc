<?php

namespace Controllers;


class AuthController
{

  /**
   * login
   *
   * @return void
   */
  public function login()
  {

    require_once VIEW_PATH . '/auth/login.php';
  }

  /**
   * register
   *
   * @return void
   */
  public function register()
  {

    require_once VIEW_PATH . '/auth/register.php';
  }
}
