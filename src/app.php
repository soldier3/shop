<?php

// example.com/src/app.php

use Symfony\Component\Routing;
use Symfony\Component\Routing\Route;

use App\Store\Controller\AddProduct;
use App\Store\Controller\ChangeCategory;


$routes = new Routing\RouteCollection();

$routes->add('add_product', new Route('/add-product', [
    '_controller' => 'App\Store\Controller\AddProduct::index',
]));
$routes->add('change_product_cegory', new Route('/change-product-cegory', [
    '_controller' => 'App\Store\Controller\ChangeCategory::index',
]));

return $routes;
