<?php

// Ścieżki do plików w aplikacji
// Załączamy Router
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once dirname(__DIR__) . '/config.php';
$routes = require_once APP_ROOT . '/Router.php';

// Wczytaj plik z routingiem
// // Przetwórz żądanie
if (isset($_POST["ajax"]) && $_POST["ajax"] == true) {

  if (isset($_POST["controller"]) && isset($_POST["class"])) {
    loadController($_POST["controller"], $_POST["class"], ['id' => $_POST["id"]]);
    exit;
  }
}

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



// run autch object

foreach ($routes as $route => $handler) {
  // Sprawdź, czy żądana ścieżka istnieje w routing
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

/**
 * load view
 * 
 * @param string $viewName
 * @param array $params
 * @param bool $once
 * 
 * @return void
 */
function view($viewName, $params = [], $once = false)
{
  if ($once == true) {
    require_once VIEW_PATH . "/{$viewName}.php";
  } else {
    require VIEW_PATH . "/{$viewName}.php";
  }
  return;
}

/**
 * load controller
 * 
 * @param string $controllerName
 * @param string $actionName
 * @param array $params
 * 
 * @return void
 */
function loadController($controllerName, $actionName, $params = [])
{

  $controllerName  = $controllerName . "Controller";
  $controllerClass = "Controllers\\" . $controllerName;

  // Utwórz obiekt kontrolera i wywołaj akcję
  require_once CONTROLLER_PATH . "/{$controllerName}.php";
  $controller = new $controllerClass();
  $controller->$actionName(...$params);
  return;
}

// Jeśli żądana ścieżka nie pasuje do żadnego routingu, zwróć błąd 404
header("HTTP/1.0 404 Not Found");
echo '404';
