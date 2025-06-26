<?php

$pageTitle = 'spicy balti potatoes | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Looking for a side dish that brings big flavour to humble new potatoes? Well, look no further... Spicy Balti Potatoes! Flavour-packed, effortless, and absolutely delicious.
TEXT;
$ogDescription = <<<'TEXT'
Spicy Balti Potatoes! Flavour-packed, effortless, and absolutely delicious
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/spicy-balti-potatoes/650x366/spicy-balti-potatoes.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/spicy-balti-potatoes.html';
$recipeName = 'Spicy Balti Potatoes';
$recipeIntro = <<<'TEXT'
Looking for a side dish that brings big flavour to humble new potatoes? Well, look no further... Spicy Balti Potatoes! Flavour-packed, effortless, and absolutely delicious.
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

require __DIR__ . '/../../views/recipes/spicy-balti-potatoes.view.php';
