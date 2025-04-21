<?php

echo "Nuttys is best</br>";

echo 'The document root is: ' . $_SERVER['DOCUMENT_ROOT'] . '</br></br>';

echo "<a href='/views/recipes.view.php'>Recipes</a></br></br>" .PHP_EOL;

echo "<a href='/controllers/recipes.controller.php'>controller</a></br></br>" .PHP_EOL;

const BASE_PATH = __DIR__ . '/';
echo BASE_PATH;
