<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::typy');
$routes->get('vypis/(:any)', "Main::vypis/$1");
$routes->get('komponenta/(:num)', 'Main::komponenta/$1');
