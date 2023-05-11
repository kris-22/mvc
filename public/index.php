<?php

// Ścieżki do plików w aplikacji
// Załączamy Router
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once dirname(__DIR__) . '/config.php';
$routes = require_once APP_ROOT . '/Router.php';

// Wczytaj plik z routingiem
// Przetwórz żądanie
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Sprawdź, czy żądana ścieżka istnieje w routing
foreach ($routes as $route => $handler) {
  // Dopasuj wzorzec ścieżki
  if (preg_match('#^' . APP_FOLDER . $route . '$#', $path, $matches)) {
    // Pobierz kontroler i akcję
    $controllerName = $handler['controller'];
    $actionName = $handler['action'];
    $controllerClass = "Controllers\\" . $handler['controller'];
    $params = array_slice($matches, 1);


    // Utwórz obiekt kontrolera i wywołaj akcję
    require_once APP_ROOT . "/src/Controllers/{$controllerName}.php";
    $controller = new $controllerClass();
    $controller->$actionName(...$params);

    // Zakończ przetwarzanie
    return;
  }
}

// Jeśli żądana ścieżka nie pasuje do żadnego routingu, zwróć błąd 404
header("HTTP/1.0 404 Not Found");
echo '404';
