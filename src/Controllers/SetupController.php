<?php

namespace Controllers;


class SetupController
{

  // Metoda łądająca pliki CSS
  public function style($name)
  {
    $path = APP_ROOT . '/public/styles/' . $name;
    header('Content-Type: text/css');
    echo file_get_contents($path);
  }

  // Metoda łądająca pliki img
  public function img($name)
  {
    $path = APP_ROOT . '/public/img/' . $name;
    header('Content-Type: image/png');
    echo file_get_contents($path);
  }

  // Metoda łądająca pliki JS
  public function script($name)
  {
    $path = APP_ROOT . '/public/javascript/' . $name;
    header('Content-Type: text/javascript');
    echo file_get_contents($path);
  }
}
