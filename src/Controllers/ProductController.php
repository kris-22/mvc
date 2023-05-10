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
    require_once VIEW_PATH . '/produkt.php';

    echo $pageTitle;
  }

  // function show id from link /produkty/{id}
  public function show($id)
  {
    // wykonaj odpowiednie operacje i pobierz potrzebne dane\d+
    if (isset($_GET['name'])) {
      if (empty($_GET['name'])) {
        header("Location:" . APP_FOLDER . "/produkty");
      } else {
        $name = $_GET['name'];
        echo $name;
        header("Location:" . APP_FOLDER . "/produkty/" . $name);
      }
    }
    $pageTitle = 'Produkt';
    $welcomeMessage = "Witaj na stronie produktu <u>" . $id . "</u>!";

    // wyrenderuj widok z danymi
    // require_once VIEW_PATH . '/home.php';
    require_once VIEW_PATH . '/produkt.php';

    print_r($id);
  }
}
