<?php
/**
 * Created by PhpStorm.
 * User: ginv2
 * Date: 2/25/20
 * Time: 10:16
 */

namespace Commons;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

class Routing
{
    public static function index($url){


        $router = new RouteCollector();

        $router->get('/', ["Controllers\HomeController", "index"]);

        $router->get('add-product', ["Controllers\ProductController", "addForm"]);

        $dispatcher = new Dispatcher($router->getData());

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url,
            PHP_URL_PATH));

        echo $response;
    }
}