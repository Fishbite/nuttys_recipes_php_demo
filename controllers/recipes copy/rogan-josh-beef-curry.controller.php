<?php

$pageTitle = 'Rogan Josh Beef Curry | A Nutty\'s Kitchen Recipe';
$metaDescription = <<<'TEXT'
My Rogan Josh Beef Curry recipe also includes the spice paste recipe. It really is quite simple to make and as a bonus you will have enough paste for several curries
TEXT;
$ogDescription = <<<'TEXT'
Rogan Josh Beef Curry
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/rogan-josh/650x366/rogan-josh-plated.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/rogan-josh-beef-curry.html';
$recipeName = 'Rogan Josh Beef Curry';
$recipeIntro = <<<'TEXT'
My Rogan Josh Beef Curry recipe also includes the spice paste recipe. It really is quite simple to make and as a bonus you will have enough paste for several curries
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
        --bg-1st-col-stop: 30%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/rogan-josh-beef-curry.view.php';
