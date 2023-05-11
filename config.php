<?php
// ścieżki do plików w aplikacji
define('APP_ROOT', dirname(__FILE__));
define('VIEW_PATH', APP_ROOT . '/src/views');
define('CONTROLLER_PATH', APP_ROOT . '/src/Controllers');
define('MODEL_PATH', APP_ROOT . '/src/models');

// adres url
$string1 = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//ściezka do pliku
$string2 = parse_url(APP_ROOT, PHP_URL_PATH);

// Zamień wszystkie ukośniki na prawe
$string1 = str_replace('\\', '/', $string1);
$string2 = str_replace('\\', '/', $string2);

// Podziel stringi na tablice
$array1 = explode('/', $string1);
$array2 = explode('/', $string2);

// Znajdź część wspólną
$commonPartArray = array_intersect($array1, $array2);
$commonPart = implode('/', $commonPartArray);
$commonPart = rtrim($commonPart, '/');

if (!empty($commonPart)) {;
} else {
  $commonPart = "";
};
define('APP_FOLDER', $commonPart);
