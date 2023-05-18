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
            $options .= "<option value='" . $value['name'] . "'>";
            $welcomeMessage .= "
        <br> 
        <a href='" . APP_FOLDER . "/produkty/" . $value['name'] . "'>" .
                "<img src='" . @$value['img'] . "' width='100px'>" .
                $value['name'] .
                "  " .
                $value['cena'] . "zł" .
                "</a>";
        }


        // require VIEW_PATH . '/products/produktErro.php';
        view('products/produktErro', [
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
        $productList = Product::listProducts();
        $options = "";
        foreach ($productList as $key => $value) {
            $options .= "<option value='" . $value["name"] . "'>";
        }

        // Produkt został znaleziony opis produktu
        if ($product !== null) {
            $welcomeMessage = "<h3>Witaj na stronie produktu <u>" . $id . "</u> !</h3><br>" . $product['description'];
            $img = '<img  width="100px" src="' .  @$product['img'] . '" alt="' . $id . '">';
            $koszyk = $product['id'];
            // require VIEW_PATH . '/products/produkt.php';
            view('products/produkt', [
                'pageTitle' => $pageTitle,
                'welcomeMessage' => $welcomeMessage,
                'img' => $img,
                'koszyk' => $koszyk,
                'options' => $options
            ]);
        } else {
            // Produkt nie został znaleziony
            $welcomeMessage = $id . ": brak takiego produktu";
            // require VIEW_PATH . '/products/produktErro.php';
            view('products/produktErro', [
                'pageTitle' => $pageTitle,
                'welcomeMessage' => $welcomeMessage,
                'img' => $img,
                'options' => $options
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
                header("Location:" . APP_FOLDER . "/produkty");
            } else {
                $name = $_GET['name'];
                echo $name;
                header("Location:" . APP_FOLDER . "/produkty/" . $name);
            }
        }

        // załoadowania modelu produktu i pobranie danych
        $product = Product::getProduct($id);
        $productList = Product::listProducts();
        $options = "";
        foreach ($productList as $key => $value) {
            $options .= "<option value='" . $value["name"] . "'>";
        }

        // Produkt został znaleziony opis produktu
        if ($product !== null) {
            $welcomeMessage = "<h3>Witaj na stronie produktu <u>" . $id . "</u> !</h3><br>" . $product['description'];
            $img = '<img  width="100px" src="' .  @$product['img'] . '" alt="' . $id . '">';
            $koszyk = $product['id'];
            // require VIEW_PATH . '/products/produktOne.php';
            view('products/produktOne', [
                'pageTitle' => $pageTitle,
                'welcomeMessage' => $welcomeMessage,
                'img' => $img,
                'koszyk' => $koszyk,
                'options' => $options
            ]);
        } else {
            // Produkt nie został znaleziony
            $welcomeMessage = $id . ": brak takiego produktu";
            // require VIEW_PATH . '/products/produktErro.php';
            view('products/produktErro', [
                'pageTitle' => $pageTitle,
                'welcomeMessage' => $welcomeMessage,
                'img' => $img,
                'options' => $options
            ]);
        }
    }
}
