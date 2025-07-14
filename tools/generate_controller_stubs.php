<?php
require_once __DIR__ . '/SitemapFilter.php';

$filter = new SitemapFilter();
$sitemap = __DIR__ . '/../sitemap.xml';
$controllerDir = __DIR__ . '/controllers/recipes/';
$routesFile = __DIR__ . '/controllers/routes.php';

$xml = simplexml_load_file($sitemap);
$urls = $xml->url;

$routesToAdd = [];

foreach ($urls as $entry) {
    $loc = (string) $entry->loc;

    if ($filter->isExcluded($loc)) {
        continue;
    }

    $slug = basename(parse_url($loc, PHP_URL_PATH), '.html');
    $controllerPath = "{$controllerDir}{$slug}.controller.php";

    if (file_exists($controllerPath)) {
        continue;
    }

    $camelName = ucwords(str_replace('-', ' ', $slug));
    $controllerContent = <<<PHP
<?php

\$pageTitle = '$camelName | Nutty\'s Kitchen';
\$metaDescription = '';
\$ogDescription = '';
\$ogImage = '';
\$canonical = 'https://www.nuttyskitchen.co.uk/$slug.html';
\$recipeName = '$camelName';
\$recipeIntro = '';
\$styleBlock = <<<CSS
:root {
  --bg-img: url("/images/icons/veg.png");
  --bg-size: 32px;
  --bg-1st-col-stop: 25%;
}
CSS;

\$stylesheets = [
  'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
  '/styles/styles.css',
  '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/$slug.view.php';
PHP;

    file_put_contents($controllerPath, $controllerContent);
    echo "✅ Created controller: $slug\n";

    $routesToAdd[] = "    '/recipes/$slug' => __DIR__ . '/recipes/$slug.controller.php',";
}

// Append to routes.php
if ($routesToAdd) {
    $routesCode = file_get_contents($routesFile);
    $insertAt = strpos($routesCode, '];');
    if ($insertAt !== false) {
        $routesCode = substr_replace(
            $routesCode,
            implode("\n", $routesToAdd) . "\n",
            $insertAt,
            0
        );
        file_put_contents($routesFile, $routesCode);
        echo "✅ Routes appended to routes.php\n";
    }
}
