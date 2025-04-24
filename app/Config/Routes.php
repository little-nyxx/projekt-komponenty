<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::typy');
$routes->get('vypis/(:any)', "Main::vypis/$1");
$routes->get('komponenta/(:num)', 'Main::komponenta/$1');
$routes->get('taby', 'Main::taby');
$routes->get('seznam-polozek', 'Item::seznam');
$routes->get('polozka/pridat', 'Item::add');
$routes->post('item/create', 'Item::create');
