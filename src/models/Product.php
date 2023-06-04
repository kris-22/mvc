<?php

namespace Models;

include_once 'Database.php';

use PDO;
use Models\Database;

class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $img;

    // Konstruktor
    // public function __construct()
    // {
    //     $this->id;
    //     $this->name;
    //     $this->description;
    //     $this->price;;
    //     $this->img;
    // }
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
        $db = new Database();
        // zmień na małe liery
        $name = strtolower($name);
        $query = "SELECT * FROM products WHERE name = '$name'";
        $stmt = $db->query($query);
        $products = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($products) {
            $product = new Product();
            $product->id = $products['id'];
            $product->name = $products['name'];
            $product->description = $products['description'];
            $product->price = $products['price'];
            $product->img = $products['img'];
            return $product;
        }

        return null;
    }

    // Metoda pobierania nazw produktów z pliku JSON
    public static function listProducts()
    {
        $db = new Database();
        $query = "SELECT * FROM products";
        $stmt = $db->query($query);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $lista = [];
        foreach ($products as $product) {
            $lista[] = new Product();
            end($lista)->id = $product['id'];
            end($lista)->name = $product['name'];
            end($lista)->description = $product['description'];
            end($lista)->price = $product['price'];
            end($lista)->img = $product['img'];
        }

        return $lista;
    }
}
