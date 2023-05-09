<?php

// Tablica routingu
return [
  '/' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  '/produkty' => [
    'controller' => 'ProductController',
    'action' => 'index'
  ],
  '/produkty/{id}' => [
    'controller' => 'ProductController',
    'action' => 'show'
  ],
  '/kontakt' => [
    'controller' => 'ContactController',
    'action' => 'index'
  ]
];
