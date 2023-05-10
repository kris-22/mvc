<?php

// Tablica routingu
return [
  '/mvc/' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  '/mvc/produkty' => [
    'controller' => 'ProductController',
    'action' => 'index'
  ],
  '/mvc/produkty/(\d+)' => [
    'controller' => 'ProductController',
    'action' => 'show'
  ],
  '/kontakt' => [
    'controller' => 'ContactController',
    'action' => 'index'
  ]
];
