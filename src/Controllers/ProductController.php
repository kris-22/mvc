<?php

namespace Controllers;

use Product;

require_once MODEL_PATH . '/Product.php';
class ProductController
{
  public function index()
  {
    // wykonaj odpowiednie $id = urldecode($id);operacje i pobierz potrzebne dane
    $pageTitle = 'Pradukty';
    $welcomeMessage = 'Witaj na stronie produkty tutaj zobacz nasze najelpsze okazje !';
    $product = new Product("");
    $product = $product->listProducts();
    $options = "";
    foreach ($product as $key => $value) {
      $options .= "<option value='" . $value . "'>";
    }
    require_once VIEW_PATH . '/produkt.php';

    echo $pageTitle;
  }

  // function show id from link /produkty/{id}
  public function show($id)
  {
    $id = urldecode($id);
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



    $products = new Product($id);
    $product = $products->getProduct($id);
    $productList = $products->listProducts();
    $options = "";
    foreach ($productList as $key => $value) {
      $options .= "<option value='" . $value . "'>";
    }

    if ($product !== null) {
      $welcomeMessage = "<h3>Witaj na stronie produktu <u>" . $id . "</u> !</h3><br>" . $product['description'];
    } else {
      // Produkt nie został znaleziony
      $welcomeMessage = "brak takiego produktu";
    }

    // $welcomeMessage = "Witaj na stronie produktu <u>" . $id . "</u>!";


    require_once VIEW_PATH . '/produkt.php';
  }
}
