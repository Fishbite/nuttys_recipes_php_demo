<?php

$pageTitle = 'Cheese and Onion Quiche | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
I thought I would share my Cheese & Onion Quiche recipe with you. I made a huge one so that we'd have a dinner, snacks & some left over to take out to the cricket
TEXT;
$ogDescription = <<<'TEXT'
cheese and onion quiche recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/cheese-and-onion-quiche/650x366/cheese-and-onion-quiche-cooked.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/cheese-and-onion-quiche.html';
$recipeName = 'Cheese and Onion Quiche';
$recipeIntro = <<<'TEXT'
I thought I would share my Cheese & Onion Quiche recipe with you. I made a huge one so that we'd have a dinner, snacks & some left over to take out to the cricket
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

require __DIR__ . '/../../views/recipes/cheese-and-onion-quiche.view.php';
