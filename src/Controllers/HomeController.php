<?php

namespace Controllers;


class HomeController
{
  public function index()
  {
    // wykonaj odpowiednie operacje i pobierz potrzebne dane
    $pageTitle = 'Strona Główna';
    $welcomeMessage = 'Witaj na stronie głównej!';

    // wyrenderuj widok z danymi
    require_once VIEW_PATH . '/home.php';
  }
}
