<?php

namespace Controllers;


class MenuController
{
  public function index()
  {
    // wykonaj odpowiednie operacje i pobierz potrzebne dane
    $pageTitle = 'Strona Główna';
    $welcomeMessage = 'Witaj na stronie głównej!';

    // wyrenderuj widok z danymi
    // require_once VIEW_PATH . '/home.php';
    view('components/menu', "", true);
  }
}
