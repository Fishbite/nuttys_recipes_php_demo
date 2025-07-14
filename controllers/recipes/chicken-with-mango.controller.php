<?php

$pageTitle = 'Chicken with Mango | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Chicken with Mango. Do not dismiss fruit from curry's, it is a staple all over the world. Adding any fruits including mango will tenderise your chicken within minutes
TEXT;
$ogDescription = <<<'TEXT'
Chicken with mango, a juicy, tangy, fruity curry
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chicken-with-mango/650x366/chicken-with-mango-plated-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chicken-with-mango.html';
$recipeName = 'Chicken with Mango';
$recipeIntro = <<<'TEXT'
Chicken with Mango. Do not dismiss fruit from curry's, it is a staple all over the world. Adding any fruits including mango will tenderise your chicken within minutes
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

require __DIR__ . '/../../views/recipes/chicken-with-mango.view.php';
