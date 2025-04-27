<?php
// require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// print_r($_SERVER['REQUEST_URI']);
// echo '<br>';
// print_r($uri);
// echo '<br>';

$routes = [
    '/' => 'controllers/recipes.controller.php',
    '/recipes' => 'controllers/recipes.controller.php',
];

function routeToController($uri, $routes)
{
    // print_R($uri);
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        http_response_code(404);
        echo '404 Not Found';
    }
}

routeToController($uri, $routes);
