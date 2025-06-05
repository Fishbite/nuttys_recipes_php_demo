<?php

// separate any path from any query string that may be tagged on to the
// end of the path. e.g. /contact?name=mikehunt
// parse_uri returns an array with a path and a query as separate entries
// e.g. ["path" => "contact", "query" => "contact?name=mikehunt"]

// So, grab the path from the array
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// print_r($_SERVER['REQUEST_URI']);
// echo '<br>';
// print_r($uri);
// echo '<br>';

// if a user types /recipes we re-direct /recipes to /recipes/ so that
// the URL in the address bar always has a trailing slash. This will
// allow a user to then type the recipe name. e.g. aloo-gobi, instead
// of /aloo-gobi
// If URL is missing trailing slash, redirect with a 301
// Redirect /recipes to /recipes/ (trailing slash)
if ($uri === '/recipes') {
    header("Location: /recipes/", true, 301);
    exit;
}

$routes = [
    '/' => __DIR__ . '/home-page.controller.php',
    '/home' => __DIR__ . '/home-page.controller.php',
    '/recipes/' => __DIR__ . '/recipes.controller.php',
    '/contact' => __DIR__ . '/contact-form.controller.php',
    // '/aloo-gobi' => __DIR__ . '/recipes/aloo-gobi.controller.php',
];

function routeToController($uri, $routes)
{
    // print_r($uri);
    // echo '<br>';
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } // if the URI begins with "/recipes/" but isn’t an exact match
    elseif (str_starts_with($uri, '/recipes/')) {
        // isolate the recipe name from the path
        $slug = basename($uri);
        $_GET['page'] = $slug;

        // use a shared controller to handle all individual recipe pages
        require __DIR__ . '/recipe-show.controller.php';
    } else {
        // http_response_code(404);
        // require __DIR__ . '/../views/404.php';
        require __DIR__ . '/recipes.controller.php';
    }
}

routeToController($uri, $routes);
