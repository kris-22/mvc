<?php

namespace Controllers;


require_once MODEL_PATH . '/User.php';

use Models\User;

class MenuController
{
  /**
   * index
   *
   * @return void
   */
  public function index()
  {
    // wykonaj odpowiednie operacje i pobierz potrzebne dane
    @session_start();
    $pageTitle = 'Strona Główna';
    $welcomeMessage = 'Witaj na stronie głównej!';

    if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];
      $status = $user->getLogin();
      // echo $status->getLogin();
    } else {
      $status = "login";
    }

    // wyrenderuj widok z danymi
    view('components/menu', [
      'pageTitle' => $pageTitle,
      'welcomeMessage' => $welcomeMessage,
      'status' => $status
    ], true);
  }
}
