<?php
use Cake\Routing\Router;

Router::plugin('JsonApiListener', function ($routes) {
    $routes->fallbacks('DashedRoute');
});
