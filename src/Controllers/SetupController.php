<?php

namespace Controllers;


class SetupController
{

  // Metoda łądająca pliki CSS
  public function style($id)
  {
    $path = APP_ROOT . '/public/styles/' . $id;
    header('Content-Type: text/css');
    echo file_get_contents($path);
  }

  // Metoda łądająca pliki img
  public function img($id)
  {
    $path = APP_ROOT . '/public/img/' . $id;
    header('Content-Type: image/png');
    echo file_get_contents($path);
  }

  // Metoda łądająca pliki JS
  public function script($id)
  {
    $path = APP_ROOT . '/public/scripts/' . $id;
    header('Content-Type: text/javascript');
    echo file_get_contents($path);
  }
}
