<?php

namespace Controllers;

class ProductController
{
  public function index()
  {
    // wykonaj odpowiednie operacje i pobierz potrzebne dane
    $pageTitle = 'Pradukty';
    $welcomeMessage = 'Witaj na stronie produkty tutaj zobacz nasze najelpsze okazje !';

    // wyrenderuj widok z danymi
    // require_once VIEW_PATH . '/home.php';
    require_once VIEW_PATH . '/home.php';

    echo $pageTitle;
  }

  // function show id from link /produkty/{id}
  public function show($id)
  {
    // wykonaj odpowiednie operacje i pobierz potrzebne dane\d+
    $pageTitle = 'Produkt';
    $welcomeMessage = "Witaj na stronie produktu <u>" . $id . "</u>!";

    // wyrenderuj widok z danymi
    // require_once VIEW_PATH . '/home.php';
    require_once VIEW_PATH . '/home.php';

    // echo $pageTitle;
    // echo " bambiku $id";
    // echo $id;
    print_r($id);
  }
}
