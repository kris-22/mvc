<?php

// Ścieżki do plików w aplikacji
// Załączamy Router
require_once dirname(__DIR__) . '/config.php';
$routes = require_once APP_ROOT . '/Router.php';

// Wczytaj plik z routingiem
// Przetwórz żądanie
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// echo "---";
// print_r($path);
// echo "---";
// print_r($routes);
// Sprawdź, czy żądana ścieżka istnieje w routing
if (array_key_exists($path, $routes)) {
  // Wczytaj kontroler i metodę
  $controllerName = "Controllers\\" . $routes[$path]['controller'];

  $actionName = $routes[$path]['action'];

  // Utwórz obiekt kontrolera i wywołaj metodę
  require_once APP_ROOT . "/src/{$controllerName}.php";
  echo $controllerName;

  $controller = new $controllerName();
  $controller->$actionName();
} else {
  // Przekieruj do strony 404
  header("HTTP/1.0 404 Not Found");
  // include("views/errors/404.php");
  echo '404';
  // echo APP_ROOT;
}
