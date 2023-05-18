<?php

namespace Models;

class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $img;

    // Konstruktor
    public function __construct($id, $name, $description, $price, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->img = $img;
    }
    // Metody dostępu do pól
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImg()
    {
        return $this->img;
    }

    // Metody manipulacji danymi
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }


    // Metoda informacji o produkcie
    public static function getProduct($name)
    {
        $data = file_get_contents(APP_ROOT . '/src/dev/data.json');
        $products = json_decode($data, true);
        // zmień na małe liery
        $name = strtolower($name);
        foreach ($products["products"] as $product) {
            if (strtolower($product['name']) === $name) {
                return $product;
            }
        }

        return null;
    }

    // Metoda pobierania nazw produktów z pliku JSON
    public static function listProducts()
    {
        $data = file_get_contents(APP_ROOT . '/src/dev/data.json');
        $products = json_decode($data, true);
        $lista = [];
        foreach ($products["products"] as $product) {
            array_push($lista, $product);
        }

        return $lista;
    }
}
