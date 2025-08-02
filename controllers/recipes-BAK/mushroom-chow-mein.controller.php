<?php

$pageTitle = 'mushroom chow mein | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
This dish is an accompaniment Mushroom Chow Mein. I served it with my Spring Onion Chicken recipe. It is a very quick cook and really easy to make, full of flavoursome...
TEXT;
$ogDescription = <<<'TEXT'
Mushroom Chow Mein. I served it with my Spring Onion Chicken recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/mushroom-chow-mein/650x366/mushroom-chow-mein-in-serving-dish-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/mushroom-chow-mein.html';
$recipeName = 'Mushroom chow mein';
$recipeIntro = <<<'TEXT'
This dish is an accompaniment Mushroom Chow Mein. I served it with my Spring Onion Chicken recipe. It is a very quick cook and really easy to make, full of flavoursome...
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

require __DIR__ . '/../../views/recipes/mushroom-chow-mein.view.php';
