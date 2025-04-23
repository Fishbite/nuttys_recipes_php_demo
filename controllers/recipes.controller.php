<?php

// cache control headers to prevent the browser caching the page
// Note: caching of images and static files is set in the .htaccess file
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require '../db_connect.php';
require '../functions.php';
require '../db_query.php';

// *************** debugging ******************* \\
// check variables are being passed to the view
// echo "<pre>";
// echo "Debug Information:\n";
// echo "searchCategory: " . ($searchCategory ?? 'undefined') . "\n";
// echo "categories: " . (is_array($categories) ? count($categories) . " items" : 'undefined') . "\n";
// echo "searchTerm: " . ($searchTerm ?? 'undefined') . "\n";
// echo "groupedRecipes: " . (is_array($groupedRecipes) ? count($groupedRecipes) . " categories" : 'undefined') . "\n";
// echo "</pre>";

// Then require the view
// require __DIR__ . '/../views/recipes.view.php';

require '../views/recipes.view.php';
