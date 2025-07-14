<?php

$pageTitle = 'Chorizo Cod Stew | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Baked Cod & Chorizo Stew is a gorgeous Spanish dish that is just so wonderfully tasty with the unique combination of savory, smokey, spicy flavours of the chorizo...
TEXT;
$ogDescription = <<<'TEXT'
Chorizo Cod Stew, a wonderfully tasty Spanish dish that is really easy to make
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chorizo-cod/650x366/chorizo-cod-stew-plated-04.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chorizo-cod-stew.html';
$recipeName = 'Chorizo Cod Stew';
$recipeIntro = <<<'TEXT'
Baked Cod & Chorizo Stew is a gorgeous Spanish dish that is just so wonderfully tasty with the unique combination of savory, smokey, spicy flavours of the chorizo...
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/chorizo.svg");
        /* set the background size */
        --bg-size: 128px;
        /* set the start of the 2nd colour of the gradient */
        --bg-1st-col-stop: 80vh;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/chorizo-cod-stew.view.php';
