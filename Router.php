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
  ],
  '/login' => [
    'controller' => 'AuthController',
    'action' => 'login'
  ],
  '/register' => [
    'controller' => 'AuthController',
    'action' => 'register'
  ],

  // setup routes 
  '/style/(.+)' => [
    'controller' => 'SetupController',
    'action' => 'style'
  ],
  '/img/(.+)' => [
    'controller' => 'SetupController',
    'action' => 'img'
  ],
  '/script/(.+)' => [
    'controller' => 'SetupController',
    'action' => 'script'
  ]
];
