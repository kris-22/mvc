<?php

// Tablica routingu
return [
  '/' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  '/index.php' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  '/produkty' => [
    'controller' => 'ProductController',
    'action' => 'index'
  ],
  '/produkty/(.+)' => [
    'controller' => 'ProductController',
    'action' => 'show'
  ],
  '/studia/kontakt' => [
    'controller' => 'ContactController',
    'action' => 'index'
  ]
];
