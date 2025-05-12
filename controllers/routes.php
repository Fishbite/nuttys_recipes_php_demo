<?php

// separate any path from ant query string that may be tagged on to the
// end of the path. e.g. /contact?name=mikehunt
// parse_uri returns an array with a path and a query as separate entries
// e.g. ["path" => "contact", "query" => "contact?name=mikehunt"]

// So, grab the path from the array
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// print_r($_SERVER['REQUEST_URI']);
// echo '<br>';
// print_r($uri);
// echo '<br>';

$routes = [
    '/' => 'controllers/home-page.controller.php',
    // '/' => 'controllers/home-page.controller.php',
    '/recipes' => 'controllers/recipes.controller.php',
    '/contact' => 'controllers/contact-form.controller.php',
    // '/aloo-gobi' => 'controllers/recipes/aloo-gobi.controller.php',
];

function routeToController($uri, $routes)
{
    // print_r($uri);
    // echo '<br>';
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        // http_response_code(404);
        // require __DIR__ . '/../views/404.php';
        require 'controllers/recipes.controller.php';
    }
}

routeToController($uri, $routes);
