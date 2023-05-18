<?php

namespace Controllers;


class AuthController
{
  public function login()
  {

    require_once VIEW_PATH . '/auth/login.php';
  }

  public function register()
  {

    require_once VIEW_PATH . '/auth/register.php';
  }
}
