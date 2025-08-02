<?php

$pageTitle = 'Damson & Soured Cream Tart | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
This damson and soured cream tart recipe is perfect for those home garden foraged fruits. This recipe serves 6 to 8 & cooks in 35mins
TEXT;
$ogDescription = <<<'TEXT'
Home made damson and soured cream tart recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/damson-and-soured-cream-tart/650x366/damson-and-soured-cream-tart-plated-06.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/damson-and-soured-cream-tart.html';
$recipeName = 'Damson & Soured Cream Tart';
$recipeIntro = <<<'TEXT'
This damson and soured cream tart recipe is perfect for those home garden foraged fruits. This recipe serves 6 to 8 & cooks in 35mins
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/blank.svg");
        /* set the background size */
        --bg-size: 32px;
        /* set the start of the 2nd colour of the gradient */
        /* basically, increase the value until the background
           images are below the intro' paragraphs */
        --bg-1st-col-stop: 25%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/damson-and-soured-cream-tart.view.php';
