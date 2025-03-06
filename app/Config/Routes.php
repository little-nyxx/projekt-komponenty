<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::typy');
$routes->get('vypis/(:num)', "Main::vypis/$1");
