<?php

$pageTitle = 'Savoury Mince and Mash | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Now my Savory Mince and Mash recipe is so easy to make in a rush, and is exactly what you need as the nights are long or you just want a deliciously tasty, comforting dish
TEXT;
$ogDescription = <<<'TEXT'
Savory Mince and Mash is so easy to make and is exactly what you need as a comforting dish
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/savoury-mince-and-mash/650x366/savoury-mince-and-mash-plated.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/savoury-mince-and-mash.html';
$recipeName = 'Savoury Mince and Mash';
$recipeIntro = <<<'TEXT'
Now my Savory Mince and Mash recipe is so easy to make in a rush, and is exactly what you need as the nights are long or you just want a deliciously tasty, comforting dish
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
        --bg-1st-col-stop: 25%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/savoury-mince-and-mash.view.php';
