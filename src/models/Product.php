<?php
class Product
{
  private $name;

  // Konstruktor
  public function __construct($name)
  {
    $this->name = $name;
  }

  // Metoda statyczna do pobierania danych z pliku JSON
  public function getProduct()
  {
    $data = file_get_contents(APP_ROOT . '/src/dev/data.json');
    $products = json_decode($data, true);
    // zmień na małe liery
    $this->name = strtolower($this->name);
    foreach ($products["products"] as $product) {
      // echo $product['id'];
      if (strtolower($product['name']) === $this->name) {
        return $product;
      } else {
      }
    }

    return null;
  }
  public function listProducts()
  {
    $data = file_get_contents(APP_ROOT . '/src/dev/data.json');
    $products = json_decode($data, true);
    $lista = [];
    foreach ($products["products"] as $product) {
      array_push($lista, $product["name"]);
    }
    return $lista;
  }
}
