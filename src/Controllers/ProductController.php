<?php

namespace Controllers;

require MODEL_PATH . '/Product.php';

use Models\Product;

class ProductController
{

    /**
     * index load ptoducts index view
     *
     * @return void
     */
    // function widoku podstawowego /produkty
    public function index()
    {
        //delkaracja zmiennych do wyświetlenia na stronie
        $pageTitle = "Produkty"; //tytuł strony
        $welcomeMessage = 'Witaj na stronie produkty tutaj zobacz nasze najelpsze okazje !'; //wiatmy na stronie
        $img = ""; //obrazek
        $koszyk = ""; //koszyk
        $options = "";

        $product = Product::listProducts();
        // print_r($product);
        foreach ($product as $key => $value) {
            $options .= "<option value='" . $value->getName() . "'>";
            $welcomeMessage .= "
                <br><br> 
                <a href='" . APP_FOLDER . "/produkty/" . $value->getName() . "'>" .
                "<img src='" . @$value->getImg() . "' width='100px'>" .
                $value->getName() .
                $options .= "<option value='" . $value->getName() . "'>";
        }
        loadController('Menu', 'index');
        loadController('Product', 'searchBar');


        // require VIEW_PATH . '/products/produktError.php';
        view('products/produktError', [
            'pageTitle' => $pageTitle,
            'welcomeMessage' => $welcomeMessage,
            'img' => $img,
            'koszyk' => $koszyk,
            'options' => $options
        ]);
    }

    /**
     * load load ptoduct view
     *
     * @return void
     */
    // function swidoki produktów /produkty/{id}
    public function show($id = "")
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
        $product = Product::getProduct($id);

        // Produkt został znaleziony opis produktu
        if ($product !== null) {
            $pageTitle = "Produkt " . $product->getName(); //tytuł strony
            $welcomeMessage = "<h3>Witaj na stronie produktu <u>" . $id . "</u> !</h3><br>" . $product->getDescription();
            $img = '<img  width="100px" src="' .  @$product->getImg() . '" alt="' . $id . '">';
            $koszyk = $product->getId();
            $cena = $product->getPrice();
            loadController('Menu', 'index');
            loadController('Product', 'searchBar');

            view('products/produkt', [
                'pageTitle' => $pageTitle,
                'welcomeMessage' => $welcomeMessage,
                'img' => $img,
                'koszyk' => $koszyk,
                'cena' => $cena
            ]);
        } else {
            // Produkt nie został znaleziony
            $welcomeMessage = $id . ": brak takiego produktu";
            loadController('Menu', 'index');
            view('products/produktError', [
                'pageTitle' => $pageTitle,
                'welcomeMessage' => $welcomeMessage,
                'img' => $img
            ]);
        }
    }


    /**
     * load load ptoduct view
     *
     * @return void
     */
    public function showOne($id = "")
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
                header("Location:" . APP_FOLDER . "/Witaj na Produkty");
            } else {
                $name = $_GET['name'];
                echo $name;
                header("Location:" . APP_FOLDER . "/produkty/" . $name);
            }
        }

        // załoadowania modelu produktu i pobranie danych
        $product = Product::getProduct($id);
        $options = "";
        // Produkt został znaleziony opis produktu
        if ($product !== null) {
            $welcomeMessage = "<h3>Witaj na stronie produktu <u>" . $id . "</u> !</h3><br>" . $product->getDescription();
            $img = '<img  width="100px" src="' .  @$product->getImg() . '" alt="' . $id . '">';
            $koszyk = $product->getId();
            $cena = $product->getPrice();

            view('products/produkt', [
                'pageTitle' => $pageTitle,
                'welcomeMessage' => $welcomeMessage,
                'img' => $img,
                'koszyk' => $koszyk,
                'options' => $options,
                'cena' => $cena
            ]);
        } else {
            // Produkt nie został znaleziony
            $welcomeMessage = $id . ": brak takiego produktu";
            view('products/produktError', [
                'pageTitle' => $pageTitle,
                'welcomeMessage' => $welcomeMessage,
                'img' => $img,
                'options' => $options
            ]);
        }
    }

    //search bar
    public function searchBar()
    {
        $options = "";
        $productList = Product::listProducts();
        foreach ($productList as $key => $value) {
            $options .= "<option value='" . $value->getName() . "'>";
        }
        view('products/searchBar', [
            'options' => $options
        ]);
    }
}
