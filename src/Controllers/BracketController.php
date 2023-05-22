<?php

namespace Controllers;

require MODEL_PATH . '/Bracket.php';

use Models\Bracket;


class BracketController{

    /**
     * index
     * 
     * @return void
     */

  public function index(){
    $pageTitle = 'Koszyk';
    $welcomeMessage = 'Twój koszyk:';
    $img = "";
    $koszyk = "";
    $options = "";
  
      
  view('auth/koszyk', [
    'pageTitle' => $pageTitle,
    'welcomeMessage' => $welcomeMessage,
    'img' => $img,
    'koszyk' => $koszyk,
    'options' => $options
  ]);
}
}