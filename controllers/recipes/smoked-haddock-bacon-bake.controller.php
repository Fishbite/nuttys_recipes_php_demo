<?php

$pageTitle = 'Smoked Haddock Bacon Bake | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
TEXT;
$ogDescription = <<<'TEXT'
Smoked Haddock Bacon Bake Recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/smoked-haddock-bacon-bake/650x366/smoked-haddock-bacon-bake-cooked.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/smoked-haddock-bacon-bake.html';
$recipeName = 'Smoked Haddock Bacon Bake';
$recipeIntro = <<<'TEXT'
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/blank.png");
        /* set the background size */
        --bg-size: 32px;
        /* set the start of the 2nd colour of the gradient */
        /* basically, increase the value until the background
           images are below the intro' paragraphs */
        --bg-1st-col-stop: 35%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/smoked-haddock-bacon-bake.view.php';
