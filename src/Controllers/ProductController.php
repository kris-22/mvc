<?php

namespace Controllers;

require_once MODEL_PATH . '/Product.php';

use Models\Product;

class ProductController
{

  // function widoku podstawowego /produkty
  public function index()
  {
    //delkaracja zmiennych do wyświetlenia na stronie
    $pageTitle = "Produkty"; //tytuł strony
    $welcomeMessage = 'Witaj na stronie produkty tutaj zobacz nasze najelpsze okazje !'; //wiatmy na stronie
    $img = ""; //obrazek
    $koszyk = ""; //koszyk
    $options = "";

    $products = new Product("");
    $product = $products->listProducts();
    foreach ($product as $key => $value) {
      $options .= "<option value='" . $value . "'>";
    }
    require_once VIEW_PATH . '/produktErro.php';
  }

  // function swidoki produktów /produkty/{id}
  public function show($id)
  {
    //delkaracja zmiennych do wyświetlenia na stronie
    $pageTitle = "Produkt"; //tytuł strony
    $welcomeMessage = ""; //wiatmy na stronie
    $img = ""; //obrazek

    // zmień na małe liery
    $id = urldecode($id);

    // przekieruj na stronę bez geta
    if (isset($_GET['name'])) {
      if (empty($_GET['name'])) {
        header("Location:" . APP_FOLDER . "/produkty");
      } else {
        $name = $_GET['name'];
        echo $name;
        header("Location:" . APP_FOLDER . "/produkty/" . $name);
      }
    }

    // załoadowania modelu produktu i pobranie danych
    $products = new Product($id);
    $product = $products->getProduct();
    $productList = $products->listProducts();
    $options = "";
    foreach ($productList as $key => $value) {
      $options .= "<option value='" . $value . "'>";
    }

    // Produkt został znaleziony opis produktu
    if ($product !== null) {
      $welcomeMessage = "<h3>Witaj na stronie produktu <u>" . $id . "</u> !</h3><br>" . $product['description'];
      $img = '<img  width="100px" src="' .  @$product['img'] . '" alt="' . $id . '">';
      $koszyk = $product['id'];
      require_once VIEW_PATH . '/produkt.php';
    } else {
      // Produkt nie został znaleziony
      $welcomeMessage = $id . ": brak takiego produktu";
      require_once VIEW_PATH . '/produktErro.php';
    }
  }
}
